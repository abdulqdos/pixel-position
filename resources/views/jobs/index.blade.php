<x-layout>
    <div class="space-y-10">
        @if (session('success'))
            <x-success > {{ session('success') }}</x-success>
        @endif

        <section class="text-center py-6">
            <h1 class="font-bold text-4xl pb-6">Let's Find Your Next Job</h1>
            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
            </x-forms.form>
        </section>

        <section>
            <x-section-heading> Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6">
                @foreach($featuredJob as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading > Tags</x-section-heading>
            <div class="mt-6 space-x-3">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading> Recent Jobs</x-section-heading>
            <div class="flex flex-col space-y-4">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
