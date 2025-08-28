<x-layout heading="Job">
    <h2 class="font-bold text-lg">{{ $job['title']}}</h2>

        <p>
           This Job Pays {{ $job['salary'] }} Per year.
        </p>
        <div class="pt-5">
            <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
        </div>
</x-layout>
