<x-layout heading="Job Listing">
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a class="hover:text-red-600 hover:underline text-blue-400" href="/jobs/{{ $job['id'] }}">
            <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} Per year. 
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>