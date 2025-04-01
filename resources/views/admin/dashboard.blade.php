<x-admin.layouts.app :title="__('Admin Dashboard')">
    <flux:heading size="xl" level="1">Good afternoon, {{ auth()->user()->name }}</flux:heading>
    <flux:text class="mb-6 mt-2 text-base">Here's what's new today</flux:text>
    <flux:separator variant="subtle" />
    
    <!-- <div class="w-full min-h-1/2 rounded-lg border-zinc-200 dark:border-zinc-700 border-[1px]">
    </div> -->
    
    <div class="w-full grid grid-cols-3 2xl:grid-cols-4 gap-3">
        <div class="col-span-3 w-full min-h-[400px] border-zinc-700 border-[1px] grid place-items-center bg-zinc-700 rounded-xl">Statistik Pengunjung</div>
        <div class="w-full min-h-40 border-zinc-700 border-[1px] grid place-items-center rounded-xl bg-zinc-300 dark:bg-zinc-700">Buku Populer</div>
        <div class="w-full min-h-40 border-zinc-700 border-[1px] grid place-items-center rounded-xl bg-zinc-300 dark:bg-zinc-700">Total Buku</div>
        <div class="w-full min-h-40 border-zinc-700 border-[1px] grid place-items-center rounded-xl bg-zinc-300 dark:bg-zinc-700">Buku Tersedia</div>
        <div class="w-full min-h-40 border-zinc-700 border-[1px] grid place-items-center rounded-xl bg-zinc-300 dark:bg-zinc-700">Buku Dipinjam</div>
        <div class="w-full min-h-40 border-zinc-700 border-[1px] grid place-items-center rounded-xl bg-zinc-300 dark:bg-zinc-700">Buku Dikembalikan</div>
    </div>
</x-admin.layouts.app>