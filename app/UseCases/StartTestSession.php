<?php


namespace App\UseCases;


use App\Models\Question;
use App\Models\Test;
use App\Models\TestSession;

final class StartTestSession
{
    public function __invoke($testId): TestSession
    {
        /** @var TestSession $testSession */

        $test = Test::findOrFail($testId);
        $testSession = $test->sessions()->create();

        $this->initEmptyResultRates($test, $testSession);
        $this->pushIndependentQuestionsIntoSessionQueue($testSession);

        return $testSession;
    }

    private function initEmptyResultRates(Test $test, TestSession $session): void
    {
        $possibleResultIds = $test->possibleResults->pluck('id')->toArray();

        $session->results()->sync(
            array_fill_keys(
                $possibleResultIds,
                ['score' => 0]
            )
        );
    }

    private function pushIndependentQuestionsIntoSessionQueue(TestSession $session): void
    {
        $session->queuedQuestions()->sync(
            Question::independent()
                ->orderByDesc('significance')
                ->pluck('id')
        );
    }
}
