<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\TestSessionResult
 *
 * @method static EloquentBuilder|TestSessionResult newModelQuery()
 * @method static EloquentBuilder|TestSessionResult newQuery()
 * @method static EloquentBuilder|TestSessionResult query()
 * @mixin Eloquent
 * @property int $id
 * @property int $test_session_id
 * @property int $result_id
 * @property int $score
 * @method static EloquentBuilder|TestSessionResult whereId($value)
 * @method static EloquentBuilder|TestSessionResult whereResultId($value)
 * @method static EloquentBuilder|TestSessionResult whereScore($value)
 * @method static EloquentBuilder|TestSessionResult whereTestSessionId($value)
 * @property-read \App\Models\Result $result
 */
class TestSessionResult extends Pivot
{
    protected $table = 'test_session_results';

    public function result(): BelongsTo
    {
        return $this->belongsTo(Result::class);
    }
}
