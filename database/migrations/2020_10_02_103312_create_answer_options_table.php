<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'answer_options',
            function (Blueprint $table) {
                $table->id();

                $table->foreignIdFor(Question::class)
                    ->references('id')
                    ->on('questions')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();

                $table->string('content');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_options');
    }
}
