<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SessionAnswer
 *
 * @property int $id
 * @property int $test_session_id
 * @property int $answer_option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer whereAnswerOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer whereTestSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAnswer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SessionAnswer extends Model
{
    use HasFactory;
}
