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
        x-id="['dropdown-sample']"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            x-on:click="toggle()"
            :aria-expanded="open"
            :aria-controls="$id('dropdown-sample')"
            type="button"
            class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700"
        >
            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path stroke="currentColor" d="M2.66754 9.9326C2.17224 9.42654 1.79859 8.81441 1.5749 8.14256C1.35121 7.47071 1.28335 6.75676 1.37645 6.0548C1.46955 5.35284 1.72118 4.68127 2.11227 4.09096C2.50337 3.50064 3.02367 3.00708 3.63377 2.64763C4.24386 2.28819 4.92776 2.0723 5.63365 2.01632C6.33955 1.96033 7.04892 2.06572 7.70805 2.32451C8.36718 2.58329 8.95878 2.98867 9.43803 3.50996C9.91728 4.03124 10.2716 4.65475 10.4742 5.33327H11.6675C12.3112 5.33319 12.9378 5.54015 13.4549 5.92356C13.9719 6.30697 14.3519 6.84651 14.5387 7.46247C14.7256 8.07843 14.7093 8.73815 14.4924 9.34418C14.2755 9.95021 13.8695 10.4704 13.3342 10.8279M8.00081 7.99994V13.9999M8.00081 13.9999L5.33415 11.3333M8.00081 13.9999L10.6675 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span x-data="{ selectedYear: '2022 - 2023' }" x-text="selectedYear"></span>
        </button>

        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-sample')"
            style="display: none;"
            class="absolute left-0 mt-1 w-44 rounded-md bg-white shadow-md font-['Inter'] z-10"
        >  
            <div class="flex items-center gap-2 w-full border-b-2 px-4 py-2.5 text-left text-sm font-semibold disabled:text-gray-500">
                Select Payable Year
            </div>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500"
            x-on:click =" { selectedYear = '2022 - 2023' } ">
                2022-2023
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500"
            x-on:click =" { selectedYear = '2021 - 2022' } ">
                2021-2022
            </button>

            <button class="flex items-center justify-between gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500"
            x-on:click =" { selectedYear = '2020 - 2021' } ">
                2020-2021
            </button>
        </div>
    </div>
</div>
