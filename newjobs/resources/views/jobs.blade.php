<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
        <li><a href="/jobs/{{$job['id']}}"><strong class="text-blue-700 hover:underline">{{ $job['title'] }}</strong> :
                Pays {{ $job['salary']}} Per Year</a>
        </li>
        @endforeach
    </ul>
</x-layout>