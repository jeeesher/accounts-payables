<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- BUR Header -->
            <div class="mt-4 mb-4 flex items-center justify-between">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">{{ $folderPayable }}</div>

                <!-- Button Group -->
                <div class="flex gap-1 space">
                    <!-- Back Button -->
                    <a href="{{ session('previous_url', url('/folders/main')) }}" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path stroke="currentColor" d="M15.0013 12.7503H10.0013V16.0837L4.16797 10.2503L10.0013 4.41699V7.75033H15.0013V12.7503Z" stroke="#18181B" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Back
                    </a>
                    
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
                        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" class="fixed inset-0 bg-white rounded-md p-6 m-auto h-96 w-auto max-w-lg font-['Inter'] overflow-y-auto">
                            @csrf
                            <div class="pb-4 font-semibold text-base text-black dark:text-gray-200 leading-right flex">Add New Document</div>

                            <div>
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
                                            <input id="dropzone-file" type="file" name="file" class="hidden" />
                                        </label>
                                    </div>  
                                </div>
                                <div class="mb-2">
                                    <div class="flex items-center">
                                        <label for="DocumentType" class="block mb-2 text-sm font-medium text-black dark:text-white">Document Type</label>
                                        <span class="text-red-500 p-1 pl-3">*</span>
                                    </div>
                                    <select id="DocumentType" name="column" class="bg-white border border-zinc-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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
                                <input type="hidden" name="BUR" value="{{ $folderPayable }}">
                            </div>
                            
                            <!-- Add New Document Footer -->
                            <div class="flex justify-between pt-4">
                                <!-- Cancel Button -->
                                <button x-on:click="$dispatch('close-add-document')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    Cancel
                                </button>

                                <!-- Add Document Button -->
                                <button type="submit" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                                    Add Document
                                </button>
                            </div>
                        </form>
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
                    @if($ap_files && $ap_files->count() > 0)
                        @foreach($ap_files as $files)
                            @php
                                $hasFile = false;
                            @endphp

                            @if($files->IAR_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->IAR_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Inspection and Acceptance Report Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->IAR_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'IAR_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->SRIDE_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->SRIDE_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Supplies Received and Issued Directly to End-User Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->SRIDE_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'SRIDE_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->RIS_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->RIS_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Requisition and Issue Slip Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->RIS_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'RIS_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->DR_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->DR_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Delivery Receipt Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->DR_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'DR_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->SI_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->SI_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Sales Invoice Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->SI_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'SI_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->CRPO_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->CRPO_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Checklist of Requirements from Procurement Office Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->CRPO_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'CRPO_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->BUR_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->BUR_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Budget Utilization Receipt Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->BUR_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'BUR_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->Cheque_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->Cheque_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Cheque Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->Cheque_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'Cheque_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($files->DV_File)
                                @php $hasFile = true; @endphp
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">{{ basename($files->DV_File) }}</div>
                                        <div class="inline-flex items-center justify-center w-auto rounded-md h-9">
                                            <div class="text-gray-500 text-sm font-normal font-['Inter'] leading-tight mr-5">
                                                Disbursement Voucher Document
                                            </div>
                                            <!-- Folders Payable Dropdown -->
                                            <div class="flex justify-center">
                                                <div x-data="{ open: false, toggle() { this.open = !this.open }, close() { this.open = false } }" class="relative z-100 inset-0">
                                                    <button x-on:click="toggle()" type="button" class="py-2 leading-none duration-150">
                                                        <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" x-transition.origin.top.left x-on:click.outside="close()" class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50">
                                                        <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">Actions</div>
                                                        <button class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                            <a href="{{ asset($files->DV_File) }}" target="_blank">View</a>
                                                        </button>
                                                        <form action="{{ route('delete.file', ['BUR' => $files->BUR, 'column' => 'DV_File']) }}" method="POST" onsubmit="return confirmDeleteFile()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="flex items-center justify-between gap-2 w-full px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Fallback message if no files available -->
                            @if(!$hasFile)
                                <div class="w-full mb-4">
                                    <div class="p-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between h-12 rounded-md shadow">
                                        <div class="text-sm font-medium text-zinc-950 leading-tight">No files available</div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>