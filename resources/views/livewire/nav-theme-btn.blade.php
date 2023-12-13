<div class="justify-center flex flex-row items-center">
    <div class="flex flex-row justify-between toggle">
        <label for="dark-toggle" class="flex items-center cursor-pointer">
            <div class="relative">
                <input type="checkbox" name="dark-mode" id="dark-toggle" wire:click="themeToggle" class="checkbox hidden" />
                <div
                    class="border-white-5 shadow-toggle-btn border-[1px] border-black-50 rounded-full h-6 w-10 bg-white-50 dark:bg-white-5">
                </div>
                <div class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition flex items-center justify-center"
                    style="transform: translateX({{ $isDark ? 100 : 0 }}%)">
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
