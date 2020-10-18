<?php


namespace App\UseCases;


use App\Models\TestSession;
use App\Models\TestSessionResult;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

final class RetrieveTopResults
{
    /**
     * @param $testSessionId
     * @param  int|null  $limit
     * @return TestSessionResult[]|Collection
     */
    public function __invoke($testSessionId, int $limit = null): Collection
    {
        /** @var TestSession $testSession */
        $testSession = TestSession::findOrFail($testSessionId);

        return $testSession->resultScores()
            ->addSelect(DB::raw('sum(score) as score_by_result'))
            ->addSelect('result_id')
            ->orderByDesc('score_by_result')
            ->groupBy('result_id')
            ->limit($limit)
            ->with('result')
            ->get();
    }
}
