@if (count($investments) > 0)
<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-4 sm:px-6 lg:px-8">
        <table class="min-w-full text-center">
            <thead class="bg-orange-400 border-b">
                <tr>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white w-60">
                        Objectif
                    </th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                        Montant
                    </th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                        Délai de remboursement
                    </th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                        Revenu
                    </th>
                    <th scope="col" class="px-6 py-4 text-sm font-medium text-white">
                        Adresse
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
                <tr>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->created_at->diffForHumans() }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 w-60 whitespace-nowrap"
                        data-bs-toggle="tooltip" title="{{ $item->objectif }}">{{
                        substr($item->objectif, 0,20) }} ...</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->amount }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->refund_deadline }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->income }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 w-60 whitespace-nowrap"
                        data-bs-toggle="tooltip" title="{{ $item->address }}">{{
                        substr($item->address, 0,20) }} ...</td>
                    @if ($item->statut == false)
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
                            <a data-bs-toggle="tooltip" title="Supprimer ma demande">
                                <svg wire:click="deleteId({{ json_encode($item->id)  }})"
                                    data-modal-toggle="popup-modal1" class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip"
                                    data-bs-html="true" title="Supprimer">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </a>
                            <a data-bs-toggle="tooltip" title="Modifier ma demande">
                                <svg data-modal-toggle="edit-loan-modal"
                                    wire:click='editLoan({{ json_encode($item->id)  }})'
                                    class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-delete-investment></x-delete-investment>
</div>
@else
<p class="mt-10 text-sm text-center text-gray-500 dark:text-gray-400">
    <strong class="font-medium text-gray-800 dark:text-white">Aucune demande d'investissement
    </strong>
</p>
@endif