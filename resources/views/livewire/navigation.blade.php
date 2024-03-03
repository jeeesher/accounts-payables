<div>
    <nav class="fixed top-0 z-50 w-full bg-white">
    <!-- Top Nav Bar -->
        <div class="px-3 py-6 lg:px-5 lg:pl-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="dashboard" class="flex items-center">
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
                    <div class="flex items-center ms-10">
                        <div>
                            <button type="button" class="inline-flex items-center text-sm leading-4 font-medium font-['Inter'] dark:focus:ring-gray-600 text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M19.8797 9.05015C19.8797 11.7085 17.7247 13.8635 15.0664 13.8635C12.4081 13.8635 10.2531 11.7085 10.2531 9.05015C10.2531 6.39182 12.4081 4.23682 15.0664 4.23682C17.7247 4.23682 19.8797 6.39182 19.8797 9.05015Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.0664 17.4735C10.4143 17.4735 6.64307 21.2447 6.64307 25.8968H23.4897C23.4897 21.2447 19.7185 17.4735 15.0664 17.4735Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>  
                                <div class="ml-2">Mara Calinao</div> <!-- should be the name of the user || Auth::user()->name if getting the name from the db record -->   
                                <div class="ms-1">  
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>  
                            </button>                 
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Side Nav Bar -->
    <aside id="logo-sidebar" class="fixed top-4 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#2D349A] border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">   
    <div class="px-7 py-6 absolute text-white text-xl font-semibold font-['Inter'] leading-9">Accounts Payable</div> 
    <div class="h-full py-16 px-6 pb-4 overflow-y-auto bg-[#2D349A] dark:bg-gray-800 flex flex-col">
        <ul class="space-y-2 font-medium flex flex-col flex-grow">
            <li>
                <a href="dashboard" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                    <svg class="w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 21">
                        <path d="M7.51562 18.4176V10.0843H12.5156V18.4176M2.51562 7.58431L10.0156 1.75098L17.5156 7.58431V16.751C17.5156 17.193 17.34 17.6169 17.0275 17.9295C16.7149 18.242 16.291 18.4176 15.849 18.4176H4.18229C3.74026 18.4176 3.31634 18.242 3.00378 17.9295C2.69122 17.6169 2.51563 17.193 2.51562 16.751V7.58431Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="ms-3 font-['Inter']">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="payables" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 25">
                        <path d="M17.0255 4.41767H19.0311C19.563 4.41767 20.0731 4.62896 20.4492 5.00508C20.8253 5.38119 21.0366 5.89131 21.0366 6.42322V20.4621C21.0366 20.994 20.8253 21.5041 20.4492 21.8803C20.0731 22.2564 19.563 22.4677 19.0311 22.4677H6.99774C6.46584 22.4677 5.95572 22.2564 5.5796 21.8803C5.20349 21.5041 4.99219 20.994 4.99219 20.4621V6.42322C4.99219 5.89131 5.20349 5.38119 5.5796 5.00508C5.95572 4.62896 6.46584 4.41767 6.99774 4.41767H9.0033M10.0061 2.41211H16.0227C16.5766 2.41211 17.0255 2.86107 17.0255 3.41489V5.42044C17.0255 5.97426 16.5766 6.42322 16.0227 6.42322H10.0061C9.45226 6.42322 9.0033 5.97426 9.0033 5.42044V3.41489C9.0033 2.86107 9.45226 2.41211 10.0061 2.41211Z" stroke="#FAFAFA" stroke-width="2.00957" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Payables</span>
                </a>
            </li>
            <li>
                <a href="tracking" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path d="M2.51562 9.50439L18.349 2.00439L10.849 17.8377L9.18229 11.1711L2.51562 9.50439Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Tracking</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path d="M8.599 18.4642C8.73848 18.7179 8.94354 18.9295 9.19274 19.0769C9.44194 19.2242 9.72615 19.302 10.0157 19.302C10.3052 19.302 10.5894 19.2242 10.8386 19.0769C11.0878 18.9295 11.2928 18.7179 11.4323 18.4642M5.01562 7.63086C5.01562 6.30478 5.54241 5.03301 6.48009 4.09533C7.41777 3.15764 8.68954 2.63086 10.0156 2.63086C11.3417 2.63086 12.6135 3.15764 13.5512 4.09533C14.4888 5.03301 15.0156 6.30478 15.0156 7.63086C15.0156 13.4642 17.5156 15.1309 17.5156 15.1309H2.51562C2.51562 15.1309 5.01562 13.4642 5.01562 7.63086Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Notifications</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path d="M1.68237 8.92415H18.349M3.34904 17.2575H16.6824C17.1244 17.2575 17.5483 17.0819 17.8609 16.7693C18.1734 16.4568 18.349 16.0328 18.349 15.5908V7.25749C18.349 6.81546 18.1734 6.39154 17.8609 6.07898C17.5483 5.76641 17.1244 5.59082 16.6824 5.59082H10.074C9.79953 5.5894 9.52962 5.52019 9.28829 5.38935C9.04696 5.25851 8.84169 5.07009 8.69071 4.84082L8.00737 3.84082C7.85639 3.61155 7.65112 3.42313 7.40979 3.29229C7.16846 3.16145 6.89855 3.09224 6.62404 3.09082H3.34904C2.90701 3.09082 2.48309 3.26641 2.17053 3.57898C1.85797 3.89154 1.68237 4.31546 1.68237 4.75749V15.5908C1.68237 16.5075 2.43237 17.2575 3.34904 17.2575Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Folders</span>
                </a>
            </li>
            <li class="mt-auto pb-10" style="margin-top: auto;">
                <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-gray-700 active:bg-cyan-700 group">
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                    <path d="M10.3923 2.50439H10.0257C9.58363 2.50439 9.1597 2.67999 8.84714 2.99255C8.53458 3.30511 8.35899 3.72903 8.35899 4.17106V4.32106C8.35869 4.61333 8.28153 4.90039 8.13527 5.15343C7.989 5.40647 7.77877 5.61659 7.52565 5.76273L7.16732 5.97106C6.91395 6.11734 6.62655 6.19435 6.33399 6.19435C6.04142 6.19435 5.75402 6.11734 5.50065 5.97106L5.37565 5.90439C4.99321 5.68378 4.53885 5.62393 4.11232 5.73798C3.68579 5.85204 3.32195 6.13067 3.10065 6.51273L2.91732 6.82939C2.6967 7.21184 2.63686 7.6662 2.75091 8.09273C2.86496 8.51926 3.1436 8.8831 3.52565 9.10439L3.65065 9.18773C3.90255 9.33315 4.112 9.54197 4.25819 9.79342C4.40439 10.0449 4.48223 10.3302 4.48399 10.6211V11.0461C4.48515 11.3397 4.40869 11.6285 4.26236 11.8832C4.11602 12.1378 3.90499 12.3492 3.65065 12.4961L3.52565 12.5711C3.1436 12.7924 2.86496 13.1562 2.75091 13.5827C2.63686 14.0093 2.6967 14.4636 2.91732 14.8461L3.10065 15.1627C3.32195 15.5448 3.68579 15.8234 4.11232 15.9375C4.53885 16.0515 4.99321 15.9917 5.37565 15.7711L5.50065 15.7044C5.75402 15.5581 6.04142 15.4811 6.33399 15.4811C6.62655 15.4811 6.91395 15.5581 7.16732 15.7044L7.52565 15.9127C7.77877 16.0589 7.989 16.269 8.13527 16.522C8.28153 16.7751 8.35869 17.0621 8.35899 17.3544V17.5044C8.35899 17.9464 8.53458 18.3703 8.84714 18.6829C9.1597 18.9955 9.58363 19.1711 10.0257 19.1711H10.3923C10.8343 19.1711 11.2583 18.9955 11.5708 18.6829C11.8834 18.3703 12.059 17.9464 12.059 17.5044V17.3544C12.0593 17.0621 12.1364 16.7751 12.2827 16.522C12.429 16.269 12.6392 16.0589 12.8923 15.9127L13.2507 15.7044C13.504 15.5581 13.7914 15.4811 14.084 15.4811C14.3765 15.4811 14.664 15.5581 14.9173 15.7044L15.0423 15.7711C15.4248 15.9917 15.8791 16.0515 16.3057 15.9375C16.7322 15.8234 17.096 15.5448 17.3173 15.1627L17.5007 14.8377C17.7213 14.4553 17.7811 14.0009 17.6671 13.5744C17.553 13.1479 17.2744 12.784 16.8923 12.5627L16.7673 12.4961C16.513 12.3492 16.302 12.1378 16.1556 11.8832C16.0093 11.6285 15.9328 11.3397 15.934 11.0461V10.6294C15.9328 10.3357 16.0093 10.0469 16.1556 9.7923C16.302 9.53768 16.513 9.32624 16.7673 9.1794L16.8923 9.10439C17.2744 8.8831 17.553 8.51926 17.6671 8.09273C17.7811 7.6662 17.7213 7.21184 17.5007 6.82939L17.3173 6.51273C17.096 6.13067 16.7322 5.85204 16.3057 5.73798C15.8791 5.62393 15.4248 5.68378 15.0423 5.90439L14.9173 5.97106C14.664 6.11734 14.3765 6.19435 14.084 6.19435C13.7914 6.19435 13.504 6.11734 13.2507 5.97106L12.8923 5.76273C12.6392 5.61659 12.429 5.40647 12.2827 5.15343C12.1364 4.90039 12.0593 4.61333 12.059 4.32106V4.17106C12.059 3.72903 11.8834 3.30511 11.5708 2.99255C11.2583 2.67999 10.8343 2.50439 10.3923 2.50439Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.209 13.3377C11.5897 13.3377 12.709 12.2184 12.709 10.8377C12.709 9.45702 11.5897 8.33773 10.209 8.33773C8.82827 8.33773 7.70898 9.45702 7.70898 10.8377C7.70898 12.2184 8.82827 13.3377 10.209 13.3377Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap font-['Inter']">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    </aside>
</div>
