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
        x-id="['filter-payable-year']"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('filter-payable-year')"
            type="button"
            class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] shadow bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700"
        >
            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path stroke="currentColor" d="M10.6667 1.33337V4.00004M5.33333 1.33337V4.00004M2 6.66671H14M3.33333 2.66671H12.6667C13.403 2.66671 14 3.26366 14 4.00004V13.3334C14 14.0698 13.403 14.6667 12.6667 14.6667H3.33333C2.59695 14.6667 2 14.0698 2 13.3334V4.00004C2 3.26366 2.59695 2.66671 3.33333 2.66671Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Filter by payable year
            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path stroke="currentColor" d="M7.9987 3.33337V12.6667M7.9987 12.6667L12.6654 8.00004M7.9987 12.6667L3.33203 8.00004" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('filter-payable-year')"
            style="display: none;"
            class="absolute left-0 mt-1 w-44 rounded-md bg-white shadow-md font-['Inter']"
        >  
            <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                Select payable year
            </div>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                2022-2023
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                2020-2021
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                2018-2019
            </button>
        </div>
    </div>
</div>
