<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-edit-particular.window="show = true"
    x-on:close-edit-particular.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg h-96 max-h-96 font-['Inter'] overflow-y-auto">
        <div class="pb-3 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Edit Particular</div>

        <!-- Insert Another Particular Button -->
        <button type="button" class="mb-5 inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
            Insert Another Particular
        </button>

        <div>                
            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Particular 1</div>

            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                    <input type="text" id="particular1" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Particular" required />
                </div>

                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="particular1-amount" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount" required />
                </div>
            </div>
        </div>

        <!-- Edit Particular Footer -->
        <footer class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-edit-particular')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Add Button -->
            <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Save
            </button>
        </footer>
    </div>
</div>