<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::factory()->create(
            [
                'title' => 'Managers',
                'start_from' => '2023-01-01',
                'is_active' => true,
            ]
        );
        Group::factory()->create(
            [
                'title' => 'Developers',
                'start_from' => '2023-01-02',
                'is_active' => true,
            ]
        );
        Group::factory()->create(
            [
                'title' => 'Ui/Ux',
                'start_from' => '2023-01-01',
                'is_active' => true,
            ]
        );
        Group::factory()->create(
            [
                'title' => 'QA',
                'start_from' => '2023-01-06',
                'is_active' => true,
            ]
        );
    }
}
