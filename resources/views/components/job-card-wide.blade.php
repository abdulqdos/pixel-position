@props(['job' , 'button' => false])
<x-panel class="flex flex-row  gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400"> {{ $job->employer->name }} </a>

        <h3 class="group-hover:text-blue-800 transition duration-500 font-bold mt-3 text-xl">
            <a href="/jobs/{{$job->title}}"  >{{ $job->title }}</a>
        </h3>

        <p class="text-sm text-gray-400 mt-3">  {{ $job->schedule . ' ' . $job->salary }}</p>

    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-col space-y-10 justify-end items-center">
            <div class="flex space-x-2">
                @foreach($job->tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>

            @if($button === 'button')
                <x-button href="{{ $job->url }}" >
                    Apply Now
                </x-button>
            @endif
        </div>

    </div>
</x-panel>
