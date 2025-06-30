<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Primul task',
            'description' => 'Acesta este primul task.',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Al doilea task',
            'description' => 'Acesta este al doilea task.',
            'completed' => true,
        ]);
    }
}