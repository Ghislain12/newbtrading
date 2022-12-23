@section('title', 'Tableau de bord')
<div>
    <div class="overflow-x-auto sm:px-6 lg:px-48">
        <h2 class="mt-10 text-3xl font-extrabold leading-9 text-center text-gray-900">
            Tableau de bord
        </h2>
        <div class="flex flex-col shadow-lg shadow-indigo-500/40">
            <div class="p-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Mes clients</button>
                    </li>
                    <li class="mr-2">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg " id="dashboard-tab"
                            data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                            aria-selected="false">Prêts</button>
                    </li>
                    <li class="mr-2">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg " id="settings-tab"
                            data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                            aria-selected="false">Investissements</button>
                    </li>
                    <li>
                        <button class="inline-block p-4 border-b-2 rounded-t-lg " id="contacts-tab"
                            data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                            aria-selected="false">Épargne</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <livewire:clients />
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    @livewire('loans')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    @livewire('investment')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                            content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </div>
</div>