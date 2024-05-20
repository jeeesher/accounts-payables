<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <div class="mt-4 max-w-10xl mx-auto space-y-6 flex">
                <!-- Add New Payables Form -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 w-full mb-10 md:mb-0">
                    <!-- Payable Information Input Field -->
                    <div>
                        <!-- Payable Information -->
                        <div class="flex items-center justify-between mb-4 pt-3">
                            <div class="font-semibold text-xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Information</div>
                            
                            <!-- View Payable Button -->
                            <a href="{{ url('/payables/view?payable=' . $payable -> BUR)}}" type="button" class="mb-1 flex items-center justify-between font-medium text-xs text-indigo-800 dark:text-gray-200 leading-right flex font-['Inter'] hover:text-black active:text-cyan-700">
                                View Payable
                            </a>
                        </div>

                        <div class="mx-auto mt-5 font-['Inter']">
                            <!-- BUR Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR Number</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> BUR }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- End-user Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">End-user</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> EndUser }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Total Amount Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Total Amount</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Php {{ $payable -> Amount }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Current Location Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Current Location</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        @if($payable -> latestTracking)
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> latestTracking -> CurrentLocation }}</div>
                                        @else
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">No Tracking Information</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Terms of Payment Information Field -->    
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Terms of Payment</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> TermsPayment }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Remarks Information Field -->    
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Remarks</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        @if($payable -> latestTracking)
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> latestTracking -> CurrentStatus }}</div>
                                        @else
                                            <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">No Tracking Information</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Supplier Information Information Field -->
                    <div class="pt-5">
                        <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Supplier Information</div>

                        <div class="mx-auto mt-5 font-['Inter']">
                            <!-- Supplier Name Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Name</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> SupplierName }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Supplier Address Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Address</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> supplier -> Address }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Supplier Contact Number Information Field -->
                            <div class="mb-4">
                                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier Contact Number</div>
                                <div class="w-full h-9 px-3 py-2 bg-white rounded-md border border-gray-200 justify-start items-center gap-2 inline-flex">
                                    <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                        <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">{{ $payable -> supplier -> ContactNumber }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payable Tracking -->
                <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <!-- Payable Tracking Header -->
                    <div class="mb-5 flex items-center justify-between">
                        <div class="font-semibold text-xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Payable Tracking</div>

                        <!-- Button Group -->
                        <div class="flex gap-1 space">
                            <!-- Edit Existing Track -->
                            <div x-data = "{ show: false}" x-show = "show" x-on:open-edit-track.window="show = true"
                                x-on:close-edit-track.window="show = false"
                                style="display: none;" class="fixed z-50 inset-0">
                                <!-- Background -->
                                <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

                                <!-- Modal Content -->
                                <form enctype="multipart/form-data" action="{{ route('update.track', ['id' => $payable -> latestTracking -> ID]) }}" method="POST" class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg font-['Inter'] overflow-y-auto" style="height:420px;">
                                @csrf
                                    <div class="pb-5 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Edit Track</div>

                                    <!-- Edit Track Input Field -->
                                    <div>
                                        <!-- Current Status Input Field -->
                                        <div class="mb-4">
                                            <div class="flex items-center">
                                                <label for="CurrentStatus" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Status</label>
                                                <span class="text-red-500 p-1 pl-3">*</span>
                                            </div>
                                            <select id="CurrentStatus" name="CurrentStatus" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                <option selected>{{ $payable -> latestTracking -> CurrentStatus }}</option>    
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
                                                <option selected>{{ $payable -> latestTracking -> CurrentLocation }}</option>    
                                                <option value="Accounting">Accounting</option>
                                                <option value="Treasurer">Treasurer</option>
                                                <option value="Budgeting">Budgeting</option>
                                                <option value="Property">Property</option>
                                                <option value="OVPF">OVPF</option>
                                                <option value="COA">COA</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Date Dropdown Field -->
                                        <div class="mb-4">
                                            <div class="flex items-center">
                                                <label for="date" class="block mb-2 text-sm font-medium text-black dark:text-white">Date</label>
                                                <span class="text-red-500 p-1 pl-3">*</span>
                                            </div>
                                            <input type="date" id="CurrentDate" name="CurrentDate" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $payable -> latestTracking -> CurrentDate }}" required />
                                        </div>
                                    </div>

                                    <!-- Edit Track Footer -->
                                    <div class="flex justify-between pt-4">
                                        <!-- Cancel Button -->
                                        <button x-on:click="$dispatch('close-edit-track')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                            Cancel
                                        </button>

                                        <!-- Update Button -->
                                        <button onclick="return confirmAddTrack()" type="update" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <button x-data x-on:click="$dispatch('open-edit-track')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M7.33203 2.66667H2.66536C2.31174 2.66667 1.9726 2.80714 1.72256 3.05719C1.47251 3.30724 1.33203 3.64638 1.33203 4V13.3333C1.33203 13.687 1.47251 14.0261 1.72256 14.2761C1.9726 14.5262 2.31174 14.6667 2.66536 14.6667H11.9987C12.3523 14.6667 12.6915 14.5262 12.9415 14.2761C13.1916 14.0261 13.332 13.687 13.332 13.3333V8.66667M12.332 1.66665C12.5972 1.40144 12.957 1.25244 13.332 1.25244C13.7071 1.25244 14.0668 1.40144 14.332 1.66665C14.5972 1.93187 14.7462 2.29158 14.7462 2.66665C14.7462 3.04173 14.5972 3.40144 14.332 3.66665L7.9987 9.99999L5.33203 10.6667L5.9987 7.99999L12.332 1.66665Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Edit Existing Track
                            </button>
                                
                            <!-- Add Tracking Log -->
                            <div x-data = "{ show: false}" x-show = "show" x-on:open-add-track.window="show = true"
                                x-on:close-add-track.window="show = false" style="display: none;" class="fixed z-50 inset-0">
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
                                                <option value="COA">COA</option>
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

                            <button x-data x-on:click="$dispatch('open-add-track')" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] shadow bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path stroke="currentColor" d="M3.33203 8.50016H12.6654M7.9987 3.8335V13.1668" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Add Tracking Log
                            </button>
                        </div>
                    </div>
                    
                    <!-- Current Status Box -->
                    <div class="font-['Inter']">
                        @if ($payable -> latestTracking -> CurrentLocation == 'COA')
                            <div class="inline-flex flex-col items-start justify-start w-full gap-1.5 p-6 bg-[#059669] rounded-lg h-hug">
                            <!-- Heading -->
                                <div class="ms-2 text-gray-100 text-lg font-semibold font-['Inter'] leading-9">{{$payable -> latestTracking -> CurrentStatus}}</div>
                            <!-- Subcopy -->
                                <div class="ms-2 text-zinc-100 text-xs font-regular font-['Inter'] leading-none">Payable already submitted at {{ $payable -> latestTracking -> CurrentLocation }}</div>
                            </div>
                        @elseif ($payable -> latestTracking -> CurrentLocation == 'OVPF')
                            <div class="inline-flex flex-col items-start justify-start w-full gap-1.5 p-6 bg-[#0070FF] rounded-lg h-hug">
                            <!-- Heading -->
                                <div class="ms-2 text-gray-100 text-lg font-semibold font-['Inter'] leading-9">{{$payable -> latestTracking -> CurrentStatus}}</div>
                            <!-- Subcopy -->
                                <div class="ms-2 text-zinc-100 text-xs font-regular font-['Inter'] leading-none">Payable already at {{ $payable -> latestTracking -> CurrentLocation }}</div>
                            </div>
                        @else
                            <div class="inline-flex flex-col items-start justify-start w-full gap-1.5 p-6 bg-[#0070FF] rounded-lg h-hug">
                            <!-- Heading -->
                                <div class="ms-2 text-gray-100 text-lg font-semibold font-['Inter'] leading-9">{{$payable -> latestTracking -> CurrentStatus}}</div>
                            <!-- Subcopy -->
                                <div class="ms-2 text-zinc-100 text-xs font-regular font-['Inter'] leading-none">Payable already at {{ $payable -> latestTracking -> CurrentLocation }} Office</div>
                            </div>
                        @endif
                    </div>


                    <div class="pt-5">
                        <!-- BUR Number + Copy BUR Number Button Section -->
                        <div class="mb-6 items-center">
                            <!-- BUR Number -->
                            <div class="inline-flex items-center justify-start w-full gap-10 h-9">
                                <div class="text-gray-900 text-base font-medium font-['Inter'] leading-tight">BUR Number:</div>
                                <div class="flex items-center justify-start gap-2">
                                    <div id="bur-number" class="text-black text-base font-medium font-['Inter'] leading-tight">{{ $payable->BUR }}</div>
                                </div>

                                <!-- Copy BUR Number Button -->
                                <button id="copybtn" type="button" class="flex items-center justify-between font-medium text-xs text-indigo-800 dark:text-gray-200 leading-right flex font-['Inter'] hover:text-black active:text-cyan-700">
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path stroke="currentColor" d="M2.6849 10.6668C1.95156 10.6668 1.35156 10.0668 1.35156 9.3335V2.66683C1.35156 1.9335 1.95156 1.3335 2.6849 1.3335H9.35156C10.0849 1.3335 10.6849 1.9335 10.6849 2.66683M6.6849 5.3335H13.3516C14.0879 5.3335 14.6849 5.93045 14.6849 6.66683V13.3335C14.6849 14.0699 14.0879 14.6668 13.3516 14.6668H6.6849C5.94852 14.6668 5.35156 14.0699 5.35156 13.3335V6.66683C5.35156 5.93045 5.94852 5.3335 6.6849 5.3335Z" stroke="#2D349A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs> <clipPath id="clip0_4438_650"> <rect width="16" height="16" fill="white" transform="translate(0.0195312)"/></clipPath></defs>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <script>
                            document.getElementById('copybtn').addEventListener('click', function() {
                                var burNumber = document.getElementById('bur-number').textContent;
                                navigator.clipboard.writeText(burNumber).then(function() {
                                    console.log('BUR number copied to clipboard');
                                }, function(err) {
                                    console.error('Could not copy text: ', err);
                                });
                            });
                        </script>

                        <div class="mx-auto w-full">
                            <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
                                <table class="w-full table-auto text-sm text-left">
                                    <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                        <tr>
                                            <th class="px-6 py-3">Date</th>
                                            <th class="px-6 py-3">Time</th>
                                            <th class="px-6 py-3">Status</th>
                                            <th class="px-6 py-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 divide-y">
                                        @foreach($payable -> trackings as $tracking)
                                        <tr wire:key="{{ $tracking -> ID }}">
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 20%;" x-text="item.date">{{ \Carbon\Carbon::parse($tracking->CurrentDate)->format('m/d/Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 25%;">{{ \Carbon\Carbon::parse($tracking->CurrentTime)->format('h:i A') }}</td>
                                            <td class="flex items-center gap-x-3 py-3 px-6 whitespace-nowrap" style="width: 55%;">
                                                <div>
                                                    <span class="block text-gray-700 text-sm font-medium">{{ $tracking -> CurrentStatus }}</span>
                                                    <span class="block text-gray-700 text-xs mt-1 italic">{{ $tracking -> CurrentLocation }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
