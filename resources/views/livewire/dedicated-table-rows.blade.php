<tbody>

    @foreach ($data as $tdata)
        <tr
            class="[&>*]:px-[20px] [&>*]:py-[18px] border-y last:border-b-0 border-light-white-blue dark:border-light-white-blue-8 text-white text-primary-80 [&>*]:font-medium [&>*]:tracking-[0.16px] hover:bg-[#F8F9FB] group dark:hover:bg-[#00000040] [&>*]:lg:text-[15px]">

            <td>
                <div class="flex justify-between items-center flex-row-reverse lg:flex-row">
                    <img src="{{ asset($tdata['flag']) }}" class="lg:ml-0 ml-3" alt="Flag" />
                    {{-- <div class="flex items-center lg:ml-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                            fill="none">
                            <circle cx="6" cy="6" r="6"
                                fill="{{ $tdata['active'] ? '#2AC869' : '#FD3232' }}" />
                        </svg>

                        <p class="ml-2.5 text-primary dark:text-white lg:block hidden">
                            {{ $tdata['countx'] }}
                        </p>
                    </div> --}}
                    <p class="ml-2.5 text-primary dark:text-white lg:block hidden">
                        {{ $tdata['countx'] }}
                    </p>
                </div>
            </td>

            <td>
                <p class="text-primary dark:text-white min-w-max">
                    <span class="text-primary dark:text-white lg:hidden inline-block">
                        {{ $tdata['countx'] }}
                    </span>
                    {{ $tdata['cpu'] }}
                </p>
            </td>

            <td>
                <p class="text-primary dark:text-white">{{ $tdata['bench'] }}</p>
            </td>

            <td>
                <p class="text-primary dark:text-white">{{ $tdata['cores'] }}</p>
            </td>

            <td>
                <p class="text-primary dark:text-white">{{ $tdata['base'] }}</p>
            </td>

            <td>
                <p class="text-primary dark:text-white">{{ $tdata['turbo'] }}</p>
            </td>

            <td>
                <p class="text-primary dark:text-white min-w-max">{{ $tdata['ram'] }}</p>
            </td>

            <td>
                <p class="text-primary dark:text-white min-w-max">{{ $tdata['ssd'] }}</p>
            </td>

            <td>
                <span class="flex items-center bg-[#2AC86915] rounded-[16px] w-max py-1.5 px-2">
                    <img src="{{ asset('images/svgs/shield-check.svg') }}"
                        alt="{{ asset('images/svgs/shield-check.svg') }}" />

                    <p class="text-green ml-[5px]">Enable</p>
                </span>
            </td>

            <td>
                <div class="flex justify-between items-center" >
                    <p class="text-primary dark:text-white min-w-max text-center">{{ $tdata['price'] }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 12 12"
                        fill="none">
                        <circle cx="6" cy="6" r="6"
                            fill="{{ $tdata['active'] ? '#2AC869' : '#FD3232' }}" />
                    </svg>
                </div>
            </td>

            {{-- <td>
                <div class="flex lg:justify-between justify-end items-center">
                    <a href="#" class="hidden lg:block">
                        <span class="ml-2 flex">
                            <p class="text-blue-80 pr-1">Order</p>
                            <img src="{{ asset('images/svgs/cart.svg') }}" alt="cart" />
                        </span>
                    </a>
                </div>
            </td> --}}
        </tr>
    @endforeach
</tbody>
