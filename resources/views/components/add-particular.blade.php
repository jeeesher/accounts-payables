<div 
    x-data = "{ show: false}" 
    x-show = "show"
    x-on:open-add-particular.window="show = true"
    x-on:close-add-particular.window="show = false"
    style="display: none;"
    
    class="fixed z-50 inset-0"
    >

    <!-- Background -->
    <div class="fixed inset-0 bg-zinc-900 opacity-50"></div>

    <!-- Modal Content -->
    <div class="fixed inset-0 bg-white rounded-md p-6 m-auto w-auto max-w-lg h-96 max-h-96 font-['Inter'] overflow-y-auto">
        <div class="pb-3 font-semibold text-lg text-black dark:text-gray-200 leading-right flex">Add Particular</div>

        <div id="particulars-container" class="h-60 max-h-60 overflow-y-auto">      
            <div class="particular-item">     
                <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Particular 1</div>

                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                    <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                        <input type="text" name="particulars[0][ParticularDesc]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Particular" required />
                    </div>

                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0 me-4" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <input type="number" step="0.01" name="particulars[0][ParticularAmount]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount" required />
                    </div>
                </div>
            </div>     
        </div>
        
        <!-- Particulars Footer -->
        <footer class="flex justify-between pt-4">
            <!-- Cancel Button -->
            <button x-on:click="$dispatch('close-add-particular')" type="button" class="inline-flex items-center text-zinc-950 text-sm font-medium font-['Inter'] bg-white border border-zinc-200 shadow hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Close
            </button>

            <!-- Insert Another Particular Button -->
            <button type="button" id="add-particular-btn" class="inline-flex items-center text-white text-sm font-medium font-['Inter'] bg-[#2D349A] border border-zinc-200 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-200 rounded-lg text-sm px-4 py-2 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 active:bg-cyan-700">
                Insert Another Particular
            </button>
        </footer>
    </div>
</div>

<script>
    document.getElementById('add-particular-btn').addEventListener('click', function() {
        const container = document.getElementById('particulars-container');
        const count = container.querySelectorAll('.particular-item').length;
        const div = document.createElement('div');
        div.classList.add('particular-item');
        div.innerHTML = `
                <div class="flex justify-between">
                    <div class="mb-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Particular ${count + 1}</div>
                    
                    <div class="flex items-center">
                        <button type="button" class="delete-particular-btn text-red-600 ml-2 me-4">
                            <svg class="me-2 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path stroke="currentColor" d="M2 4.00016H14M12.6667 4.00016V13.3335C12.6667 14.0002 12 14.6668 11.3333 14.6668H4.66667C4 14.6668 3.33333 14.0002 3.33333 13.3335V4.00016M5.33333 4.00016V2.66683C5.33333 2.00016 6 1.3335 6.66667 1.3335H9.33333C10 1.3335 10.6667 2.00016 10.6667 2.66683V4.00016M6.66667 7.3335V11.3335M9.33333 7.3335V11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>    
                </div>

                <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                    <div class="lg:w-1/2 md:w-1/2 bg-white overflow-hidden sm:mr-5 w-full items-end justify-start relative font-['Inter']">
                        <input type="text" name="particulars[${count}][ParticularDesc]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Particular" required />
                    </div>

                    <div class="lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0 me-4" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                        <input type="number" step="0.01" name="particulars[${count}][ParticularAmount]" class="bg-white border border-zinc-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount" required />
                    </div>
                </div>
        `;
        container.appendChild(div);
        addDeleteButtonFunctionality();
    });

    function addDeleteButtonFunctionality() {
        document.querySelectorAll('.delete-particular-btn').forEach(function(button) {
            button.removeEventListener('click', handleDelete); // Remove existing listener to avoid duplicates
            button.addEventListener('click', handleDelete); // Add event listener for delete
        });
    }

    function handleDelete(event) {
        const particularItem = event.target.closest('.particular-item');
        particularItem.remove();
        renumberParticulars();
    }

    function renumberParticulars() {
        const container = document.getElementById('particulars-container');
        const items = container.querySelectorAll('.particular-item');
        items.forEach((item, index) => {
            const label = item.querySelector('.mb-3');
            label.textContent = `Particular ${index + 1}`;
            const descInput = item.querySelector('input[type="text"]');
            const amountInput = item.querySelector('input[type="number"]');
            descInput.name = `particulars[${index}][ParticularDesc]`;
            amountInput.name = `particulars[${index}][ParticularAmount]`;
        });
    }

    addDeleteButtonFunctionality();
</script>