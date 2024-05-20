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

        <form action="">
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="folder_name" class="block mb-2 text-sm font-medium text-black dark:text-white">Name</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <input type="text" id="folder_name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name your folder" required />
            </div>
        </form>
        
        <!-- Create Folder Footer -->
        <div class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-create-folder')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Create Folder Button -->
            <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Create Folder
            </button>
        </div>
    </div>
</div>