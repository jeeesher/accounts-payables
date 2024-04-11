<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Disbursement Voucher Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']"> Generate Disbursement Voucher</div>

                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Back Button -->
                    <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.9987 10H7.9987V12.6667L3.33203 8.00004L7.9987 3.33337V6.00004H11.9987V10Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back
                    </button>

                    <!-- Export Dropdown -->
                    <x-export-dropdown />

                    <!-- Save Disbursment Voucher Button -->
                    <a href="/accounting/dv/view" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.3333 14.0071V8.67375H4.66667V14.0071M4.66667 2.00708V5.34041H10M12.6667 14.0071H3.33333C2.97971 14.0071 2.64057 13.8666 2.39052 13.6166C2.14048 13.3665 2 13.0274 2 12.6737V3.34041C2 2.98679 2.14048 2.64765 2.39052 2.3976C2.64057 2.14756 2.97971 2.00708 3.33333 2.00708H10.6667L14 5.34041V12.6737C14 13.0274 13.8595 13.3665 13.6095 13.6166C13.3594 13.8666 13.0203 14.0071 12.6667 14.0071Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Save Disbursement Voucher
                    </a>
                </div>
            </div>

            <!-- Disbursement Voucher Input Field -->
            <div class="flex flex-wrap w-full mx-auto mb-2">
                <!-- No., Payee, and Address Input Field -->
                <form class="pr-4 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">No.</div>
                            <input type="text" id="dv-no" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter No." required />
                        </div>
                                
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Payee</div>
                            <input type="text" id="dv-payee" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Payee" required />
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Address</div>
                            <input type="text" id="dv-address" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Address" required />
                        </div>
                    </div>
                </form>

                <!-- Date and TIN Employee No. Input Field -->
                <form class="pr-2 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                            <input type="text" id="dv-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                        </div>
                            
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">TIN Employee No.</div>
                            <input type="text" id="dv-tin-employee" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter TIN Employee No." required />
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Responsibility Center</div>
                            <div class="relative items-center">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">Office/Unit/Project:</div>
                                <input type="text" id="dv-responsibility-office" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-40 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text" required />
                            </div>
                        </div>
                    </div>                    
                </form>

                <!-- Mode of Payment and BUR No. Input Field -->
                <form class="lg:w-1/3">
                    <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Mode of Payment</div>
                            <select id="dv-mode-payment" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Mode of Payment" required>
                                <option disabled selected>Select Mode of Payment</option> 
                                <option>Check</option>
                                <option>Cash</option>
                                <option>Others</option>
                            </select>
                        </div>
                                
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR No.</div>
                            <input type="text" id="dv-BUR" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter BUR No." required />
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-white text-sm font-medium font-['Inter'] leading-tight dark:text-black">text</div>
                            <div class="relative items-center">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">Code:</div>
                                <input type="text" id="dv-responsibility-code" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-16 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text" required />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Disbursement Voucher Table -->
            <div class="mb-10">
                <div class="flex items-center">
                    <div x-data="{ 
                        tableItems: [
                            { explanation: 'Regular text column', 'amount': 'Php 00.00' },
                            { explanation: 'Regular text column', 'amount': 'Php 00.00' },
                            { explanation: 'Regular text column', 'amount': 'Php 00.00' },
                            { explanation: 'Regular text column', 'amount': 'Php 00.00' },
                            { explanation: 'Regular text column', 'amount': 'Php 00.00' },
                        ]}" class="mx-auto w-full">
                            
                        <div class="mt-2 rounded-md overflow-x-auto font-['Inter']">
                            <table class="w-full table-auto text-sm text-left">
                                <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                    <tr>
                                        <th class="py-3 px-6">Explanation</th>
                                        <th class="py-3 px-6 ps-16">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 divide-y">
                                    <template x-for="(item, idx) in tableItems" :key="idx">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis gap-x-6" style="width: 50%;" x-text="item.explanation"></td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis ps-16" style="width: 50%;" x-text="item.amount"></td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Total Amount Field -->
                <div class="flex justify-end">
                    <div class="w-1/2 h-9 px-3 py-2 bg-white border border-gray-200 items-center gap-2 inline-flex">
                        <div class="grow shrink basis-0 h-5 items-center gap-2 flex">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight ps-2">Total:</div>
                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Php 00.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:mb-0">
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                    <!-- A Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                        <div class="flex items-center mb-2 bg-indigo-50">
                            <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">A</div>
                        </div>

                        <!-- Certified Dropdown -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Certified</div>
                            <select id="dv-a-certified-status" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Certified Status" required>
                                <option disabled selected>Select Certified Status</option> 
                                <option>Supporting Documents Complete</option>
                                <option>Supporting Documents Incomplete</option>
                                <option>Missing Documents</option>
                                <option>Others</option>
                            </select>
                        </form>

                        <!-- Signature Upload -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Signature</div>
                            <button type="button" class="w-full inline-flex items-center justify-center text-black text-sm font-medium font-['Inter'] bg-zinc-100 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                    <path stroke="currentColor" d="M14.25 10V12.6667C14.25 13.0203 14.1095 13.3594 13.8595 13.6095C13.6094 13.8595 13.2703 14 12.9167 14H3.58333C3.22971 14 2.89057 13.8595 2.64052 13.6095C2.39048 13.3594 2.25 13.0203 2.25 12.6667V10M11.5833 5.33333L8.25 2M8.25 2L4.91667 5.33333M8.25 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>    
                                Upload E-Signature
                            </button>
                        </div>

                        <!-- Printed Name Input Field -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                            <input type="text" id="dv-a-name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required />
                        </form>

                        <!-- Position Input Field -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                            <input type="text" id="dv-a-position" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required />
                        </form>

                        <!-- Date Input Field -->
                        <form class="mb-2">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                            <input type="text" id="dv-a-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                        </form>
                    </div>

                    <!-- B Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <div class="flex items-center mb-2 bg-indigo-50">
                            <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">B</div>
                        </div>

                        <!-- Approved for Dropdown -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Approved for</div>
                            <select id="dv-b-approved" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Approved for Status" required>
                                <option disabled selected>Select Approved for Status</option> 
                                <option>Approved</option>
                                <option>Not approved</option>
                            </select>
                        </form>

                        <!-- Signature Upload -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Signature</div>
                            <button type="button" class="w-full inline-flex items-center justify-center text-black text-sm font-medium font-['Inter'] bg-zinc-100 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                    <path stroke="currentColor" d="M14.25 10V12.6667C14.25 13.0203 14.1095 13.3594 13.8595 13.6095C13.6094 13.8595 13.2703 14 12.9167 14H3.58333C3.22971 14 2.89057 13.8595 2.64052 13.6095C2.39048 13.3594 2.25 13.0203 2.25 12.6667V10M11.5833 5.33333L8.25 2M8.25 2L4.91667 5.33333M8.25 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>    
                                Upload E-Signature
                            </button>
                        </div>

                        <!-- Printed Name Input Field -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                            <input type="text" id="dv-b-name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required />
                        </form>

                        <!-- Position Input Field -->
                        <form class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                            <input type="text" id="dv-b-position" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required />
                        </form>

                        <!-- Date Input Field -->
                        <form class="mb-2">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                            <input type="text" id="dv-b-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap w-full mx-auto">
                <!-- C Section -->
                <div class="w-full flex items-center mb-2 bg-indigo-50">
                    <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">C</div>
                </div>

                <div class="flex flex-wrap w-full mx-auto mb-2">
                    <!-- Check No. Input Field and Signature Button -->
                    <form class="pr-4 lg:w-1/3">
                        <div class="h-full pb-2 text-left relative">
                            <div class="mb-6">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Check No.</div>
                                <input type="text" id="dv-c-check" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Check No." required />
                            </div>

                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Signature</div>
                                <button type="button" class="w-full inline-flex items-center justify-center text-black text-sm font-medium font-['Inter'] bg-zinc-100 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path stroke="currentColor" d="M14.25 10V12.6667C14.25 13.0203 14.1095 13.3594 13.8595 13.6095C13.6094 13.8595 13.2703 14 12.9167 14H3.58333C3.22971 14 2.89057 13.8595 2.64052 13.6095C2.39048 13.3594 2.25 13.0203 2.25 12.6667V10M11.5833 5.33333L8.25 2M8.25 2L4.91667 5.33333M8.25 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    Upload E-Signature
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Check Date and Signature Date Input Field -->
                    <form class="pr-2 lg:w-1/3">
                        <div class="h-full pb-2 pl-2 rounded-lg text-left relative">
                            <div class="mb-6">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                                <input type="text" id="dv-c-check-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                            </div>
                                
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                                <input type="text" id="dv-c-signature-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                            </div>
                        </div>                    
                    </form>

                    <!-- Bank Name and Printed Name Input Field -->
                    <form class="lg:w-1/3">
                        <div class="h-full pl-4 pb-2 rounded-lg text-left relative">
                            <div class="mb-6">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Bank Name</div>
                                <input type="text" id="dv-c-bank" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Bank Name" required />
                            </div>
                                    
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                                <input type="text" id="dv-c-name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                    <!-- JEV No. Input Field -->
                    <form class="">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">JEV No.</div>
                        <input type="text" id="dv-c-jev" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter JEV No." required />
                    </form>
                </div>

                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Date Input Field -->
                    <form class="">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                        <input type="text" id="dv-c-jev-date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                    </form>
                </div>
            </div>
            <div class="font-['Inter']">
                <label for="dv-or-no" class="block mb-3 text-sm font-medium text-zinc-950 dark:text-white">OR No./Other Documents</label>
                <textarea id="dv-or-no" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter OR No./Other Documents here..." required></textarea>
            </div>
        </div>
    </div>
</div>