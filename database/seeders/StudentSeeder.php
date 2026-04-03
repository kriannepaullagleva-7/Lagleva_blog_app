<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Delete old data
        Student::truncate();

        // Generate 10 random students
        Student::factory(10)->create();
    }
}