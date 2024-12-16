@props(['job'])
<x-panel>
<div class="self-start text-sm"> {{ $job->employer->name }} </div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 transition duration-500 text-xl font-bold">
            <a href="/jobs/{{$job->title}}" >{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4 text-gray-400"> {{ $job->schedule . ' ' . $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex space-x-2 items-center">
            @foreach($job->tags as $tag)
            <x-tag size="small" :$tag />
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42"/>

    </div>
</x-panel>
