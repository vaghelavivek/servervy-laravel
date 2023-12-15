<section class="performance-back-img bg-no-repeat bg-[length:auto_100%] bg-center px-4">
    <div class="container mx-auto xl:mt-[150px] mt-[120px]">
        <div class="max-w-[1220px] mx-auto">
            <div class="mx-auto text-center">
                <span class="px-3.5 py-[5px] 2xl:text-[17px] text-[15px] rounded-[76px] bg-[#3C95FF] text-white">Any text
                    about!</span>
                <h2
                    class="mx-auto mt-3.5 mb-[22px] text-primary dark:text-white text-[38px] 2xl:text-[56px] tracking-[0.56px] font-bold leading-[95%]">
                    High performance, low price
                </h2>
                <p
                    class="text-secondary dark:opacity-70 dark:text-white 2xl:text-[19px] text-[16px] font-normal leading-[150%] xl:mb-[50px] mb-[30px] opacity-70">
                    Reinstall or change the OS of your server at any time
                </p>
            </div>
        </div>
        
        @livewire('tab', ['list' => ['CPU', 'Memory', 'Disk'] ])

        <div class="grid place-items-center">
            <img src="{{ asset('images/laptop.png') }}" class="hidden sm:block" alt="Laptop" />
            <img src="{{ asset('images/sm-laptop.png') }}" alt="Laptop" class="sm:hidden block mt-[30px]" />
        </div>
    </div>
</section>
