
    <x-slot name="header">
        {{ __('Alta de trabjador') }}
    </x-slot>
    <div class="container mx-auto py-3">
    <h1>{{$trabajador}}</h1>
    <p class="mx-2 mb-4 text-gray-700">Introduzca los datos del trabajador para dar de alta en el sistema.</p>
    {{-- {{ __('Introduzca o actualice información sobre su edad, dirección o profesión.') }} --}}
    {{-- Formulario y botones --}}
    <div class="mt-5 mb-4 md:mt-0 md:col-span-2">
        <form action="">
            <div class="shadow overflow-hidden sm:rounded-md">
                {{-- Formulario --}}
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        
                        <div class="col-span-6">
                        <!-- Nombre -->
                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                            <x-jet-input id="name" type="text" class="my-2 block w-full"/>
                        <!-- Apellido -->
                            <x-jet-label for="surname" value="{{ __('Apellidos') }}" />
                            <x-jet-input id="surname" type="text" class="my-2 block w-full"/>
                        <!-- Age -->
                            <x-jet-label for="age" value="{{ __('Edad') }}" />
                            <x-jet-input id="age" type="number" min="0" max="100" class="my-2 block w-full"/>

                        <!-- Profession -->
                            <x-jet-label for="profession" value="{{ __('Profesión') }}" />
                            <x-jet-input id="profession" type="text" class=" my-2 block w-full"/>

                        <!-- Address -->
                            <x-jet-label for="street" value="{{ __('Calle') }}" />
                            <x-jet-input id="street" type="text" class="my-2 block w-full"/>
                            
                            <x-jet-label for="number" value="{{ __('Número') }}" />
                            <x-jet-input id="number" type="number" class="my-2 block w-full"/>

                            <x-jet-label for="town" value="{{ __('Población') }}" />
                            <x-jet-input id="town" type="text" class="my-2 block w-full"/>

   
                            <x-jet-label for="town" value="{{ __('Ciudad') }}" />
                            <x-jet-input id="cp" type="text" class="my-2 block w-full"/>

                            <x-jet-label for="cp" value="{{ __('Código Postal') }}" />
                            <x-jet-input id="street" type="number" class="my-2 block w-full"/>


                            <x-jet-label for="country" value="{{ __('País') }}" />
                            <x-jet-input id="country" type="text" class="my-2 block w-full"/>

                        </div>
                    </div>
                </div>
                {{-- Botones --}}
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-jet-button wire:click="profile">
                        {{ __('Actualizar') }}
                    </x-jet-button>
                    <x-jet-button>
                        {{__('Volver')}}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </div>


</div>