<div class="container px-6 h-full justify-items-center pr-4 mt-20 ">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
            {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="w-full" alt="Phone image" /> --}}
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi neque inventore vero, officia recusandae pariatur accusantium quod dolore, tempore modi eum accusamus eveniet eius. Veritatis deleniti quasi in sed ipsa nobis cumque, obcaecati, ad esse eaque enim reiciendis nisi dignissimos commodi ut laudantium. Enim eaque recusandae nobis incidunt reprehenderit, pariatur obcaecati, nisi, iure porro labore reiciendis ratione? Reprehenderit, quaerat quibusdam?</p>
        </div>
        <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
            <h2 class="mb-10 text-3xl font-extrabold text-center text-gray-900 leading-9">
                Contactez-nous ici
            </h2>
            <form>
                <!-- Email input -->
                <div class="mb-6">
                  <label for="email">Email</label>
                    <input id="email" name="email" type="email" autofocus
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-500 focus:outline-none"
                        placeholder="Adresse email / N° téléphone" />
                   
                </div>

                <!-- Password input -->
                <div class="mb-6">
                  <label for="password">Objet</label>
                    <input id="password" type="text"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-500 focus:outline-none"
                        placeholder="Objet" />
                </div>
                <div class="mb-6">

                  <label for="password">Message</label>
                    <textarea
      class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
      id="exampleFormControlTextarea1"
      rows="3"
      placeholder="Your message"
    ></textarea>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="form-group form-check">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-500 checked:border-orange-500 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                        <label class="form-check-label inline-block tex in copyt-gray-800" for="exampleCheck2">Send me in copy
                            </label>
                    </div>
                </div>

                <!-- Submit button -->
               <div class="flex space-x-2 justify-end">
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
                <button
                  type="button"
                  data-mdb-ripple="true"
                  data-mdb-ripple-color="light"
                  class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >Soumettre</button>
              </div>
            </form>
        </div>
    </div>
</div>
