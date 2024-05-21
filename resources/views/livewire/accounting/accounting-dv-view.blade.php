<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Disbursement Voucher Header -->
            <div class="mt-4 mb-4 flex items-center justify-between font-['Inter'] ">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Disbursement Voucher of {{ $payable -> BUR }}</div>
                <!-- BUR No. should be the BUR No. of the current dv -->

                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Back Button -->
                    <a href="{{ url('/payables/view?payable=' . $payable -> BUR)}}" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.9987 10H7.9987V12.6667L3.33203 8.00004L7.9987 3.33337V6.00004H11.9987V10Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back
                    </a>

                    <!-- Go to Folders Button -->
                    <a href="/folders/main" type="button" class="inline-flex items-center text-[#2D349A] text-sm font-medium font-['Inter'] bg-indigo-50 shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M2.66536 13.3333H13.332C13.6857 13.3333 14.0248 13.1929 14.2748 12.9428C14.5249 12.6928 14.6654 12.3536 14.6654 12V5.33333C14.6654 4.97971 14.5249 4.64057 14.2748 4.39052C14.0248 4.14048 13.6857 4 13.332 4H8.04536C7.82576 3.99886 7.60983 3.9435 7.41676 3.83883C7.2237 3.73415 7.05948 3.58341 6.9387 3.4L6.39203 2.6C6.27125 2.41659 6.10703 2.26585 5.91397 2.16117C5.7209 2.0565 5.50497 2.00114 5.28536 2H2.66536C2.31174 2 1.9726 2.14048 1.72256 2.39052C1.47251 2.64057 1.33203 2.97971 1.33203 3.33333V12C1.33203 12.7333 1.93203 13.3333 2.66536 13.3333Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>    
                        Go to Folders
                        <svg class="ms-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M3.33203 8.00004H12.6654M12.6654 8.00004L7.9987 3.33337M12.6654 8.00004L7.9987 12.6667" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>

                    <div class="flex">
                        <!-- Generate DV Button -->
                        <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M9.33464 1.33325V5.33325H13.3346M9.66797 1.33325H4.0013C3.64768 1.33325 3.30854 1.47373 3.05849 1.72378C2.80844 1.97382 2.66797 2.31296 2.66797 2.66659V13.3333C2.66797 13.6869 2.80844 14.026 3.05849 14.2761C3.30854 14.5261 3.64768 14.6666 4.0013 14.6666H12.0013C12.3549 14.6666 12.6941 14.5261 12.9441 14.2761C13.1942 14.026 13.3346 13.6869 13.3346 13.3333V4.99992L9.66797 1.33325Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>    
                            Generate Disbursement Voucher 
                        </button>
                    </div>
                </div>
            </div>

            <!-- Disbursement Voucher Field -->
            <div class="flex flex-wrap w-full mx-auto mb-2">
                <!-- No., Payee, and Address Field -->
                <div class="pr-4 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">No.</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> No }}</div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Payee</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> Payee }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Address</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> Address }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Date and TIN Employee No. Field -->
                <div class="pr-2 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> Date }}</div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">TIN Employee No.</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> TIN }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Responsibility Center</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex relative">
                                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center  pointer-events-none">Office/Unit/Project:</div>
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight px-36">{{ $disbursement -> RCOffice }}</div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- Mode of Payment and BUR No. Field -->
                <div class="lg:w-1/3">
                    <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Mode of Payment</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> ModePayment }}</div>
                                </div>
                            </div>                        
                        </div>
                                
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR No.</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> BUR }}</div>
                                </div>
                            </div>                        
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-white text-sm font-medium font-['Inter'] leading-tight dark:text-black">text</div>
                            <div class="relative items-center">
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex relative">
                                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center pointer-events-none">Code:</div>
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight px-14">{{ $disbursement -> RCCode }}</div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Disbursement Voucher Table -->
            <div class="mb-10 mx-auto w-full">
                <div class="flex items-center">
                    <div class="mx-auto w-full">
                        <div class="mt-2 rounded-md overflow-x-auto font-['Inter']">
                            <table class="w-full table-auto text-sm text-left">
                                <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                    <tr>
                                        <th class="py-3 px-6">Explanation</th>
                                        <th class="py-3 px-6 ps-16">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 divide-y">
                                    @foreach($payable -> otherParticulars as $particular)
                                    <tr wire:key="{{ $particular -> ID }}">
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis gap-x-6" style="width: 50%;">{{ $particular -> ParticularDesc }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis ps-16 particular-amount" style="width: 50%;">Php {{ $particular -> ParticularAmount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Total Amount Field -->
                <div class="flex justify-end">
                    <div class="w-1/2 h-9 px-3 py-2 bg-white border border-gray-200 items-center gap-2 inline-flex">
                        <div class="grow shrink basis-0 h-5 items-center gap-2 flex">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight ps-1">Total:</div>
                            <div id="total-amount" class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Php 00.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    function calculateTotal() {
                        let total = 0;
                        document.querySelectorAll('.particular-amount').forEach(function(element) {
                            let amountText = element.textContent.replace('Php', '').trim();
                            let amount = parseFloat(amountText.replace(/,/g, '')); // Handle possible comma separators
                            if (!isNaN(amount)) {
                                total += amount;
                            }
                        });
                        document.getElementById('total-amount').textContent = 'Php ' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); // Format as currency
                    }

                    calculateTotal();
                });
            </script>

            <div class="w-full md:mb-0">
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                    <!-- A Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                        <div class="flex items-center mb-2 bg-indigo-50">
                            <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">A</div>
                        </div>

                        <!-- Certified Field -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Certified</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> Certified }}</div>
                                </div>
                            </div>                            
                        </div>

                        <!-- Printed Name Field -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> CertifiedBy }}</div>
                                </div>
                            </div>                         
                        </div>

                        <!-- Position Field -->
                        <div class="mb-2">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> CertifiedPosition }}</div>
                                </div>
                            </div>                         
                        </div>
                    </div>

                    <!-- B Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <div class="flex items-center mb-2 bg-indigo-50">
                            <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">B</div>
                        </div>

                        <!-- Approved For Field -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Approved for</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> Approved }}</div>
                                </div>
                            </div>                         
                        </div>

                        <!-- Printed Name Field -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> ApprovedBy }}</div>
                                </div>
                            </div>                         
                        </div>

                        <!-- Position Field -->
                        <div class="mb-2">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                            <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> ApprovedPosition }}</div>
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap w-full mx-auto">
                <!-- C Section -->
                <div class="w-full flex items-center mb-2 bg-indigo-50">
                    <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">C</div>
                </div>

                <div class="flex flex-wrap w-full mx-auto mb-2">
                    <!-- Check No. Field -->
                    <div class="pr-4 lg:w-1/3">
                        <div class="h-full pb-2 text-left relative">
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Check No.</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> CheckNo }}</div>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>

                    <!-- Check Date Field -->
                    <div class="pr-2 lg:w-1/3">
                        <div class="h-full pb-2 pl-2 rounded-lg text-left relative">
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> CheckDate }}</div>
                                    </div>
                                </div>                             
                            </div>
                        </div>                    
                    </div>

                    <!-- Bank Name Field -->
                    <div class="lg:w-1/3">
                        <div class="h-full pl-4 pb-2 rounded-lg text-left relative">
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Bank Name</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> BankName }}</div>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Printed Name Field -->
            <div class="mb-6">
                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> CheckName }}</div>
                    </div>
                </div>                             
            </div>
            
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                    <!-- JEV No. Field -->
                    <div class="">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">JEV No.</div>
                        <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> JEVNo }}</div>
                            </div>
                        </div>                     
                    </div>
                </div>

                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Date Field -->
                    <div class="">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                        <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $disbursement -> JEVDate }}</div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <div class="font-['Inter']">
                <label for="dv-or-no" class="block mb-3 text-sm font-medium text-zinc-950 dark:text-white">OR No./Other Documents</label>
                <textarea id="dv-or-no" rows="4" class="block p-2.5 w-full text-sm text-zinc-500 bg-white rounded-lg border border-gray-200 shadow focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No OR No./Other Documents Available" disabled readonly>{{ $disbursement -> ORNo }}</textarea>
            </div>
        </div>
    </div>
</div>