<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the job details below.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" value="{{ old('title', $job->title) }}" />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" value="{{ old('salary', $job->salary) }}" />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-6">
                        <x-form-label for="description">Description</x-form-label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="6"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('description', $job->description) }}</textarea>
                            <x-form-error name="description" />
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-6">
                        <x-form-label for="tags">Tags</x-form-label>
                        <div class="mt-2">
                            <div class="flex flex-wrap gap-2">
                                @foreach($tags as $tag)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            {{ in_array($tag->id, old('tags', $job->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                                        <span class="ml-2">{{ $tag->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <x-form-error name="tags" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Update</x-form-button>
        </div>
    </form>
    <form method="POST" action="/jobs/{{$job->id}}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>