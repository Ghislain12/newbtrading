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
                        Date de remboursement
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
                @foreach ($loans as $item)
                <tr>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->created_at->diffForHumans() }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 w-60 whitespace-nowrap"
                        data-bs-toggle="tooltip" title="{{ $item->objectif }}">{{
                        substr($item->objectif, 0,20) }} ...</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->amount }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->period }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->income }}</td>
                    <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{
                        $item->address }}</td>
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
                            <a data-bs-toggle="tooltip" title="Supprimer la demande">
                                <svg wire:click="deleteId({{ json_encode($item->id)  }})"
                                    data-modal-toggle="popup-modal" class="w-6 h-6 m-2 cursor-pointer" fill="#ff6347"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip"
                                    data-bs-html="true" title="Supprimer">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd">
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
    <x-deletemodal></x-deletemodal>
</div>