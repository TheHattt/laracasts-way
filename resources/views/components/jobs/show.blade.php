<x-layout>
    <x-slot:heading>
       Job Details
    </x-slot:heading>

    <div class="border p-12 rounded-lg shadow-md mb-6">
        <h2 class="text-2xl font-bold mb-4">{{ $job->title }}</h2>
        <p class="mb-2 text-xl"> This job pays a salary of  {{ $job->salary }} per year</p>
        <a href="/jobs" class="text-blue-500  mt-4 inline-block">Back to Jobs Listing</a>
    </div>

    @can('edit-job', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </p>
    @endcan
</x-layout>
