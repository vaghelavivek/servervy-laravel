<section
    class="auto-install-back-img bg-no-repeat xl:mt-[130px] mt-[120px] mx-4" id="autoInstall">
    <div class="container mx-auto block xl:flex items-center justify-between">
        <div class="px-4 xl:pt-0 pt-[50px]">
            <div class="flex items-center">
                <img src="{{ asset('images/svgs/star.svg') }}" alt="star">
                <p class="text-dark dark:text-white lg:text-[17px] text-[15px] font-medium leading-[26px] ml-1">
                    Trustpilot</p>
                <img src="{{ asset('images/svgs/stars.svg') }}" class="mx-3" alt="stars">
                <p class="text-dark dark:text-white lg:text-[17px] text-[15px] font-medium leading-[26px]">Excellent</p>
            </div>

            <h2
                class="text-dark dark:text-white lg:text-[56px] text-[34px] font-bold leading-[95%] tracking-[0.56px] xl:w-[60%] mt-3.5 mb-5">
                Automated installs stop wasting time</h2>

            <p
                class="text-dark dark:text-white lg:text-[17px] text-[15px]  font-normal leading-[150%] xl:w-[40%] opacity-70">
                Reinstall or change the OS of your server at any time & as many times you want without.</p>

            <x-neno.btn className="mt-8" bg-color="dark:bg-white-15 bg-white" border-color="dark:border-light-8 border">
                <div class="flex items-center">
                    <img src="{{ asset('images/svgs/star.svg') }}" alt="star">
                    <p class="text-primary dark:text-white text-lg  font-medium leading-6 mx-[9px]">Open Trustpilot</p>
                    <img src="{{ asset('images/svgs/right-arrow-btn.svg') }}" class="dark:brightness-[100]" alt="Arrow">
                </div>
            </x-neno.btn>
        </div>

        <div class="grid place-items-center">
            <img src="{{ asset('images/auto-install.png') }}" class="mt-[84px] min-[1800px]:translate-x-20"
                alt="Feedback">
        </div>
    </div>

    <script>
        let innerWidth = window.innerWidth;
        let autoInstall = document.getElementById('autoInstall')

        if (innerWidth < 1800) {
            autoInstall.classlist.remove('bg-[length:100%_100%]')
            autoInstall.classlist.add('container','mx-auto','rounded-[8px]','object-cover','bg-center','bg-[length:auto_100%]')
        }else{
            autoInstall.classlist.remove('container','mx-auto','rounded-[8px]','object-cover','bg-center','bg-[length:auto_100%]')
            autoInstall.classlist.add('bg-[length:100%_100%]')
        }
    </script>

</section>
