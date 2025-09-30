<x-guest-layout>

    <div class="py-12 min-h-screen bg-green-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 md:gap-8 bg-white
        shadow-sm sm:rounded-lg mt-6 px-6 py-4
                         min-h-96 ">


            <p>This has a
                <x-badge>
                    Badge
                </x-badge>
            </p>
            <x-textarea
                name="textarea-ckeditor"
                id="editor"
                class="overflow-y-auto h-fit !min-h-96 prose max-w-full"
                placeholder="Text area with CK Editor 5"
            />

            <div class="space-y-2 w-full">
                <x-input-label for="text-input">Text Input</x-input-label>
                <x-text-input id="text-input" name="text-input" class="w-full"></x-text-input>
            </div>

            <div class="flex-row space-x-4">
                <x-primary-link-button name="primary-button">
                    Primary Link Button
                </x-primary-link-button>

                <x-secondary-link-button name="secondary-button">
                    Secondary Link Button
                </x-secondary-link-button>

                <x-danger-link-button name="danger-button">
                    Danger Link Button
                </x-danger-link-button>
            </div>
        </div>
    </div>


</x-guest-layout>
