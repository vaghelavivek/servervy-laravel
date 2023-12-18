<section class="server-back-img lg:bg-[length:100%_100%] bg-[length:100%_auto] px-4 bg-bottom bg-no-repeat">

    <div class="container mx-auto xl:mt-[100px] mt-[70px]">
        <div class="grid xl:gap-4 gap-2 xl:grid-cols-3 grid-cols-1 grow">

            @foreach ($serverTypes as $server)
                <div class="w-full flex flex-wrap justify-between items-center py-4 px-5 rounded-[10px] border border-[#E1E1E1] dark:border-white-8 cursor-pointer {{ $activeTab == $loop->index ? 'bg-blue [&>*>*]:text-white [&>*>p>span]:text-white-50' : '' }}" wire:click="activeTabIndex({{ $loop->index }})">
                    <div class="flex items-center">
                        <img src="{{ asset($server['svg']) }}" alt="server-image">
                        <h3
                            class="lg:text-[18px] text-[16px] font-bold leading-[19.8px] ml-2.5 dark:text-white-70 text-primary-70">
                            {{ $server['title'] }}</h3>
                    </div>
                    <p>
                        <span
                            class="opacity-50 lg:text-[18px] text-[16px] font-medium leading-[19.8px] dark:text-white ">From</span>
                        <strong
                            class="lg:text-[18px] text-[16px] font-bold leading-[19.8px] ml-1 dark:text-white">${{ number_format($server['price'] , 2) }}</strong>
                    </p>
                </div>
            @endforeach
        </div>
        
        @livewire('d-table')
    </div>
</section>
