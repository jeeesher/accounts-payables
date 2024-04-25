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
        x-id="['filter-due-year']"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('filter-due-year')"
            type="button"
            class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] shadow bg-zinc-100 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700"
        >
            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path stroke="currentColor" d="M6.66797 1.33337H9.33464M8.0013 9.33337L10.0013 7.33337M13.3346 9.33337C13.3346 12.2789 10.9468 14.6667 8.0013 14.6667C5.05578 14.6667 2.66797 12.2789 2.66797 9.33337C2.66797 6.38786 5.05578 4.00004 8.0013 4.00004C10.9468 4.00004 13.3346 6.38786 13.3346 9.33337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Filter by due year
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
            :id="$id('filter-due-year')"
            style="display: none;"
            class="absolute left-0 mt-1 w-44 rounded-md bg-white shadow-md font-['Inter']"
        >  
            <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                Select due year
            </div>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Due next year
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Due this year
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Due next 2 years
            </button>
        </div>
    </div>
</div>
