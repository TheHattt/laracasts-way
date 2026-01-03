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
                <strong>{{ $job['title'] }} </strong> : Pays {{ $job['salary'] }} per year
            </div>
        </a>
@endforeach
     <div>
        {{ $jobs->links() }}
     </div>
 </div>
</x-layout>
