<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-20">
            <!-- Dashboard Header -->
            <div class="mb-4 pt-2 font-semibold text-2xl text-black leading-right flex font-['Inter']">Dashboard</div>
                
            <!-- Summary Section -->
            <div class="flex items-justify flex-col mb-6 pb-7 bg-gradient-to-b from-slate-500 to-indigo-800 border shadow rounded-lg border-zinc-200 font-['Inter']">
                <div class="pt-6 pl-8 text-[#EFF0FF] text-xl font-medium pb-9">Summary</div>

                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="pl-10 pb-4 text-zinc-100 text-base font-normal">Total Accounts Payable</div>
                        <div class="pl-10 text-white text-2xl font-medium">145</div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="pl-10 pb-4 text-zinc-100 text-base font-normal">Total Suppliers</div>
                        <div class="pl-10 text-white text-2xl font-medium">54</div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="pl-10 pb-4 text-zinc-100 text-base font-normal">Total Overdue Accounts Payable</div>
                        <div class="pl-10 text-white text-2xl font-medium">22</div>
                    </div>
                </div>
            </div>

            <div class="mx-auto grid grid-cols-1 gap-64 w-full">
                <!-- Recent Added Payables Section -->
                <div class="mb-16">
                    <div class="mb-4 flex items-center justify-between font-['Inter']">
                        <div class="font-semibold text-lg text-black leading-right flex">Recent Added Payables</div>
                        <a href="/payables" id="see-all-payables" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path stroke="currentColor" d="M10.668 3.59823H12.0013C12.3549 3.59823 12.6941 3.7387 12.9441 3.98875C13.1942 4.2388 13.3346 4.57794 13.3346 4.93156V14.2649C13.3346 14.6185 13.1942 14.9577 12.9441 15.2077C12.6941 15.4578 12.3549 15.5982 12.0013 15.5982H4.0013C3.64768 15.5982 3.30854 15.4578 3.05849 15.2077C2.80844 14.9577 2.66797 14.6185 2.66797 14.2649V4.93156C2.66797 4.57794 2.80844 4.2388 3.05849 3.98875C3.30854 3.7387 3.64768 3.59823 4.0013 3.59823H5.33464M6.0013 2.26489H10.0013C10.3695 2.26489 10.668 2.56337 10.668 2.93156V4.26489C10.668 4.63308 10.3695 4.93156 10.0013 4.93156H6.0013C5.63311 4.93156 5.33464 4.63308 5.33464 4.26489V2.93156C5.33464 2.56337 5.63311 2.26489 6.0013 2.26489Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            See All Payables
                        </a>
                    </div>

                    <!-- Payable Cards -->
                    <div class="w-full h-20 font-['Inter']">
                        <!-- 1st Payable Card -->
                        <div class="p-5 mb-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">BUR Number</div>
                            </div>   
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Supplier</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Particular</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Amount</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">End-User</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Current Location</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Terms of Payment</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Remarks</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <!-- 2nd Payable Card -->
                        <div class="p-5 mb-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">BUR Number</div>
                            </div>   
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Supplier</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Particular</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Amount</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">End-User</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Current Location</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Terms of Payment</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Remarks</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <!-- 3rd Payable Card -->
                        <div class="p-5 mb-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">BUR Number</div>
                            </div>   
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Supplier</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Particular</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Amount</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">End-User</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Current Location</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Terms of Payment</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Remarks</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <!-- 4th Payable Card -->
                        <div class="p-5 mb-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">BUR Number</div>
                            </div>   
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Supplier</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Particular</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Amount</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">End-User</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Current Location</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Terms of Payment</div>
                            </div> 
                            <div class="col-span-1">
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">Text</div>
                                <div class="text-zinc-500 text-xs font-normal">Remarks</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Opened Folders Section -->
                <div class="mb-8">
                    <div class="mb-4 flex items-center justify-between font-['Inter']">
                        <div class="font-semibold text-lg text-black leading-right flex">Recent Opened Folders</div>
                        <a href="/folders/main" type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] shadow border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path stroke="currentColor" d="M10.668 3.59823H12.0013C12.3549 3.59823 12.6941 3.7387 12.9441 3.98875C13.1942 4.2388 13.3346 4.57794 13.3346 4.93156V14.2649C13.3346 14.6185 13.1942 14.9577 12.9441 15.2077C12.6941 15.4578 12.3549 15.5982 12.0013 15.5982H4.0013C3.64768 15.5982 3.30854 15.4578 3.05849 15.2077C2.80844 14.9577 2.66797 14.6185 2.66797 14.2649V4.93156C2.66797 4.57794 2.80844 4.2388 3.05849 3.98875C3.30854 3.7387 3.64768 3.59823 4.0013 3.59823H5.33464M6.0013 2.26489H10.0013C10.3695 2.26489 10.668 2.56337 10.668 2.93156V4.26489C10.668 4.63308 10.3695 4.93156 10.0013 4.93156H6.0013C5.63311 4.93156 5.33464 4.63308 5.33464 4.26489V2.93156C5.33464 2.56337 5.63311 2.26489 6.0013 2.26489Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            See All Folders
                        </a>
                    </div>

                    <!-- Folder Cards -->
                    <div class="w-full h-20 font-['Inter']">
                        <div class="p-5 mb-4 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div>
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">2022-2023</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="p-5 mb-7 w-full bg-white border shadow border-zinc-200 inline-flex items-center justify-between">
                            <div>
                                <div class="text-base font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">2020-2021</div>
                            </div> 

                            <button class="w-10 h-10 justify-end bg-white rounded-md">
                                <svg class="me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 21" fill="none">
                                    <path stroke="currentColor" d="M4.16797 10.5294H15.8346M15.8346 10.5294L10.0013 4.69604M15.8346 10.5294L10.0013 16.3627" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
