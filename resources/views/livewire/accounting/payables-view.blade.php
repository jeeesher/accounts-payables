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

                    <!-- Edit Button -->
                    <a href="/payables/edit" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_4293_5083)">
                                <path stroke="currentColor" d="M7.33203 2.66667H2.66536C2.31174 2.66667 1.9726 2.80714 1.72256 3.05719C1.47251 3.30724 1.33203 3.64638 1.33203 4V13.3333C1.33203 13.687 1.47251 14.0261 1.72256 14.2761C1.9726 14.5262 2.31174 14.6667 2.66536 14.6667H11.9987C12.3523 14.6667 12.6915 14.5262 12.9415 14.2761C13.1916 14.0261 13.332 13.687 13.332 13.3333V8.66667M12.332 1.66665C12.5972 1.40144 12.957 1.25244 13.332 1.25244C13.7071 1.25244 14.0668 1.40144 14.332 1.66665C14.5972 1.93187 14.7462 2.29158 14.7462 2.66665C14.7462 3.04173 14.5972 3.40144 14.332 3.66665L7.9987 9.99999L5.33203 10.6667L5.9987 7.99999L12.332 1.66665Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_4293_5083">
                                <rect width="16" height="16" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Edit
                    </a>

                    <!-- Go to Folders Button -->
                    <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.9987 9.33333L4.96536 7.4C5.07667 7.1791 5.24724 6.99353 5.45798 6.86402C5.66873 6.73451 5.91134 6.66618 6.1587 6.66667H13.332M13.332 6.66667C13.5357 6.66631 13.7368 6.71262 13.9198 6.80206C14.1028 6.89149 14.2629 7.02166 14.3877 7.18258C14.5126 7.3435 14.599 7.53089 14.6402 7.73037C14.6813 7.92985 14.6763 8.13611 14.6254 8.33333L13.592 12.3333C13.518 12.6199 13.3508 12.8738 13.1166 13.0548C12.8824 13.2359 12.5947 13.3339 12.2987 13.3333H2.66536C2.31174 13.3333 1.9726 13.1929 1.72256 12.9428C1.47251 12.6928 1.33203 12.3536 1.33203 12V3.33333C1.33203 2.6 1.93203 2 2.66536 2H5.28536C5.50497 2.00114 5.7209 2.0565 5.91397 2.16117C6.10703 2.26585 6.27125 2.41659 6.39203 2.6L6.9387 3.4C7.05948 3.58341 7.2237 3.73415 7.41676 3.83883C7.60983 3.9435 7.82576 3.99886 8.04536 4H11.9987C12.3523 4 12.6915 4.14048 12.9415 4.39052C13.1916 4.64057 13.332 4.97971 13.332 5.33333V6.66667Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Go to Folders
                    </button>
                        
                    <!-- Payable Tracking Button -->
                    <button type="button" class="inline-flex items-center text-[#2D349A] text-sm font-medium font-['Inter'] bg-indigo-50 shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M10.6667 1.33337V4.66671H14M4.66667 5.33337V11.2C4.66667 11.4 4.8 11.6 4.93333 11.7334C5.06667 11.8667 5.26667 12 5.46667 12H10M2 8.00004V13.8667C2 14.0667 2.13333 14.2667 2.26667 14.4C2.4 14.5334 2.6 14.6667 2.8 14.6667H7.33333M14 4.00004V8.33337C14 8.86671 13.5333 9.33337 13 9.33337H8.33333C7.8 9.33337 7.33333 8.86671 7.33333 8.33337V2.33337C7.33333 1.80004 7.8 1.33337 8.33333 1.33337H11.3333L14 4.00004Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Payable Tracking
                    </button>

                    <!-- Generate DV Form Button-->
                    <a href="/accounting/generate/dv" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M8.66536 3.33325V4.66659M8.66536 11.3333V12.6666M8.66536 7.33325V8.66659M1.33203 5.99992C1.86246 5.99992 2.37117 6.21063 2.74624 6.5857C3.12132 6.96078 3.33203 7.46949 3.33203 7.99992C3.33203 8.53035 3.12132 9.03906 2.74624 9.41413C2.37117 9.78921 1.86246 9.99992 1.33203 9.99992V11.3333C1.33203 11.6869 1.47251 12.026 1.72256 12.2761C1.9726 12.5261 2.31174 12.6666 2.66536 12.6666H13.332C13.6857 12.6666 14.0248 12.5261 14.2748 12.2761C14.5249 12.026 14.6654 11.6869 14.6654 11.3333V9.99992C14.1349 9.99992 13.6262 9.78921 13.2512 9.41413C12.8761 9.03906 12.6654 8.53035 12.6654 7.99992C12.6654 7.46949 12.8761 6.96078 13.2512 6.5857C13.6262 6.21063 14.1349 5.99992 14.6654 5.99992V4.66659C14.6654 4.31296 14.5249 3.97382 14.2748 3.72378C14.0248 3.47373 13.6857 3.33325 13.332 3.33325H2.66536C2.31174 3.33325 1.9726 3.47373 1.72256 3.72378C1.47251 3.97382 1.33203 4.31296 1.33203 4.66659V5.99992Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Disbursement Voucher
                        <svg class="ms-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.00004H12.6654M12.6654 8.00004L7.9987 3.33337M12.6654 8.00004L7.9987 12.6667" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            @if($error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ $error }}</span>
                </div>
            @else
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
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> BUR }}</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Current Location</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            @if($payable->latestTracking)
                                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable->latestTracking->CurrentLocation }}</div>
                                            @else
                                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">No Tracking Information</div>
                                            @endif
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
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> EndUser }}</div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Terms of Payment</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> TermsPayment }}</div>
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
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> Amount }}</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Remarks</div>
                                    <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                            @if($payable->latestTracking)
                                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable->latestTracking->CurrentStatus }}</div>
                                            @else
                                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">No Tracking Information</div>
                                            @endif
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
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> SupplierName }}</div>
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
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable->supplier->Address }}</div>
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
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable->supplier->ContactNumber }}</div>
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

                        <div  class="mx-auto w-full">
                            
                            <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
                                <table class="w-full table-auto text-sm text-left">
                                    <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                        <tr>
                                            <th class="py-3 px-6">Particular</th>
                                            <th class="py-3 px-6">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 divide-y">
                                        @foreach($payable->otherParticulars as $particular)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis font-semibold flex items-center gap-x-6" style="width: 60%;">
                                                <span x-text="item.particular">{{ $particular->ParticularDesc }}</span>
                                            </td>                                                
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 40%;" x-text="item.amount">{{ $particular->ParticularAmount }}</td>
                                        </tr>
                                        @endforeach
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
                            @if($payable->files->IAR_File != null)
                            <iframe id="documentViewer" src="{{ asset($payable->files->IAR_File) }}" class="w-full border-0 h-96"></iframe>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
