<div>
    @foreach ($priceList as $list)
        <div class="flex lg:flex-row flex-col items-start gap-8 my-4 md:p-6 p-5 rounded-[14px] bg-white dark:bg-white-8 dark:border-b-0 border-b-[#E1E1E1] border-b border-solid cursor-pointer group hover:bg-[#026deb]">
            <div class="flex items-center gap-5">
                <h2 class="text-dark dark:text-white md:text-5xl text-[42px] font-bold leading-[110%]">
                    ${{ number_format($list['price'], 2) }}
                </h2>
                <div>
                    <p
                        class="rounded-[5px] bg-dark dark:bg-white text-white dark:text-primary text-lg  font-medium leading-6 mb-1.5 py-[1px] px-1 offer">
                        -{{ $list['offer'] }}
                    </p>
                    <del
                        class="opacity-50 text-dark dark:text-white text-[17px]  font-normal leading-[120%]">${{ number_format($list['del'], 2) }}</del>
                </div>
            </div>

            <div class="grow w-full">
                <div class="flex justify-between items-start">
                    <p class="text-[#8E8E8E] md:text-[17px] text-[16px] font-normal leading-5">
                        {{ $list['cat'] }}
                    </p>
                    @if ($activePriceList == $loop->index)
                        <img src="{{ asset('images/svgs/right-arrow-white.svg') }}" alt="img" />
                    @else
                        <img src="{{ asset('images/svgs/right-arrow-gray.svg') }}" v-else alt="" />
                    @endif
                </div>

                <hr class="my-3.5 opacity-50 dark:opacity-10" />

                <div class="grid md:grid-cols-4 grid-cols-2 md:gap-5 gap-y-4 gap-x-3.5">
                    <div class="flex items-center">
                        <div class="p-1.5 rounded-md bg-[#1f202214] dark:bg-white-8 group-hover:bg-[#ffffff14]">
                            <img src="{{ asset('images/svgs/cpu.svg') }}"
                                class="md:min-w-[15px] min-w-[12px] {{ $activePriceList == $loop->index ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                                alt="CPU">
                        </div>
                        <p
                            class="md:ml-3 ml-2.5 text-dark dark:text-white md:text-[19px] text-[16px]  font-normal leading-6">
                            {{ $list['cores'] }} vCores</p>
                    </div>
                    <div class="flex items-center">
                        <div class="p-1.5 rounded-md bg-[#1f202214] dark:bg-white-8 group-hover:bg-[#ffffff14]">
                            <img src="{{ asset('images/svgs/ram-overview.svg') }}"
                                class="md:min-w-[15px] min-w-[12px] {{ $activePriceList == $loop->index ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                                alt="CPU">
                        </div>
                        <p
                            class="md:ml-3 ml-2.5 text-dark dark:text-white md:text-[19px] text-[16px]  font-normal leading-6">
                            {{ $list['ram'] }} GB RAM</p>
                    </div>
                    <div class="flex items-center">
                        <div class="p-1.5 rounded-md bg-[#1f202214] dark:bg-white-8 group-hover:bg-[#ffffff14]">
                            <img src="{{ asset('images/svgs/storage.svg') }}"
                                class="md:min-w-[15px] min-w-[12px] {{ $activePriceList == $loop->index ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                                alt="CPU">
                        </div>
                        <p
                            class="md:ml-3 ml-2.5 text-dark dark:text-white md:text-[19px] text-[16px] min-w-max font-normal leading-6">
                            {{ $list['nvme'] }} GB NVMe</p>
                    </div>
                    <div class="flex items-center">
                        <div class="p-1.5 rounded-md bg-[#1f202214] dark:bg-white-8 group-hover:bg-[#ffffff14]">
                            <img src="{{ asset('images/svgs/bandwidth.svg') }}"
                                class="md:min-w-[15px] min-w-[12px] {{ $activePriceList == $loop->index ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                                alt="CPU">
                        </div>
                        <p
                            class="md:ml-3 ml-2.5 text-dark dark:text-white md:text-[19px] text-[16px]  font-normal leading-6">
                            {{ $list['tarffic'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
