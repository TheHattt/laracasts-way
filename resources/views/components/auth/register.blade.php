<x-layout>
    <x-slot:heading>
       Register
    </x-slot:heading>

    <div class="mt-6 shadow-md rounded-md backdrop-blur-lg p-6 bg-white/30 border border-white/10">
 <form method="POST" action="/register" class=" max-w-md mx-auto mt-8 space-y-10">
    @csrf

    <div>
        <x-form-label for="name"> First Name </x-form-label>
        <x-form-input type="text" name="first_name" id="name" placeholder="John" required />
        <x-form-errors name="first_name" />
    </div>

     <div>
        <x-form-label for="last_name"> Last Name </x-form-label>
        <x-form-input type="text" name="last_name" id="last_name" placeholder="Doe" required />
        <x-form-errors name="last_name" />
     </div>

    <div>
        <x-form-label for="email"> Email </x-form-label>
        <x-form-input type="email" name="email" id="email" placeholder="example@gmail.com" required />
        <x-form-errors name="email" />
    </div>

    <div>
        <x-form-label for="password"> Password </x-form-label>
        <x-form-input type="password" name="password" id="password" placeholder="Enter your password" required />
        <x-form-errors name="password" />
    </div>

     <div>
        <x-form-label for="password_confirmation"> Confirm Password </x-form-label>
        <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required />
         <x-form-errors name="password_confirmation" />
     </div>

    <div class=" flex justify-end space-x-4">
        <x-form-button>Register</x-form-button>
    </div>
</form>
    </div>
</x-layout>
