<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

<div>
    <div>
        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-20">
                <!-- My Account Header -->
                <div class="mb-4 pt-2 font-semibold text-2xl text-black leading-right flex font-['Inter']">My Account</div>

                <!-- Profile Information Edit Field -->
                <div class="flex items-justify flex-col mb-8 bg-white border shadow rounded-xl border-zinc-200 font-['Inter']">
                    <div class="p-6 flex-col gap-1.5 flex">
                        <div class="text-zinc-950 text-base font-semibold">Profile Information</div>
                        <div class="text-zinc-500 text-sm font-normal">Update your account’s name and email address.</div>
                    </div>
                    
                    <form class="w-full pl-6 pt-1 pb-3 mx-auto flex items-center">
                        <div class="w-full flex-col pr-6">
                            <!-- Name Edit Field -->
                            <div class="mb-4 mr-6 w-full">
                                <div class="flex items-center">
                                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-white">Name</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="name" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your new name" required />
                            </div>

                            <div class="mb-4 mr-6 w-full">
                                <div class="flex items-center">
                                    <label for="email" class="block mb-2 text-sm font-medium text-black dark:text-white">Email Address</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="email" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your new email address" required />
                            </div>
                        </div>
                    </form>

                    <!-- Save Changes Button -->
                    <div class="self-end pr-4 pb-5">
                        <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            Save Changes
                        </button>
                    </div>
                </div>

                <!-- Update Password Edit Field -->
                <div class="flex items-justify flex-col mb-8 bg-white border shadow rounded-xl border-zinc-200 font-['Inter']">
                    <div class="p-6 flex-col gap-1.5 flex">
                        <div class="text-zinc-950 text-base font-semibold">Update password</div>
                        <div class="text-zinc-500 text-sm font-normal">Ensure your password is long and random to stay secure.</div>
                    </div>
                    
                    <form class="w-full pl-6 pt-1 pb-3 mx-auto flex items-center">
                        <div class="w-full flex-col pr-6">
                            <!-- Current Password Edit Field -->
                            <div class="mb-4 mr-6 w-full">
                                <div class="flex items-center">
                                    <label for="CurPass" class="block mb-2 text-sm font-medium text-black dark:text-white">Current Password</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="CurPass" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your current password" required />
                            </div>

                            <!-- New Password Edit Field -->
                            <div class="mb-4 mr-6 w-full">
                                <div class="flex items-center">
                                    <label for="NewPass" class="block mb-2 text-sm font-medium text-black dark:text-white">New Password</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="NewPass" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your new password" required />
                            </div>

                            <!-- Confirm Password Edit Field -->
                            <div class="mb-4 mr-6 w-full">
                                <div class="flex items-center">
                                    <label for="ConfirmPass" class="block mb-2 text-sm font-medium text-black dark:text-white">Confirm Password</label>
                                    <span class="text-red-500 p-1 pl-3">*</span>
                                </div>
                                <input type="text" id="ConfirmPass" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your new password to confirm" required />
                            </div>
                        </div>
                    </form>

                    <!-- Save Changes Button -->
                    <div class="self-end pr-4 pb-5">
                        <button type="button" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
