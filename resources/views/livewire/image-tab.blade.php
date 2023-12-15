<div class="overflow-x-auto w-full px-4 mt-[27px] mb-[63px] tab-over">
    <div
        class="flex p-[3px] mx-auto justify-center border rounded-[10px] border-solid border-light-white-gray w-fit bg-[#ffffff80] dark:bg-white-8 dark:border-light-white-gray-8">

        @foreach ($imageTab as $image)
            <div class="flex items-center justify-between px-5 py-2 min-w-max cursor-pointer {{ $activeTab == $loop->index ? 'bg-white dark:bg-white-15 rounded-[8px] dark:shadow-sm shadow-gray-15' : '' }} " wire:click="activeTabIndex({{ $loop->index }})">
                <img src="{{ asset($image['img']) }}" alt="Flag" />
                <p class="ml-2.5 font-medium text-[16px] xl:text-[18px] min-w-max text-primary dark:text-white">
                    {{ $image['name'] }}
                </p>
            </div>

            @if ( !$loop->last )
                <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-1.5 dark:brightness-[100]" alt="Divider" />
            @endif
        @endforeach
    </div>
</div>
