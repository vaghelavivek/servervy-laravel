<section class="xl:mt-[150px] mt-[120px] mb-32 mx-4">

    <div class="container mx-auto flex justify-between items-end mb-[50px]">
        <h2 class="text-primary dark:text-white lg:text-[42px] text-[36px] font-bold leading-[95%] tracking-[0.42px]">
            Blog site</h2>
        <router-link to="#">
            <div class="flex items-center">
                <p class="text-right text-blue lg:text-lg text-[16px] font-medium leading-[130%] tracking-[0.4px] mr-2">
                    View All News</p>
                <img src="{{ asset('images/svgs/right-arrow-blue.svg') }}" alt="Arrow">
            </div>
        </router-link>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @foreach ($blogItem as $blog)
                <div class="swiper-slide">

                    <div class="relative">
                        <img src="{{ asset($blog['img']) }}" class="w-full border rounded dark:brightness-[0]" alt="Blog" />
                        <span
                            class="text-white text-center lg:text-base text-[14px] font-medium leading-[150%] bg-[#FD3C3C] absolute top-0 left-0 m-3.5 px-[11px] py-[5px] rounded-[8px]">{{ $blog['hosting'] }}</span>
                        <div class="px-1.5">
                            <div class="flex items-center mt-5 mb-3">
                                <img src="{{ asset($blog['avtar']) }}" alt="Avtar" />
                                <p
                                    class="text-primary dark:text-white lg:text-[15px] text-[14px] font-medium leading-[130%] tracking-[0.3px] ml-1.5">
                                    {{ $blog['user'] }}
                                </p>
                                <img src="{{ asset('images/svgs/divider.svg') }}" class="mx-2.5" alt="Divider" />
                                <p
                                    class="text-primary dark:text-white lg:text-[15px] text-[14px] font-normal leading-[130%] tracking-[0.3px] opacity-50">
                                    {{ $blog['date'] }}
                                </p>
                            </div>
                            <h4
                                class="text-primary dark:text-white lg:text-[22px] text-[18px] font-bold text-left leading-[120%] tracking-[0.22px]">
                                {{ $blog['title'] }}
                            </h4>

                            <p
                                class="text-primary dark:text-white text-base lh:block hidden font-normal leading-[130%] tracking-[0.32px] opacity-70 mt-2">
                                {{ $blog['caption'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 14,
        centeredSlides: true,
        grabCursor: true,
        loop: true,
        initialSlide: 2
    });
</script>
