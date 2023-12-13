<div class="container px-1.5 mx-auto xl:h-[114px] -xl:translate-y-[50%] -translate-y-[50px]">
    <div class="bg-white dark:bg-[#202020] xl:flex items-center justify-between grid grid-cols-2 xl:gap-0 gap-y-[32px] gap-x-6 h-full  shadow-gray-15 dark:shadow-black-15 rounded-[20px] lg:px-[29px] px-4 lg:py-6 py-5 max-w-[1205px] mx-auto"
        style="
        box-shadow: 0px 1px 1px 0px #e4e7ec,
          0px 10px 32px -12px rgba(16, 24, 40, 0.05);
      ">

        @foreach ($benifitsData as $curr)

            <div class="flex h-full lg:items-center text-start">
                <div class="bg-blue-8 rounded-[15px] sm:h-full h-[50px] aspect-square grid place-items-center">
                    <img src="{{ asset($curr['img']) }}" class="sm:w-auto w-[24px]" alt="{{ $curr['title'] }}">
                </div>
                <div class="lg:ml-[18px] ml-3.5">
                    <h3 class="text-secondary dark:text-white xl:text-[24px] text-[20px] font-bold leading-[130%]">
                        {{ $curr['title'] }}
                    </h3>
                    <p
                        class="text-secondary dark:text-white opacity-50 xl:text-[16px] text-[15px] font-normal leading-[130%] mt-[3px] -tracking-[0.16px]">
                        {{ $curr['caption'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
