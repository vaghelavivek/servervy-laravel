<div class="flex items-center relative">
    <img src="{{ asset('images/svgs/language.svg') }}" class="mr-2" alt="Language" />

    <button class="flex items-center" wire:click="languageDropToggle">
        <p class="text-primary dark:text-white">{{ $selectLanguage }}</p>
        <img src="{{ asset('images/svgs/drop-thin.svg') }}" class="dark:brightness-[100] ml-2" alt="Drop">
    </button>

    {{-- <ul class="absolute top-12 p-1.5 bg-white dark:bg-[#323235] w-36 [&>li]:px-3.5 [&>li]:py-1.5 rounded-[10px] [&>li:hover]:bg-light-white border border-light-white-blue [&>*]:cursor-pointer dark:border-light-white-blue-8 [&>li]:rounded-[5px] [&>li]:text-primary [&>li]:dark:text-white [&>li:hover]:dark:bg-white-8"
        v-if="languageOpen">
        <li v-for="(lang , index) in language" :key="index"
            @click="selectLanguage = lang , languageOpen = close">{{ lang }}</li>
    </ul> --}}

    <ul class="absolute top-12 p-1.5 bg-white dark:bg-[#323235] w-36 [&>li]:px-3.5 [&>li]:py-1.5 rounded-[10px] [&>li:hover]:bg-light-white border border-light-white-blue [&>*]:cursor-pointer dark:border-light-white-blue-8 [&>li]:rounded-[5px] [&>li]:text-primary [&>li]:dark:text-white [&>li:hover]:dark:bg-white-8 {{ $isLanguageDropopen == 0 ? 'hidden' : '' }} " 
        wire:click.outside="languageDropClose" > 
        @foreach ($languageList as $language)
            <li wire:click="changeSelectLanguage('{{ $language }}')" >{{ $language }}</li>
        @endforeach
        {{-- <li>Hindi</li>
        <li>English</li>
        <li>Gujarati</li> --}}
    </ul>
</div>
