@extends('Layouts.landing')

@section('title', 'Home')

@section('body')
    {{-- hero section --}}
    <section class="hero-back-img xl:bg-[length:100%_100%] bg-center object-cover px-4 bg-[#F8F9FC] dark:bg-[#191919]">
        <div class="container flex justify-between md:items-center md:pt-0 pt-[120px] mx-auto lg:h-[760px] h-[640px]">
            <div class="md:max-w-[534px] w-full">
                <h1
                    class="text-primary md:text-start text-center dark:text-white xl:text-[72px] text-[39px] font-medium md:leading-[90%] leading-[100%] tracking-[0.72px] ">
                    Pay with crypto for anonymous cloud hosting
                </h1>
                <p
                    class="text-secondary opacity-70 dark:text-white xl:text-[19px] text-base md:text-start text-center md:mx-0 mx-[7.5px] font-normal tracking-[150%] mt-6 mb-[34px]">
                    Sell subscriptions, tokens, serial keys, digital downloads, video
                    courses, softwares and licenses in a fast, easy and secure way.
                </p>

                <div class="flex md:justify-start justify-center">
                    <x-neno.btn bg-color="bg-white dark:bg-white-5" border-color="border border-light dark:border-white-5"
                        text-color="text-primary dark:text-white">Login</x-neno.btn>
                    <x-neno.btn bg-color="bg-blue" text-color="text-white" border-color="border border-blue"
                        className="flex items-center ml-2.5">
                        Get started
                        <img src="{{ asset('images/svgs/right-arrow.svg') }}" class="ml-2" alt="rightarrow" />
                    </x-neno.btn>
                </div>
            </div>
            <div class="w-full xl:block hidden"></div>
        </div>
    </section>

    {{-- benifits section --}}
    <section>
        @livewire('section.benifits')
    </section>

    {{-- server section --}}
    @livewire('section.server')
    
    {{-- feedback section --}}
    @livewire('section.feedback')

@endsection

{{-- bg-[url('{{ asset("images/grad1.png") }}')] --}}
