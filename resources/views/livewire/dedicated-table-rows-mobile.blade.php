<div class="lg:hidden block">
    @foreach ($data as $tdata)
        <div
            class="px-[18px] border-y border-dark-5 dark:border-[#eaeaea14] [&>*:first-child]:border-t-0 [&>*:last-child]:border-b-0">

            @foreach ($headingMobile as $mHeading)
                <div class="py-4 border-y border-dark-5 dark:border-[#eaeaea14]">
                    <div class="flex items-center justify-between">
                        @foreach ($mHeading as $singleHeading)
                            <div class="[&:has(>.action-full)]:w-full {{ $loop->index == 1 ? 'text-right' : '' }}">
                                {{-- @if (!$singleHeading['smHidden'])
                                    <p
                                        class="text-primary dark:text-white text-[13px]  font-normal leading-[100%] opacity-50 mb-2.5">
                                        {{ $singleHeading['name'] }}
                                    </p>
                                @endif --}}

                                @if ($singleHeading['slotName'] == 'country')
                                    <div class="flex justify-between items-center flex-row-reverse lg:flex-row">
                                        <img src="{{ asset($tdata['flag']) }}" class="lg:ml-0 ml-3" alt="Flag" />
                                        <div class="flex items-center lg:ml-7">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <circle cx="6" cy="6" r="6"
                                                    fill="{{ $tdata['active'] ? '#2AC869' : '#FD3232' }}" />
                                            </svg>

                                            <p class="ml-2.5 text-primary dark:text-white lg:block hidden">
                                                {{ $tdata['countx'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endif

                                @if ($singleHeading['slotName'] == 'cpu')
                                    <p class="text-primary dark:text-white min-w-max">
                                        <span class="text-primary dark:text-white lg:hidden inline-block">
                                            {{ $tdata['countx'] }}
                                        </span>
                                        {{ $tdata['cpu'] }}
                                    </p>
                                @endif

                                @if ($singleHeading['slotName'] == 'bench')
                                    <p class="text-primary dark:text-white">{{ $tdata['bench'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'cores')
                                    <p class="text-primary dark:text-white">{{ $tdata['cores'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'base')
                                    <p class="text-primary dark:text-white">{{ $tdata['base'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'turbo')
                                    <p class="text-primary dark:text-white">{{ $tdata['turbo'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'ram')
                                    <p class="text-primary dark:text-white min-w-max">{{ $tdata['ram'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'ssd')
                                    <p class="text-primary dark:text-white min-w-max">{{ $tdata['ssd'] }}</p>
                                @endif

                                @if ($singleHeading['slotName'] == 'ddos')
                                    <span class="flex items-center bg-[#2AC86915] rounded-[16px] w-max py-1.5 px-2">
                                        <img src="{{ asset('images/svgs/shield-check.svg') }}"
                                            alt="{{ asset('images/svgs/shield-check.svg') }}" />

                                        <p class="text-green ml-[5px]">Enable</p>
                                    </span>
                                @endif

                                @if ($singleHeading['slotName'] == 'monthly')
                                    <p class="text-primary dark:text-white min-w-max text-center">{{ $tdata['price'] }}
                                    </p>
                                @endif

                                @if ($singleHeading['slotName'] == 'action')
                                    <td class="hidden">
                                        <div class="action-full w-full flex justify-center">
                                            <span class="flex ml-2">
                                                <p class="text-blue-80 pr-1">Order</p>
                                                <img src="{{ asset('images/svgs/cart.svg') }}" alt="cart" />
                                            </span>
                                        </div>
                                    </td>
                                @endif

                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
