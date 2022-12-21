<div>
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-4 sm:px-6 lg:px-8">
            <div class="">
                <table class="min-w-full text-center">
                    <thead class="bg-orange-400 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Demandeur
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Objectif
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Montant
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Échéance
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Revenu
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                                Actions
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        @foreach ($investments as $item)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{
                                $item->user->name }} {{
                                $item->user->firstname }}</td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 w-60 whitespace-nowrap"
                                data-bs-toggle="tooltip" title="{{ $item->objectif }}">{{
                                substr($item->objectif, 0,20) }} ...</td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $item->amount }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $item->refund_deadline }}
                            </td>
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                {{ $item->income }}
                            </td>
                            @if ($item->status == false)
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"><span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">En
                                    cours</span></td>
                            @else
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"><span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Validé</span>
                            </td>
                            @endif
                            <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                                <div class="flex">
                                    <a data-bs-toggle="tooltip" title="Supprimer le compte"><svg
                                            wire:click="deleteId({{ json_encode($item->id)  }})"
                                            data-modal-toggle="popup-modal" class="w-6 h-6 m-2 cursor-pointer"
                                            fill="#ff6347" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Supprimer">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="Détail sur le item"><svg
                                            class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
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
                    </tbody>
                </table>
                <div class="min-w-full text-center">{{ $investments->links() }}</div>
            </div>
        </div>
    </div>
    <x-deletemodal></x-deletemodal>
</div>