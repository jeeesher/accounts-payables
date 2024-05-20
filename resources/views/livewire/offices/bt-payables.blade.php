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
                        <x-filter-payable-year />

                        <!-- Due Status Filter Dropdown-->
                        <x-filter-due-year />

                        <!-- Sort Dropdown -->
                        <x-sort-dropdown />

                        <!-- Export Dropdown -->
                        <x-export-dropdown />
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
                                    @foreach($payables as $payable)
                                    <tr class="odd:bg-gray-50 even:bg-white" wire:key="{{ $payable->BUR }}">
                                            <td class="px-6 py-4 whitespace-nowrap flex items-center gap-x-4 font-semibold max-w-[180px]">
                                                <div>
                                                    <input type="checkbox" id="checkbox-{{ $loop->index }}" 
                                                        class="checkbox-item peer hidden" x-model="checkboxItems[`{{ $loop->index }}`]" 
                                                        @click="handleCheckboxChange($event, {{ $loop->index }})"> 
                                                    <label for="checkbox-{{ $loop->index }}" class="relative flex w-5 h-5 bg-white peer-checked:bg-indigo-600 rounded-md border ring-offset-2 ring-indigo-600 duration-150 peer-active:ring cursor-pointer after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:w-1.5 after:h-2.5 after:border-r-2 after:border-b-2 after:border-white after:rotate-45"></label>
                                                </div>
                                                {{ $payable->BUR }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->SupplierName}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->ParticularDesc}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->    Amount}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->EndUser}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[180px] overflow-hidden overflow-ellipsis">{{$payable->CurrentLocation}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->TermsPayment}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->CurrentStatus}}</td>
                                            <td class="text-right px-6 whitespace-nowrap">
                                                <div class="flex justify-center">
                                                    <div
                                                        x-data="{
                                                            open: false,
                                                            toggle() {
                                                                if (this.open) {
                                                                    return this.close()
                                                                }

                                                                this.$refs.button.focus()

                                                                this.open = true
                                                            },
                                                            close(focusAfter) {
                                                                if (! this.open) return

                                                                this.open = false

                                                                focusAfter && focusAfter.focus()
                                                            }
                                                        }"
                                                        x-on:keydown.escape.prevent.stop="close($refs.button)"
                                                        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                                        x-id="['dropdown-table-action']"
                                                        class="relative z-100 inset-0"
                                                    >
                                                        <!-- Button -->
                                                        <button
                                                            x-ref="button"
                                                            x-on:click="toggle()"
                                                            :aria-expanded="open"
                                                            :aria-controls="$id('dropdown-table-action')"
                                                            type="button"
                                                            href="javascript:void(0)" class="py-2 leading-none duration-150"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <path d="M10.3333 11.3333C10.5985 11.3333 10.8528 11.4387 11.0404 11.6262C11.2279 11.8138 11.3333 12.0681 11.3333 12.3333C11.3333 12.5985 11.2279 12.8529 11.0404 13.0404C10.8528 13.228 10.5985 13.3333 10.3333 13.3333C10.068 13.3333 9.81368 13.228 9.62614 13.0404C9.43861 12.8529 9.33325 12.5985 9.33325 12.3333C9.33325 12.0681 9.43861 11.8138 9.62614 11.6262C9.81368 11.4387 10.068 11.3333 10.3333 11.3333ZM10.3333 6.66667C10.5985 6.66667 10.8528 6.77202 11.0404 6.95956C11.2279 7.1471 11.3333 7.40145 11.3333 7.66667C11.3333 7.93188 11.2279 8.18624 11.0404 8.37377C10.8528 8.56131 10.5985 8.66667 10.3333 8.66667C10.068 8.66667 9.81368 8.56131 9.62614 8.37377C9.43861 8.18624 9.33325 7.93188 9.33325 7.66667C9.33325 7.40145 9.43861 7.1471 9.62614 6.95956C9.81368 6.77202 10.068 6.66667 10.3333 6.66667ZM10.3333 2C10.5985 2 10.8528 2.10536 11.0404 2.29289C11.2279 2.48043 11.3333 2.73478 11.3333 3C11.3333 3.26522 11.2279 3.51957 11.0404 3.70711C10.8528 3.89464 10.5985 4 10.3333 4C10.068 4 9.81368 3.89464 9.62614 3.70711C9.43861 3.51957 9.33325 3.26522 9.33325 3C9.33325 2.73478 9.43861 2.48043 9.62614 2.29289C9.81368 2.10536 10.068 2 10.3333 2Z" fill="#667085"/>
                                                            </svg>
                                                        </button>
                                                        
                                                        <!-- Panel -->
                                                        <div
                                                            x-ref="panel"
                                                            x-show="open"
                                                            x-transition.origin.top.left
                                                            x-on:click.outside="close($refs.button)"
                                                            :id="$id('dropdown-table-action')"
                                                            style="display: none;"
                                                            class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50"
                                                        >  
                                                            <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                                                                Actions
                                                            </div>

                                                            <a href="/offices/bt/payables/view" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                View
                                                            </a>

                                                            <a href="/tracking/view" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Track
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    
                </div>

                <!-- Script for Table -->
                <script>
                    function dataHandler() {
                        return {
                            areAllChecked: false,
                            checkboxItems: {},

                            init() {
                                if (this.payables) {
                                    this.payables.forEach((_, idx) => {
                                        this.checkboxItems[idx] = false;
                                    });
                                }
                                
                            },

                            handleCheckboxItems() {
                                this.areAllChecked = !this.areAllChecked;
                                const checkboxes = document.querySelectorAll('.checkbox-item');

                                checkboxes.forEach(checkbox => {
                                    checkbox.checked = this.areAllChecked; 
                                });
                            },

                            handleCheckboxChange(e, idx) {
                                this.checkboxItems[idx] = e.target.checked;

                                this.areAllChecked = Object.values(this.checkboxItems).every(checked => checked);                           
                            }
                        };
                    }
                </script>
            </div>
        </div>
    </div>
</div>
