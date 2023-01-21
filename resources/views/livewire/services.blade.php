<div>
    <button type="button" data-modal-toggle="services-modal"
        class="text-white bg-red-600 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-orange-500 dark:hover:bg-orange-500 dark:focus:ring-orange-800 my-2">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                clip-rule="evenodd">
            </path>
        </svg>
        Services
    </button>
    <div class="container px-6 mx-auto my-24">

        <!-- Section: Design Block -->
        <section class="mb-32 text-center text-gray-800">

            <h2 class="pb-4 mb-12 text-3xl font-bold text-center">Nos services</h2>

            <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                @foreach ($services as $service)
                <div class="mb-6 lg:mb-0">
                    <div class="relative block bg-white rounded-lg shadow-lg">
                        <div class="flex">
                            <div class="relative mx-4 -mt-4 overflow-hidden bg-no-repeat bg-cover rounded-lg shadow-lg"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                                @if ($service->image == null)
                                <img src="{{ 'https://ui-avatars.com/api/?background=ffff&color=black/?uppercase=true&name=' . $service->label}}"
                                    class="w-full" />
                                <a href="{{ route('services.details', $service->id) }}">
                                    <div class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden transition duration-300 ease-in-out bg-fixed opacity-0 hover:opacity-100"
                                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                                @else
                                <img src="{{ asset('image/'.$service->image) }}" class="w-full" />
                                <a href="{{ route('services.details', $service->id) }}">
                                    <div class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden transition duration-300 ease-in-out bg-fixed opacity-0 hover:opacity-100"
                                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">{{ $service->label }}</h5>
                            <p class="pb-2 mb-4">
                                {{$service->description}}
                            </p>
                            <div class="flex">
                                <a href="{{ route('services.details', $service->id) }}" data-mdb-ripple="true"
                                    data-mdb-ripple-color="light"
                                    class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg transition duration-150 ease-in-out">Read
                                    more</a>
                                <a data-bs-toggle="tooltip" title="Supprimer le service"><svg
                                        wire:click="deleteId({{ json_encode($service->id)  }})"
                                        data-modal-toggle="service-delete-modal" class="w-6 h-6 m-2 cursor-pointer"
                                        fill="#ff6347" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Supprimer">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    @livewire('create-services')
    <x-delete-service></x-delete-service>
</div>