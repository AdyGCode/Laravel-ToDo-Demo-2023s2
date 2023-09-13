<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedStatuses = [
            [
                'id'=>1,
                'name' => 'Unknown',
                'description' => 'Unknown status for this item, please verify',
            ],
            [
                'id'=>10,
                'name' => 'New',
                'description' => 'New item in list',
            ],
            [
                'id'=>50,
                'name' => 'In Progress',
                'description' => 'Currently being worked upon',
            ],
            [
                'id'=>90,
                'name' => 'Completed',
                'description' => 'Item has been completed.',
            ],
        ];

        foreach ($seedStatuses as $newStatus) {
            Status::create($newStatus);
        }

    }
}
