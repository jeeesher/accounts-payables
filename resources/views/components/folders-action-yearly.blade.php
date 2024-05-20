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
        x-id="['dropdown-folders-action-yearly']"
        class="relative z-100 inset-0"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('dropdown-folders-action-yearly')"
            type="button"
            href="javascript:void(0)" class="py-2 leading-none duration-150"
        >
            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M7.9987 8.66699C8.36689 8.66699 8.66536 8.36851 8.66536 8.00033C8.66536 7.63214 8.36689 7.33366 7.9987 7.33366C7.63051 7.33366 7.33203 7.63214 7.33203 8.00033C7.33203 8.36851 7.63051 8.66699 7.9987 8.66699Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.9987 4.00033C8.36689 4.00033 8.66536 3.70185 8.66536 3.33366C8.66536 2.96547 8.36689 2.66699 7.9987 2.66699C7.63051 2.66699 7.33203 2.96547 7.33203 3.33366C7.33203 3.70185 7.63051 4.00033 7.9987 4.00033Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.9987 13.3337C8.36689 13.3337 8.66536 13.0352 8.66536 12.667C8.66536 12.2988 8.36689 12.0003 7.9987 12.0003C7.63051 12.0003 7.33203 12.2988 7.33203 12.667C7.33203 13.0352 7.63051 13.3337 7.9987 13.3337Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-folders-action-yearly')"
            style="display: none;"
            class="absolute right-0 mt-1 w-24 rounded-md bg-white shadow-md font-['Inter'] z-50"
        >  
            <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                Actions
            </div> 

            <a href="/folders/payable" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                View
            </a>

            <x-delete-folder />
            <button x-data x-on:click="$dispatch('open-delete-folder')" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Delete
            </button>
        </div>
    </div>
</div>
