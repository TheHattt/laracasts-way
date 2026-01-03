<x-layout>
    <x-slot:heading>
       Job Details
    </x-slot:heading>

    <div class="border p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">{{ $job['title'] }}</h2>
        <p class="mb-2"> This job pays a salary of  {{ $job['salary'] }} per year</p>
        <a href="/jobs" class="text-blue-500 hover:underline mt-4 inline-block">Back to Jobs Listing</a>
    </div>
</x-layout>
