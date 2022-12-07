<div>
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-4 sm:px-6 lg:px-8">
            <div class="">
                <table class="min-w-full text-center">
                    <thead class="bg-orange-400 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Avatar
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Prénom
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Téléphone
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Pays
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Actions
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        @if ($clients!==null)
                        @foreach ($clients as $client)
                        <tr class="bg-white border-b">
                            @if ($client->avatar == null)
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"><img
                                    class="mr-2 w-8 h-8 rounded-full"
                                    src="{{ 'https://ui-avatars.com/api/?background=ff6347&color=ffff/?uppercase=true&name=' . $client->name. '+' . $client->firstname}}"
                                    alt="user image" />
                            </td>
                            @else
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"><img
                                    class="mr-2 w-8 h-8 rounded-full" src="{{ asset('image/'.$client->image) }}"
                                    alt="user image" />
                            </td>
                            @endif
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{
                                $client->name }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                {{ $client->firstname }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $client->email }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $client->phone }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $client->country }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                <div class="flex">
                                    <svg wire:click='' class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                    <svg wire:click='' class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347 "
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <svg wire:click="deleteId({{ json_encode($client->id)  }})"
                                        data-modal-toggle="popup-modal" class="w-6 h-6 m-2 cursor-pointer"
                                        fill="#ff6347" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </td>
                        </tr class="bg-white border-b">
                        @endforeach
                        @else
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">Aucun client
                            </td>
                        </tr class="bg-white border-b">
                        @endif
                    </tbody>
                </table>
                <div class="min-w-full text-center">{{ $clients->links() }}</div>
            </div>
        </div>
    </div>

    <div wire:ignore.self id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this product?</h3>
                    <button wire:click.prevent='removeClient()' data-modal-toggle="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>