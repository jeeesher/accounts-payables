<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-add-particular.window="show = true"
    x-on:close-add-particular.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg font-['Inter'] overflow-y-auto" style="height:650px;">
        <div class="pb-3 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Add Particular</div>

        <!-- Insert Another Particular Button -->
        <button type="button" class="mb-5 inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
            Insert Another Particular
        </button>

        <!-- Particulars Input Field -->
        <div class="mb-4">
            <div class="flex items-center">
                <label for="Particular1" class="block mb-2 text-sm font-medium text-black dark:text-white">Particular 1</label>
                <span class="text-red-500 p-1 pl-3">*</span>
            </div>

            <form class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Particular Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-2/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Particular Information Input Field -->
                    <input type="text" id="Particular1" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the particular here" required />
                </div>

                <!-- Particular Amount Input Field -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-4 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="Particular1" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the amount here" required />
                </div>
            </form>
        </div>

        <!-- Particulars Input Field -->
        <div class="mb-4">
            <div class="flex items-center">
                <label for="Particular2" class="block mb-2 text-sm font-medium text-black dark:text-white">Particular 2</label>
                <span class="text-red-500 p-1 pl-3">*</span>
            </div>

            <form class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Particular Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-2/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Particular Information Input Field -->
                    <input type="text" id="Particular2" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the particular here" required />
                </div>

                <!-- Particular Amount Input Field -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-4 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="Particular2" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the amount here" required />
                </div>
            </form>
        </div>

        <!-- Particulars Input Field -->
        <div class="mb-4">
            <div class="flex items-center">
                <label for="Particular1" class="block mb-2 text-sm font-medium text-black dark:text-white">Particular 3</label>
                <span class="text-red-500 p-1 pl-3">*</span>
            </div>

            <form class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Particular Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-2/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Particular Information Input Field -->
                    <input type="text" id="Particular3" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the particular here" required />
                </div>

                <!-- Particular Amount Input Field -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-4 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="Particular3" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the amount here" required />
                </div>
            </form>
        </div>

        <!-- Particulars Input Field -->
        <div class="mb-4">
            <div class="flex items-center">
                <label for="Particular1" class="block mb-2 text-sm font-medium text-black dark:text-white">Particular 4</label>
                <span class="text-red-500 p-1 pl-3">*</span>
            </div>

            <form class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Particular Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-2/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Particular Information Input Field -->
                    <input type="text" id="Particular4" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the particular here" required />
                </div>

                <!-- Particular Amount Input Field -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-4 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="Particular4" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the amount here" required />
                </div>
            </form>
        </div>

        <!-- Particulars Input Field -->
        <div class="mb-4">
            <div class="flex items-center">
                <label for="Particular1" class="block mb-2 text-sm font-medium text-black dark:text-white">Particular 5</label>
                <span class="text-red-500 p-1 pl-3">*</span>
            </div>

            <form class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Particular Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-2/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Particular Information Input Field -->
                    <input type="text" id="Particular5" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the particular here" required />
                </div>

                <!-- Particular Amount Input Field -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-4 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <input type="text" id="Particular5" class="w-full bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the amount here" required />
                </div>
            </form>
        </div>

        <!-- Particulars Footer -->
        <div class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-add-particular')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Add Button -->
            <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Add
            </button>
        </div>
    </div>
</div>