<section class="server-back-img bg-[length:100%_auto] px-4 bg-bottom bg-no-repeat">
    <div class="container mx-auto my-[42px]">
        <div class="lg:max-w-[1220px] mx-auto">
            <div class="max-w-[480px] mx-auto text-center">
                <span class="px-3.5 py-[5px] 2xl:text-[17px] text-[15px] rounded-[76px] bg-[#3C95FF] text-white">Any text
                    about!</span>
                <h2
                    class="mx-auto mt-3.5 mb-[22px] text-primary dark:text-white 2xl:text-[56px] text-[38px] tracking-[0.56px] font-bold leading-[95%]">
                    Automated installs stop wasting time
                </h2>
                <p
                    class="text-secondary dark:text-white opacity-70 2xl:text-[19px] text-base font-normal leading-[150%] mx-5 lg:mb-[50px] mb-10">
                    Reinstall or change the OS of your server at any time
                </p>
            </div>
            @livewire('slider')
        </div>
    </div>

    <div class="container mx-auto xl:mt-[150px] mt-[120px]">
        <div class="grid xl:gap-4 gap-2 xl:grid-cols-3 grid-cols-1 grow">
            @foreach ($serverTypes as $server)
                <div
                    class="w-full flex flex-wrap justify-between items-center py-4 px-5 rounded-[10px] border border-[#E1E1E1] dark:border-white-8 cursor-pointer {{ $activeTab == $loop->index ? 'bg-blue [&>*>*]:text-white [&>*>p>span]:text-white-50' : '' }} " wire:click="tabActive({{ $loop->index }})">

                    <div class="flex items-center">
                        <img src="{{ asset($server['svg']) }}" alt="{{ asset($server['svg']) }}">
                        <h3
                            class="lg:text-[18px] text-[16px] font-bold leading-[19.8px] ml-2.5 dark:text-white-70 text-primary-70">
                            {{ $server['title'] }}</h3>
                    </div>
                    <p>
                        <span
                            class="opacity-50 lg:text-[18px] text-[16px] font-medium leading-[19.8px] dark:text-white ">From</span>
                        <strong
                            class="lg:text-[18px] text-[16px] font-bold leading-[19.8px] ml-1 dark:text-white">${{ number_format($server['price'], 2) }}</strong>
                    </p>
                </div>
            @endforeach
        </div>

        @livewire('s-table')
    </div>
</section>
