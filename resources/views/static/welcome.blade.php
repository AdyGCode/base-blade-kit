<x-guest-layout>


    <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 shadow">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center text-gray-700
                        ltr:sm:text-left rtl:sm:text-right
                        space-y-6">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Laravel 12 with Base Blade Kit
                </h2>

                <p class="hidden md:mt-4 md:block">
                    A base template using blade, and a slow inclusion of components based on the
                    HyperUI Open Source Tailwind Component Kit.
                </p>

                <div class="grid grid-cols-2 gap-2">
                    <p class="min-h-14 content-center">
                        Read the Laravel Documentation
                    </p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://laravel.com/docs"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">Documentation</span>
                            <i class="fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>

                        </x-primary-link-button>
                    </p>

                    <p class="min-h-14 content-center">
                        Read the tutorial based on this template, and the
                        Laravel Bootcamp</p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://github.com/AdyGCode/SaaS-FED-Notes/blob/main/session-11/S11-Laravel-v12-Bootcamp-Part-00-Introducing-Laravel.md"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition  group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">Laravel Bootcamp</span>
                            <i class="fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>
                        </x-primary-link-button>
                    </p>

                    <p class="min-h-14 content-center">
                        Watch Laravel video tutorials.
                    </p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://laracasts.com"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">Laracasts</span>
                            <i class="fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>
                        </x-primary-link-button>
                    </p>

                    <p class="min-h-14 content-center">
                        Get Started with Laravel (Original Bootcamp). 13 Video based
                        lessons.
                    </p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://laravel.com/learn/getting-started-with-laravel"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">Get Started</span>
                            <i class="fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>
                        </x-primary-link-button>
                    </p>

                    <p class="min-h-14 content-center">
                        Discover more about HyperUI.
                    </p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://hyperui.dev"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">HyperUI</span>
                            <i class="text-sm fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>
                        </x-primary-link-button>
                    </p>

                    <p class="min-h-14 content-center">
                        Need a PHP Quick-start or Refresher? Laravel provide a 10 Lesson
                        starter.
                    </p>
                    <p class="min-h-14 content-center">
                        <x-primary-link-button
                            href="https://laravel.com/learn/php-fundamentals"
                            class="bg-emerald-600! hover:bg-emerald-700!
                                   transition group
                                   focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                            <span class="underline pr-2">PHP Fundamentals</span>
                            <i class="text-sm fa-solid fa-external-link no-underline
                                      group-hover:rotate-45 transition ease-in-out"></i>
                        </x-primary-link-button>
                    </p>
                </div>
            </div>
        </div>

        <img
            alt="Image: Laravel 12 Splash Cover"
            src="{{ url('/images/laravel-12-image.png') }}"
            class="h-56 w-full object-cover sm:h-full"
        />
    </section>


</x-guest-layout>
