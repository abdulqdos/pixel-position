<x-layout>
    <x-page-heading> Welcome Back ! </x-page-heading>
    <x-forms.form  method="POST"  action="/login" >

        <x-forms.input label="Your Email" name="email" type="email" placeholder="John@Doe.com"/>
        <x-forms.error name="email" />

        <x-forms.input label="Password" name="password" type="password"  placeholder="XXXXXXXX"/>
        <x-forms.error name="password" />

        <div class="flex justify-between items-center">
            <x-forms.button> Login </x-forms.button>
            <a href="/" class="text-white bg-white/10 rounded-xl py-2 px-6 font-bold hover:bg-white/25 transition duration-300 cursor-pointer"> Back </a>
        </div>
    </x-forms.form>
</x-layout>
