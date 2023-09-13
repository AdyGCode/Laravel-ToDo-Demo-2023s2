<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedPriorities = [
            [
                'id'=>1,
                'name' => 'None',
                'description' => 'No Priority',
                'icon'=>'fa-regular fa-circle'
            ],
            [
                'id'=>2,
                'name' => 'Cancelled',
                'description' => 'A cancelled item. Will not cause issues due to cancellation. Item may be reviewed later.',
                'icon'=>'fa-regular fa-x-mark',
            ],
            [
                'id'=>10,
                'name' => 'Paused',
                'description' => 'This item is paused. It may be resumed at a later date.',
                'icon'=>'fa-regular fa-pause',
            ],
            [
                'id'=>20,
                'name' => 'Very Low',
                'description' => 'Very Low Priority allows for this items to be delayed, but not paused.',
                'icon'=>'fa-regular fa-arrow-down-long',
            ],
            [
                'id'=>30,
                'name' => 'Low',
                'description' => 'Low priority may be delayed without major issues.',
                'icon'=>'fa-regular fa-arrow-down',
            ],
            [
                'id'=>50,
                'name' => 'Normal',
                'description' => 'Normal priority. Completed after higher priority items.',
                'icon'=>'fa-regular fa-left-right',
            ],
            [
                'id'=>70,
                'name' => 'High',
                'description' => 'High Priority, may cause issues if  delayed.',
                'icon'=>'fa-regular fa-arrow-up',
            ],
            [
                'id'=>80,
                'name' => 'Very High',
                'description' => 'Very High Priority, will cause probably issues if delayed.',
                'icon'=>'fa-regular fa-arrow-up-long',
            ],
            [
                'id'=>90,
                'name' => 'Critical',
                'description' => 'Critical priority item will result in probable loss of revenue, income or life.',
                'icon'=>'fa-regular fa-triangle-exclamation',
            ],
        ];

        foreach ($seedPriorities as $newPriority) {
            Priority::create($newPriority);
        }

    }
}
