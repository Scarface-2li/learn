<x-layout heading="Job Listing">
    <div class='space-y-3'>
        @foreach ($jobs as $job)
        <a class="block px-4 py-6 border border-gray-200 rounded-lg" href="/jobs/{{ $job['id'] }}">
            <div class="font-bold text-blue-500">{{ $job->employer->name}}</div>
            <div>
                <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} Per year.
            </div>
        </a>
        @endforeach
        {{ $jobs->links()}}
    </div>
</x-layout>
