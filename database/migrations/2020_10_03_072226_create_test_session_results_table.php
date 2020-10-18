<?php

use App\Models\Result;
use App\Models\TestSession;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSessionResultsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'test_session_results',
            function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(TestSession::class)
                    ->references('id')
                    ->on('test_sessions')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->foreignIdFor(Result::class)
                    ->references('id')
                    ->on('results')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

                $table->bigInteger('score');
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('test_session_results');
    }
}
