<x-layout>
    <x-slot:heading>
       Login
    </x-slot:heading>
<div class="mt-6 shadow-md rounded-md backdrop-blur-lg p-10 bg-white/30 border border-white/10">
 <form method="POST" action="/login" class=" max-w-md mx-auto mt-8 space-y-6">
    @csrf

    <div>
        <x-form-label for="email"> Email </x-form-label>
        <x-form-input type="email" name="email" id="email" placeholder="info@laravel.com" :value="old('email')" required />
        <x-form-errors name="email" />
    </div>
        <div>
            <x-form-label for="password"> Password </x-form-label>
            <x-form-input type="password" name="password" id="password" required />
            <x-form-errors name="password" />
        </div>

     <div class="flex justify-end space-x-4">
        <x-form-button> Login </x-form-button>

     </div>

</form>
</div>
</x-layout>
