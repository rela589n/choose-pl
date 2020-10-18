<?php


namespace App\UseCases;


use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\Result;
use App\Models\TestSession;

final class AnswerQuestionCommand
{
    public function execute($testSessionId, $questionId, $answerOptionId): void
    {
        /** @var AnswerOption $selectedAnswerOption */

        $testSession = TestSession::findOrFail($testSessionId);
        $question = Question::findOrFail($questionId);

        $selectedAnswerOption = $question
            ->answerOptions()
            ->findOrFail($answerOptionId);

        $probableResults = $selectedAnswerOption->results;

        $totalSignificance = $probableResults->reduce(
            static fn(int $significance, Result $result) => $significance + $result->pivot->significance,
            0
        );
        $totalSignificance = $totalSignificance ?: INF;
        $resultsScore = $probableResults->map(
            static fn(Result $result) => $result->pivot->significance / $totalSignificance * $question->significance
        );

        $resultsScore = array_combine(
            $probableResults->pluck('id')->toArray(),
            $resultsScore
                ->map(
                    static fn(float $score) => ['score' => (int)ceil($score)]
                )
                ->toArray()
        );

        $testSession->results()->attach($resultsScore);
        $testSession->savedAnswers()->attach($selectedAnswerOption);
    }
}
