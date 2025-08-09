<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Question
 *
 * @property int $id
 * @property int $test_id
 * @property string $text
 * @property int $significance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnswerOption[] $answerOptions
 * @property-read int|null $answer_options_count
 * @property-read \App\Models\Test $test
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereSignificance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static Builder|Question independent()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnswerOption[] $couldBeAccessedFromAnswers
 * @property-read int|null $could_be_accessed_from_answers_count
 */
class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'significance',
    ];

    public function answerOptions(): HasMany
    {
//        $this->answerOptions()->make()
        return $this->hasMany(AnswerOption::class);
    }

    /**
     * @return BelongsTo|Test
     */
    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function couldBeAccessedFromAnswers(): BelongsToMany
    {
        return $this->belongsToMany(
            AnswerOption::class,
            'answer_leads_to_question',
            'question_id',
            'answer_option_id',
        );
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|self
     */
    public function scopeIndependent($query)
    {
        return $query->whereDoesntHave('couldBeAccessedFromAnswers');
    }
}
