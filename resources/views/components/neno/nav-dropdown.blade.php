<li class="relative">
    <div class="text-black flex xl:justify-center justify-between w-full items-center cursor-pointer">
        @if ($list)
            <div class="flex items-center font-medium" >
                {{ $title }}
                <img src="{{ asset('images/svgs/dropdown.svg') }}" class="ml-1" alt="dropdwun">
            </div>
        @else
            <a href="#" class="font-medium" >{{ $title }}</a>
        @endif
    </div>


    @if ($list)
        <div
            class="absolute hidden sm:left-0 left-0 origin-top-right rounded-md bg-white border-light-white-blue dark:border-light-white-blue-8 border dark:bg-[#323235] w-full lg:w-52 lg:mt-6 mt-4 z-50">
            <ul class="p-1.5">
                @foreach ($list as $link)
                    <a href="#">
                        <li
                            class="py-1.5 px-2 dark:text-white hover:bg-light-white dark:hover:bg-light-white-8 rounded-[8px]">
                            {{ $link['name'] }}
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    @endif
</li>

<script></script>
