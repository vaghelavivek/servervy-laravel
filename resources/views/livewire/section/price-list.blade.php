<section
    class="price-list-back-img bg-no-repeat bg-[length:100%_auto] bg-bottom mt-[90px]"
  >
    <div class="container max-w-[936px] mx-auto">
      <h2
        class="text-dark dark:text-white 2xl:text-[56px] text-[38px] font-bold leading-[120%] tracking-[-1.12px] text-center"
      >
        Pricing List
      </h2>

      @livewire('image-tab' , [ 'imageTab' => $imageTab ] )

      <div class="px-4">
        <div>
          <h4 class="text-dark dark:text-white text-[28px] font-bold leading-6">
            💎 Shared
          </h4>
          <div class="flex flex-wrap [&>*]:mr-5 [&>*]:mb-3 mt-6 mb-3">
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              AMD Ryzen 9™ Processor
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Standard DDoS protection <span class="opacity-70">(?)</span>
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Internet up to 1 Gbps
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Internet up to 1 Gbps
            </p>
          </div>
        </div>

        <hr class="mb-2 dark:opacity-10" />

        <div>
          @livewire('sub-price-list', [ 'priceList' => $priceList])
        </div>
      </div>

      <div class="mt-[60px] px-4">
        <div>
          <h4 class="text-dark dark:text-white text-[28px] font-bold leading-6">
            ⭐️ Dedicated
          </h4>
          <div class="flex flex-wrap [&>*]:mr-5 [&>*]:mb-3 mt-6 mb-3">
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              AMD Ryzen 9™ Processor
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Standard DDoS protection <span class="opacity-70">(?)</span>
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Internet up to 1 Gbps
            </p>
            <p
              class="text-dark dark:text-white-50 text-base font-medium leading-5"
            >
              Internet up to 1 Gbps
            </p>
          </div>
        </div>

        <hr class="mb-2 dark:opacity-10" />

        <div>
          @livewire('sub-price-list', [ 'priceList' => $priceList])
        </div>
      </div>
    </div>
  </section>