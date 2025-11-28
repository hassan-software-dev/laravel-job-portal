<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h1 class="font-bold text-2xl">{{ $job->title }}</h1>
    <p>This job pays {{$job->salary}}</p>
    <p>
        <x-button href="/jobs/{{$job->id}}/edit">
            Edit Job
        </x-button>
    </p>
</x-layout>
