<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionQuestionsQueueTable extends Migration
{
    public function up()
    {
        Schema::create(
            'session_questions_queue',
            function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->foreignId('test_session_id')
                    ->references('id')
                    ->on('test_sessions')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->foreignId('question_id')
                    ->references('id')
                    ->on('questions')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('session_questions_queue');
    }
}
