<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

/**
 * App\Models\TestSession
 *
 * @property int $id
 * @property int $test_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $answeredQuestions
 * @property-read int|null $answered_questions_count
 * @property-read mixed $not_answered_questions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestSessionResult[] $resultScores
 * @property-read int|null $result_scores_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Result[] $results
 * @property-read int|null $results_count
 * @method static EloquentBuilder|TestSession newModelQuery()
 * @method static EloquentBuilder|TestSession newQuery()
 * @method static EloquentBuilder|TestSession query()
 * @method static EloquentBuilder|TestSession whereCreatedAt($value)
 * @method static EloquentBuilder|TestSession whereId($value)
 * @method static EloquentBuilder|TestSession whereTestId($value)
 * @method static EloquentBuilder|TestSession whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $last_question_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnswerOption[] $savedAnswers
 * @property-read int|null $saved_answers_count
 * @method static EloquentBuilder|TestSession whereLastQuestionId($value)
 */
class TestSession extends Model
{
    use HasFactory;
    use HasRelationships;

    public function savedAnswers(): BelongsToMany
    {
        return $this->belongsToMany(
            AnswerOption::class,
            'session_answers',
            'test_session_id',
            'answer_option_id'
        );
    }

    public function answeredQuestions(): HasManyDeep
    {
        return $this->hasManyDeepFromRelations(
            $this->savedAnswers(),
            (new AnswerOption())->question()
        );
    }

    public function results(): BelongsToMany
    {
        return $this->belongsToMany(Result::class, 'test_session_results')
            ->using(TestSessionResult::class)
            ->as('rate')
            ->withPivot('score');
    }

    public function getNotAnsweredQuestionsAttribute()
    {
        return $this->notAnsweredQuestions()->get();
    }

    public function notAnsweredQuestions()
    {
        return Question::whereNotIn('id', $this->answeredQuestions->pluck('id'));
    }

    public function resultScores(): HasMany
    {
        return $this->hasMany(TestSessionResult::class, 'test_session_id');
    }
}
