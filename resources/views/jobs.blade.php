<x-layout>
    <x-slot:heading>
       Jobs Listing
    </x-slot:heading>

 <div class=" space-y-4">
@foreach($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class=" p-12 block border  rounded-md  hover:bg-gray-50">
            <div class="mb-2 text-lg font-medium  text-blue-500  ">
                {{$job->employer->name}}
            </div>
            <div>
                <strong>{{ $job['title'] }} : Pays {{ $job['salary'] }} per year</strong>
            </div>
        </a>
@endforeach
 </div>
</x-layout>
