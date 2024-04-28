<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-neutral-50 dark:bg-neutral-700 dark:text-neutral-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Brand
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Sugar free
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
                <tr
                    class="border-b odd:bg-neutral-100 odd:dark:bg-neutral-900 even:bg-neutral-200 even:dark:bg-neutral-800 dark:border-gray-700 hover:bg-neutral-300 dark:hover:bg-neutral-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $drink->brand->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $drink->description }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($drink->sugar_free)
                            <svg class="text-green-500 size-6" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-check" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                        @else
                            <svg class="text-red-500 size-6" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M10 10l4 4m0 -4l-4 4" />
                            </svg>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{ $drink->price }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
