<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-edit-track.window="show = true"
    x-on:close-edit-track.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg font-['Inter'] overflow-y-auto" style="height:510px;">
        <div class="pb-5 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Edit Track</div>

        <!-- Edit Track Input Field -->
        <form>
            <!-- Current Status Input Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="current_status" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Status</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <input type="text" id="current_status" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Update Status" required />
            </div>

            <!-- Current Location Dropdown Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="location" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Location</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <select id="location" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Update Location" required>
                    <option>Accounting</option>
                    <option>Treasurer</option>
                    <option>Budgeting</option>
                    <option>Procurement</option>
                    <option>OVPF</option>
                </select>
            </div>
            
            <!-- Date Dropdown Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="date" class="block mb-2 text-sm font-medium text-black dark:text-white">Date</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <input type="text" id="date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Update Date" required />
            </div>

            <!-- Time Dropdown Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="time" class="block mb-2 text-sm font-medium text-black dark:text-white">Time</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <input type="text" id="time" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Update Time" required />
            </div>
        </form>

        <!-- Edit Track Footer -->
        <div class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-edit-track')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Update Button -->
            <x-update-changes />
            <button x-data x-on:click="$dispatch('open-update-changes')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Update
            </button>
        </div>
    </div>
</div>