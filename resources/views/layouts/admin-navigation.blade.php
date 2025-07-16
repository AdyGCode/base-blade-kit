<div class="flex h-screen flex-col justify-between border-e border-gray-100 bg-white">
    <div class="px-0 py-4">
        <p class="grid h-10 w-full place-content-center text-xs text-gray-600">
            <a class="block" href="{{route('home')}} ">
                <span class="sr-only">Home</span>

                <x-application-logo
                    class="w-14 h-14 fill-current text-gray-700 hover:text-teal-700 transition duration-350"/>
            </a>
        </p>

        <ul class="mt-6 space-y-1">
            <li>
                <a
                    href="#"
                    class="block bg-gray-200 px-4 py-2 text-sm font-medium text-gray-900"
                >
                    <i class="fa-solid fa-cog group-hover:text-zinc-500"></i>

                    Admin Home
                </a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between px-4 py-2
                             text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                        <span class="text-sm font-medium">
                            <i class="fa-solid fa-users  group-hover:text-zinc-500"></i>
                            Users </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                          <i class="fa-solid fa-chevron-down text-sm"></i>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1">
                        <li>
                            <a
                                href="#"
                                class="block px-12 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            >
                                Accounts
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-12 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            >
                                Suspended
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-12 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            >
                                Banned Users
                            </a>
                        </li>

                    </ul>
                </details>
            </li>

            <li class="group">
                <a
                    href="#"
                    class="block px-4 py-2 text-sm font-medium
                         text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >
                    <i class="fa-solid fa-laugh  group-hover:text-zinc-500"></i>
                    Jokes
                </a>
            </li>

            <li class="group">
                <a
                    href="#"
                    class="block px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >

                    <i class="fa-solid fa-cat  group-hover:text-zinc-500"></i>
                    Categories
                </a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                        <span class="text-sm font-medium">
                            <i class="fa-solid fa-shield group-hover:text-zinc-500"></i>
                            Security
                        </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                          <i class="fa-solid fa-chevron-down text-sm"></i>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1">
                        <li>
                            <a
                                href="#"
                                class="block px-12 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            >
                                Roles
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="block px-12 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            >
                                Permissions
                            </a>
                        </li>

                    </ul>
                </details>
            </li>

        </ul>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-200">

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a
                class="block px-4 py-2 [text-align:_inherit] text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <i class="fa-solid fa-sign-out group-hover:text-zinc-500"></i>

                {{ __('Log Out') }}
            </a>
        </form>

        <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
            <div
                class="bg-gray-500 text-gray-300 w-10 h-10 rounded-lg flex items-center justify-center font-bold text-md">
                AIM
            </div>

            <div>
                <p class="text-xs">
                    <strong class="block font-medium">Admin Istrator</strong>

                    <span> admin@example.com </span>
                </p>
            </div>
        </a>
    </div>
</div>
