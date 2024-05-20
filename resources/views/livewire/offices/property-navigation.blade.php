<div>
    <nav class="fixed top-0 z-50 w-full bg-white">
    <!-- Top Nav Bar -->
        <div class="px-3 py-6 lg:px-5 lg:pl-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="" class="flex items-center">
                            <img class="w-auto h-16 left-5 absolute" src="{{ asset('css/images/plm-logo--with-header 1.png') }}" alt="PLM"/>
                        </a>
                    </div>
                </div>            
                
                <div class="flex items-center">
                    <!-- Search Bar -->
                    <form class="flex items-center">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-2 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="w-96 h-10 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 border-none text-base font-normal font-['Nunito Sans'] leading-normal ml-2" placeholder="Search here"></input>
                        </div>
                    </form>

                    <!-- Dropdown Menu -->
                    <div class="flex items-center ms-2">
                        <x-menu-dropdown />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Side Nav Bar -->
    <aside id="logo-sidebar" class="fixed top-4 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#2D349A] border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">   
        <div class="px-7 py-5 absolute text-white text-xl font-semibold font-['Inter'] leading-9">Accounts Payable</div> 
        <div class="h-full py-16 px-6 pb-4 overflow-y-auto bg-[#2D349A] dark:bg-gray-800 flex flex-col">
            <ul class="space-y-2 font-medium flex flex-col flex-grow">
                <li>
                    <a href="/offices/bt/tracking" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                        <path d="M2.51562 9.50439L18.349 2.00439L10.849 17.8377L9.18229 11.1711L2.51562 9.50439Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Tracking</span>
                    </a>
                </li>
                <li>
                    <a href="/notifications" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                        <path d="M8.599 18.4642C8.73848 18.7179 8.94354 18.9295 9.19274 19.0769C9.44194 19.2242 9.72615 19.302 10.0157 19.302C10.3052 19.302 10.5894 19.2242 10.8386 19.0769C11.0878 18.9295 11.2928 18.7179 11.4323 18.4642M5.01562 7.63086C5.01562 6.30478 5.54241 5.03301 6.48009 4.09533C7.41777 3.15764 8.68954 2.63086 10.0156 2.63086C11.3417 2.63086 12.6135 3.15764 13.5512 4.09533C14.4888 5.03301 15.0156 6.30478 15.0156 7.63086C15.0156 13.4642 17.5156 15.1309 17.5156 15.1309H2.51562C2.51562 15.1309 5.01562 13.4642 5.01562 7.63086Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Notifications</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>
