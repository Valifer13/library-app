<div class="border border-gray-500 rounded-lg">
    <div class="flex justify-center bg-[#EDEDED] rounded-md py-3">
        <img src="https://placehold.co/100x150" alt="">
    </div>
    <div class="py-2 px-3 relative">
        <a href="#" class="md:text-sm text-xs text-gray-400 hover:underline">{{ $book->author }}</a>
        <h1 class="sm:text-base md:text-lg w-[92%]">{{ $book->title }}</h1>
        <p class="my-3 text-sm">{{ Str::limit($book->description, 50) }}</p>
        <button class="absolute top-0 right-3 cursor-pointer">
            <img src="assets/icon/unfavorite.svg" alt="favorite" height="24" width="24">
        </button>
    </div>
    <div class="w-full text-center pb-3">
        <button class="bg-blue-500 w-[92%] p-3 text-white font-medium rounded-md cursor-pointer hover:bg-blue-600">Add to Cart</button>
    </div>
</div>