<div>
    <button type="button" data-modal-toggle="services-modal"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                clip-rule="evenodd">
            </path>
        </svg>
        Services
    </button>
    <section class="py-8 bg-white border-b">
        <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Services
            </h2>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            @foreach ($services as $item)
            <div class="flex flex-col flex-grow flex-shrink w-full max-w-xs p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            {{ ucfirst($item->label) }}
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-800">
                            {{$item->description}}
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                    <div class="flex items-center justify-end">
                        <a data-bs-toggle="tooltip" title="Supprimer le service"><svg
                                wire:click="deleteId({{ json_encode($item->id)  }})"
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
            @endforeach
        </div>
    </section>
    @livewire('create-services')
    <x-delete-service></x-delete-service>
</div>