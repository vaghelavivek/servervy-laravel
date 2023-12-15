<div class="grid place-items-center md:grid-cols-5 grid-cols-2 border rounded-[20px] border-solid border-light-white-gray dark:border-light-white-8 bg-white dark:bg-white-8 md:mx-auto mx-5 max-w-[721px] mt-5 gap-1.5 p-1.5" >

    @foreach ($deployServerList as $server)
        <div class="w-full flex flex-col items-center px-1.5 py-4 rounded-[14px] group hover:shadow-gray-15 dark:hover:shadow-none dark:hover:bg-white-5">
            <img src="{{ asset($server['img']) }}" :alt="$server['title']">
            <h5
                class="text-secondary dark:opacity-50 group-hover:opacity-100 dark:text-white text-center text-[17px]  font-medium group-hover:font-bold leading-[130%] mt-3 mb-1">
                {{-- {{ $server['title'] }} --}}
                Arch Linux
            </h5>
            <router-link to="#"
                class="text-blue text-center text-sm  font-normal leading-[130%] invisible group-hover:visible">Learn
                about</router-link>
        </div>
    @endforeach

</div>
