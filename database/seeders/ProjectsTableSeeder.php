<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 5; $i++){
            $new_project = new Project();
            $new_project->name ='nome ' . rand(1, 1000);
            $new_project->slug = Str::of($new_project->name)->slug('-');
            $new_project->save();
        }
    }
}
