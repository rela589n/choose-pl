<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

/**
 * App\Models\Test
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnswerOption[] $answerOptions
 * @property-read int|null $answer_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestSession[] $sessions
 * @property-read int|null $sessions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Test newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test query()
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $questions
 * @property-read int|null $questions_count
 */
class Test extends Model
{
    use HasFactory;
    use HasRelationships;

    public function sessions(): HasMany
    {
        return $this->hasMany(TestSession::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function answerOptions(): HasManyThrough
    {
        return $this->hasManyThrough(AnswerOption::class, Question::class);
    }

    public function possibleResults(): HasManyDeep
    {
        return $this->hasManyDeepFromRelations(
            $this->answerOptions(),
            (new AnswerOption())->results()
        )->distinct();
    }
}
