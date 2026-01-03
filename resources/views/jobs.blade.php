<x-layout>
    <x-slot:heading>
       Jobs Listing
    </x-slot:heading>

 <ul>

@foreach($jobs as $job)
    <li class="list-none mb-4">
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
        {{ $job['title'] }} : Pays {{ $job['salary'] }}
        </a>
    </li>
@endforeach
 </ul>
</x-layout>
