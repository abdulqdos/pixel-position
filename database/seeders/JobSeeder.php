<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(10)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Part Time',
            'employer_id' => Employer::factory(),
            'company_id' => null,
        ],
        [
            'featured' => false,
            'schedule' => 'Full Time',
            'employer_id' => null,
            'company_id' => Company::factory(),
        ],

        ));
    }
}
