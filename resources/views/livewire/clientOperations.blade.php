@section('title', 'Détail client')
<div class="flex flex-col min-h-screen py-12 sm:px-6 lg:px-8">
    <div class="mt-5 text-center ">
        @if ($user->avatar == null)
        <img src="{{ 'https://ui-avatars.com/api/?background=0000FF&color=ffff/?uppercase=true&name=' . $user->name. '+' . $user->firstname}}"
            class="w-32 mx-auto mb-4 rounded-full" alt="Avatar" />
        @else
        <img src="{{ asset('image/'.$user->image) }}" class="w-32 mx-auto mb-4 rounded-full" alt="Avatar" />
        @endif
        <h5 class="mb-2 text-xl font-medium leading-tight uppercase">{{ $user->name }} {{ $user->firstname }}</h5>
    </div>
    <div class="flex flex-row flex-wrap content-center justify-between w-full h-24 p-4 bg-slate-400">
        <div>
            <div class="flex flex-row">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                        clip-rule="evenodd"></path>
                </svg> Email
            </div>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{
                $user->email }}</span>
        </div>

        <div>
            <div class="flex flex-row">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                    </path>
                </svg> Téléphone
            </div>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{
                $user->phone }}</span>
        </div>
        <div>
            <div class="flex flex-row">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                        clip-rule="evenodd"></path>
                </svg> Pays
            </div>
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{
                $user->country }}</span>
        </div>
    </div>
    <h2 class="mt-10 mb-5 text-3xl font-extrabold leading-9 text-center text-gray-900">
        Récentes activités
    </h2>
    <div>
        <div>
            <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400"
                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="w-full ">
                    <a href="#" id="loan-tab" data-tabs-target="#loan" type="button" role="tab" aria-controls="loan"
                        aria-selected="false"
                        class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white"
                        aria-current="page">Demandes de prêts
                    </a>
                </li>
                <li class="w-full">
                    <a href="#" id="investment-tab" data-tabs-target="#investment" type="button" role="tab"
                        aria-controls="investment" aria-selected="false"
                        class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Demandes
                        d'investissement
                    </a>
                </li>
                <li class="w-full">
                    <a href="#" id="saving-tab" data-tabs-target="#saving" type="button" role="tab"
                        aria-controls="saving" aria-selected="false"
                        class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Demandes
                        d'épargne
                    </a>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="loan" role="tabpanel"
                aria-labelledby="loan-tab">
                @if (count($loans) > 0)
                <x-user_loan :loans="$loans"></x-user_loan>
                @else
                <p class="mt-10 text-sm text-center text-gray-500 dark:text-gray-400">
                    <strong class="font-medium text-gray-800 dark:text-white">Aucune demande de prêt pour le moment
                    </strong>.
                </p>
                @endif
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="investment" role="tabpanel"
                aria-labelledby="investment-tab">
                @if (count($investments) > 0)
                <x-user_investment :investments="$investments"></x-user_investment>
                @else
                <p class="mt-10 text-sm text-center text-gray-500 dark:text-gray-400">
                    <strong class="font-medium text-gray-800 dark:text-white">Aucune demande d'investissement
                    </strong>.
                </p>
                @endif
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="saving" role="tabpanel"
                aria-labelledby="saving-tab">
                @if ($investments == null)
                {{-- <p class="text-sm text-gray-500 dark:text-gray-400">
                    <strong class="font-medium text-gray-800 dark:text-white">Aucune demande de prêt
                    </strong>.
                </p> --}}
                @else
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    <strong class="font-medium text-gray-800 dark:text-white">yes
                    </strong>.
                </p>
                @endif
            </div>
        </div>
    </div>
</div>