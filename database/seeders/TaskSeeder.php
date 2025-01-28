<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'title' => 'Complete project documentation',
                'description' => 'Finalize and submit the project documentation.',
                'status' => 'in-progress',
                'due_date' => '2025-02-15',
            ],
            [
                'title' => 'Prepare presentation slides',
                'description' => 'Create slides for the upcoming team meeting.',
                'status' => 'pending',
                'due_date' => '2025-02-10',
            ],
            [
                'title' => 'Code review',
                'description' => 'Review the latest pull requests on GitHub.',
                'status' => 'completed',
                'due_date' => '2025-01-20',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
