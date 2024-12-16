<x-layout>
    <x-forms.form action="/job" method="post" >
        <x-page-heading> New Job </x-page-heading>
        <x-forms.input label="Title" name="title" placeholder="Software Engineering" />
        <x-forms.error name="title" />

        <x-forms.input label="Salary" name="salary" placeholder="$90,000,000 USD" />
        <x-forms.error name="salary" />

        <x-forms.input label="Location" name="location" placeholder="Libya , Tripoli" />
        <x-forms.error name="location" />

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black">Full Time</option>
            <option class="text-black">Part Time</option>
        </x-forms.select>
        <x-forms.input label="Url" name="url" placeholder="https://pixsil-position.com" />
        <x-forms.error name="url" />

        <x-forms.checkbox label="Featured (Costs Extra)" name="costs extra"/>
        <x-forms.divder />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Video , Education , Tech" />
        <div class="flex justify-between items-center">
            <x-forms.button> Publish </x-forms.button>
            <a href="/" class="text-white bg-white/10 rounded-xl py-2 px-6 font-bold hover:bg-white/25 transition duration-300 cursor-pointer"> Back </a>
        </div>
    </x-forms.form>
</x-layout>
