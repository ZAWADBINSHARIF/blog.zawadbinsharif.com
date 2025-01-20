<div class="space-y-10 pb-14">

    <div class="flex flex-wrap gap-8 justify-center">

        @if ($posts)

        @foreach ( $posts as $post)
        <livewire:blog-item :key="$post->id" :post="$post" />
        @endforeach

        @endif


    </div>

    @if ($posts->hasPages())

    <div class="w-full flex justify-center">
        <div class="join">
            <button @disabled($posts->onFirstPage()) class="join-item btn" wire:click="previousPage"
                wire:loading.attr="disabled" rel="prev">«</button>
            <button class="join-item btn">{{$posts->currentPage()}} of {{$posts->lastPage()}}</button>
            <button @disabled($posts->onLastPage()) class="join-item btn" wire:click="nextPage"
                wire:loading.attr="disabled"
                rel="next">»</button>
        </div>
    </div>

    @endif

</div>