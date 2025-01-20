<div id="latest-blogs" class="w-full pt-16">

    <div class="text-center mb-10">
        <a href="#latest-blogs"
            class="text-3xl text-primary rounded-xl font-semibold px-3 py-2 border-2 border-primary">Latest
            blogs</a>
    </div>

    <div class="flex flex-wrap gap-8 justify-center">

        @if ($posts)
        @foreach ($posts as $post)
        <livewire:blog-item :post="$post" />
        @endforeach
        @endif


    </div>

    <div class="py-10 text-center">
        <button class="btn btn-outline btn-primary btn-wide">More blogs</button>
    </div>

</div>