<div>
    <div class="p-4 sm:ml-64">
        <form class="p-4 mt-16" enctype="multipart/form-data" action="{{ route('update.payable') }}" method="POST">
            @csrf


            <!-- Edit Payables Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Edit Payable</div>

                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Delete Button -->
                    <a href="{{ route('delete.payable', ['id' => $payable->BUR]) }}" onclick="return confirmDeletePayable()" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M2 4.00004H14M12.6667 4.00004V13.3334C12.6667 14 12 14.6667 11.3333 14.6667H4.66667C4 14.6667 3.33333 14 3.33333 13.3334V4.00004M5.33333 4.00004V2.66671C5.33333 2.00004 6 1.33337 6.66667 1.33337H9.33333C10 1.33337 10.6667 2.00004 10.6667 2.66671V4.00004M6.66667 7.33337V11.3334M9.33333 7.33337V11.3334" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </a>

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
                    <button onclick="return confirmSavePayable()" type="update" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] shadow bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
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

                        <div class="mx-auto mt-5 font-['Inter']">
                            <!-- BUR Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="BUR" class="block mb-2 text-sm font-medium text-black dark:text-white">BUR Number</label>
                                </div>
                                <input type="text" id="BUR" name="BUR" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> BUR }}" required/>
                                @error('BUR') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>

                            <!-- End-user Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="EndUser" class="block mb-2 text-sm font-medium text-black dark:text-white">End-user</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="EndUser" name="EndUser" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> EndUser }}" required />
                                @error('EndUser') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>
                            
                            <!-- Total Amount Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="Amount" class="block mb-2 text-sm font-medium text-black dark:text-white">Total Amount</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="Amount" name="Amount" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> Amount }}" required />
                                @error('Amount') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>

                            <!-- Terms of Payment Input Field -->    
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="TermsPayment" class="block mb-2 text-sm font-medium text-black dark:text-white">Terms of Payment</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="TermsPayment" name="TermsPayment" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> TermsPayment }}" required/>
                                @error('TermsPayment') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Supplier Information Input Field -->
                    <div class="pt-5">
                        <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Supplier Information</div>

                        <div class="mx-auto mt-5 font-['Inter']">
                            <!-- Supplier Name Dropdown Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="suplier_name" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Name</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <select id="SupplierName" name="SupplierName" wire:model="supplier_id" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                                    <option>{{ $payable -> SupplierName }}</option> 
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier -> SupplierName }}">{{ $supplier -> SupplierName }}</option>
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
                                <input id="SupplierAdd" name="SupplierAdd" class="w-full px-3 py-2 bg-white text-sm text-gray-700 rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex" placeholder="Supplier Address" disabled value="{{ $supplier -> Address }}"/>
                            </div>
                            
                            <!-- Supplier Contact Number Input Field -->
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <label for="SupplierContact" class="block mb-2 text-sm font-medium text-black dark:text-white">Supplier Contact Number</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input id="SupplierContact" name="SupplierContact" class="w-full px-3 py-2 text-sm text-gray-700 bg-white rounded-md border border-zinc-200 justify-start items-center gap-2 inline-flex" placeholder="Supplier Contact" disabled value="{{ $supplier -> ContactNumber }}"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Particular Field -->
                    <div class="mb-5 w-ful">
                        <div class="flex items-center mb-3">
                            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Particular</div>

                            <!-- Edit Particular Modal -->
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
                                    <div class="pb-3 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Edit Particular</div>

                                    <div id="particulars-container" class="h-60 max-h-60 overflow-y-auto">   
                                        @foreach($payable -> otherParticulars as $index => $particular)
                                            <div class="particular-item">     
                                                <div class="flex justify-between">
                                                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight flex gap-2">
                                                        <div>Particular {{ $index + 1 }} </div>
                                                        <input type="text" name="particulars[{{ $index }}][identifier]" class="hidden" value="{{ $particular -> ID }}" />

                                                    </div>

                                                    <div class="flex items-center">
                                                        <button type="button" class="delete-particular-btn text-red-600 ml-2 me-4">
                                                            <svg class="me-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <path stroke="currentColor" d="M2 4.00016H14M12.6667 4.00016V13.3335C12.6667 14.0002 12 14.6668 11.3333 14.6668H4.66667C4 14.6668 3.33333 14.0002 3.33333 13.3335V4.00016M5.33333 4.00016V2.66683C5.33333 2.00016 6 1.3335 6.66667 1.3335H9.33333C10 1.3335 10.6667 2.00016 10.6667 2.66683V4.00016M6.66667 7.3335V11.3335M9.33333 7.3335V11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                

                                                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                                                    <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                                                        <input type="text" name="particulars[{{ $index }}][ParticularDesc]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $particular -> ParticularDesc }}" required />
                                                    </div>

                                                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0 me-4" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                                                        <input type="number" step="0.01" name="particulars[{{ $index }}][ParticularAmount]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $particular -> ParticularAmount }}" required />
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $lastCount = $index ;
                                            @endphp

                                        @endforeach   
                                    </div>
                                    
                                    <!-- Particulars Footer -->
                                    <footer class="flex justify-end pt-4">
                                        <!-- Cancel Button -->
                                        <button x-on:click="$dispatch('close-edit-particular')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                            Close
                                        </button>
                                    </footer>
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', (event) => {
                                        // Function to update spans after deleting a particular
                                        function updateSpans() {
                                            document.querySelectorAll('.particular-item').forEach((item, index) => {
                                                const descSpan = document.querySelector(`#particular-desc-${index}`);
                                                const amountSpan = document.querySelector(`#particular-amount-${index}`);

                                                if (descSpan) descSpan.textContent = item.querySelector(`input[name^="particulars"][name$="[ParticularDesc]"]`).value;
                                                if (amountSpan) amountSpan.textContent = item.querySelector(`input[name^="particulars"][name$="[ParticularAmount]"]`).value;
                                            });
                                        }

                                        // Listen for input events on all particular inputs
                                        document.querySelectorAll('input[name^="particulars"]').forEach(input => {
                                            input.addEventListener('input', function() {
                                                const index = this.name.match(/\d+/)[0]; // Extract index from the input name
                                                const descSpan = document.querySelector(`#particular-desc-${index}`);
                                                const amountSpan = document.querySelector(`#particular-amount-${index}`);

                                                // Update the corresponding span elements
                                                if (descSpan) descSpan.textContent = document.querySelector(`input[name="particulars[${index}][ParticularDesc]"]`).value;
                                                if (amountSpan) amountSpan.textContent = document.querySelector(`input[name="particulars[${index}][ParticularAmount]"]`).value;
                                            });
                                        });

                                        // Listen for click events on all delete buttons
                                        document.querySelectorAll('.delete-particular-btn').forEach(button => {
                                            button.addEventListener('click', function() {
                                                const item = this.closest('.particular-item');
                                                item.remove();
                                                updateSpans();
                                            });
                                        });
                                    });
                                </script>
                            </div>
                            
                            <!-- Edit Particular Button -->
                            <button x-data x-on:click="$dispatch('open-edit-particular')" type="button" class="ml-4 text-[#2563EB] hover:text-blue-800 active:text-cyan-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Particulars Table -->
                        <div class="mx-auto w-full">
                            <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
                                <table class="w-full table-auto text-sm text-left">
                                    <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                        <tr>
                                            <th class="py-3 px-6">Particular</th>
                                            <th class="py-3 px-6">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 divide-y">
                                        @foreach($payable -> otherParticulars as  $index => $particular)
                                        <tr wire:key="{{ $particular -> ID }}">
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis font-semibold flex items-center gap-x-6" style="width: 60%;">
                                                <span id="particular-desc-{{ $index }}">{{ $particular->ParticularDesc }}</span>
                                            </td>                                                
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 40%;" x-text="item.amount">
                                                <span id="particular-amount-{{ $index }}">{{ $particular->ParticularAmount }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Particular Modal -->
                        <div class="mt-4 flex justify-end w-full">
                            <div 
                                x-data = "{ show: false}" 
                                x-show = "show"
                                x-on:open-add-new-particular.window="show = true"
                                x-on:close-add-new-particular.window="show = false"
                                style="display: none;"
                                
                                class="fixed z-50 inset-0"
                                >

                                <!-- Background -->
                                <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

                                <!-- Modal Content -->
                                <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg h-96 max-h-96 font-['Inter'] overflow-y-auto">
                                    <div class="pb-3 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Add  New Particular</div>

                                    <div id="new-particulars-container" class="h-60 max-h-60 overflow-y-auto">      
                                        <div class="new-particular-item">     
                                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Particular {{ $lastCount + 2 }}</div>

                                            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                                                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                                                    <input type="text" name="newparticulars[0][ParticularDesc]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Particular"  />
                                                </div>

                                                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0 me-4" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                                                    <input type="number" step="0.01" name="newparticulars[0][ParticularAmount]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount"  />
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                    
                                    <!-- Particulars Footer -->
                                    <footer class="flex justify-between pt-4">
                                        <!-- Cancel Button -->
                                        <button x-on:click="$dispatch('close-add-new-particular')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                            Close
                                        </button>

                                        <!-- Insert Another Particular Button -->
                                        <button type="button" id="add-new-particular-btn" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                            Insert Another Particular
                                        </button>
                                    </footer>
                                </div>
                            </div>

                            <script type="text/javascript">
                                var lastCount = JSON.parse('{!! json_encode($lastCount) !!}');;
                            </script>

                            <script>
                                document.getElementById('add-new-particular-btn').addEventListener('click', function() {
                                    const container = document.getElementById('new-particulars-container');
                                    const count = container.querySelectorAll('.new-particular-item').length + lastCount + 1;
                                    const index = container.querySelectorAll('.new-particular-item').length;
                                    const div = document.createElement('div');
                                    div.classList.add('new-particular-item');
                                    div.innerHTML = `
                                            <div class="flex justify-between">
                                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Particular ${count + 1}</div>
                                                
                                                <div class="flex items-center">
                                                    <button type="button" class="delete-new-particular-btn text-red-600 ml-2 me-4">
                                                        <svg class="me-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path stroke="currentColor" d="M2 4.00016H14M12.6667 4.00016V13.3335C12.6667 14.0002 12 14.6668 11.3333 14.6668H4.66667C4 14.6668 3.33333 14.0002 3.33333 13.3335V4.00016M5.33333 4.00016V2.66683C5.33333 2.00016 6 1.3335 6.66667 1.3335H9.33333C10 1.3335 10.6667 2.00016 10.6667 2.66683V4.00016M6.66667 7.3335V11.3335M9.33333 7.3335V11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                </div>    
                                            </div>

                                            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                                                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                                                    <input type="text" name="newparticulars[${index}][ParticularDesc]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Particular" required />
                                                </div>

                                                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0 me-4" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                                                    <input type="number" step="0.01" name="newparticulars[${index}][ParticularAmount]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount" required />
                                                </div>
                                            </div>
                                    `;
                                    container.appendChild(div);
                                    addDeleteButtonFunctionality();
                                });

                                function addDeleteButtonFunctionality() {
                                    document.querySelectorAll('.delete-new-particular-btn').forEach(function(button) {
                                        button.removeEventListener('click', handleDelete); // Remove existing listener to avoid duplicates
                                        button.addEventListener('click', handleDelete); // Add event listener for delete
                                    });
                                }

                                function handleDelete(event) {
                                    const particularItem = event.target.closest('.new-particular-item');
                                    particularItem.remove();
                                    renumberParticulars();
                                }

                                function renumberParticulars() {
                                    const container = document.getElementById('new-particulars-container');
                                    const items = container.querySelectorAll('.new-particular-item');
                                    items.forEach((item, index) => {
                                        const label = item.querySelector('.mb-3');
                                        label.textContent = `Particular ${index + 1}`;
                                        const descInput = item.querySelector('input[type="text"]');
                                        const amountInput = item.querySelector('input[type="number"]');
                                        descInput.name = `particulars[${index}][ParticularDesc]`;
                                        amountInput.name = `particulars[${index}][ParticularAmount]`;
                                    });
                                }

                                addDeleteButtonFunctionality();
                            </script>

                            <button x-data x-on:click="$dispatch('open-add-new-particular')" type="button" class="ml-4 inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M3.33203 8.00004H12.6654M7.9987 3.33337V12.6667" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Add Particular
                            </button>
                        </div>
                        
                    </div>

                    <!-- Disbursement Voucher Preview Section -->
                    <div class="flex flex-col">
                        <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Disbursement Voucher Preview</div>

                        <div class="mt-3 mb-4 border shadow h-96">
                            @if($payable->files->DV_File != null)
                                <iframe id="documentViewer" src="{{ asset($payable -> files -> DV_File) }}" class="w-full border-0 h-96"></iframe>
                            @else
                                <div class="bg-gray-100 h-full flex items">
                                    <div class="m-auto font-['Inter'] font-medium text-gray-400">No Disbursement Voucher Available</div>
                                </div>
                            @endif
                        </div>

                        <!-- Upload Signed Disbursement Voucher Button-->
                        <div class="flex justify-end">
                            <span id="DV-selected-file" class="filename-display me-5 mt-2"></span>

                            <label for="DV-file-upload" class="custom-file-upload-button inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Upload Signed Disbursement Voucher
                            </label>
                            <input type="file" name="DV_File" id="DV-file-upload" accept=".pdf, .jpeg, .jpg, .png">
                        </div>

                        <script>
                            const DVfileInput = document.getElementById('DV-file-upload');
                            const DVselectedFileDisplay = document.getElementById('DV-selected-file');

                            DVfileInput.addEventListener('change', (event) => {
                                const DVselectedFile = event.target.files[0].name;

                                if (DVselectedFile.length > 20) {
                                    DVselectedFileDisplay.textContent = DVselectedFile.substring(0,18) + '...'; 
                                } else {
                                    DVselectedFileDisplay.textContent = DVselectedFile;
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </form>
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


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Listen for input events on all particular inputs
        document.querySelectorAll('input[name^="particulars"]').forEach(input => {
            input.addEventListener('input', function() {
                const index = this.name.match(/\d+/)[0]; // Extract index from the input name
                const descSpan = document.querySelector(`#particular-desc-${index}`);
                const amountSpan = document.querySelector(`#particular-amount-${index}`);

                // Update the corresponding span elements
                if (descSpan) descSpan.textContent = document.querySelector(`input[name="particulars[${index}][ParticularDesc]"]`).value;
                if (amountSpan) amountSpan.textContent = document.querySelector(`input[name="particulars[${index}][ParticularAmount]"]`).value;
            });
        });
    });
</script>