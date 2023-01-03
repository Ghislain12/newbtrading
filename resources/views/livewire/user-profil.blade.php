@section('title', 'Mon profil')
<div class="flex flex-col min-h-screen py-12 sm:px-6 lg:px-48">
    <div class="grid mt-5 text-center justify-items-center">
        @if (Auth::user()->image == null)
        <img src="{{ 'https://ui-avatars.com/api/?background=0000FF&color=ffff/?uppercase=true&name=' . Auth::user()->name. '+' . Auth::user()->firstname}}"
            class="w-32 h-32 mx-auto mb-4 rounded-full cursor-pointer" data-modal-toggle="edit-avatar-modal"
            alt="Avatar" />cod
        @else
        <div style="width: 128px; height:128px">
            <img src="{{ asset('image/'.Auth::user()->image) }}" style="width: 100% !important; height:100% !important;"
                class="rounded-full cursor-pointer" data-modal-toggle="edit-avatar-modal" alt="Avatar" />
        </div>
        @endif
        <h5 class="mb-2 text-xl font-medium leading-tight uppercase">{{ Auth::user()->name }} {{
            Auth::user()->firstname }}
        </h5>
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
                Auth::user()->email }}</span>
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
                Auth::user()->phone }}</span>
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
                Auth::user()->country }}</span>
        </div>
    </div>
    <div class="flex flex-wrap pl-2 mt-5 space-x-2">
        <button type="button" data-modal-toggle="edit-profil-modal"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd"
                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                    clip-rule="evenodd">
                </path>
            </svg>
            Profil
        </button>
        <button type="button" data-modal-toggle="loan-modal"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd">
                </path>
            </svg>
            Prêts
        </button>
        <button type="button" data-modal-toggle="add-investment-modad"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd">
                </path>
            </svg>
            Investment
        </button>
        <!-- <a href = "{{route('getinvestmentform')}}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd">
                </path>
            </svg>
            Investment
        </a> -->
        <button type="button" data-modal-toggle="saving-modal"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd">
                </path>
            </svg>
            Épargne
        </button>
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
                @livewire('my-loan')
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="investment" role="tabpanel"
                aria-labelledby="investment-tab">
                @livewire('my-investments')
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="saving" role="tabpanel"
                aria-labelledby="saving-tab">
                @if ($investments == null)
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
@livewire('add-loan')
@livewire('add-investment')
@livewire('add-saving')
@livewire('edit-profil')
@livewire('change-avatar')