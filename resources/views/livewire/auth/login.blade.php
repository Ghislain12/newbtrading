{{-- @section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Sign in to your account
        </h2>
        @if (Route::has('register'))
        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('register') }}"
                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                create a new account
            </a>
        </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') text-red-900 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') text-red-900 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                            class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div> --}}

@section('title', 'Connexion')

{{-- <div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Sign in to your account
        </h2>
        @if (Route::has('register'))
        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('register') }}"
                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                create a new account
            </a>
        </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') text-red-900 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') text-red-900 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                            class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<div class="container px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
            {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="w-full" alt="Phone image" /> --}}
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="w-full"
                viewBox="0 0 793 551.73152" xmlns:xlink="http://www.w3.org/1999/xlink">
                <ellipse cx="158" cy="539.73152" rx="158" ry="12" fill="#e6e6e6" />
                <path
                    d="M324.27227,296.55377c27.49676-11.6953,61.74442-4.28528,95.19092.85757.31124-6.228,4.08385-13.80782.132-18.15284-4.80115-5.2788-4.35917-10.82529-1.47008-16.40375,7.38788-14.265-3.1969-29.44375-13.88428-42.0647a23.66937,23.66937,0,0,0-19.75537-8.29179l-19.7975,1.41411A23.70939,23.70939,0,0,0,343.635,230.85851v0c-4.72724,6.42917-7.25736,12.84055-5.66438,19.21854-7.08065,4.83882-8.27029,10.67977-5.08851,17.2644,2.698,4.14592,2.66928,8.18161-.12275,12.1056a55.89079,55.89079,0,0,0-8.31011,16.5061Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M977.70889,651.09727H417.29111A18.79111,18.79111,0,0,1,398.5,632.30616h0q304.727-35.41512,598,0h0A18.79111,18.79111,0,0,1,977.70889,651.09727Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M996.5,633.41151l-598-1.10536,69.30611-116.61553.3316-.55268V258.13057a23.7522,23.7522,0,0,1,23.75418-23.75418H899.792a23.7522,23.7522,0,0,1,23.75418,23.75418V516.90649Z"
                    transform="translate(-203.5 -174.13424)" fill="#3f3d56" />
                <path
                    d="M491.35028,250.95679a7.74623,7.74623,0,0,0-7.73753,7.73753V493.03073a7.74657,7.74657,0,0,0,7.73753,7.73752H903.64972a7.74691,7.74691,0,0,0,7.73753-7.73752V258.69432a7.74657,7.74657,0,0,0-7.73753-7.73753Z"
                    transform="translate(-203.5 -174.13424)" fill="#fff" />
                <path
                    d="M493.07794,531.71835a3.32522,3.32522,0,0,0-3.01275,1.93006l-21.35537,46.42514a3.31594,3.31594,0,0,0,3.01221,4.7021H920.81411a3.3157,3.3157,0,0,0,2.96526-4.79925L900.5668,533.55126a3.29926,3.29926,0,0,0-2.96526-1.83291Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <circle cx="492.34196" cy="67.97967" r="4.97412" fill="#fff" />
                <path
                    d="M651.69986,593.61853a3.32114,3.32114,0,0,0-3.20165,2.4536l-5.35679,19.89649a3.31576,3.31576,0,0,0,3.20166,4.17856h101.874a3.31531,3.31531,0,0,0,3.13257-4.40093l-6.88691-19.89649a3.31784,3.31784,0,0,0-3.13366-2.23123Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <polygon
                    points="720.046 337.135 720.046 341.556 264.306 341.556 264.649 341.004 264.649 337.135 720.046 337.135"
                    fill="#2f2e41" />
                <circle cx="707.33457" cy="77.37523" r="77.37523" fill="#ff6347" />
                <path
                    d="M942.89,285.223H878.77911a4.42582,4.42582,0,0,1-4.42144-4.42145V242.11391a4.42616,4.42616,0,0,1,4.42144-4.42144H942.89a4.42616,4.42616,0,0,1,4.42144,4.42144v38.68761A4.42582,4.42582,0,0,1,942.89,285.223Zm-64.11091-43.10906v38.68761h64.11415L942.89,242.11391Z"
                    transform="translate(-203.5 -174.13424)" fill="#fff" />
                <path
                    d="M930.73105,242.11391h-39.793V224.42814c0-12.80987,8.36792-22.10721,19.89649-22.10721s19.89648,9.29734,19.89648,22.10721Zm-35.37153-4.42144h30.95009V224.42814c0-10.413-6.36338-17.68576-15.475-17.68576s-15.47505,7.27281-15.47505,17.68576Z"
                    transform="translate(-203.5 -174.13424)" fill="#fff" />
                <circle cx="707.33457" cy="86.21811" r="4.42144" fill="#fff" />
                <path
                    d="M856.81994,421.28372H538.18006a5.90767,5.90767,0,0,1-5.90073-5.90073V336.342a5.90767,5.90767,0,0,1,5.90073-5.90072H856.81994a5.90767,5.90767,0,0,1,5.90073,5.90072V415.383A5.90767,5.90767,0,0,1,856.81994,421.28372Zm-318.63988-88.4821a3.5443,3.5443,0,0,0-3.54043,3.54043V415.383a3.54431,3.54431,0,0,0,3.54043,3.54044H856.81994a3.54431,3.54431,0,0,0,3.54043-3.54044V336.342a3.5443,3.5443,0,0,0-3.54043-3.54043Z"
                    transform="translate(-203.5 -174.13424)" fill="#e6e6e6" />
                <circle cx="384.19021" cy="198.69546" r="24.03645" fill="#e6e6e6" />
                <path d="M643.203,356.80541a4.00608,4.00608,0,1,0,0,8.01215H832.06074a4.00607,4.00607,0,0,0,0-8.01215Z"
                    transform="translate(-203.5 -174.13424)" fill="#e6e6e6" />
                <path d="M643.203,380.84186a4.00607,4.00607,0,1,0,0,8.01214H724.469a4.00607,4.00607,0,1,0,0-8.01214Z"
                    transform="translate(-203.5 -174.13424)" fill="#e6e6e6" />
                <path
                    d="M467.022,382.46241,408.1189,413.778l-.74561-26.09629c19.22553-3.20948,37.51669-8.7974,54.42941-17.8946l6.1605-15.22008a10.31753,10.31753,0,0,1,17.53643-2.67788l0,0a10.31753,10.31753,0,0,1-.90847,14.06885Z"
                    transform="translate(-203.5 -174.13424)" fill="#ffb8b8" />
                <path
                    d="M323.09819,563.26707v0a11.57378,11.57378,0,0,1,1.46928-9.36311l12.93931-19.85777a22.61221,22.61221,0,0,1,29.335-7.73927h0c-5.438,9.25647-4.67994,17.37679,1.87806,24.43365a117.63085,117.63085,0,0,0-27.93606,19.04492A11.57386,11.57386,0,0,1,323.09819,563.26707Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M469.70475,537.30274l0,0a22.20314,22.20314,0,0,1-18.87085,10.77909l-85.96027.65122-3.728-21.62264,38.026-11.18413-32.06116-24.60507L402.154,450.31277l63.65,59.32431A22.20317,22.20317,0,0,1,469.70475,537.30274Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M351.45266,685.17939H331.32124c-18.07509-123.89772-36.47383-248.14186,17.8946-294.51529l64.12231,10.43852L405.13646,455.532l-35.7892,41.00845Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M369.14917,713.24594h0a11.57381,11.57381,0,0,1-9.3632-1.46873l-21.85854-2.93814a22.61221,22.61221,0,0,1-7.741-29.33451v0c9.2568,5.43749,17.37707,4.67891,24.43354-1.8795,4.98593,10.06738,13.20093,9.45331,21.04657,17.93494A11.57385,11.57385,0,0,1,369.14917,713.24594Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
                <path
                    d="M399.1716,307.90158l-37.28042-8.94731c6.19168-12.6739,6.70155-26.77618,3.728-41.75406l25.35068-.74561C391.76421,275.08,394.16732,292.48081,399.1716,307.90158Z"
                    transform="translate(-203.5 -174.13424)" fill="#ffb8b8" />
                <path
                    d="M409.41752,423.55243c-27.13873,18.49308-46.31418.63272-60.94729-26.92346,2.03338-16.86188-1.259-37.04061-7.35672-58.96635a40.13762,40.13762,0,0,1,24.50567-48.40124h0l32.06116,13.421c27.22362,22.19038,32.582,46.227,22.36825,71.5784Z"
                    transform="translate(-203.5 -174.13424)" fill="#ff6347" />
                <path
                    d="M331.32124,326.54178,301.4969,342.19956l52.9382,31.31555,7.366,18.16951a9.63673,9.63673,0,0,1-5.78925,12.73088h0a9.63673,9.63673,0,0,1-12.76159-8.54442l-.74489-12.66307-67.2838-22.20366a15.73306,15.73306,0,0,1-9.87265-9.61147v0a15.733,15.733,0,0,1,5.90262-18.30258l54.10485-37.11845Z"
                    transform="translate(-203.5 -174.13424)" fill="#ffb8b8" />
                <path
                    d="M361.14557,329.52422c-12.43861-5.4511-23.74934.47044-38.026,5.21926l-2.23683-39.51725c14.17612-7.55568,27.69209-9.59281,40.26285-3.728Z"
                    transform="translate(-203.5 -174.13424)" fill="#ff6347" />
                <circle cx="172.52496" cy="78.09251" r="23.80211" fill="#ffb8b8" />
                <path d="M404.5,249.22353c-23.56616,2.30811-41.52338-1.54606-53-12.52007v-8.8377h51Z"
                    transform="translate(-203.5 -174.13424)" fill="#2f2e41" />
            </svg>
        </div>
        <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
            <h2 class="mb-10 text-3xl font-extrabold text-center text-gray-900 leading-9">
                Connectez-vous à votre compte
            </h2>
            <form wire:submit.prevent="authenticate">
                <!-- Email input -->
                <div class="mb-6">
                    <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Adresse email" />
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="mb-6">
                    <input wire:model.lazy="password" id="password" type="password" required
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Mot de passe" />
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="form-group form-check">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember
                            me</label>
                    </div>
                    <a href="{{ route('password.request') }}"
                        class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out">Mot
                        de passe oublié ?</a>
                </div>

                <!-- Submit button -->
                <button type="submit"
                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    Connexion
                </button>

                <div
                    class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                    <p class="text-center font-semibold mx-4 mb-0">OR</p>
                </div>

                <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                    style="background-color: #3b5998" href="#!" role="button" data-mdb-ripple="true"
                    data-mdb-ripple-color="light">
                    <!-- Facebook -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3.5 h-3.5 mr-2">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                    </svg>Continue avec Facebook
                </a>
                <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center"
                    style="background-color: #55acee" href="#!" role="button" data-mdb-ripple="true"
                    data-mdb-ripple-color="light">
                    <!-- Twitter -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 mr-2">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                    </svg>Continue avec Twitter
                </a>
            </form>
        </div>
    </div>
</div>



{{-- ff6347 --}}