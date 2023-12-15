<div
    class="flex mt-[27px] p-[3px] mx-auto justify-center border rounded-[10px] border-solid dark:bg-white-5 dark:border-light-white-8 border-light-white-gray w-fit bg-white-50 [&>*:last-child>*:last-child]:hidden">

    @foreach ($list as $tab)
        <div class="flex" wire:click="activeTabIndex({{ $loop->index }})">
            <div class="flex items-center justify-between md:px-5 px-4 py-2 cursor-pointer {{ $activeTab == $loop->index ? 'bg-white dark:bg-white-15 rounded-[8px] shadow-gray-15 dark:shadow-none' : 'opacity-70' }}">
                <p class="text-dark dark:text-white md:text-lg text-base leading-6 {{ $activeTab == $loop->index ? 'font-medium' : 'font-normal' }}">
                    {{ $tab }}
                </p>
            </div>

            <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-1.5 dark:brightness-[100]" alt="Divider" />
        </div>
    @endforeach

</div>
