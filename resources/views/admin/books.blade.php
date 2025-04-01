<x-admin.layouts.app>
    <div class="flex items-center mb-8 justify-between">
        <h1 class="text-xl lg:text-3xl font-medium">Book Management</h1>
        <flux:modal.trigger name="add-book">
            <flux:button icon:trailing="plus">Add Book</flux:button>
        </flux:modal.trigger>
    </div>
    <div class="mb-5 flex justify-end gap-5">
        <form action="{{ url()->current() }}">
            <flux:input.group class="max-w-xs">
                <flux:input placeholder="Search books..." name="search" value="{{ request('search') }}"></flux:input>
                <flux:button type="submit" icon='magnifying-glass'>Search</flux:button>
            </flux:input.group>
        </form>
        <flux:dropdown>
            <flux:button icon:trailing="chevron-down">Options</flux:button>

            <flux:menu>
                <flux:menu.submenu heading="Sort by">
                    <flux:menu.radio checked>Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.submenu>

                <flux:menu.submenu heading="Filter">
                    <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                    <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                    <flux:menu.checkbox>Archived</flux:menu.checkbox>
                </flux:menu.submenu>

                <flux:menu.separator />

                <flux:menu.item variant="danger">Delete</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </div>
    <div class="overflow-x-auto rounded border border-gray-300 dark:border-zinc-500 shadow-sm dark:text-white">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium text-gray-900 dark:text-gray-200">
                    <th class="px-3 py-2 whitespace-nowrap">Book title</th>
                    <th class="px-3 py-2 whitespace-nowrap">Author</th>
                    <th class="px-3 py-2 whitespace-nowrap">ISBN</th>
                    <th class="px-3 py-2 whitespace-nowrap">Published Year</th>
                    <th class="px-3 py-2 whitespace-nowrap">Category</th>
                    <th class="px-3 py-2 whitespace-nowrap">Stock</th>
                    <th class="px-3 py-2 whitespace-nowrap">Option</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                @if ($books->count())
                @foreach ($books as $book)
                <x-book-list :book='$book' />
                @endforeach
                @else
                <tr>
                    <td colspan="7">
                        <h1 class="text-xl font-medium text-center my-5">No book found!</h1>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <ul class="flex justify-center gap-1 text-gray-900 dark:text-white mt-5">
        <li>
            <a
                href="#"
                class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700"
                aria-label="Previous page">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </li>

        <li>
            <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700">
                1
            </a>
        </li>

        <li
            class="block size-8 rounded border border-blue-400 bg-blue-500 text-center text-sm/8 font-medium text-white">
            2
        </li>

        <li>
            <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700">
                3
            </a>
        </li>

        <li>
            <a
                href="#"
                class="block size-8 rounded border border-gray-200 text-center text-sm/8 font-medium transition-colors hover:bg-gray-50 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700">
                4
            </a>
        </li>

        <li>
            <a
                href="#"
                class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180 dark:border-zinc-700 dark:hover:border-zinc-600 dark:hover:bg-zinc-700"
                aria-label="Next page">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </li>
    </ul>

    <!-- Modal -->
    <flux:modal name="add-book" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Add New Book</flux:heading>
                <flux:text class="mt-2">Add new book to library.</flux:text>
            </div>
            <form action=""></form>
            <flux:input label="Name" placeholder="Your name" />
            <flux:input label="Date of birth" type="date" />
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
</x-admin.layouts.app>