<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    @foreach($jobs as $job)
    <li>{{ $job['title'] }} : Pays {{ $job['salary']}} Per Year</li>
    @endforeach
</x-layout>