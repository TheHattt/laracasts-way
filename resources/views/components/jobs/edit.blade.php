<x-layout>
    <x-slot:heading>
         Edit Job
    </x-slot:heading>


    <form action="/jobs/{{$job->id}}" method="POST" class="space-y-6 max-w-lg">
        @csrf
        @method('PATCH')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
            <input
                type="text"
                name="title"
                id="title"
                placeholder="Lee Pokes"
                value="{{ $job->title }}"
                required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            @error('title')
            <p class="text-xs text-red-600">
                {{$message}}
            </p>
            @enderror
        </div>

        <div>
            <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
            <input type="text"
                   name="salary"
                   id="salary"
                   placeholder="$ 150, 000"
                   value="{{ $job->salary }}"
                   required
                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            @error('salary')
            <p class="text-xs text-red-600">{{$message}} </p>
            @enderror
        </div>

        <div class=" space-x-4 flex justify-between ">
            <div>
                <button
                    form="delete-job-form"
                    class="text-slate-50 font-bold py-2 px-4 bg-red-600 rounded-md">Delete</button>
            </div>
            <div>
            <a
                href="/jobs/{{ $job->id }}"
                class="px-4 py-2 border bg-gray-200 text-gray-700 rounded-md font-bold mr-3 ">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md font-bold hover:bg-blue-600">Update</button>
            </div>
        </div>
    </form>

     <form action="/jobs/{{$job->id}}" method="POST" class="hidden" id="delete-job-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
