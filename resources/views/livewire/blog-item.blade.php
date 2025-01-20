<div class="card bg-base-100 w-96 sm:w-72 md:w-80 lg:w-96 shadow-xl break-words h-fit">
    @if ($post->image)
    <figure>
        <img src="storage/{{$post->image}}" alt="Shoes" class="bg-cover w-full max-h-[480px] object-cover" />
    </figure>
    @endif
    <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p>
            {{ Str::words($post->description, 20) }}
        </p>
        <div class="card-actions justify-between items-center">
            <div>
                <d class="badge badge-outline badge-primary">Typescript</d>
            </div>
            <a wire:navigate href="/blogs/{{$post->id}}" class="btn btn-accent">Read more</a>
        </div>
    </div>
</div>