@section('title', 'Tableau de bord')
<div class="flex flex-col items-center h-full">
    <h2 class="mt-10 text-3xl font-extrabold leading-9 text-center text-gray-900">
        Tableau de bord
    </h2>
    <div class="flex flex-col shadow-lg shadow-indigo-500/40 " style="width: 80%;">

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2">
                    <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="fal..se">Mes clients</button>
                </li>
                <li class="mr-2">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Dashboard</button>
                </li>
                <li class="mr-2">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                        aria-selected="false">Settings</button>
                </li>
                <li>
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                        aria-selected="false">Contacts</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent" style="height:100%">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <livewire:clients />
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel"
                aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
        </div>

    </div>
</div>