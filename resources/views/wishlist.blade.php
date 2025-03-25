<x-layouts.app :title="__('Wishlist')">
    <div class="w-full rounded-xl grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-2 md:gap-4">
        @foreach ($wishlists as $wishlist)
            <livewire:book-card :book="$wishlist->book" :state="true"/>
        @endforeach
    </div>
</x-layouts.app>