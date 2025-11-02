<x-guest-layout>

    <div class="py-12 min-h-screen ">
        <h3 class="text-3xl font-semibold">Component Demos</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2
        md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-8 bg-white
        shadow-sm sm:rounded-lg mt-6 px-6 py-4
                         ">


            <x-nav-link href="{{ route('components.link-buttons') }}">Link Buttons</x-nav-link>
            <x-nav-link href="{{ route('components.badges') }}">Badges</x-nav-link>
            <x-nav-link href="{{ route('components.inputs') }}">Inputs</x-nav-link>
            <x-nav-link href="{{ route('components.link-buttons') }}">CKEditor</x-nav-link>
        </div>
    </div>


</x-guest-layout>
