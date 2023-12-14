<div>
    {{-- detop table viwe --}}
    <div class="bg-white dark:bg-transparent rounded-b-[12px] responsive-table hidden lg:block">
        <table class="w-full">
            <thead>

                <tr
                    class="[&>*]:py-4 [&>*]:px-5 border-y border-light-white-blue dark:border-light-white-blue-8 dark:text-white-50 text-primary-50 text-[14.5px] [&>*]:font-normal [&>*]:tracking-[0.31px] [&>*]:leading-[100%]">

                    @foreach ($headings as $head)
                        <th>
                            <div class="flex items-center min-w-max {{ $loop->index == 0 ? 'justify-start' : $headPosition }} "
                                :class="[i == 0 ? 'justify-start' : headPosition]">
                                {{ $head['name'] }}
                            </div>
                        </th>
                    @endforeach

                </tr>
            </thead>

            {{ $desktop }}
        </table>
    </div>

    {{-- mobile table viwe --}}
    {{ $mobile }}
</div>
