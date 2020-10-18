<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerLeadsToQuestionTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'answer_leads_to_question',
            function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->foreignId('answer_option_id')
                    ->references('id')
                    ->on('answer_options')
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

    public function down(): void
    {
        Schema::dropIfExists('answer_leads_to_question');
    }
}
