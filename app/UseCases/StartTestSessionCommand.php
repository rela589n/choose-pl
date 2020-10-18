<?php


namespace App\UseCases;


use App\Models\Test;
use App\Models\TestSession;

final class StartTestSessionCommand
{
    public function execute($testId): TestSession
    {
        /** @var TestSession $testSession */

        $test = Test::findOrFail($testId);
        $testSession = $test->sessions()->create();

        $this->initEmptyResultRates($test, $testSession);

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
}
