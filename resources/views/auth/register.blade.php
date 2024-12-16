<x-layout>
    <x-page-heading> Register</x-page-heading>
    <x-forms.form  method="POST"  action="/register" enctype="multipart/form-data">
        <x-forms.input label="Your Name" name="name"  placeholder="John Doe"/>
        <x-forms.error name="name" />

        <x-forms.input label="Your Email" name="email" type="email" placeholder="John@Doe.com"/>
        <x-forms.error name="email" />

        <x-forms.input label="Password" name="password" type="password"  placeholder="XXXXXXXX"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"  placeholder="XXXXXXXX"/>
        <x-forms.error name="password" />

        <x-forms.divder />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.error name="employer" />

        <x-forms.input label="Employer logo" name="logo" type="file"/>
        <x-forms.error name="logo" />

        <div class="flex justify-between items-center">
            <x-forms.button> Create Account </x-forms.button>
            <a href="/" class="text-white bg-white/10 rounded-xl py-2 px-6 font-bold hover:bg-white/25 transition duration-300 cursor-pointer"> Back </a>
        </div>
    </x-forms.form>
</x-layout>
