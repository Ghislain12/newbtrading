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
                                    class="w-8 h-8 mr-2 rounded-full"
                                    src="{{ 'https://ui-avatars.com/api/?background=ff6347&color=ffff/?uppercase=true&name=' . $client->name. '+' . $client->firstname}}"
                                    alt="user image" />
                            </td>
                            @else
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"><img
                                    class="w-8 h-8 mr-2 rounded-full" src="{{ asset('image/'.$client->image) }}"
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
                                    {{-- <a data-bs-toggle="tooltip" title="Editer les informations">
                                        <svg wire:click='' class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a> --}}
                                    {{-- <a data-bs-toggle="tooltip" title="Bloquer le compte">
                                        <svg wire:click="deleteId({{ json_encode($client->id)  }})"
                                            data-modal-toggle="popup-modal1" class="w-6 h-6 m-2 cursor-pointer"
                                            class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347 " viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </a> --}}
                                    <a data-bs-toggle="tooltip" title="Supprimer le compte"><svg
                                            wire:click="deleteId({{ json_encode($client->id)  }})"
                                            data-modal-toggle="popup-modal" class="w-6 h-6 m-2 cursor-pointer"
                                            fill="#ff6347" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Supprimer">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="{{ route('clients.operations', $client->id) }}" data-bs-toggle="tooltip"
                                        title="Détail sur le client"><svg class="w-6 h-6 m-2 cursor-pointer"
                                            fill="#ff6347" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </a>
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
    <x-deletemodal></x-deletemodal>
    {{-- <x-lock_account></x-lock_account> --}}
</div>