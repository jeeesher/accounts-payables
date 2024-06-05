<div>
    <div class="p-4 sm:ml-64">
        <form class="p-4 mt-16" enctype="multipart/form-data" action="{{ route('generate.dv', ['id' => $payable->BUR]) }}" method="POST">
            @csrf
            <!-- Disbursement Voucher Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']"> Generate Disbursement Voucher</div>

                <!-- Button Group -->
                <div class="flex space gap-1">
                    <!-- Back Button -->
                    <a href="{{ url('/payables/view?payable=' . $payable -> BUR)}}" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.9987 10H7.9987V12.6667L3.33203 8.00004L7.9987 3.33337V6.00004H11.9987V10Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back
                    </a>
                    
                    <!-- Save Disbursment Voucher Button -->
                    <button onclick="return confirmSaveDV()" type="submit" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path stroke="currentColor" d="M11.3333 14.0071V8.67375H4.66667V14.0071M4.66667 2.00708V5.34041H10M12.6667 14.0071H3.33333C2.97971 14.0071 2.64057 13.8666 2.39052 13.6166C2.14048 13.3665 2 13.0274 2 12.6737V3.34041C2 2.98679 2.14048 2.64765 2.39052 2.3976C2.64057 2.14756 2.97971 2.00708 3.33333 2.00708H10.6667L14 5.34041V12.6737C14 13.0274 13.8595 13.3665 13.6095 13.6166C13.3594 13.8666 13.0203 14.0071 12.6667 14.0071Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Save Disbursement Voucher
                    </button>
                </div>
            </div>

            <!-- Disbursement Voucher Input Field -->
            <div class="flex flex-wrap w-full mx-auto mb-2 font-['Inter'] ">
                <!-- No., Payee, and Address Input Field -->
                <div class="pr-4 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">No.</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="No" name="No" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter No." required value="{{ $disbursement -> No }}"/>
                            @else
                                <input type="text" id="No" name="No" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter No." required />
                            @endif

                            @error('No') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                                
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Payee</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="Payee" name="Payee" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Payee" required value="{{ $disbursement -> Payee }}"/>
                            @else
                                <input type="text" id="Payee" name="Payee" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Payee" required />
                            @endif
                            
                            @error('Payee') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Address</div>
                            @if ($disbursement)
                                <input type="text" id="Address" name="Address" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Address" value="{{ $disbursement -> Address }}"/>
                            @else
                                <input type="text" id="Address" name="Address" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Address" />
                            @endif

                            @error('Address') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Date and TIN Employee No. Input Field -->
                <div class="pr-2 lg:w-1/3">
                    <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="date" id="Date" name="Date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ $disbursement -> Date }}"/>
                            @else
                                <input type="date" id="Date" name="Date" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            @endif

                            @error('Date') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                            
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">TIN Employee No.</div>
                            @if($disbursement)
                                <input type="text" id="TIN" name="TIN" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter TIN Employee No." value="{{ $disbursement -> TIN }}"/>
                            @else
                                <input type="text" id="TIN" name="TIN" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter TIN Employee No." />
                            @endif

                            @error('TIN') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Responsibility Center</div>
                            <div class="relative items-center">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">Office/Unit/Project:</div>
                                @if($disbursement)
                                    <input type="text" id="RCOffice" name="RCOffice" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-40 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text" value="{{ $disbursement -> RCOffice }}"/>
                                @else
                                    <input type="text" id="RCOffice" name="RCOffice" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-40 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text" />
                                @endif
                                
                                @error('RCOffice') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- Mode of Payment and BUR No. Input Field -->
                <div class="lg:w-1/3">
                    <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                        <div class="mb-6 mt-1.5">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Mode of Payment</div>
                            @if ($disbursement)
                                <select id="ModePayment" name="ModePayment" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Mode of Payment" >
                                    <option disabled>Select Mode of Payment</option> 
                                    <option value="Check" {{ $disbursement -> ModePayment == 'Check' ? 'selected' : '' }}>Check</option>
                                    <option value="Cash" {{ $disbursement -> ModePayment == 'Cash' ? 'selected' : '' }}>Cash</option>
                                    <option value="Others" {{ $disbursement -> ModePayment == 'Others' ? 'selected' : '' }}>Others</option>
                                </select>
                            @else
                                <select id="ModePayment" name="ModePayment" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Mode of Payment" >
                                    <option disabled selected>Select Mode of Payment</option> 
                                    <option value="Check">Check</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Others">Others</option>
                                </select>
                            @endif

                            @error('ModePayment') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                                
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR No.</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            <input type="text" id="BUR" name="BUR" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> BUR }}" required />
                            @error('BUR') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-6">
                            <div class="mb-3 text-white text-sm font-medium font-['Inter'] leading-tight dark:text-black">text</div>
                            <div class="relative items-center">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">Code:</div>
                                @if($disbursement)
                                    <input type="text" id="RCCode" name="RCCode" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-16 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text"  value="{{ $disbursement -> RCCode }}"/>
                                @else
                                    <input type="text" id="RCCode" name="RCCode" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 px-16 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Text"  />
                                @endif

                                @error('RCCode') <span class="text-red-500">{{ $message }}</span> @enderror
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

                        <!-- Certified Dropdown -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Certified</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <select id="Certified" name="Certified" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option disabled>Select Certified Status</option> 
                                    <option value="Supporting Documents Complete" {{ $disbursement -> Certified == 'Supporting Documents Complete' ? 'selected' : '' }}>Supporting Documents Complete</option>
                                    <option value="Supporting Documents Incomplete" {{ $disbursement -> Certified == 'Supporting Documents Incomplete' ? 'selected' : '' }}>Supporting Documents Incomplete</option>
                                    <option value="Missing Documents" {{ $disbursement -> Certified == 'Missing Documents' ? 'selected' : '' }}>Missing Documents</option>
                                    <option value="Others" {{ $disbursement -> Certified == 'Others' ? 'selected' : '' }}>Others</option>
                                </select>
                            @else
                                <select id="Certified" name="Certified" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected value="">Select Certified Status</option> 
                                    <option value="Supporting Documents Complete">Supporting Documents Complete</option>
                                    <option value="Supporting Documents Incomplete">Supporting Documents Incomplete</option>
                                    <option value="Missing Documents">Missing Documents</option>
                                    <option value="Others">Others</option>
                                </select>
                            @endif
                            @error('Certified') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <!-- Printed Name Input Field -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="CertifiedBy" name="CertifiedBy" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required value="{{ $disbursement -> CertifiedBy }}"/>
                            @else
                                <input type="text" id="CertifiedBy" name="CertifiedBy" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required />
                            @endif

                            @error('CertifiedBy') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <!-- Position Input Field -->
                        <div class="mb-2">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="CertifiedPosition" name="CertifiedPosition" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required value="{{ $disbursement -> CertifiedPosition }}"/>
                            @else
                                <input type="text" id="CertifiedPosition" name="CertifiedPosition" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required/>
                            @endif
                            
                            @error('CertifiedPosition') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- B Section -->
                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <div class="flex items-center mb-2 bg-indigo-50">
                            <div class="ps-1 text-zinc-950 font-semibold text-m font-['Inter'] leading-loose">B</div>
                        </div>

                        <!-- Approved for Dropdown -->
                        <div class="mb-6">
                            <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Approved for</div>
                            @if ($disbursement)
                                <select id="Approved" name="Approved" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                    <option disabled>Select Approved for Status</option> 
                                    <option value="Approved" {{ $disbursement -> Approved == 'Approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="Not approved" {{ $disbursement -> Approved == 'Not approved' ? 'selected' : '' }}>Not approved</option>
                                </select>
                            @else
                                <select id="Approved" name="Approved" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                    <option selected  value="">Select Approved for Status</option> 
                                    <option value="Approved">Approved</option>
                                    <option value="Not approved">Not approved</option>
                                </select>
                            @endif
                            @error('Approved') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <!-- Printed Name Input Field -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="ApprovedBy" name="ApprovedBy" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required value="{{ $disbursement -> ApprovedBy }}"/>
                            @else
                                <input type="text" id="ApprovedBy" name="ApprovedBy" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" required/>
                            @endif
                            
                            @error('ApprovedBy') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <!-- Position Input Field -->
                        <div class="mb-2">
                            <div class="flex items-center">
                                <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Position</div>
                                <span class="text-red-500 p-1 pl-3">*</span>
                            </div>
                            @if ($disbursement)
                                <input type="text" id="ApprovedPosition" name="ApprovedPosition" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required value="{{ $disbursement -> ApprovedPosition }}"/>
                            @else
                                <input type="text" id="ApprovedPosition" name="ApprovedPosition" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Position" required />
                            @endif
                            
                            @error('ApprovedPosition') <span class="text-red-500">{{ $message }}</span> @enderror
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
                    <!-- Check No. Input Field -->
                    <div class="pr-4 lg:w-1/3">
                        <div class="h-full pb-2 text-left relative">
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Check No.</div>
                                @if ($disbursement)
                                    <input type="text" id="CheckNo" name="CheckNo" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Check No." value="{{ $disbursement -> CheckNo }}"/>
                                @else
                                    <input type="text" id="CheckNo" name="CheckNo" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Check No." />
                                @endif
                                
                                @error('CheckNo') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Check Date Input Field -->
                    <div class="pr-2 lg:w-1/3">
                        <div class="h-full pb-2 pl-2 rounded-lg text-left relative font-['Inter'] ">
                            <div class="mb-2">
                                <div class="flex items-center">
                                    <div class="mb-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                @if ($disbursement)
                                    <input type="date" id="CheckDate" name="CheckDate" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required value="{{ $disbursement -> CheckDate }}"/>
                                @else
                                    <input type="date" id="CheckDate" name="CheckDate" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" required />
                                @endif

                                @error('CheckDate') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>                    
                    </div>

                    <!-- Bank Name Input Field -->
                    <div class="lg:w-1/3">
                        <div class="h-full pl-4 pb-2 rounded-lg text-left relative">
                            <div class="mb-2">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Bank Name</div>
                                @if ($disbursement)
                                    <input type="text" id="BankName" name="BankName" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Bank Name" value="{{ $disbursement -> BankName }}"/>
                                @else
                                    <input type="text" id="BankName" name="BankName" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Bank Name" />
                                @endif

                                @error('BankName') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Printed Name</div>
                @if ($disbursement)
                    <input type="text" id="CheckName" name="CheckName" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" value="{{ $disbursement -> CheckName }}"/>
                @else   
                    <input type="text" id="CheckName" name="CheckName" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Printed Name" />            
                @endif
                
                @error('CheckName') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap font-['Inter'] ">
                <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-10 w-full items-end justify-start relative font-['Inter']">
                    <!-- JEV No. Input Field -->
                    <div class="mb-2">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">JEV No.</div>
                        @if ($disbursement)
                            <input type="text" id="JEVNo" name="JEVNo" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter JEV No." value="{{ $disbursement -> JEVNo }}"/>
                        @else
                            <input type="text" id="JEVNo" name="JEVNo" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter JEV No." />
                        @endif

                        @error('JEVNo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Date Input Field -->
                    <div class="mb-2">
                        <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Date</div>
                        @if ($disbursement)
                            <input type="date" id="JEVDate" name="JEVDate" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" value="{{ $disbursement -> JEVDate }}"/>
                        @else
                            <input type="date" id="JEVDate" name="JEVDate" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" />
                        @endif

                        @error('JEVDate') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="font-['Inter']">
                <label for="ORNo" class="block mb-3 text-sm font-medium text-zinc-950 dark:text-white">OR No./Other Documents</label>
                @if ($disbursement)
                    <textarea id="ORNo" name="ORNo" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter OR No./Other Documents here...">{{ $disbursement -> ORNo }}</textarea>
                @else
                    <textarea id="ORNo" name="ORNo" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter OR No./Other Documents here..."></textarea>
                @endif
                
                @error('ORNo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </form>
    </div>
</div>