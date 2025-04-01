<tr class="text-gray-900 dark:text-zinc-300 *:first:font-medium">
    <td class="p-3 whitespace-nowrap flex gap-3 items-center">
        <img src="https://placehold.co/200x400" alt="book_cover" class="max-h-16 max-w-16">
        <h2>{{ $book->title }}</h2>
    </td>
    <td class="px-3 py-2 whitespace-nowrap">{{ $book->author }}</td>
    <td class="px-3 py-2 whitespace-nowrap">{{ $book->isbn }}</td>
    <td class="px-3 py-2 whitespace-nowrap">{{ $book->published_year }}</td>
    <td class="px-3 py-2 whitespace-nowrap">
        <span
            class="rounded-full bg-blue-100 px-2.5 py-0.5 text-sm whitespace-nowrap text-blue-700 dark:bg-blue-700 dark:text-blue-100">
            {{ $book->category->name }}
        </span>
    </td>
    <td class="px-3 py-2 whitespace-nowrap">5</td>
    <td class="px-3 py-2 whitespace-nowrap">
        <span
            class="inline-flex divide-x divide-zinc-300 overflow-hidden rounded border border-zinc-300 shadow-sm dark:divide-zinc-600 dark:border-zinc-400">
            <button
                onclick="location.href='{{ url()->current() }}/1/edit'"
                type="button"
                class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors bg-yellow-500 hover:bg-yellow-600 focus:relative dark:text-white"
                aria-label="Edit">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
            </button>

            <button
                onclick="location.href='{{ url()->current() }}/1/delete'"
                type="button"
                class="px-3 py-1.5 text-sm font-medium text-gray-700 transition-colors bg-red-500 hover:bg-red-700 focus:relative dark:text-white"
                aria-label="Delete">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </span>
    </td>
</tr>