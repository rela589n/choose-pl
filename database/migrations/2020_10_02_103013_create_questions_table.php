<?php

use App\Models\Test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'questions',
            function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Test::class)
                    ->references('id')
                    ->on('tests')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->string('text');
                $table->bigInteger('significance');

                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
}
