<div class="mt-6 bg-white dark:bg-white-5 shadow-[0px_22px_27px_0px_rgba(246,246,246,0.50)] dark:shadow-none rounded-[12px]" >

    <div class="py-[18px] px-[25px]">
        <h2 class="text-primary dark:text-white text-[22px] font-bold">
            Filter for the server models
        </h2>
    </div>

    <div class="overflow-x-auto">
        <x-table :data=$serverModels :headings=$serverHead headPosition="justify-start">
            <x-slot name="desktop">
                @livewire('landing-table-rows', ['data' => $serverModels, 'headings' => $serverHead])
            </x-slot>

            <x-slot name="mobile">
                @livewire('landing-table-rows-mobile', ['data' => $serverModels, 'headings' => $serverHead])
            </x-slot>
        </x-table>
    </div>
</div>
