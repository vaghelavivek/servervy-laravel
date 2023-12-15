<li class="relative">

    <div class="text-black flex xl:justify-center justify-between w-full items-center cursor-pointer"
        wire:click="dropdownToggale" wire:click.outside="dropdownClose">
        @if ($list)
            <div class="flex items-center font-medium {{ $backActive ? 'xl:text-white' : 'text-primary' }}" id="title{{ strlen($title) }}">
                {{ $title }}
                <img src="{{ asset('images/svgs/dropdown.svg') }}" id="dropimage{{ strlen($title) }}" class="ml-1 {{ $backActive ? 'brightness-[100]' : 'dark:brightness-[100]' }} "
                    alt="dropdwun">
            </div>
        @else
            <a href="#" class="font-medium {{ $backActive ? 'xl:text-white' : 'text-primary' }}" id="title{{ strlen($title) }}">{{ $title }}</a>
        @endif
    </div>


    @if ($list)

        <div>
            <div
                class="absolute sm:left-0 left-0 origin-top-right rounded-md bg-white border-light-white-blue dark:border-light-white-blue-8 border dark:bg-[#323235] w-full lg:w-52 lg:mt-6 mt-4 z-50 {{ $isDropdownOpen == 0 ? 'hidden' : '' }} ">
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
        </div>
    @endif

</li>



@if ($list)
    <script>
        let title{{ strlen($title) }} = document.getElementById('title{{ strlen($title) }}');
        let dropimage{{ strlen($title) }} = document.getElementById('dropimage{{ strlen($title) }}');

        window.addEventListener("scroll", (event) => {
            scrollYNumber = window.scrollY;

            if (backActive) {

                if (backBlack > scrollYNumber) {
                    dropimage{{ strlen($title) }}.classList.remove('dark:brightness-[100]')
                    title{{ strlen($title) }}.classList.remove('text-primary')
                    title{{ strlen($title) }}.classList.add('xl:text-white')
                    dropimage{{ strlen($title) }}.classList.add('brightness-[100]')
                } else {
                    dropimage{{ strlen($title) }}.classList.remove('brightness-[100]')
                    title{{ strlen($title) }}.classList.remove('xl:text-white')
                    title{{ strlen($title) }}.classList.add('text-primary')
                    dropimage{{ strlen($title) }}.classList.add('dark:brightness-[100]')
                }

            }

        });
    </script>
@else
    <script>
        let title{{ strlen($title) }} = document.getElementById('title{{ strlen($title) }}');

        window.addEventListener("scroll", (event) => {
            scrollYNumber = window.scrollY;

            if (backActive) {

                if (backBlack > scrollYNumber) {
                    title{{ strlen($title) }}.classList.remove('text-primary')
                    title{{ strlen($title) }}.classList.add('xl:text-white')
                } else {
                    title{{ strlen($title) }}.classList.remove('xl:text-white')
                    title{{ strlen($title) }}.classList.add('text-primary')
                }

            }

        });
    </script>
@endif
