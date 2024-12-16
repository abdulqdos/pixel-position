<x-layout>
    <x-page-heading> Results </x-page-heading>
    <div class="flex flex-col space-y-4">
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
