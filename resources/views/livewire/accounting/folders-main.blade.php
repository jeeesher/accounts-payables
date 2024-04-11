<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Folders Header -->
            <div class="mt-4 flex items-center justify-between mb-4">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Folders </div>

                <!-- Button Group -->
                <div class="flex gap-1 space">
                    <!-- Delete Button -->
                    <x-delete-folder />
                    <button x-data x-on:click="$dispatch('open-delete-folder')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path stroke="currentColor" d="M13.3294 5.50033V4.83366C13.3294 3.90024 13.3294 3.43353 13.1478 3.07701C12.988 2.7634 12.733 2.50844 12.4194 2.34865C12.0629 2.16699 11.5962 2.16699 10.6628 2.16699H9.32943C8.39601 2.16699 7.9293 2.16699 7.57278 2.34865C7.25917 2.50844 7.00421 2.7634 6.84442 3.07701C6.66276 3.43353 6.66276 3.90024 6.66276 4.83366V5.50033M8.32943 10.0837V14.2503M11.6628 10.0837V14.2503M2.49609 5.50033H17.4961M15.8294 5.50033V14.8337C15.8294 16.2338 15.8294 16.9339 15.5569 17.4686C15.3173 17.939 14.9348 18.3215 14.4644 18.5612C13.9296 18.8337 13.2296 18.8337 11.8294 18.8337H8.16276C6.76263 18.8337 6.06256 18.8337 5.52778 18.5612C5.05738 18.3215 4.67493 17.939 4.43524 17.4686C4.16276 16.9339 4.16276 16.2338 4.16276 14.8337V5.50033" stroke="#344054" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </button>

                    <!-- Export Button -->
                    <x-export-dropdown />
                        
                    <!-- Add Folder Button -->
                    <x-create-folder />
                    <button x-data x-on:click="$dispatch('open-create-folder')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.50016H12.6654M7.9987 3.8335V13.1668" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Add Folder
                    </button>
                </div>
            </div>

            <!-- Folder / 2023-2024 -->
            <div class="inline-flex items-start justify-start gap-3">
                <div class="grow shrink basis-0 self-stretch flex-col justify-start items-center gap-2.5 inline-flex">
                    <button class="flex flex-col items-start self-stretch justify-center bg-white border border-gray-200 rounded h-14 text-[#6B6C7E] hover:text-blue-800 active:text-cyan-700 rounded-md hover:shadow">
                        <div class="inline-flex items-center self-stretch justify-start gap-4 p-4">
                            <div class="relative w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path stroke="currentColor" fill="currentColor" d="M17.4961 5H13.7461L9.41406 1.75C8.98047 1.42578 8.45312 1.25 7.91406 1.25H2.49609C1.11719 1.25 -0.00390625 2.37109 -0.00390625 3.75V16.25C-0.00390625 17.6289 1.11719 18.75 2.49609 18.75H17.4961C18.875 18.75 19.9961 17.6289 19.9961 16.25V7.5C19.9961 6.12109 18.875 5 17.4961 5Z" fill="#6B6C7E"/>
                                </svg>
                            </div>
                            <a href="/folders/yearly" class="mt-1 inline-flex items-left grow shrink basis-0 text-sm font-semibold font-['Inter'] leading-[21px]">2023-2024</a>
                        </div>
                            <div class="w-60 h-[0px] relative"></div>
                    </button>
                </div>  
                        
                <!-- Folder / 2021-2022 -->
                <div class="w-60 flex-col justify-start items-start gap-2.5 inline-flex">
                    <button class="flex flex-col items-start self-stretch justify-center bg-white border border-gray-200 rounded h-14 text-[#6B6C7E] hover:text-blue-800 active:text-cyan-700 rounded-md hover:shadow">
                        <div class="inline-flex items-center self-stretch justify-start gap-4 p-4">
                            <div class="relative w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path stroke="currentColor" fill="currentColor" d="M17.4961 5H13.7461L9.41406 1.75C8.98047 1.42578 8.45312 1.25 7.91406 1.25H2.49609C1.11719 1.25 -0.00390625 2.37109 -0.00390625 3.75V16.25C-0.00390625 17.6289 1.11719 18.75 2.49609 18.75H17.4961C18.875 18.75 19.9961 17.6289 19.9961 16.25V7.5C19.9961 6.12109 18.875 5 17.4961 5Z" fill="#6B6C7E"/>
                                </svg>
                            </div>
                            <a href="/folders/yearly" class="mt-1 inline-flex items-left grow shrink basis-0 text-sm font-semibold font-['Inter'] leading-[21px]">2021-2022</a>
                        </div>
                            <div class="w-60 h-[0px] relative"></div>
                    </button>
                </div>

                <!-- Folder / 2019-2020 -->
                <div class="w-60 flex-col justify-start items-start gap-2.5 i  nline-flex">
                    <button class="flex flex-col items-start self-stretch justify-center bg-white border border-gray-200 rounded h-14 text-[#6B6C7E] hover:text-blue-800 active:text-cyan-700 rounded-md hover:shadow">
                        <div class="inline-flex items-center self-stretch justify-start gap-4 p-4">
                            <div class="relative w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path stroke="currentColor" fill="currentColor" d="M17.4961 5H13.7461L9.41406 1.75C8.98047 1.42578 8.45312 1.25 7.91406 1.25H2.49609C1.11719 1.25 -0.00390625 2.37109 -0.00390625 3.75V16.25C-0.00390625 17.6289 1.11719 18.75 2.49609 18.75H17.4961C18.875 18.75 19.9961 17.6289 19.9961 16.25V7.5C19.9961 6.12109 18.875 5 17.4961 5Z" fill="#6B6C7E"/>
                                </svg>
                            </div>
                            <a href="/folders/yearly" class="mt-1 inline-flex items-left grow shrink basis-0 text-sm font-semibold font-['Inter'] leading-[21px]">2019-2020</a>
                        </div>
                            <div class="w-60 h-[0px] relative"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>