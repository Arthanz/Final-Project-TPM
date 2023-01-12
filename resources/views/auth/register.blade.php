<x-guest-layout>
    <form id="regForm" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" style="">
        @csrf
        <div class="tab">
        <!-- Name -->
        <p>
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
        </p>

        <!-- Password -->
        <p>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </p>


        <!-- Confirm Password -->
    <p>
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    </p>

<p>
    <div class="mt-4" style="display: flex; flex-direction: row; flex-wrap: wrap; margin-bottom: 20px;">
        <div class="float-container">
            <div class="float-child">
                <x-input-label for="is_binusian" :value="__('Binusian')" />
                <x-text-input id="is_binusian"  type="radio" name="is_binusian" :value=1 required />
                <x-input-error :messages="$errors->get('is_binusian')" class="mt-2" />
            </div>
            <div class="float-child">
                <x-input-label for="is_binusian" :value="__('Not Binusian')" />
                <x-text-input id="is_binusian"  type="radio" name="is_binusian" :value=0 required />
                <x-input-error :messages="$errors->get('is_binusian')" class="mt-2" />
            </div>
        </div>
    </div>
</p>

        </div>
        <div class="tab">
            <div>
                <x-input-label for="leader_name" :value="__('Name')" />
                <x-text-input id="leader_name" class="block mt-1 w-full" type="text" name="leader_name" :value="old('leader_name')" required autofocus />
                <x-input-error :messages="$errors->get('leader_name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>


        <div class="tab">
            <div>
                <x-input-label for="leader_WA_Number" :value="__('WA Number')" />
                <x-text-input id="leader_WA_Number" class="block mt-1 w-full" type="text" name="leader_WA_Number" :value="old('leader_WA_Number')" required autofocus />
                <x-input-error :messages="$errors->get('leader_WA_Number')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="leader_Line_ID" :value="__('Line ID')" />
                <x-text-input id="leader_Line_ID" class="block mt-1 w-full" type="text" name="leader_Line_ID" :value="old('leader_Line_ID')" required autofocus />
                <x-input-error :messages="$errors->get('leader_Line_ID')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="leader_Github_ID" :value="__('Github ID')" />
                <x-text-input id="leader_Github_ID" class="block mt-1 w-full" type="text" name="leader_Github_ID" :value="old('leader_Github_ID')" required autofocus />
                <x-input-error :messages="$errors->get('leader_Github_ID')" class="mt-2" />
            </div>
        </div>

        <div class="tab">
            <div>
                <x-input-label for="leader_Birth_date" :value="__('Birth Date')" />
                <x-text-input id="leader_Birth_date" class="block mt-1 w-full" type="date" name="leader_Birth_date" :value="old('leader_Birth_date')" required autofocus />
                <x-input-error :messages="$errors->get('leader_Birth_date')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="leader_Birth_place" :value="__('Birth Place')" />
                <x-text-input id="leader_Birth_place" class="block mt-1 w-full" type="text" name="leader_Birth_place" :value="old('leader_Birth_place')" required autofocus />
                <x-input-error :messages="$errors->get('leader_Birth_place')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="leader_cv" :value="__('CV')" />
                <x-text-input id="leader_cv" class="block mt-1 w-full" type="file" name="leader_cv" :value="old('leader_cv')" required autofocus />
                <x-input-error :messages="$errors->get('leader_cv')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="leader_card" :value="__('Card')" />
                <x-text-input id="leader_card" class="block mt-1 w-full" type="file" name="leader_card" :value="old('leader_card')" required autofocus />
                <x-input-error :messages="$errors->get('leader_card')" class="mt-2" />
            </div>
        </div>
        {{-- <div style="text-align:center;margin-top:40px;  height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div> --}}

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
