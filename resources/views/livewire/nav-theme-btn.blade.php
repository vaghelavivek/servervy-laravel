<div class="justify-center flex flex-row items-center">
    <div class="flex flex-row justify-between toggle">
        <label for="dark-toggle" class="flex items-center cursor-pointer">
            <div class="relative">
                <input type="checkbox" name="dark-mode" id="dark-toggle" wire:click="themeToggle" onclick="darkToggle()"
                    class="checkbox hidden" />
                <div
                    class="border-white-5 shadow-toggle-btn border-[1px] border-black-50 rounded-full h-6 w-10 bg-white-50 dark:bg-white-5">
                </div>
                <div class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition flex items-center justify-center" id="dark-btn">
                    @if ($isDark)
                        <img src="{{ asset('images/svgs/moon.svg') }}" alt="Moon" />
                    @else
                        <img src="{{ asset('images/svgs/sun.svg') }}" alt="Sun" />
                    @endif
                </div>
            </div>
        </label>
    </div>

</div>
<script>
    // (function() {
    //     if (localStorage.getItem("darkMode")) {
    //         html.classList.add('dark');
    //     }
    // }())

    let darkToggleEle = document.getElementById('dark-toggle');
    let darkBtn = document.getElementById('dark-btn');
    let html = document.getElementById('html');
    const darkToggle = () => {
        if (darkToggleEle.checked) {
            html.classList.add('dark');
            localStorage.setItem('darkMode', true)
            // darkBtn.classList.add('icon-translate')
        } else {
            html.classList.remove('dark');
            localStorage.setItem('darkMode', false)
            // darkBtn.classList.remove('icon-translate')
        }
    }
    
    // if (JSON.parse(localStorage.getItem("darkMode"))) {
    //     html.classList.add('dark');
    //     darkBtn.classList.add('icon-translate')
    //     darkToggleEle.checked = true
    // }
</script>
