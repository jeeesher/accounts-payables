<div>
    <div>
        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-20">
                <!-- Payables Header -->
                <div class="mb-4 flex items-center justify-between">
                    <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Payables</div>
                    
                    <!-- Button Group -->
                    <div class="flex space gap-1">
                        <!-- Year Filter Dropdown -->
                        <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M10.6667 1.33337V4.00004M5.33333 1.33337V4.00004M2 6.66671H14M3.33333 2.66671H12.6667C13.403 2.66671 14 3.26366 14 4.00004V13.3334C14 14.0698 13.403 14.6667 12.6667 14.6667H3.33333C2.59695 14.6667 2 14.0698 2 13.3334V4.00004C2 3.26366 2.59695 2.66671 3.33333 2.66671Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            2022 - 2023
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M7.9987 3.33337V12.6667M7.9987 12.6667L12.6654 8.00004M7.9987 12.6667L3.33203 8.00004" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <!-- Due Status Filter Dropdown-->
                        <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M6.66797 1.33337H9.33464M8.0013 9.33337L10.0013 7.33337M13.3346 9.33337C13.3346 12.2789 10.9468 14.6667 8.0013 14.6667C5.05578 14.6667 2.66797 12.2789 2.66797 9.33337C2.66797 6.38786 5.05578 4.00004 8.0013 4.00004C10.9468 4.00004 13.3346 6.38786 13.3346 9.33337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Due next year
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M7.9987 3.33337V12.6667M7.9987 12.6667L12.6654 8.00004M7.9987 12.6667L3.33203 8.00004" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <!-- Delete Button -->
                        <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M2 4.00004H14M12.6667 4.00004V13.3334C12.6667 14 12 14.6667 11.3333 14.6667H4.66667C4 14.6667 3.33333 14 3.33333 13.3334V4.00004M5.33333 4.00004V2.66671C5.33333 2.00004 6 1.33337 6.66667 1.33337H9.33333C10 1.33337 10.6667 2.00004 10.6667 2.66671V4.00004M6.66667 7.33337V11.3334M9.33333 7.33337V11.3334" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Delete
                        </button>

                        <!-- Sort Dropdown -->
                        <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Sort
                        </button>

                        <!-- Export Dropdown -->
                        <button type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M2.66754 9.9326C2.17224 9.42654 1.79859 8.81441 1.5749 8.14256C1.35121 7.47071 1.28335 6.75676 1.37645 6.0548C1.46955 5.35284 1.72118 4.68127 2.11227 4.09096C2.50337 3.50064 3.02367 3.00708 3.63377 2.64763C4.24386 2.28819 4.92776 2.0723 5.63365 2.01632C6.33955 1.96033 7.04892 2.06572 7.70805 2.32451C8.36718 2.58329 8.95878 2.98867 9.43803 3.50996C9.91728 4.03124 10.2716 4.65475 10.4742 5.33327H11.6675C12.3112 5.33319 12.9378 5.54015 13.4549 5.92356C13.9719 6.30697 14.3519 6.84651 14.5387 7.46247C14.7256 8.07843 14.7093 8.73815 14.4924 9.34418C14.2755 9.95021 13.8695 10.4704 13.3342 10.8279M8.00081 7.99994V13.9999M8.00081 13.9999L5.33415 11.3333M8.00081 13.9999L10.6675 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Export
                        </button>
                        
                        <!-- Add New Payable Button -->
                        <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M3.33203 8.00004H12.6654M7.9987 3.33337V12.6667" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Add New Payable
                        </button>
                    </div>
                </div>

                <!-- Payables Table -->
                <div x-data="dataHandler()">
                    <div class="mb-4 shadow-sm border rounded-lg overflow-x-auto" style="table-layout: fixed;">
                        <table class="w-full table-auto text-sm text-left">
                            <thead class="text-gray-500 font-medium border-b-2 bg-gray-50 border-gray-200 font-['Inter']">
                                <tr>
                                    <th class="py-3 px-6 flex items-center gap-x-4" style="white-space: nowrap;">
                                        <div>
                                            <input type="checkbox" id="checkbox-all-items" class="checkbox-item peer hidden"
                                                x-model="areAllChecked"
                                                @click="handleCheckboxItems">
                                            <label for="checkbox-all-items" class="relative flex w-5 h-5 bg-white peer-checked:bg-indigo-600 rounded-md border ring-offset-2 ring-indigo-600 duration-150 peer-active:ring cursor-pointer after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:w-1.5 after:h-2.5 after:border-r-2 after:border-b-2 after:border-white after:rotate-45"></label>
                                        </div>
                                        BUR Number
                                    </th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Supplier</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Particular</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Amount</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">End-User</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Current Location</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Terms of Payment</th>
                                    <th class="py-3 px-6" style="white-space: nowrap;">Remarks</th>
                                    <th class="py-3 px-6"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 divide-y">
                                <template x-for="(item, idx) in tableItems" :key="idx">
                                    <tr class="odd:bg-gray-50 even:bg-white">
                                        <td class="px-6 py-4 whitespace-nowrap flex items-center gap-x-4 font-semibold max-w-[180px]">
                                            <div>
                                                <input type="checkbox" :id="'checkbox-' + idx" :name="'checkbox-' + idx" class="checkbox-item peer hidden"
                                                    :checked="checkboxItems[`checkbox${idx}`]"
                                                    @click="handleCheckboxChange($event, idx)">
                                                <label :for="'checkbox-' + idx" class="relative flex w-5 h-5 bg-white peer-checked:bg-indigo-600 rounded-md border ring-offset-2 ring-indigo-600 duration-150 peer-active:ring cursor-pointer after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:w-1.5 after:h-2.5 after:border-r-2 after:border-b-2 after:border-white after:rotate-45"></label>
                                            </div>
                                            <span x-text="item.BUR"></span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.supplier"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.particular"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.amount"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.enduser"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[180px] overflow-hidden overflow-ellipsis">
                                            <template x-if="item.location === 'Accounting' || item.location === 'Budget' || item.location === 'Treasurer' || item.location === 'OVPFM' || item.location === 'PLM President'">
                                                <span>
                                                    <div class="w-26 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-left items-center gap-1.5 inline-flex">
                                                        <div class="w-2 h-2 relative">
                                                            <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                        </div>
                                                        <div x-text="item.location" class="text-emerald-700 text-xs font-medium font-['Inter'] leading-none"></div>
                                                    </div>
                                                </span>
                                            </template>
                                            <template x-if="item.location === 'COA'">
                                                <span>
                                                    <div class="w-26 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-left items-center gap-1.5 inline-flex">
                                                        <div class="w-2 h-2 relative">
                                                            <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                        </div>
                                                        <div x-text="item.location" class="text-gray-700 text-xs font-medium font-['Inter'] leading-none"></div>
                                                    </div>
                                                </span>
                                            </template>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.terms"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis" x-text="item.remarks"></td>
                                        <td class="text-right px-6 whitespace-nowrap">
                                            <button href="javascript:void(0)" class="py-2 leading-none duration-150">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M10.3333 11.3333C10.5985 11.3333 10.8528 11.4387 11.0404 11.6262C11.2279 11.8138 11.3333 12.0681 11.3333 12.3333C11.3333 12.5985 11.2279 12.8529 11.0404 13.0404C10.8528 13.228 10.5985 13.3333 10.3333 13.3333C10.068 13.3333 9.81368 13.228 9.62614 13.0404C9.43861 12.8529 9.33325 12.5985 9.33325 12.3333C9.33325 12.0681 9.43861 11.8138 9.62614 11.6262C9.81368 11.4387 10.068 11.3333 10.3333 11.3333ZM10.3333 6.66667C10.5985 6.66667 10.8528 6.77202 11.0404 6.95956C11.2279 7.1471 11.3333 7.40145 11.3333 7.66667C11.3333 7.93188 11.2279 8.18624 11.0404 8.37377C10.8528 8.56131 10.5985 8.66667 10.3333 8.66667C10.068 8.66667 9.81368 8.56131 9.62614 8.37377C9.43861 8.18624 9.33325 7.93188 9.33325 7.66667C9.33325 7.40145 9.43861 7.1471 9.62614 6.95956C9.81368 6.77202 10.068 6.66667 10.3333 6.66667ZM10.3333 2C10.5985 2 10.8528 2.10536 11.0404 2.29289C11.2279 2.48043 11.3333 2.73478 11.3333 3C11.3333 3.26522 11.2279 3.51957 11.0404 3.70711C10.8528 3.89464 10.5985 4 10.3333 4C10.068 4 9.81368 3.89464 9.62614 3.70711C9.43861 3.51957 9.33325 3.26522 9.33325 3C9.33325 2.73478 9.43861 2.48043 9.62614 2.29289C9.81368 2.10536 10.068 2 10.3333 2Z" fill="#667085"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-5 font-['Inter']" aria-label="Table navigation">
                        <ul class="ml-auto inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="me-2 mb-0.4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path stroke="currentColor" d="M15.8346 10H4.16797M4.16797 10L10.0013 15.8334M4.16797 10L10.0013 4.16669" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    Previous
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">8</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">9</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Next
                                    <svg class="ms-2 mb-0.4" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path stroke="currentColor" d="M4.16797 10H15.8346M15.8346 10L10.0013 4.16669M15.8346 10L10.0013 15.8334" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Script for Table -->
                <script>
                    function dataHandler() {
                        return {
                            tableItems: [
                                { BUR: "Bold Text Column", supplier: "Regular Text Columnnnnnnnnnnnnnnnnnnnxxxxxxxx", particular: "Regular Text Column", amount: "$100K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column", terms: "1 year"},
                                { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$90K", enduser: "Regular Text Column", location: "OVPFM", remarks: "Regular Text Column", terms: "1 year"},
                                { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$120K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column", terms: "6 months"},
                                { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$80K", enduser: "Regular Text Column", location: "Treasurer", remarks: "Regular Text Column", terms: "2 years"}
                            ],
                            areAllChecked: false,
                            checkboxItems: {},
                            handleCheckboxItems() {
                                this.areAllChecked = !this.areAllChecked;
                                this.tableItems.forEach((_, idx) => {
                                    this.checkboxItems[`checkbox${idx}`] = this.areAllChecked;
                                });
                            },
                            handleCheckboxChange(e, idx) {
                                this.areAllChecked = false;
                                this.checkboxItems[`checkbox${idx}`] = e.target.checked;
                                if (Object.values(this.checkboxItems).every(val => val === true)) this.areAllChecked = true;
                            },
                            init() {
                                this.tableItems.forEach((_, idx) => {
                                    this.checkboxItems[`checkbox${idx}`] = false;
                                });
                            }
                        };
                    }
                </script>
            </div>
        </div>
    </div>
</div>
