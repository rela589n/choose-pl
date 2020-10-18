<?php

use App\Models\Test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSessionsTable extends Migration
{
    public function up(): void
    {
        Schema::create(
            'test_sessions',
            function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Test::class)
                    ->references('id')
                    ->on('tests')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('test_sessions');
    }
}
