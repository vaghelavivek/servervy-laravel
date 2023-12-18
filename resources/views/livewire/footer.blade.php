<footer class="bg-primary text-white">
    <div class="container mx-auto">
        <div class="flex xl:flex-row flex-col items-start justify-between py-[50px]">
            <div class="lg:text-start text-center">
                <a href="#">
                    <img src="{{ asset('images/svgs/logo-white.svg') }}" class="lg:mx-0 mx-auto" alt="LOGO" />
                </a>

                <p class="lg:w-[50%] mt-4 text-white text-base font-normal leading-[140%] tracking-[-0.16px] opacity-50">
                    Work safe, work anonymous. We don't ask you for any personal
                    information. <br /><br />
                    Pay with Perfect Money, Bitcoin, Monero or any crypto.
                </p>
            </div>

            <div
                class="grow xl:w-auto w-full grid xl:mt-0 mt-[50px] lg:grid-cols-5 grid-cols-2 xl:gap-2 gap-[25px] [&>*]:justify-self-center [&>*]:xl:justify-self-end [&>*>*:last-child>*]:text-center [&>*>*]:text-center">
                <div>
                    <h5 class="text-white-50 text-base  font-light leading-[23.68px] mb-1.5">
                        Products
                    </h5>
                    <ul class="[&>*]:font-medium [&>*]:my-1">
                        @foreach ($productsList as $product)
                            <li>
                                <router-link to="#">{{ $product }}</router-link>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h5 class="text-white-50 text-base  font-light leading-[23.68px] mb-1.5">
                        Location
                    </h5>
                    <ul class="[&>*]:font-medium [&>*]:my-1">

                        @foreach ($locationList as $cont)
                            <li v-for="(cont , index) in LocationList" :key="index">
                                <button class="flex items-center" wire:click="activeTabChange({{ $loop->index }})">
                                    {{ $cont['location'] }}

                                    @if ($activeLocationTab == $loop->index)
                                        <img src="{{ asset('images/svgs/collapse-true.svg') }}" class="ml-2.5"
                                            alt="Collapse">
                                    @else
                                        <img src="{{ asset('images/svgs/collapse-false.svg') }}" class="ml-2.5"
                                            alt="Collapse">
                                    @endif
                                </button>
                                <ul class="{{ $activeLocationTab == $loop->index ? 'block' : 'hidden' }}">

                                    @foreach ($cont['list'] as $server)
                                        <li><a class="opacity-70" href="#">{{ $server }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h5 class="text-white-50 text-base  font-light leading-[23.68px] mb-1.5">
                        Resources
                    </h5>
                    <ul class="[&>*]:font-medium [&>*]:my-1">

                        @foreach ($resourcesList as $resource)
                            <li>
                                <a href="#">{{ $resource }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    <h5 class="text-white-50 text-base  font-light leading-[23.68px] mb-1.5">
                        OS
                    </h5>
                    <ul class="[&>*]:font-medium [&>*]:my-1">

                        @foreach ($osList as $os)
                            <li>
                                <a href="#">{{ $os }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-start-1 col-end-3 lg:col-start-auto lg:col-end-auto">
                    <h5 class="text-white-50 text-base  font-light leading-[23.68px] mb-1.5">
                        Company
                    </h5>
                    <ul class="[&>*]:font-medium [&>*]:my-1">
                        @foreach ($companyList as $company)
                            <li>
                                <router-link to="#">{{ $company }}</router-link>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <hr class="opacity-5" />

        <p
            class="text-white text-[15px] lg:text-start text-center font-normal leading-[19.88px] tracking-[0.14px] opacity-50 py-[30px]">
            © 2023 Server_vy, Inc
        </p>
    </div>
</footer>
