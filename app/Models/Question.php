<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        return $this->hasMany(AnswerOption::class);
    }

    /**
     * @return BelongsTo|Test
     */
    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
}
