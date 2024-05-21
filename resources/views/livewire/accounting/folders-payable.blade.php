<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- BUR Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">2021-11-BUR</div>

                <!-- Button Group -->
                <div class="flex gap-1 space">
                    <!-- Delete Button -->
                    <x-delete-file />
                    <button x-data x-on:click="$dispatch('open-delete-file')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path stroke="currentColor" d="M13.3333 5.00033V4.33366C13.3333 3.40024 13.3333 2.93353 13.1517 2.57701C12.9919 2.2634 12.7369 2.00844 12.4233 1.84865C12.0668 1.66699 11.6001 1.66699 10.6667 1.66699H9.33333C8.39991 1.66699 7.9332 1.66699 7.57668 1.84865C7.26308 2.00844 7.00811 2.2634 6.84832 2.57701C6.66667 2.93353 6.66667 3.40024 6.66667 4.33366V5.00033M8.33333 9.58366V13.7503M11.6667 9.58366V13.7503M2.5 5.00033H17.5M15.8333 5.00033V14.3337C15.8333 15.7338 15.8333 16.4339 15.5608 16.9686C15.3212 17.439 14.9387 17.8215 14.4683 18.0612C13.9335 18.3337 13.2335 18.3337 11.8333 18.3337H8.16667C6.76654 18.3337 6.06647 18.3337 5.53169 18.0612C5.06129 17.8215 4.67883 17.439 4.43915 16.9686C4.16667 16.4339 4.16667 15.7338 4.16667 14.3337V5.00033" stroke="#344054" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </button>

                    <!-- Adding Document Modal -->
                    <div 
                        x-data = "{ show: false}" 
                        x-show = "show"
                        x-on:open-add-document.window="show = true"
                        x-on:close-add-document.window="show = false"
                        style="display: none;"
                        
                        class="fixed z-50 inset-0"
                        >

                        <!-- Background -->
                        <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

                        <!-- Modal Content -->
                        <div class="fixed inset-0 bg-white rounded-md p-6 m-auto h-96 w-auto max-w-lg font-['Inter'] overflow-y-auto">
                            <div class="pb-4 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Add New Document</div>

                            <div action="">
                                <div class="mb-4">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PDF, JPEG, PNG, or JPG</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div> 
                                </div>
                                <div class="mb-2">
                                    <div class="flex items-center">
                                        <label for="DocumentType" class="block mb-2 text-sm font-medium text-black dark:text-white">Document Type</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <select id="DocumentType" name="DocumentType" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <option disabled selected>Select Document Type</option>    
                                        <option value="DV_File">Disbursement Voucher</option>
                                        <option value="IAR_File">Inspection and Acceptance Report</option>
                                        <option value="SRIDE_File">Supplies Received and Issued Directly to End-User</option>
                                        <option value="RIS_File">Requisition and Issue Slip</option>
                                        <option value="DR_File">Delivery Receipt</option>
                                        <option value="SI_File">Sales Invoice</option>
                                        <option value="CRPO_File">Checklist of Requirements from Procurement Office</option>
                                        <option value="BUR_File">BUR</option>
                                        <option value="Cheque_File">Cheque</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Add New Document Footer -->
                            <div class="flex justify-between pt-4">
                                <!-- Cancel Button -->
                                <button x-on:click="$dispatch('close-add-document')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    Cancel
                                </button>

                                <!-- Add Document Button -->
                                <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    Add Document
                                </button>
                            </div>
                        </div>
                    </div>
                        
                    <!-- Attach New Document Button -->
                    <button x-data x-on:click="$dispatch('open-add-document')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.50016H12.6654M7.9987 3.8335V13.1668" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Attach New Document
                    </button>
                </div>
            </div>

            <div class="w-full bg-white dark:bg-gray-800 sm:rounded-lg md:mb-0">
                <!-- File Cards Container -->
                <div class="flex flex-wrap w-full mx-auto font-['Inter']">
                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="w-full mb-4">
                        <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                            <div class="text-sm font-medium text-zinc-950 leading-tight">Document Name</div>
                            <!-- Time and Dropdown -->
                            <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">00/00/0000</div>
                                <x-folders-action-payable />
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!-- Pagination -->
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-5 font-['Inter']" aria-label="Table navigation">
                        <ul class="inline-flex h-8 ml-auto -space-x-px text-sm rtl:space-x-reverse">
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 ms-0 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="me-2 mb-0.4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path stroke="currentColor" d="M15.8346 10H4.16797M4.16797 10L10.0013 15.8334M4.16797 10L10.0013 4.16669" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    Previous
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center h-8 px-3 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">8</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">9</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Next
                                    <svg class="ms-2 mb-0.4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path stroke="currentColor" d="M4.16797 10H15.8346M15.8346 10L10.0013 4.16669M15.8346 10L10.0013 15.8334" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>