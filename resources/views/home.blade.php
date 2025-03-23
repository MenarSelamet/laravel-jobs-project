<x-layout>
    <x-slot:heading>
        Welcome to Job Listings
    </x-slot:heading>

    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Latest Job Opportunities</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($latestJobs as $job)
                <a href="/jobs/{{ $job->id }}" class="block group">
                    <div class="aspect-square bg-white p-6 shadow-md rounded-lg border-2 border-gray-100 hover:border-blue-500 transition-colors duration-200 flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-200 mb-2 line-clamp-2">
                                {{ $job->title }}
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">{{ $job->employer->name }}</p>
                            <p class="text-sm text-gray-500 line-clamp-3">{{ $job->description }}</p>
                        </div>
                        
                        @if($job->tags->count() > 0)
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach($job->tags->take(2) as $tag)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
                                @if($job->tags->count() > 2)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        +{{ $job->tags->count() - 2 }}
                                    </span>
                                @endif
                            </div>
                        @endif
                        
                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-900">{{ $job->salary }}</span>
                            <span class="text-sm font-semibold text-blue-600 group-hover:translate-x-1 transition-transform duration-200">
                                View Details →
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        
        <div class="mt-8 text-center">
            <a href="/jobs" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                View All Jobs
            </a>
        </div>
    </div>
</x-layout>