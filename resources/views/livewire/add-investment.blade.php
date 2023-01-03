<div wire:ignore.self id="add-investment-modad" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md overflow-y-auto md:h-auto">
        <!-- Modal content -->
        <div class="relative overflow-y-auto bg-white rounded-lg shadow dark:bg-gray-700 ">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="add-investment-modad">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 mt-5 lg:px-8">
                <form action="{{ route('adinvestment.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex gap">
                        <div style="width: 100%">
                            <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Groupe social</label>
                            <select name="group" id=""
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Groupe social</option>
                                @foreach ($groups as $item)
                                <option value="{{ $item->label }}">{{ $item->label }}</option>
                                @endforeach
                            </select>
                            @error('group')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Montant</label>
                            <input type="number" name="amount" id="amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('amount')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select name="amount_currency" id="amount_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('amount_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Revenu</label>
                            <input type="number" name="income" id="income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('income')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select name="income_currency" id="income_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">Dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('income_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="refund_deadline"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Délai de </label>
                            <input type="number" name="refund_deadline"
                                id="refund_deadline"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('refund_deadline')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                remboursement</label>
                            <select name="number" id="number"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la période</option>
                                <option value="month">Mois</option>
                                <option value="year">Année</option>
                            </select>
                            @error('number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Adresse</label>
                        <textarea name = "address" id="address" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="objectif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Objectif</label>
                        <textarea name = "objectif" id="objectif" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('objectif')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="terms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image</label>
                         <input name = "business_plan" accept=".pdf, .jpeg, .jpg" type="file"
                                name="business_plan" id="business_plan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('business_plan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">
                        Soumettre
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div wire:ignore.self id="investment-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="investment-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Demande d'investissement</h3>
                <form action = "{{route('adinvestment.save')}}" method = "POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="flex gap">
                        <div style="width: 100%">
                            <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Groupe social</label>
                            <select name="group" id=""
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Groupe social</option>
                                @foreach ($groups as $item)
                                <option value="{{ $item->label }}">{{ $item->label }}</option>
                                @endforeach
                            </select>
                            @error('group')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Montant</label>
                            <input type="number" name="amount" id="amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('amount')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select name="amount_currency" id="amount_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('amount_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Revenu</label>
                            <input type="number" name="income" id="income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('income')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select name="income_currency" id="income_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">Dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('income_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="refund_deadline"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Délai de </label>
                            <input type="number" name="refund_deadline"
                                id="refund_deadline"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('refund_deadline')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                remboursement</label>
                            <select name="number" id="number"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la période</option>
                                <option value="month">Mois</option>
                                <option value="year">Année</option>
                            </select>
                            @error('number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Adresse</label>
                        <textarea name = "address" id="address" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="objectif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Objectif</label>
                        <textarea name = "objectif" id="objectif" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('objectif')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div class="flex gap">
                        <div style="width: 100%;">
                            <label for="business_plan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Documents</label>
                            <input name = "business_plan" accept=".pdf, .jpeg, .jpg" type="file"
                                name="business_plan" id="business_plan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('business_plan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre
                    </button>
                </form> -->
                <!-- <form wire:submit.prevent='addInvestment' enctype="multipart/form-data" class="space-y-6">
                    <div class="flex gap">
                        <div style="width: 100%">
                            <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Groupe social</label>
                            <select wire:model='group' name="" id=""
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Groupe social</option>
                                @foreach ($groups as $item)
                                <option value="{{ $item->label }}">{{ $item->label }}</option>
                                @endforeach
                            </select>
                            @error('group')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Montant</label>
                            <input wire:model='amount' type="number" name="amount" id="amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('amount')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select wire:model='amount_currency' name="amount_currency" id="amount_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('amount_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Revenu</label>
                            <input wire:model='income' type="number" name="income" id="income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('income')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Devise</label>
                            <select wire:model='income_currency' name="income_currency" id="income_currency"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la monnaie</option>
                                <option value="CHF">CHF</option>
                                <option value="€">Euro</option>
                                <option value="$">Dollar</option>
                                <option value="£">Livre Sterling</option>
                            </select>
                            @error('income_currency')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div style="width: 60%;">
                            <label for="refund_deadline"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Délai de </label>
                            <input wire:model='refund_deadline' type="number" name="refund_deadline"
                                id="refund_deadline"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('refund_deadline')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="width: 38%">
                            <label for="income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                remboursement</label>
                            <select wire:model='number' name="number" id="number"
                                class="bg-gray-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Choisissez la période</option>
                                <option value="month">Mois</option>
                                <option value="year">Année</option>
                            </select>
                            @error('number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Adresse</label>
                        <textarea wire:model='address' id="address" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="objectif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Objectif</label>
                        <textarea wire:model='objectif' id="objectif" rows="1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    @error('objectif')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div class="flex gap">
                        <div style="width: 100%;">
                            <label for="business_plan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Documents</label>
                            <input wire:model='business_plan' accept=".pdf, .jpeg, .jpg" type="file"
                                name="business_plan" id="business_plan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            @error('business_plan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre
                    </button>
                </form> -->
            <!-- </div>
        </div>
    </div>
</div> -->