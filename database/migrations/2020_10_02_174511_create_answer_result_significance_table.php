<?php

use App\Models\AnswerOption;
use App\Models\Result;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerResultSignificanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'answer_result_significance',
            function (Blueprint $table) {
                $table->id();

                $table->foreignIdFor(AnswerOption::class)
                    ->references('id')
                    ->on('answer_options')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->foreignIdFor(Result::class)
                    ->references('id')
                    ->on('results')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->unsignedBigInteger('significance');

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
        Schema::dropIfExists('answer_result_significance');
    }
}
