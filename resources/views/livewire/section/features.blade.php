<div class="container mx-auto xl:mt-[140px] mt-[120px]">
    <div class="max-w-[1220px] mx-4 xl:mx-auto">
        <div class="mx-auto text-center">
            <span class="px-3.5 py-[5px] 2xl:text-[17px] text-[15px] rounded-[76px] bg-[#3C95FF] text-white">Any text
                about!</span>
            <h2
                class="mx-auto mt-3.5 lg:mb-[22px] mb-[18px] text-primary dark:text-white 2xl:text-[56px] text-[38px] tracking-[0.56px] font-bold leading-[95%] 2xl:w-[40%]">
                Features for you love out site!
            </h2>
            <p
                class="text-secondary dark:text-white 2xl:text-[19px] text-[16px] font-normal leading-[150%] mb-[50px] opacity-70">
                Reinstall or change the OS of your server at any time
            </p>
        </div>
    </div>

    <div class="grid xl:grid-cols-4 grid-cols-2 lg:gap-4 gap-3 px-4">

        @foreach ($featuresList as $feature)
            <div class="border flex flex-col text-center justify-center rounded-2xl border-solid border-primary-8 dark:border-white-8 lg:py-6 lg:px-[33px] p-3 hover:shadow-[0px_1px_1px_0px_#E4E7EC,0px_10px_32px_-12px_rgba(16,24,40,0.05)] dark:hover:shadow-light-15">
                <img src="{{ asset($feature['img']) }}" class="aspect-square" :alt="$feature['title']">
                <h5
                    class="text-[#171618] dark:text-white lg:text-[22px] text-[16px] font-bold leading-[29.04px] sm:mt-10 mt-2.5 mb-1.5">
                    {{ $feature['title'] }}</h5>
                <p
                    class="text-[#171618] dark:text-white opacity-70 text-center lg:text-base text-[12px] font-normal leading-[140%]">
                    {{ $feature['caption'] }}</p>
            </div>
        @endforeach
    </div>
</div>
