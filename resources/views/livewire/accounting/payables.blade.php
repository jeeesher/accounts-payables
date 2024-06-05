<div>
    <div>
        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-20">
                <!-- Payables Header -->
                <div class="mb-4 flex items-center">
                    <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Payables</div>
                </div>

                <div class="mb-3 flex items-center justify-between">
                    <!-- Search Bar -->
                    <div class = "flex items-center">
                        <form action="{{ url()->current() }}" method="GET" class="flex items-center">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-2 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                </div> 
                                <input type="text" value="{{ request('searchBUR') }}" id="default-search" name= "searchBUR" class="form-input w-96 h-9 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 border-none text-base font-normal font-['Nunito Sans'] leading-normal ml-2" placeholder="Search here"></input>
                            </div>
                        </form>
                    </div>

                    <div class="flex gap-1">
                        <!-- Sort Dropdown -->
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
                                x-id="['dropdown-sort']"
                                class="relative"
                            >
                                <!-- Button -->
                                <button
                                    x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-sort')"
                                    type="button"
                                    class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700"
                                >
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Sort
                                </button>

                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-sort')"
                                    style="display: none;"
                                    class="absolute right-0 mt-1 w-28 rounded-md bg-white shadow-md font-['Inter']"
                                >  
                                    <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                                        Sort by
                                    </div>

                                    <button wire:click="setSort('desc')" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Newest
                                    </button>

                                    <button wire:click="setSort('asc')" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Oldest
                                    </button>
                                </div>
                            </div>
                        </div>


                        <!-- Export Dropdown -->
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
                                x-id="['dropdown-export']"
                                class="relative"
                            >
                                <!-- Button -->
                                <button
                                    x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-export')"
                                    type="button"
                                    class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700"
                                >
                                    <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path stroke="currentColor" d="M2.66754 9.9326C2.17224 9.42654 1.79859 8.81441 1.5749 8.14256C1.35121 7.47071 1.28335 6.75676 1.37645 6.0548C1.46955 5.35284 1.72118 4.68127 2.11227 4.09096C2.50337 3.50064 3.02367 3.00708 3.63377 2.64763C4.24386 2.28819 4.92776 2.0723 5.63365 2.01632C6.33955 1.96033 7.04892 2.06572 7.70805 2.32451C8.36718 2.58329 8.95878 2.98867 9.43803 3.50996C9.91728 4.03124 10.2716 4.65475 10.4742 5.33327H11.6675C12.3112 5.33319 12.9378 5.54015 13.4549 5.92356C13.9719 6.30697 14.3519 6.84651 14.5387 7.46247C14.7256 8.07843 14.7093 8.73815 14.4924 9.34418C14.2755 9.95021 13.8695 10.4704 13.3342 10.8279M8.00081 7.99994V13.9999M8.00081 13.9999L5.33415 11.3333M8.00081 13.9999L10.6675 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Export
                                </button>

                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-export')"
                                    style="display: none;"
                                    class="absolute left-0 mt-1 w-28 rounded-md bg-white shadow-md font-['Inter'] z-10"
                                >  
                                    <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                                        Export as
                                    </div>

                                    <a href="{{ route('payables.export') }}" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Excel
                                    </a>

                                    <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        PDF
                                    </button>
                                </div>
                            </div>
                        </div>


                        <!-- Add New Payable Button -->
                        <a href="/payables/add" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 mb-2 ms-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M3.33203 8.00004H12.6654M7.9987 3.33337V12.6667" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Add New Payable
                        </a>
                    </div>
                </div>

                <!-- Payables Table -->
                <div x-data="dataHandler()">
                    <div class="mb-4 shadow-sm border font-['Inter']" style="table-layout: fixed;">
                        <table class="w-full table-auto text-sm text-left">
                            <thead class="text-gray-500 font-medium border-b-2 bg-gray-50 border-gray-200 font-['Inter']">
                                <tr>
                                    <th class="py-3 px-6 flex items-center gap-x-4" style="white-space: nowrap;">BUR Number</th>
                                    <th class="py-3 px-5" style="white-space: nowrap;">Supplier</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">Particular</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">Amount</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">End-User</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">Current Location</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">Terms of Payment</th>
                                    <th class="py-3 px-4" style="white-space: nowrap;">Remarks</th>
                                    <th class="py-3 px-3"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 divide-y">
                                @if ($searchBUR = request('searchBUR'))
                                    @foreach ($payables->filter(function ($payable) use ($searchBUR) {
                                        return strpos($payable->BUR, $searchBUR) !== false;
                                    }) as $payable)
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
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">Php {{$payable->Amount}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->EndUser}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[180px] overflow-hidden overflow-ellipsis">
                                                    @if ($payable->latestTracking->CurrentLocation == 'COA')
                                                        <span>
                                                            <div class="w-26 h-6 pl-2 pr-2 py-1 bg-gray-100 rounded-2xl justify-left items-center gap-1.5 inline-flex text-gray-700 text-xs font-medium">
                                                                <div class="w-2 h-2 pb-3 relative">
                                                                    <div class="w-2 h-2 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                                </div>
                                                                {{$payable->latestTracking->CurrentLocation}}
                                                            </div>
                                                        </span>
                                                    @else
                                                        <span>
                                                            <div class="w-26 h-6 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-left items-center gap-1.5 inline-flex text-emerald-700 text-xs font-medium">
                                                                <div class="w-2 h-2 pb-3 relative">
                                                                    <div class="w-2 h-2 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                                </div>
                                                                {{$payable->latestTracking->CurrentLocation}}
                                                            </div>
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->TermsPayment}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->latestTracking->CurrentStatus}}</td>
                                                <td class="text-right px-3 whitespace-nowrap">
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

                                                                @php
                                                                    $urledit = '/payables/edit?payable=' . $payable -> BUR;
                                                                @endphp

                                                                <a href="{{ $urledit }}" wire:navigate class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                    Edit
                                                                </a>
                                                                
                                                                @php
                                                                    $urlpayable = '/payables/view?payable=' . $payable -> BUR;
                                                                @endphp

                                                                <a href="{{ $urlpayable }}" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                    View
                                                                </a>

                                                                @php
                                                                    $urltracking = '/tracking/view?payable=' . $payable -> BUR;
                                                                @endphp

                                                                <a href="{{ $urltracking }}" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                    Track
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                        </tr>
                                    @endforeach
                                @else
                                    @foreach($payables as $payable)
                                        <tr class="odd:bg-gray-50 even:bg-white" wire:key="{{ $payable->BUR }}">
                                            <td class="px-6 py-4 whitespace-nowrap flex items-center gap-x-4 font-semibold max-w-[180px]">{{ $payable->BUR }}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->SupplierName}}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->ParticularDesc}}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">Php {{$payable->Amount}}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->EndUser}}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[180px] overflow-hidden overflow-ellipsis">
                                                @if ($payable->latestTracking->CurrentLocation == 'COA')
                                                    <span>
                                                        <div class="w-26 h-6 pl-2 pr-2 py-1 bg-gray-100 rounded-2xl justify-left items-center gap-1.5 inline-flex text-gray-700 text-xs font-medium">
                                                            <div class="w-2 h-2 pb-3 relative">
                                                                <div class="w-2 h-2 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                            </div>
                                                            {{$payable->latestTracking->CurrentLocation}}
                                                        </div>
                                                    </span>
                                                @else
                                                    <span>
                                                        <div class="w-26 h-6 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-left items-center gap-1.5 inline-flex text-emerald-700 text-xs font-medium">
                                                            <div class="w-2 h-2 pb-3 relative">
                                                                <div class="w-2 h-2 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                            </div>
                                                            {{$payable->latestTracking->CurrentLocation}}
                                                        </div>
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->TermsPayment}}</td>
                                            <td class="px-5 py-4 whitespace-nowrap max-w-[150px] overflow-hidden overflow-ellipsis">{{$payable->latestTracking->CurrentStatus}}</td>
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

                                                            @php
                                                                $urledit = '/payables/edit?payable=' . $payable -> BUR;
                                                            @endphp

                                                            <a href="{{ $urledit }}" wire:navigate class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Edit
                                                            </a>
                                                            
                                                            @php
                                                                $urlpayable = '/payables/view?payable=' . $payable -> BUR;
                                                            @endphp

                                                            <a href="{{ $urlpayable }}" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                View
                                                            </a>

                                                            @php
                                                                $urltracking = '/tracking/view?payable=' . $payable -> BUR;
                                                            @endphp

                                                            <a href="{{ $urltracking }}" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                                                Track
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>