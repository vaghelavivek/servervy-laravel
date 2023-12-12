<div class="container justify-between items-center flex mx-auto h-[66px]">
    {{-- nav-left --}}
    <div class="flex grow box-border" style="position: initial" >
        <a href="{{ route('Home') }}">
            <img src="{{ asset('images/svgs/logo.svg') }}" alt="LOGO" />
        </a>

        <img src="{{ asset('images/svgs/divider.svg') }}" class="ml-[25px] mr-[13px] xl:block hidden" alt="Divaider" />

        {{-- link --}}
        <ul
            class="xl:flex xl:static rounded-[12px] xl:p-0 p-4 xl:bg-transparent bg-white absolute top-[75px] left-0 right-0 xl:w-auto [&>li]:xl:mx-3  [&>li>a]:text-[15px]  [&>li>a]:font-medium [&>li]:xl:mb-0 [&>li]:mb-5 [&>li:last-child]:mb-0 dark:bg-[#252629E5] dark:xl:bg-transparent xl:border-0 border border-white-8 xl:shadow-none shadow-black-35">

            <x-neno.nav-dropdown title="Cloud Servers" :list="[['name' => 'Policy', 'to' => '#'], ['name' => 'Register Domain']]" />
            <x-neno.nav-dropdown title="Dedicated Servers" :list="[
                ['name' => 'Dedicated', 'to' => '#'],
                ['name' => 'Blog'],
                ['name' => 'Abuse'],
                ['name' => 'About'],
                ['name' => 'Glass'],
                ['name' => 'Policy'],
            ]" />
            <x-neno.nav-dropdown title="Storage Servers" :list="[['name' => 'Policy', 'to' => '#']]" />
            <x-neno.nav-dropdown title="Help Center" />

            {{-- mobile btn --}}

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
        <div class="flex items-center relative">
            <img src="{{ asset('images/svgs/language.svg') }}" class="mr-2" alt="Language" />

            <button class="flex items-center">
                <p class="text-primary dark:text-white">English</p>
                <img src="{{ asset('images/svgs/drop-thin.svg') }}" class="dark:brightness-[100] ml-2" alt="Drop">
            </button>

            {{-- <ul class="absolute top-12 p-1.5 bg-white dark:bg-[#323235] w-36 [&>li]:px-3.5 [&>li]:py-1.5 rounded-[10px] [&>li:hover]:bg-light-white border border-light-white-blue [&>*]:cursor-pointer dark:border-light-white-blue-8 [&>li]:rounded-[5px] [&>li]:text-primary [&>li]:dark:text-white [&>li:hover]:dark:bg-white-8"
                v-if="languageOpen">
                <li v-for="(lang , index) in language" :key="index"
                    @click="selectLanguage = lang , languageOpen = close">{{ lang }}</li>
            </ul> --}}
        </div>

        <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-4 select-none" alt="Divaider" />

        <div class="justify-center flex flex-row items-center">
            <div class="flex flex-row justify-between toggle">
                <label for="dark-toggle" class="flex items-center cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" name="dark-mode" id="dark-toggle" class="checkbox hidden" />
                        <div
                            class="border-white-5 shadow-toggle-btn border-[1px] border-black-50 rounded-full h-6 w-10 bg-white-50 dark:bg-white-5">
                        </div>
                        <div
                            class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition flex items-center justify-center" style="transform: translateX(100%)" >
                            <img src="{{ asset('images/svgs/sun.svg') }}" alt="Sun" />
                            {{-- <img src="{{ asset('images/svgs/moon.svg') }}" alt="Moon" /> --}}
                        </div>
                    </div>
                </label>
            </div>
        </div>

        <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-4 select-none lg:block hidden" alt="Divider" />

        <x-neno.btn className="xl:block hidden rounded-[7px]" bg-color="bg-white dark:bg-white-5"
            border-color="border border-light dark:border-white-5"
            text-color="text-primary dark:text-white">Login</x-neno.btn>

        <x-neno.btn bg-color="bg-blue" text-color="text-white" border-color="border border-blue"
            className="items-center ml-2.5 xl:flex hidden rounded-[7px]">
            Get started
            <img src="{{ asset('images/svgs/right-arrow.svg') }}" class="ml-2" alt="Right arrow" />
        </x-neno.btn>

        <button class="ml-4 xl:hidden block">
            <img src="{{ asset('images/svgs/close.svg') }}"
              class="min-w-[17px]"
              alt="Bar"
            />
          </button>
    </div>
</div>