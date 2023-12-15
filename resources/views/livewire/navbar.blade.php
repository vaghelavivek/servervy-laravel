<header class="fixed top-0 w-full z-50 px-4 {{ $bgColor }}" id="header">
    <div class="container justify-between items-center flex mx-auto h-[66px]">
        {{-- nav-left --}}
        <div class="flex grow box-border" style="position: initial">
            <a href="{{ route('Home') }}">
                <img src="{{ asset('images/svgs/logo.svg') }}" class="dark:hidden {{ $backActive ? 'dark:hidden hidden' : 'dark:hidden block' }}" id="logoBlack" alt="LOGO" />
                <img src="{{ asset('images/svgs/logo-white.svg') }}" class="dark:block {{ $backActive ? 'dark:block block' : 'dark:block hidden' }}" id="logoWhite"
                    alt="LOGO" />
            </a>

            <img src="{{ asset('images/svgs/divider.svg') }}" class="ml-[25px] mr-[13px] xl:block hidden divider {{ $backActive ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                alt="Divaider" />

            {{-- link --}}
            <ul
                class="xl:flex xl:static rounded-[12px] xl:p-0 p-4 xl:bg-transparent bg-white absolute top-[75px] left-0 right-0 xl:w-auto [&>li]:xl:mx-3  [&>li>a]:text-[15px]  [&>li>a]:font-medium [&>li]:xl:mb-0 [&>li]:mb-5 [&>li:last-child]:mb-0 dark:bg-[#252629E5] dark:xl:bg-transparent xl:border-0 border border-white-8 xl:shadow-none shadow-black-35 {{ $isShowMobileNavbarShow ? '' : 'hidden' }} ">

                @livewire('dropdown-card', ['list' => [['name' => 'Policy', 'to' => '#'], ['name' => 'Register Domain']], 'title' => 'Cloud Servers' , 'backActive' => $backActive , 'bgColor' => $bgColor, 'backBlack' => $backBlack])
                @livewire('dropdown-card', ['list' => [['name' => 'Dedicated', 'to' => '#'], ['name' => 'Blog'], ['name' => 'Abuse'], ['name' => 'About'], ['name' => 'Glass'], ['name' => 'Policy']], 'title' => 'Dedicated Servers' ,'backActive' => $backActive , 'bgColor' => $bgColor, 'backBlack' => $backBlack])
                @livewire('dropdown-card', ['list' => [['name' => 'Policy', 'to' => '#']], 'title' => 'Storage Servers' , 'backActive' => $backActive , 'bgColor' => $bgColor, 'backBlack' => $backBlack])
                @livewire('dropdown-card', ['title' => 'Help Center' , 'backActive' => $backActive , 'bgColor' => $bgColor, 'backBlack' => $backBlack])

                {{-- mobile navbar --}}

                <li class="flex justify-between mt-1 xl:hidden">
                    <x-neno.btn bg-color="bg-white dark:bg-white-5" border-color="border border-light dark:border-0"
                        text-color="text-primary dark:text-white" className="w-full rounded">Login</x-neno.btn>
                    <x-neno.btn bg-color="bg-blue" text-color="text-white" border-color="border border-blue"
                        className="items-center w-full ml-2.5 flex justify-center rounded">
                        Get started
                        <img src="{{ asset('images/svgs/right-arrow.svg') }}" class="ml-2" alt="arrow" />
                    </x-neno.btn>
                </li>

            </ul>
        </div>

        {{-- right-side --}}
        <div class="flex items-center">

            {{-- language --}}
            @livewire('nav-language')

            <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-4 select-none divider {{ $backActive ? 'brightness-[100]' : 'dark:brightness-[100]' }}" alt="Divaider" />

            @livewire('nav-theme-btn')

            <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-4 select-none lg:block hidden divider {{ $backActive ? 'brightness-[100]' : 'dark:brightness-[100]' }}"
                alt="Divider" />

            <x-neno.btn className="xl:block hidden rounded-[7px]" bg-color="bg-white dark:bg-white-5"
                border-color="border border-light dark:border-white-5"
                text-color="text-primary dark:text-white">Login</x-neno.btn>

            <x-neno.btn bg-color="bg-blue" text-color="text-white" border-color="border border-blue"
                className="items-center ml-2.5 xl:flex hidden rounded-[7px]">
                Get started
                <img src="{{ asset('images/svgs/right-arrow.svg') }}" class="ml-2" alt="Right arrow" />
            </x-neno.btn>

            <button class="ml-4 xl:hidden block" wire:click="mobileNavToggle">
                @if ($isShowMobileNavbarShow)
                    <img src="{{ asset('images/svgs/close.svg') }}" class="min-w-[17px]" alt="Bar" />
                @else
                    <img src="{{ asset('images/svgs/bar.svg') }}" class="min-w-[17px]" alt="Bar" />
                @endif
            </button>
        </div>
    </div>
</header>


<script>
    let scrollYNumber = 0
    let backActive = {{ $backActive }}
    let bgColor = "{{ $bgColor }}"
    let backBlack = {{ $backBlack }}
    let header = document.getElementById('header')
    let logoBlack = document.getElementById('logoWhite')
    let logoWhite = document.getElementById('logoBlack')
    let bgColorClasses = bgColor.split(' ');
    let divider = document.getElementsByClassName('divider');

    window.addEventListener("scroll", (event) => {
        scrollYNumber = window.scrollY;

        if (backActive) {
            // for header tag
            if (100 > scrollYNumber) {
                header.classList.remove(...bgColorClasses)
            } else {
                header.classList.add(...bgColorClasses)
            }

            if (backBlack > scrollYNumber) {
                // for logo
                logoWhite.classList.remove('dark:hidden', 'block')
                logoBlack.classList.remove('dark:block', 'hidden')
                logoWhite.classList.add('dark:hidden', 'hidden')
                logoBlack.classList.add('dark:block', 'block')

                // for divider
                for (let i = 0; i < divider.length; i++) {
                    divider[i].classList.remove('dark:brightness-[100]')
                    divider[i].classList.add('brightness-[100]')
                }

            } else {
                // for logo
                logoWhite.classList.remove('dark:hidden', 'hidden')
                logoBlack.classList.remove('dark:block', 'block')
                logoWhite.classList.add('dark:hidden', 'block')
                logoBlack.classList.add('dark:block', 'hidden')

                // for divider

                for (let i = 0; i < divider.length; i++) {
                    divider[i].classList.remove('brightness-[100]')
                    divider[i].classList.add('dark:brightness-[100]')
                }
            }

        }

        // console.log(scrollYNumber, backActive, bgColor);
    });
</script>
