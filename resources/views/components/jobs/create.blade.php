<x-layout>
    <x-slot:heading>
       Create a New Job
    </x-slot:heading>

    <p class="mt-10 text-lg  ">We just need a handful of details from you.</p>

    <form action="/jobs" method="POST" class="space-y-6 max-w-lg">
        @csrf
        <x-form-field>
            <x-form-label for="title">Job Title</x-form-label>
            <x-form-input type="text" name="title" id="title" placeholder="Senior Laravel Developer" required  />

            <x-form-errors name="title"  />
        </x-form-field>

        <x-form-field>

            <x-form-label for="salary">Salary (USD)</x-form-label>
            <x-form-input type="text" name="salary" id="salary" placeholder="60000 USD" required />

            <x-form-errors name="salary" />
        </x-form-field>

        <div class=" space-x-4 flex justify-end">
            <button type="submit" class="px-4 py-2 border bg-gray-200 text-gray-700 rounded-md  ">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
