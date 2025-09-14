<x-layout>
    <x-slot:heading>
        Job Lists
    </x-slot:heading>

    <h1 class="font-bold text-black-900 text-l"> {{ $job['title'] }} </h1>
    <p>
        This job pays {{ $job['salary'] }}.
    </p>
</x-layout>
