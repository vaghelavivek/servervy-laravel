<section
    class="bg-[url('../assets/images/sm-grad3.png')] feedback-back-img bg-no-repeat px-4 object-cover bg-center bg-[length:100%_100%]">
    <div class="xl:my-[150px] my-[120px] container mx-auto">
        <div class="flex xl:flex-row flex-col items-center justify-between">
            <div class="xl:max-w-[405px] w-full">
                <h2
                    class="text-[#171618] dark:text-white xl:text-[60px] xl:max-w-[405px] max-w-[243px] w-full text-[36px] font-bold leading-[95%] tracking-[0.6px]">
                    Capture
                    <span class="feedtext">feedback
                        <img src="{{ asset('images/svgs/textdeco.svg') }}" class="absolute top-0 left-0 -z-50 dark:z-20"
                            alt="Decoration" />
                    </span>
                    from many sources
                </h2>
                <p
                    class="text-[#171618] dark:text-white  xl:max-w-[405px] max-w-[256px]  w-full xl:text-[19px] text-[16px] opacity-70 font-normal leading-[150%] xl:mt-6 mt-4">
                    All of your feedback, all in one place. User interviews, NPS
                    surveys.
                </p>

                <div class="mt-[40px] xl:mb-0 mb-[30px]">

                    @foreach ($feedbackDoc as $doc)
                        <div class="sm:py-[17px] py-2 sm:px-[25px] px-3 cursor-pointer {{ $loop->index == $activeFeedback ? 'active-feedback' : '' }} "
                            wire:click="activeFeedbackFunc({{ $loop->index }})">
                            <p class="opacity-30 text-[#222] dark:text-white text-[20px] font-medium leading-[29.04px]">
                                {{ $doc }}
                            </p>

                            @if ($loop->index == $activeFeedback)
                                <img src="{{ asset('images/svgs/right-arrow-black.svg') }}"
                                    class="dark:hidden block dark:brightness-[100]" alt="Right arrow" />
                                <img src="{{ asset('images/svgs/right-arrow-strach.svg') }}" alt="Right arrow"
                                    class="dark:block hidden min-w-[24px]" />
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                @livewire('renewal')
            </div>
        </div>
        <div class="flex xl:flex-row flex-col-reverse items-center justify-between xl:mt-[150px] mt-[120px]">
            <div class="mt-[30px] xl:mt-0">
                <img src="{{ asset('images/feedback2.png') }}" class="sm:max-w-[640px] dark:hidden block"
                    alt="Feddback" />
                <img src="{{ asset('images/feedback2-dark.png') }}" class="sm:max-w-[640px] dark:block hidden"
                    alt="Feedback" />
            </div>
            <div class="xl:max-w-[405px] w-full">
                <h2
                    class="text-[#171618] dark:text-white xl:text-[60px] xl:max-w-[405px] max-w-[243px] w-full text-[36px] font-bold leading-[95%] tracking-[0.6px]">
                    Capture
                    <span class="text-[#A330FD] font-bold leading-[95%] tracking-[0.6px]">feedback
                        <img src="{{ asset('images/svgs/textdeco2.svg') }}"
                            class="absolute top-0 left-0 -z-10 dark:z-10" alt="text-deco" />
                    </span>
                    from many sources
                </h2>
                <p
                    class="text-[#171618] xl:text-[19px] text-[16px] opacity-70 dark:text-white xl:max-w-[405px] max-w-[256px] w-full font-normal leading-[150%] xl:mt-6 mt-4">
                    All of your feedback, all in one place. User interviews, NPS
                    surveys.
                </p>

                <div class="mt-[40px]">
                    @foreach ($feedbackDoc as $doc)
                        <div class="sm:py-[17px] py-2 sm:px-[25px] px-3 cursor-pointer {{ $loop->index == $activeFeedback2 ? 'active-feedback' : '' }} "
                            wire:click="activeFeedbackFunc2({{ $loop->index }})">
                            <p class="opacity-30 text-[#222] dark:text-white text-[20px] font-medium leading-[29.04px]">
                                {{ $doc }}
                            </p>

                            @if ($loop->index == $activeFeedback2)
                                <img src="{{ asset('images/svgs/right-arrow-black.svg') }}"
                                    class="dark:hidden block dark:brightness-[100]" alt="Right arrow" />
                                <img src="{{ asset('images/svgs/right-arrow-strach.svg') }}" alt="Right arrow"
                                    class="dark:block hidden min-w-[24px]" />
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
