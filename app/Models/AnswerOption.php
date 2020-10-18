<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\AnswerOption
 *
 * @property int $id
 * @property int $question_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Question $question
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Result[] $results
 * @property-read int|null $results_count
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerOption whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $leadsToQuestion
 * @property-read int|null $leads_to_question_count
 */
class AnswerOption extends Model
{
    use HasFactory;

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function results(): BelongsToMany
    {
        return $this->belongsToMany(Result::class, 'answer_result_significance')
            ->using(AnswerResultSignificance::class)
            ->withPivot('significance');
    }

    public function leadsToQuestion(): BelongsToMany
    {
        return $this->belongsToMany(
            Question::class,
            'answer_leads_to_question',
            'answer_option_id',
            'question_id'
        );
    }
}
