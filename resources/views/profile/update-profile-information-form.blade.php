<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
       
        <!-- last_name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
            <x-jet-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name" />
            <x-jet-input-error for="last_name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>


        <!-- job -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="job" value="{{ __('Empleo') }}" />
            <x-jet-input id="job" type="text" class="mt-1 block w-full" wire:model.defer="state.job" />
            <x-jet-input-error for="job" class="mt-2" />
        </div>

        <!-- role -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="role" value="{{ __('Rol') }}" />
            <!-- <x-jet-input  type="text"  wire:model.defer="state.role" /> -->
            
            <select name="role" id="role" class="form-select rounded-md shadow-sm mt-1 block w-full">
                <option value="Administrador">Administrador</option>
                <option value="Ventas">Ventas</option>
                <option value="Almacén">Almacén</option>
                <option value="Punto de Venta">Punto de Venta</option>
                <option value="Repartidor">Repartidor</option>
            </select>
            <x-jet-input-error for="role" class="mt-2" />
        </div>



        <!-- born_date -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="born_date" value="{{ __('Fecha de nacimiento') }}" />
            <x-jet-input id="born_date" type="date" class="mt-1 block w-full" wire:model.defer="state.born_date" />
            <x-jet-input-error for="born_date" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('phone') }}" />
            <x-jet-input id="phone" type="phone" class="mt-1 block w-full" wire:model.defer="state.phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>

        <!-- state -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state" value="{{ __('state') }}" />
            <x-jet-input id="state" type="text" class="mt-1 block w-full" wire:model.defer="state.state" />
            <x-jet-input-error for="state" class="mt-2" />
        </div>

        <!-- street -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="street" value="{{ __('street') }}" />
            <x-jet-input id="street" type="text" class="mt-1 block w-full" wire:model.defer="state.street" />
            <x-jet-input-error for="street" class="mt-2" />
        </div>

        <!-- municipality -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="municipality" value="{{ __('municipality') }}" />
            <x-jet-input id="municipality" type="text" class="mt-1 block w-full" wire:model.defer="state.municipality" />
            <x-jet-input-error for="municipality" class="mt-2" />
        </div>

        <!-- exterior_number -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="exterior_number" value="{{ __('exterior_number') }}" />
            <x-jet-input id="exterior_number" type="text" class="mt-1 block w-full" wire:model.defer="state.exterior_number" />
            <x-jet-input-error for="exterior_number" class="mt-2" />
        </div>

        <!-- postal_code -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="postal_code" value="{{ __('postal_code') }}" />
            <x-jet-input id="postal_code" type="text" class="mt-1 block w-full" wire:model.defer="state.postal_code" />
            <x-jet-input-error for="postal_code" class="mt-2" />
        </div>
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
