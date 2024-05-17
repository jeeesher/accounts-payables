<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Add New Payables Header -->
            <div class="mt-4 pt-2 font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Add New Payable</div>

            <form class="max-w-10xl mx-auto space-y-6" enctype="multipart/form-data" action="{{ route('submit.payable') }}" method="POST">
                <!-- Add New Payables Form -->
                @csrf
                
                <div class="flex items-center justify-center w-full">
                    <div class="section-container bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 w-full mb-10 md:mb-0">
                        <!-- Payable Information Input Field -->
                        <div>
                            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Information</div>

                            <div class="mx-auto mt-5 font-['Inter']">
                                <!-- BUR Input Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="BUR" class="block mb-2 text-sm font-medium text-black dark:text-white">BUR Number</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input type="text" id="BUR" name="BUR" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter BUR Number" required />
                                    @error('BUR') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                                </div>

                                <!-- End-user Input Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="EndUser" class="block mb-2 text-sm font-medium text-black dark:text-white">End-user</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input type="text" id="EndUser" name="EndUser" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter End-user" required />
                                    @error('EndUser') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                                </div>
                                
                                <!-- Total Amount Input Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="Amount" class="block mb-2 text-sm font-medium text-black dark:text-white">Total Amount</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input type="text" id="Amount" name="Amount" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Php 0.00 " required />
                                    @error('Amount') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                                </div>

                                <!-- Terms of Payment Input Field -->    
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="TermsPayment" class="block mb-2 text-sm font-medium text-black dark:text-white">Terms of Payment</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input type="text" id="TermsPayment" name="TermsPayment" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Terms of Payment" required />
                                    @error('TermsPayment') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Supplier Information</div>

                            <div class="mx-auto mt-5 font-['Inter']">
                                <!-- Supplier Name Dropdown Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="SupplierName" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Name</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <select id="SupplierName" name="SupplierName" wire:model="supplier_id" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Supplier" required />
                                        <option disabled selected>Select Supplier</option> 
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->SupplierName }}">{{ $supplier->SupplierName }}</option>
                                            @endforeach
                                    </select>
                                    @error('SupplierName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                                </div>


                                <!-- Supplier Address Input Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="SupplierAdd" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Address</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input id="SupplierAdd" name="SupplierAdd" class="w-full px-3 py-2 bg-white text-sm text-gray-700 rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex" disabled value=""/>
                                </div>
                                
                                <!-- Supplier Contact Number Input Field -->
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <label for="SupplierContact" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Contact Number</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <input id="SupplierContact" name="SupplierContact" class="w-full px-3 py-2 text-sm text-gray-700 bg-white rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payable Files Button Group -->
                    <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <div>
                            <!-- Payable Preview Field -->
                            <div class="mb-5">
                                <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Preview</div>
                            </div>

                            <div>
                                <!-- Upload Copy of Inspection and Acceptance Report Button -->
                                <label for="IAR-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Copy of Inspection and Acceptance Report
                                </label>
                                <input type="file" name="IAR_File" id="IAR-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="IAR-selected-file" class="filename-display"></span>
                            </div>
                            
                            <div>
                                <!-- Upload Copy of Supplies Received and Issued Directly to End-User Button -->
                                <label for="SRIDE-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Copy of Supplies Received and Issued Directly to End-User
                                </label>
                                <input type="file" name="SRIDE_File" id="SRIDE-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="SRIDE-selected-file" class="filename-display"></span>
                            </div>
                            
                            <div>
                                <!-- Upload Copy of Requisition and Issue Slip Button -->
                                <label for="RIS-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Copy of Requisition and Issue Slip 
                                </label>
                                <input type="file" name="RIS_File" id="RIS-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="RIS-selected-file" class="filename-display"></span>
                            </div>
                            
                            <div>
                                <!-- Upload Copy of Delivery Receipt Button -->
                                <label for="DR-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Copy of Delivery Receipt
                                </label>
                                <input type="file" name="DR_File" id="DR-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="DR-selected-file" class="filename-display"></span>
                            </div>
                            
                            <div>
                                <!-- Upload Copy of Sales Invoice Button -->
                                <label for="SI-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Copy of Sales Invoice
                                </label>
                                <input type="file" name="SI_File" id="SI-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="SI-selected-file" class="filename-display"></span>
                            </div>

                            <div>
                                <!-- Upload Checklist of requirements from Procurement Office Button -->
                                <label for="CRPO-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload Checklist of Requirements from Procurement Office
                                </label>
                                <input type="file" name="CRPO_File" id="CRPO-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="CRPO-selected-file" class="filename-display"></span>
                            </div>

                            <div>
                                <!-- Upload BUR Button -->
                                <label for="BUR-file-upload" class="custom-file-upload-button mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Upload BUR
                                </label>
                                <input type="file" name="BUR_File" id="BUR-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                                <span id="BUR-selected-file" class="filename-display"></span>
                            </div>
                        </div>

                        <div class="pt-5">
                            <div class="mb-5 font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Particular</div>
                            
                            <x-add-particular />
                            <!-- Add Particular Button -->
                            <button x-data x-on:click="$dispatch('open-add-particular')" type="ParticularButton" class="mb-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M3.33203 8.00001H12.6654M7.9987 3.33334V12.6667" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Add Particular Here
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="pb-1 bg-white dark:bg-gray-800 sm:rounded-lg">
                        <div class="w-full h-px border border-zinc-200"></div>
                    </div>

                    <div class="flex justify-end mt-5">
                        <!-- Add Payable Button -->
                        <button onclick="return confirmAddPayable()" type="submit" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path stroke="currentColor" d="M2.66667 15.4801H12C12.3536 15.4801 12.6928 15.3396 12.9428 15.0896C13.1929 14.8396 13.3333 14.5004 13.3333 14.1468V5.81346L9.66667 2.14679H4C3.64638 2.14679 3.30724 2.28727 3.05719 2.53731C2.80714 2.78736 2.66667 3.1265 2.66667 3.48012V6.14679M9.33333 2.14679V6.14679H13.3333M2 10.8135H6M4 8.81346V12.8135" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Add Payable
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#SupplierName').change(function(){
            var supplier = $(this).val();
            $.ajax({
                url: '/SupplierInfo/' + supplier,
                method: 'GET',
                success: function(data){
                    $('#SupplierAdd').val(data.address);
                    $('#SupplierContact').val(data.contact);
                }
            });
        });
    });
</script>