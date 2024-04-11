<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Edit Payables Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Edit Payable</div>

                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Delete Button -->
                    <x-delete-payable />
                    <button x-data x-on:click="$dispatch('open-delete-payable')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M2 4.00004H14M12.6667 4.00004V13.3334C12.6667 14 12 14.6667 11.3333 14.6667H4.66667C4 14.6667 3.33333 14 3.33333 13.3334V4.00004M5.33333 4.00004V2.66671C5.33333 2.00004 6 1.33337 6.66667 1.33337H9.33333C10 1.33337 10.6667 2.00004 10.6667 2.66671V4.00004M6.66667 7.33337V11.3334M9.33333 7.33337V11.3334" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </button>

                    <!-- Export Dropdown -->
                    <x-export-dropdown />

                    <!-- Cancel Edit Button -->
                    <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M10 6.00708L6 10.0071M6 6.00708L10 10.0071M3.33333 2.00708H12.6667C13.403 2.00708 14 2.60403 14 3.34041V12.6737C14 13.4101 13.403 14.0071 12.6667 14.0071H3.33333C2.59695 14.0071 2 13.4101 2 12.6737V3.34041C2 2.60403 2.59695 2.00708 3.33333 2.00708Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Cancel Edit
                    </button>
                        
                    <!-- Save Edit Button -->
                    <x-save-changes />
                    <button x-data x-on:click="$dispatch('open-save-changes')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] shadow bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.3333 14.0071V8.67375H4.66667V14.0071M4.66667 2.00708V5.34041H10M12.6667 14.0071H3.33333C2.97971 14.0071 2.64057 13.8666 2.39052 13.6166C2.14048 13.3665 2 13.0274 2 12.6737V3.34041C2 2.98679 2.14048 2.64765 2.39052 2.3976C2.64057 2.14756 2.97971 2.00708 3.33333 2.00708H10.6667L14 5.34041V12.6737C14 13.0274 13.8595 13.3665 13.6095 13.6166C13.3594 13.8666 13.0203 14.0071 12.6667 14.0071Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Save Edit
                    </button>
                </div>
            </div>

            <div class="max-w-10xl mx-auto space-y-6 flex">
                <!-- Edit Payables Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Payable Information Input Field -->
                    <div>
                        <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Information</div>

                        <form class="mx-auto mt-5 font-['Inter']">
                            <!-- BUR Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="BUR" class="block mb-2 text-sm font-medium text-black dark:text-white">BUR Number</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="BUR" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter BUR Number" required />
                            </div>

                            <!-- End-user Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="end_user" class="block mb-2 text-sm font-medium text-black dark:text-white">End-user</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="end_user" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter End-user" required />
                            </div>
                            
                            <!-- Total Amount Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="total_amount" class="block mb-2 text-sm font-medium text-black dark:text-white">Total Amount</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="total_amount" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Php 0.00 " required />
                            </div>

                            <!-- Current Location Dropdown Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="location" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Location</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <select id="location" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option disabled selected>Select Location</option>    
                                    <option>Accounting</option>
                                    <option>Treasurer</option>
                                    <option>Budgeting</option>
                                    <option>Procurement</option>
                                    <option>OVPF</option>
                                </select>
                            </div>

                            <!-- Terms of Payment Input Field -->    
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="remarks" class="block mb-2 text-sm font-medium text-black dark:text-white">Terms of Payment</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="remarks" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Terms of Payment" required />
                            </div>
                            
                            <!-- Remarks Input Field -->    
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="remarks" class="block mb-2 text-sm font-medium text-black dark:text-white">Remarks</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="remarks" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Remarks" required />
                            </div>
                        </form>
                    </div>

                    <!-- Supplier Information Input Field -->
                    <div class="pt-5">
                        <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Supplier Information</div>

                        <form class="mx-auto mt-5 font-['Inter']">
                            <!-- Supplier Name Dropdown Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="suplier_name" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Name</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <select id="suplier_name" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Supplier" required>
                                    <option disabled selected>Select Supplier</option> 
                                    <option>Supplier 1</option>
                                    <option>Supplier 2</option>
                                    <option>Supplier 3</option>
                                    <option>Supplier 4</option>
                                    <option>Supplier 5</option>
                                </select>
                            </div>

                            <!-- Supplier Address Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="supplier_add" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Address</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <div class="w-full px-3 py-2 bg-white rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-gray-400 text-sm font-normal font-['Inter'] leading-tight">Autofill Text</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Supplier Contact Number Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="supplier_contact" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Contact Number</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <div class="w-full px-3 py-2 bg-white rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-gray-400 text-sm font-normal font-['Inter'] leading-tight">Autofill Text</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Particular Table -->
                    <div class="mb-5">
                        <div class="flex items-center mb-3">
                            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Particular</div>
                            <x-edit-particular />
                            <button x-data x-on:click="$dispatch('open-edit-particular')" type="button" class="ml-4 text-[#2563EB] hover:text-blue-800 active:text-cyan-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div x-data="{ 
                            tableItems: [
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                            ]}" class="mx-auto w-full">
                            
                            <div class="mt-6 rounded-md overflow-x-auto font-['Inter']">
                                <table class="w-full table-auto text-sm text-left">
                                    <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                        <tr>
                                            <th class="py-3 px-6">Particular</th>
                                            <th class="py-3 px-6">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 divide-y">
                                        <template x-for="(item, idx) in tableItems" :key="idx">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis font-semibold gap-x-6" style="width: 60%;">
                                                    <span x-text="idx + 1"></span>
                                                    <span x-text="item.particular"></span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 40%;" x-text="item.amount"></td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Payable Preview Section -->
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-5">
                            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Preview</div>
                            
                            <!-- Upload New Copy of Payable Button-->
                            <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Upload New Copy of Payable
                            </button>
                        </div>
                        <div class="border shadow h-96">
                            <!-- file preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
