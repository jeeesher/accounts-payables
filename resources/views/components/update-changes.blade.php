<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-update-changes.window="show = true"
    x-on:close-update-changes.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto h-48 max-w-md font-['Inter'] overflow-y-auto">
        <div class="pb-4 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Are you sure you want to update changes?</div>

        <div class="pb-2 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">This action cannot be undone. This will permanently edit the payable track and replace the data in our records.</div>

        <!-- Update Changes Footer -->
        <div class="flex justify-end pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-update-changes')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Update Changes Button -->
            <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Yes, Update Changes
            </button>
        </div>
    </div>
</div>