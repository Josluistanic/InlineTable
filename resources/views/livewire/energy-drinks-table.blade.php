<div class="relative overflow-x-auto shadow-md sm:rounded-lg" x-data={}>
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-red-400 dark:bg-neutral-700 dark:text-neutral-200">
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
            @foreach ($drinks as $index => $drink)
                <tr
                    class="border-b odd:bg-red-100 odd:dark:bg-neutral-900 even:bg-orange-50 even:dark:bg-neutral-800 dark:border-gray-700 hover:bg-red-300 dark:hover:bg-neutral-700 hover:text-white">
                    <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        @if ($editedField === $index . '.brand_id')
                            <select x-on:edited="alert('Button Was Clicked!')" name="brand_id"
                                wire:model="items.{{ $index }}.brand_id"
                                class="px-2 text-black border rounded-md appearance-none forced-colors:appearance-auto dark:bg-neutral-900 dark:text-neutral-50"
                                @click.outside="$wire.editedField === '{{ $index }}.brand_id' ? $wire.save({{ $index }}) : null">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand['id'] }}">
                                        {{ $brand['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        @else
                            <span class="cursor-pointer" wire:click="editField({{ $index }},'brand_id')">
                                {{ $brands[$drink['brand_id'] - 1]['name'] }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($editedField === $index . '.description')
                            <input
                                class="px-2 py-1 transition-colors duration-300 bg-transparent border-0 border-b-2 border-gray-400 focus:outline-none focus:border-blue-500"
                                type="text" placeholder="Enter text"
                                wire:model="items.{{ $index }}.description"
                                @click.outside="$wire.editedField === '{{ $index }}.description' ? $wire.save({{ $index }}) : null">
                        @else
                            <span class="cursor-pointer" wire:click="editField({{ $index }},'description')">
                                {{ $drink['description'] }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($editedField === $index . '.sugar_free')
                            <div class="inline-flex items-center">
                                <label class="relative flex items-center p-1 rounded-full cursor-pointer"
                                    htmlFor="sugar_free_check">
                                    <input type="checkbox"
                                        class="peer relative appearance-none size-6 border rounded-md border-blue-gray-200 cursor-pointer transition-all before:content[''] before:block before:bg-blue-gray-500 before:w-12 before:h-12 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:opacity-0 hover:before:opacity-10 before:transition-opacity checked:bg-green-400 dark:checked:bg-green-500 dark:checked:border-green-500 dark:checked:before:bg-green-500"
                                        id="sugar_free_check" @checked($items[$index]['sugar_free'])
                                        wire:model="items.{{ $index }}.sugar_free"
                                        @click.outside="$wire.editedField==='{{ $index }}.sugar_free' ? $wire.save({{ $index }}) : null" />
                                    <span
                                        class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-check size-6" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        @else
                            <span class="cursor-pointer" wire:click="editField({{ $index }},'sugar_free')">
                                @if ($drink['sugar_free'])
                                    <svg class="text-green-500 size-6" xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-circle-check" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M9 12l2 2l4 -4" />
                                    </svg>
                                @else
                                    <svg class="text-red-500 size-6" xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-circle-x" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                @endif
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{ $drink['price'] }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-red-500 transition ease-in-out cursor-pointer icon icon-tabler icon-tabler-trash size-6 hover:scale-125"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
