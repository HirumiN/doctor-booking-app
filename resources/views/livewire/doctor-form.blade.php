<div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-6">
    <div class="p-5 m-5 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form wire:submit="register">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- bio --}}
            <div class="mt-4">
                <x-input-label for="bio" :value="__('Bio')" />
                <x-text-input wire:model="bio" id="bio" class="block w-full mt-1" type="text" name="bio"
                    required autofocus autocomplete="bio" />
                <x-input-error :messages="$errors->get('bio')" class="mt-2" />
            </div>

            {{-- Hospital --}}
            <div class="mt-4">
                <x-input-label for="hospital" :value="__('Hospital')" />
                <x-text-input wire:model="hospital" id="hospital" class="block w-full mt-1" type="text"
                    name="hospital" required autofocus autocomplete="hospital" />
                <x-input-error :messages="$errors->get('hospital')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="bio" :value="__('Specialities')" />
                <select
                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    <option selected="">Choose Specialities</option>
                    <option>1</option>

                </select>
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input wire:model="password" id="password" class="block w-full mt-1" type="password"
                    name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block w-full mt-1"
                    type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <div class="mt-4">
                <x-input-label for="twitter" :value="__('Twitter')" />
                <x-text-input wire:model="twitter" id="twitter" class="block w-full mt-1" type="text"
                    name="twitter" required autofocus autocomplete="twitter" />
                <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="instagram" :value="__('Instagram')" />
                <x-text-input wire:model="instagram" id="instagram" class="block w-full mt-1" type="text"
                    name="instagram" required autofocus autocomplete="instagram" />
                <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('admin-doctors') }}">
                    Cancel
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
