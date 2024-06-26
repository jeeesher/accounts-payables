<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Back Button -->
            <button type="button" class=" mt-1 mb-1 flex items-center justify-between font-medium text-xs text-indigo-800 dark:text-gray-200 leading-right flex font-['Inter'] hover:text-black active:text-cyan-700">
                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                    <path stroke="currentColor" d="M7.9987 12.698L3.33203 8.03129M3.33203 8.03129L7.9987 3.36462M3.33203 8.03129H12.6654" stroke="#2D349A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Back
            </button>

            <!-- View Payable Header -->
            <div class="mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">View Payable</div>
                
                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Export Dropdown -->
                    <x-export-dropdown />
                    
                    <!-- Payable Tracking Button -->
                    <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M10.6667 1.33337V4.66671H14M4.66667 5.33337V11.2C4.66667 11.4 4.8 11.6 4.93333 11.7334C5.06667 11.8667 5.26667 12 5.46667 12H10M2 8.00004V13.8667C2 14.0667 2.13333 14.2667 2.26667 14.4C2.4 14.5334 2.6 14.6667 2.8 14.6667H7.33333M14 4.00004V8.33337C14 8.86671 13.5333 9.33337 13 9.33337H8.33333C7.8 9.33337 7.33333 8.86671 7.33333 8.33337V2.33337C7.33333 1.80004 7.8 1.33337 8.33333 1.33337H11.3333L14 4.00004Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Payable Tracking
                        <svg class="ms-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.00004H12.6654M12.6654 8.00004L7.9987 3.33337M12.6654 8.00004L7.9987 12.6667" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 sm:rounded-lg ">
                <!-- Payable Information Field -->
                <div>
                    <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Information</div>
                    <div class="flex flex-wrap w-full mx-auto">
                        <!-- BUR Number and Current Location Information -->
                        <div class="mt-3 pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pb-2 text-left relative">
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR Number</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Current Location</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End-user and Terms of Payment Information -->
                        <div class="mt-3 pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">End-user</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Terms of Payment</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Amount and Remarks Information -->
                        <div class="mt-3 pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Total Amount</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Remarks</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supplier Information Field -->
                <div class="mb-6">
                    <div class="mb-3 font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Supplier Information</div>
                    <div class="flex flex-wrap w-full mx-auto">
                        <!-- Supplier Name Information -->
                        <div class="pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pb-2 text-left relative">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Name</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Supplier Address Information -->
                        <div class="pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Address</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Supplier Contact Number Information -->
                        <div class="pr-4 lg:w-1/3">
                            <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Contact Number</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 sm:rounded-lg w-full mb-5 md:mb-0 pr-3">
                <!-- Particular and Payable View Section -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                    <!-- Particular Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white rounded-lg overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                        <div class="flex items-center mb-5">
                            <div class="text-zinc-950 font-semibold text-lg font-['Inter'] leading-loose">Particular</div>
                        </div>

                        <div x-data="{ 
                            tableItems: [
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                                { particular: 'Bold text column', 'amount': 'Regular text column' },
                            ]}" class="mx-auto w-full">
                            
                            <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
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
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis font-semibold flex items-center gap-x-6" style="width: 60%;">
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

                    <!-- Disbursement Voucher Preview Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white rounded-lg flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <div class="flex items-center justify-between mb-2">
                            <div class="text-zinc-950 font-semibold text-lg font-['Inter'] leading-loose">Disbursement Voucher Preview</div>
                        </div>
                        <div class="mt-3 border shadow h-96">
                            <!-- file preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
