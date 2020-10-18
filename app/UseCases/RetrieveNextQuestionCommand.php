<?php


namespace App\UseCases;


use App\Exceptions\Test\Questions\QuestionsListOver;
use App\Models\Question;
use App\Models\TestSession;

final class RetrieveNextQuestionCommand
{
    private TestSession $testSession;

    public function execute($sessionId): Question
    {
        $this->testSession = TestSession::findOrFail($sessionId);

        return $this->notNull(
            $this->testSession
                ->notAnsweredQuestions()
                ->orderBy('significance')
                ->first()
        );
    }

    private function notNull($question): Question
    {
        if ($question === null) {
            throw new QuestionsListOver($this->testSession);
        }

        return $question;
    }
}
