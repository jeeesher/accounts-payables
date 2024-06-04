<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Folders Header -->
            <div class="mt-4 flex items-center justify-between mb-4">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Folders </div>

                <!-- Button Group -->
                <div class="flex gap-1 space">
                    <!-- Add Folder Button -->
                    <div 
                        x-data = "{ show: false}" 
                        x-show = "show"
                        x-on:open-create-folder.window="show = true"
                        x-on:close-create-folder.window="show = false"
                        style="display: none;"
                        
                        class="fixed z-50 inset-0"
                        >

                        <!-- Background -->
                        <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

                        <!-- Modal Content -->
                        <div class="fixed inset-0 bg-white rounded-md p-6 m-auto h-60 w-auto max-w-lg font-['Inter'] overflow-y-auto">
                            <div class="pb-3 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Create Folder</div>

                            <form method="POST" action="{{ route('add.folder') }}">
                                @csrf
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="folder_name" class="block mb-2 text-sm font-medium text-black dark:text-white">Name</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input type="text" id="folder_name" name="folder_name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name your folder, e.g. 2023-2024" required />
                                    @error('folder_name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            
                                <!-- Create Folder Footer -->
                                <div class="flex justify-between pt-4">
                                    <!-- Cancel Button -->
                                    <button x-on:click="$dispatch('close-create-folder')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                        Cancel
                                    </button>

                                    <!-- Create Folder Button -->
                                    <button type="submit" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                        Create Folder
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button x-data x-on:click="$dispatch('open-create-folder')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.50016H12.6654M7.9987 3.8335V13.1668" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Add Folder
                    </button>
                </div>
            </div>

            @php
                $ap_folders = DB::table('ap_folders')->get();
            @endphp

            <!-- Folder Containers -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($ap_folders as $folder)
                    <a href="{{ url('/folders/yearly', ['folder_name' => $folder->folder_name]) }}" class="flex flex-col items-start justify-center bg-white border border-gray-200 rounded h-14 text-[#6B6C7E] hover:text-blue-800 active:text-cyan-700 rounded-md hover:shadow">
                        <div class="inline-flex items-center justify-start gap-4 p-4">
                            <div class="relative w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path stroke="currentColor" fill="currentColor" d="M17.4961 5H13.7461L9.41406 1.75C8.98047 1.42578 8.45312 1.25 7.91406 1.25H2.49609C1.11719 1.25 -0.00390625 2.37109 -0.00390625 3.75V16.25C-0.00390625 17.6289 1.11719 18.75 2.49609 18.75H17.4961C18.875 18.75 19.9961 17.6289 19.9961 16.25V7.5C19.9961 6.12109 18.875 5 17.4961 5Z" fill="#6B6C7E"/>
                                </svg>
                            </div>
                            <div class="mt-1 inline-flex items-left grow shrink basis-0 text-sm font-semibold font-['Inter'] leading-[21px]">{{ $folder->folder_name }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>