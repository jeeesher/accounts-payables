<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-add-track.window="show = true"
    x-on:close-add-track.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <form enctype="multipart/form-data" action="{{ route('add.track', ['id' => $payable -> BUR]) }}" method="POST" class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg font-['Inter'] overflow-y-auto" style="height:330px;">
        @csrf
        <div class="pb-5 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Add Tracking Log</div>

        <!-- Add Track Input Field -->
        <div>
            <!-- Current Status Input Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="CurrentStatus" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Status</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <select id="CurrentStatus" name="CurrentStatus" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option disabled selected>Select Status</option>    
                    <option value="Payable is closed / complete">Payable is closed / complete</option>
                    <option value="Payable waiting for signatories">Payable waiting for signatories</option>
                    <option value="Payable is missing a file/s">Payable is missing a file/s</option>
                    <option value="Payable is awaiting for cheque release">Payable is awaiting for cheque release</option>
                </select>
            </div>

            <!-- Current Location Dropdown Field -->
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="CurrentLocation" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Location</label>
                    <span class="text-red-500 p-1 pl-3">*</span>
                </div>
                <select id="CurrentLocation" name="CurrentLocation" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option disabled selected>Select Location</option>    
                    <option value="Accounting">Accounting</option>
                    <option value="Treasurer">Treasurer</option>
                    <option value="Budgeting">Budgeting</option>
                    <option value="Property">Property</option>
                    <option value="OVPF">OVPF</option>
                </select>
            </div>
        </div>

        <!-- Add Track Footer -->
        <div class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-add-track')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Cancel
            </button>

            <!-- Add Button -->
            <x-add-confirm />
            <button onclick="return confirmAddTrack()" type="submit" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Add
            </button>
        </div>
    </form>
</div>