<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-16">
            <!-- Notifications Header -->
            <div class="mt-4 flex items-center justify-between mb-4">
                <div class="font-semibold text-2xl text-black dark:text-gray-200 leading-right flex font-['Inter']">Notifications</div>

            <!-- Tab Buttons -->
                <div class="inline-flex items-start justify-start gap-2 px-3 py-2 rounded-lg ml-7 bg-zinc-100 ">
                    <button class="inline-flex h-7 items-center text-zinc-500 text-sm font-medium font-['Inter'] bg-zinc-100 hover:shadow hover:bg-white hover:text-zinc-950 focus:ring-1 focus:ring-zinc-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-white active:border-zinc-950 active:shadow ">
                        All
                    </button>
                    <button class="inline-flex h-7 items-center text-zinc-500 text-sm font-medium font-['Inter'] bg-zinc-100 hover:shadow hover:bg-white hover:text-zinc-950 focus:ring-1 focus:ring-zinc-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-white active:border-zinc-950 active:shadow ">
                        Read
                    </button>
                    <button class="inline-flex h-7 items-center text-zinc-500 text-sm font-medium font-['Inter'] bg-zinc-100 hover:shadow hover:bg-white hover:text-zinc-950 focus:ring-1 focus:ring-zinc-200 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-white active:border-zinc-950 active:shadow ">
                        Unread
                    </button>
                </div>
            </div>

            <!-- Today Notifications -->
            {{--<div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Today</div>--}}
            <div class="w-full bg-white dark:bg-gray-800 sm:rounded-lg md:mb-6 ">
            <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
                    <table class="w-full text-sm text-left table-auto">
                        <thead class="font-medium text-gray-600 border-b bg-gray-50">
                            <tr>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Time</th>
                                <th class="px-6 py-4">Message</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 divide-y">
                            @foreach($notifications as $notification)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis">{{ $notification->created_at->format('m/d/y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis">{{ $notification->created_at->format('H:i:s') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis text-black font-medium">{{ $notification->message }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                        <table class="w-full text-sm text-left table-auto">
                            <thead class="font-medium text-gray-600 border-b bg-gray-50">
                            </thead>
                            <tbody class="text-gray-600 divide-y">
                                <template x-for="(item, idx) in tableItems" :key="idx">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 20%;" x-text="item.date"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 20%;" x-text="item.time"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis text-black font-medium" style="width: 60%;" x-text="item.status"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--
            <!-- Yesterday Notifications -->
            <div class="font-semibold text-lg text-black dark:text-gray-200 leading-right flex font-['Inter']">Yesterday</div>
            <div class="w-full bg-white dark:bg-gray-800 sm:rounded-lg md:mb-0">
                <div x-data="{ 
                    tableItems: [
                            { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },
                            { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },
                            { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },
                            { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },
                            { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },                                { date: '00/00/0000', 'time': '00:00:00', 'status': 'Regular text column' },
                    ]}" class="w-full mx-auto">
                            
                    <div class="mt-3 rounded-md overflow-x-auto font-['Inter']">
                        <table class="w-full text-sm text-left table-auto">
                            <thead class="font-medium text-gray-600 border-b bg-gray-50">
                            </thead>
                            <tbody class="text-gray-600 divide-y">
                                <template x-for="(item, idx) in tableItems" :key="idx">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 20%;" x-text="item.date"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" style="width: 20%;" x-text="item.time"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis text-black font-medium" style="width: 60%;" x-text="item.status"></td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>
</div>