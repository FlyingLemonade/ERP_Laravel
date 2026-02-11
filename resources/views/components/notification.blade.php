<div id="toast-container"
    class="fixed top-5 right-5 z-50 space-y-4">

    <div id="toast"
        class="hidden transform transition-all duration-300 ease-out
                translate-x-10 opacity-0
                bg-white rounded-lg border border-gray-300
                shadow-lg p-4 min-w-[300px]">

        <div class="flex items-start">

            <!-- Icon -->
            <div class="mr-3 text-green-500">
                <svg width="24" height="24" viewBox="0 0 1792 1792" fill="#44C997" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
                </svg>
            </div>

            <!-- Content -->
            <div class="flex-1">
                <p class="font-semibold text-gray-800">
                    Change Successfully Saved!
                </p>
                <p class="text-sm text-gray-500">
                    Your inventory item was updated.
                </p>
            </div>

            <!-- Close Button -->
            <button onclick="closeToast()"
                class="ml-4 text-gray-400 hover:text-gray-600 text-lg leading-none">
                &times;
            </button>

        </div>
    </div>
</div>

<script>
    function showToast() {
        const toast = document.getElementById('toast');

        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.remove('translate-x-10', 'opacity-0');
        }, 10);

        setTimeout(() => {
            closeToast();
        }, 5000);
    }

    function closeToast() {
        const toast = document.getElementById('toast');
        toast.classList.add('translate-x-10', 'opacity-0');

        setTimeout(() => {
            toast.classList.add('hidden');
        }, 300);
    }
</script>