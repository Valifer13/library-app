<div class="border border-gray-500 rounded-lg">
    <div class="flex justify-center bg-[#EDEDED] dark:bg-[#1A1A1A] rounded-t-md py-3">
        <div class="relative">
            <img src="https://placehold.co/100x150" alt="">
            <button class="absolute top-0 right-3 cursor-pointer">
                <img src="assets/icon/{{ $state ? 'favorite' : 'unfavorite' }}.svg" alt="favorite" height="24" width="24">
            </button>
        </div>
    </div>
    <div class="p-3 grid gap-2">
        <p class="flex justify-between items-center"><a href="#" class="text-xs text-gray-600 dark:text-gray-400 hover:underline">{{ $book->author }}</a><a href="#" class="bg-blue-300 hover:bg-blue-400 py-1 px-3 rounded-full text-sm">{{ $book->category->name }}</a></p>
        <h1 class="sm:text-base md:text-md min-h-14 font-medium">{{ Str::limit($book->title, 40) }}</h1>
        <p class="max-h-10 overflow-y-auto scrollbar-hide text-sm md:text-base">{{ Str::limit($book->description, 75) }}</p>
    </div>
    <div class="w-full text-center pb-3">
        <button class="bg-blue-500 dark:bg-blue-700 w-[92%] p-3 text-white font-medium rounded-md cursor-pointer hover:bg-blue-600">Add to Cart</button>
    </div>
</div>