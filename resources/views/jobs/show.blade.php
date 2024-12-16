<x-layout>
    <x-page-heading> {{ $job->title }}</x-page-heading>

   <x-job-card-wide :job="$job" button="button"/>

</x-layout>
