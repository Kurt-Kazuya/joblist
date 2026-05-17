<x-layout>
    <h1>{{ $job->title }}</h1>
    <p><strong>Salary:</strong> {{ $job->salary }}</p>
    <p><strong>Description:</strong> {{ $job->description }}</p>
    <br>
    <a href="/jobs">Back to job list</a>
</x-layout>