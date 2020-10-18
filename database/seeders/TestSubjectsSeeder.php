<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSubjectsSeeder extends Seeder
{
    public function run(): void
    {
        Test::create(
            [
                'name' => 'Вибір мови програмування'
            ]
        );
    }
}
