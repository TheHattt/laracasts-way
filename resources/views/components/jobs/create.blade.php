<x-layout>
    <x-slot:heading>
       Create a New Job
    </x-slot:heading>

    <p class="mt-10 text-lg  ">We just need a handful of details from you.</p>

    <form action="/jobs" method="POST" class="space-y-6 max-w-lg">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
            <input type="text" name="title" id="title" placeholder="Lee Pokes" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            @error('title')
            <p class="text-xs text-red-600">

                {{$message}}
            </p>

            @enderror
        </div>

        <div>
            <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
            <input type="text" name="salary" id="salary" placeholder="$ 150, 000" required  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            @error('salary')
            <p class="text-xs text-red-600">{{$message}} </p>
            @enderror
        </div>

        <div class=" space-x-4 flex justify-end">
            <button type="submit" class="px-4 py-2 border bg-gray-200 text-gray-700 rounded-md  ">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save</button>
        </div>
    </form>
</x-layout>
