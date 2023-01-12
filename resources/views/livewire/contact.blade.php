@section('title', 'Contact')

<div class="flex flex-col min-h-screen py-12 sm:px-6 lg:px-48">
    <div class="w-full lg:flex">
        <div class="p-16 bg-blue-700 rounded-tl rounded-tr xl:w-2/5 lg:w-2/5 xl:rounded-bl xl:rounded-tr-none"
            style="width:40% !important">
            <div class="p-8 mx-auto xl:w-5/6 xl:px-0">
                <h1 class="pb-4 text-3xl font-bold text-white xl:text-4xl">Get in touch</h1>
                <p class="pb-8 text-xl font-normal leading-relaxed text-white lg:pr-4">Got a question about us? Are you
                    interested in partnering with us? Have some suggestions or just want to say Hi? Just contact us. We
                    are
                    here to asset you.</p>
                <div class="flex items-center pb-4 mt-10">
                    <div aria-label="phone icon" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg1.svg" alt="phone" />

                    </div>
                    <p class="pl-4 text-base text-white"><a target="_blank"
                            href="whatsapp://send?phone=+22951413616">+229 51413616</a> </p>
                </div>
                <div class="flex items-center mt-10">
                    <div aria-label="email icon" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg2.svg" alt="email" />

                    </div>
                    <p class="pl-4 text-base text-white"><a href="Mailto:contact@btrading-company.com" target="_blank"
                            rel="noopener noreferrer">contact@btrading-company.com</a></p>
                </div>
                <p class="mt-10 text-lg tracking-wide text-white">
                    545, Street 11, Block F
                    <br />
                    Dean Boulevard, Ohio
                </p>
            </div>
        </div>
        <div class="h-full pt-5 pb-5 rounded-tr rounded-br xl:w-3/5 lg:w-3/5 dark:bg-gray-600 xl:pr-5 xl:pl-0"
            style="width:60% !important">
            <form wire:submit.prevent="send" id="contact"
                class="px-8 py-4 bg-white rounded-tr rounded-br dark:bg-gray-800">
                <h1 class="mb-6 text-4xl font-extrabold text-gray-800 dark:text-white">Enter Details</h1>
                <div class="flex-wrap justify-between w-full mb-6">
                    <div class="w-2/4 max-w-xs mb-6 xl:mb-0">
                        <div class="flex flex-col">
                            <label for="full_name"
                                class="mb-2 text-sm font-semibold leading-tight tracking-normal text-gray-800 dark:text-white">Full
                                Name</label>
                            <input id="full_name" name="full_name" type="text" wire:model='name'
                                class="flex items-center w-64 h-10 pl-3 text-sm font-normal border border-gray-300 rounded dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700"
                                placeholder="Full Name" aria-label="enter your full name input" />
                        </div>
                        @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-2/4 max-w-xs xl:flex xl:justify-end">
                        <div class="flex flex-col">
                            <label for="email"
                                class="mb-2 text-sm font-semibold leading-tight tracking-normal text-gray-800 dark:text-white">Email</label>
                            <input id="email" name="email" type="email" wire:model='email'
                                class="flex items-center w-64 h-10 pl-3 text-sm font-normal border border-gray-300 rounded dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700"
                                placeholder="example@email.com" aria-label="enter your email input" />
                        </div>
                        @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap w-full">
                    <div class="w-2/4 max-w-xs">
                        <div class="flex flex-col">
                            <label for="phone"
                                class="mb-2 text-sm font-semibold leading-tight tracking-normal text-gray-800 dark:text-white">Phone</label>
                            <input wire:model='phone' name="phone" type="tel"
                                class="flex items-center w-64 h-10 pl-3 text-sm font-normal border border-gray-300 rounded dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:outline-none focus:border focus:border-indigo-700"
                                placeholder="+92-12-3456789" aria-label="enter your phone number input" />
                        </div>
                        @error('phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm font-semibold text-gray-800 dark:text-white"
                            for="message">Message</label>
                        <textarea placeholder="" name="message" wire:model='content'
                            class="px-3 py-2 mb-4 text-sm border border-gray-300 rounded outline-none resize-none dark:bg-gray-900 dark:text-white dark:border-gray-700 focus:border focus:border-indigo-700"
                            rows="8" id="message" aria-label="enter your message input"></textarea>
                    </div>
                    @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <button type="submit" wire:submit='send'
                        class="px-8 py-3 text-sm leading-6 text-white transition duration-150 ease-in-out bg-blue-700 rounded focus:outline-none hover:bg-indigo-600 focus:border-4 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

