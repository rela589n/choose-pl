<?php

use App\Models\AnswerOption;
use App\Models\Question;
use App\Models\TestSession;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'session_answers',
            function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(TestSession::class)
                    ->references('id')
                    ->on('test_sessions')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->foreignIdFor(AnswerOption::class)
                    ->references('id')
                    ->on('answer_options')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('session_answers');
    }
}
