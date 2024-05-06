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
        x-id="['dropdown-menu']"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('dropdown-menu')"
            type="button"
            class="flex items-center gap-2 bg-white px-5 py-1.5 text-sm leading-4 font-medium font-['Inter'] dark:focus:ring-gray-600 text-gray-500 dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300"
        >
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path stroke="currentColor" d="M19.8797 9.05015C19.8797 11.7085 17.7247 13.8635 15.0664 13.8635C12.4081 13.8635 10.2531 11.7085 10.2531 9.05015C10.2531 6.39182 12.4081 4.23682 15.0664 4.23682C17.7247 4.23682 19.8797 6.39182 19.8797 9.05015Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                <path stroke="currentColor" d="M15.0664 17.4735C10.4143 17.4735 6.64307 21.2447 6.64307 25.8968H23.4897C23.4897 21.2447 19.7185 17.4735 15.0664 17.4735Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="flex flex-col items-start font-['Inter']">
                <div class="text-sm font-semibold">Mara Calinao</div>
                <div class="text-xs"> Accounting Officer </div>
            </div>
            <!-- should be the name of the user || Auth::user()->name if getting the name from the db record --> 
            
            <!-- should be the role of the user || Auth::user()->role if getting the role from the db record -->                                  

            <!-- Heroicon: chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path stroke="currentColor" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-menu')"
            style="display: none;"
            class="absolute right-3 mt-1 w-40 rounded-md bg-white shadow-md font-['Inter']"
        >  
            <a href="/accounts" class="flex items-center gap-2 w-full border-b-2 first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm font-semibold hover:bg-gray-50 disabled:text-gray-500">
                My Account
            </a>

            <a href="#" class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Log out
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <path stroke="currentColor" d="M5 13H2.33333C1.97971 13 1.64057 12.8595 1.39052 12.6095C1.14048 12.3594 1 12.0203 1 11.6667V2.33333C1 1.97971 1.14048 1.64057 1.39052 1.39052C1.64057 1.14048 1.97971 1 2.33333 1H5M9.66667 10.3333L13 7M13 7L9.66667 3.66667M13 7H5" stroke="#71717A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
