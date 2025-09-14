<x-layout>
    <x-slot:heading>
        Job Lists
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="job/{{ $job['id'] }}" class=" hover:underline hover:text-blue-600">
                    <strong> {{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
