<div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-6">
    <div class="p-5 m-5 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form wire:submit.prevent="update">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Speciality Name')" />
                <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name"
                    required autofocus/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('admin-specialities') }}">
                    Cancel
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
