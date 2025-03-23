<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 auto-rows-fr">
        @foreach($jobs as $job)
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6 flex flex-col h-full">
                <div class="flex-grow">
                    <h3 class="text-lg font-medium text-gray-900 truncate">{{ $job->title }}</h3>
                    <p class="mt-1 text-sm text-gray-600">{{ $job->employer ? $job->employer->name : 'No Employer' }}</p>
                    <p class="mt-3 text-sm text-gray-500">{{ $job['salary'] }}</p>
                </div>
                
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-900">{{ $job['salary'] }}</span>
                    <a href="/jobs/{{ $job['id'] }}" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
                        View Details
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{$jobs->links()}}
    </div>
</x-layout>