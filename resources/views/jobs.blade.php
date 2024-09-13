<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}: </strong> Pays {{ $job['salary'] }} per Year.
                </a>
            </li>
        @endforeach
    </ul>

    <h1>Hello from the About Page</h1>
</x-layout>
