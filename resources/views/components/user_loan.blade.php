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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>