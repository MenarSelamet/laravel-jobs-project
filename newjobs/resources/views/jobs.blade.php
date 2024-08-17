<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-500 rounded-lg">
            <div class="font-bold text-green-700"> {{ $job->employer->name}}
                div </div>

            <strong class="text-blue-700 hover:underline">{{ $job['title'] }}</strong>
            :
            Pays {{ $job['salary']}} Perarticleic
            @endforeach
    </div>
</x-layout>