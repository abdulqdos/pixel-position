<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    // AAA

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act
    expect($job->employer()->is($employer))->toBeTrue();

    // Assert

});

it('job can hove tag' ,  function () {
    // AAA
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
