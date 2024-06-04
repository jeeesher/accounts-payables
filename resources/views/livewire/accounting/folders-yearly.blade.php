<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Folders Yearly Header -->
            <div class="mt-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Folders: {{ $folder_name }}</div>

                <!-- Button Group -->
                <div class="flex gap-1 space">
                    <!-- Back Button -->
                    <a href="/folders/main" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path stroke="currentColor" d="M15.0013 12.7503H10.0013V16.0837L4.16797 10.2503L10.0013 4.41699V7.75033H15.0013V12.7503Z" stroke="#18181B" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back
                    </a>
                        
                    <!-- Delete Button -->
                    <x-delete-folder />
                    <button x-data x-on:click="$dispatch('open-delete-folder')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path stroke="currentColor" d="M13.3294 5.50033V4.83366C13.3294 3.90024 13.3294 3.43353 13.1478 3.07701C12.988 2.7634 12.733 2.50844 12.4194 2.34865C12.0629 2.16699 11.5962 2.16699 10.6628 2.16699H9.32943C8.39601 2.16699 7.9293 2.16699 7.57278 2.34865C7.25917 2.50844 7.00421 2.7634 6.84442 3.07701C6.66276 3.43353 6.66276 3.90024 6.66276 4.83366V5.50033M8.32943 10.0837V14.2503M11.6628 10.0837V14.2503M2.49609 5.50033H17.4961M15.8294 5.50033V14.8337C15.8294 16.2338 15.8294 16.9339 15.5569 17.4686C15.3173 17.939 14.9348 18.3215 14.4644 18.5612C13.9296 18.8337 13.2296 18.8337 11.8294 18.8337H8.16276C6.76263 18.8337 6.06256 18.8337 5.52778 18.5612C5.05738 18.3215 4.67493 17.939 4.43524 17.4686C4.16276 16.9339 4.16276 16.2338 4.16276 14.8337V5.50033" stroke="#344054" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </button>
                </div>
            </div>

            <div class="w-full bg-white dark:bg-gray-800 sm:rounded-lg md:mb-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php
                        $ap_files = DB::table('ap_files')
                        //->where('created_at', '2024' )
                        ->get();
                    @endphp

                    @foreach($ap_files as $files)                        
                        <div class="mt-4 inline-flex items-center justify-start w-full gap-2 px-3 py-6 bg-white border border-gray-200 rounded-md shadow h-9">
                            <div class="flex items-center justify-start h-5 gap-2 grow shrink basis-0">
                                <div class="ml-2 grow shrink basis-0 text-950 text-sm font-medium font-['Inter'] leading-tight">{{ $files->BUR }}</div>
                            </div>
                            <!-- Dropdown -->
                            <x-folders-action-yearly />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
