<x-layout>
    <x-slot:bannerName>
        Jobs List
    </x-slot:bannerName>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}">
                    {{ $job['title'] }}
                </a>
            </li>
        @endforeach

    </ul>
</x-layout>
