<x-guest-layout>

    <div class="py-12 min-h-screen">
        <h3 class="text-3xl font-semibold">Component Demos</h3>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 md:gap-8 bg-white
        shadow-sm sm:rounded-lg mt-6 px-6 py-4
                         min-h-96 ">


            <p>Badge component is easily themed.</p>

            <ul class="grid grid-cols-1 lg:grid-cols-3 flex-wrap gap-4">
                <li>Default White & Black
                    <x-badge>
                        Badge 1
                    </x-badge>
                </li>
                <li>Green / Light Background
                    <x-badge class="bg-green-100 border-green-100 text-green-700">
                        Badge 2
                    </x-badge>
                </li>
                <li>Blue / Pale Background
                    <x-badge class="bg-blue-100 border-blue-100 text-blue-700">
                        Badge 3
                    </x-badge>
                </li>
                <li>Red / Dark Background
                    <x-badge class="bg-red-700 border-red-700 text-red-100">
                        Badge 4
                    </x-badge>
                </li>
                <li>Gray / Dark Background
                    <x-badge class="bg-gray-700 border-gray-700 text-gray-100">
                        Badge 4
                    </x-badge>
                </li>
                <li>Gray / Light Background + Border
                    <x-badge class="bg-gray-100 border-gray-400 text-gray-700">
                        Badge 4
                    </x-badge>
                </li>
                <li>Black & White
                    <x-badge class="bg-black border-black text-white">
                        Badge 5
                    </x-badge>
                </li>
                <li>Green / Dark Background + Icon
                    <x-badge class="bg-green-700 border-green-700 text-green-100">
                        Badge Title
                        <i class="fa-solid fa-thumbs-up"></i>
                    </x-badge>
                </li>
            </ul>


        </div>
    </div>


</x-guest-layout>
