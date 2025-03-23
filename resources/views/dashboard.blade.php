<x-layouts.app :title="__('Dashboard')">
    <div class="w-full rounded-xl grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4">
        @foreach ($books as $book)
            <livewire:book-card :book="$book"/>
        @endforeach
    </div>
</x-layouts.app>
