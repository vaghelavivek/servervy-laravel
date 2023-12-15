<section class="xl:mt-[56px] mt-[120px] px-4">
    <div
        class="container mx-auto xl:pt-[90px] xl:pb-[106px] py-[30px] deploye-back-img bg-no-repeat bg-left-top object-cover bg-[#fcfcfc] dark:bg-[#FCFCFC14] rounded-[20px] xl:bg-[length:100%_100%]">
        <div class="max-w-[1220px] mx-auto">
            <div class="mx-auto text-center">
                <h2
                    class="mx-auto mt-3.5 mb-[22px] text-primary dark:text-white 2xl:text-[56px] text-[38px] tracking-[0.56px] font-bold leading-[95%]">
                    Deploy anything in seconds
                </h2>
                <p
                    class="text-secondary dark:opacity-70 dark:text-white lg:text-[19px] text-base font-normal leading-[150%] 2xl:mb-[50px] mb-[30px] opacity-70 lg:w-[40%] md:mx-auto mx-4 text-center">
                    Spin up a new instance with your preferred operating system or pre-installed application in just
                    seconds.
                </p>
            </div>
        </div>

        @livewire('tab', ['list' => ['OS Library', 'One Click Apps']])

        @livewire('deploye-server')
    </div>
</section>
