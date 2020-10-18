<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\AnswerResultSignificance
 *
 * @property int $id
 * @property int $answer_option_id
 * @property int $result_id
 * @property int $significance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereAnswerOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereResultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereSignificance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerResultSignificance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AnswerResultSignificance extends Pivot
{
    use HasFactory;
    protected $table = 'answer_result_significance';
}
