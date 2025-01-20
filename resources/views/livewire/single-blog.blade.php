<div>
    <div class="w-full flex justify-center items-center flex-col space-y-5">
        <div class="text-center">
            <p class="text-4xl font-bold">{{$post->title}}</p>
        </div>
        @if ($post->image)
        <img class="rounded-xl h-[540px] bg-cover" height="600px" src="/storage/{{$post->image}}" />
        @endif
        <div class="text-center">
            <p class="badge badge-outline badge-primary text-base">typscript</p>
            <p class="badge badge-outline badge-primary text-base">typscript</p>
        </div>

        <div class="flex flex-col text-center">
            <p class="text-sm italic">{{$post->created_at}}</p>
            <p class="text-sm font-semibold italic">{{$author->name}}</p>
        </div>

    </div>

    <div class="py-5 px-5 mx-auto">
        <p class="">
            {{$post->description}}
        </p>
    </div>

</div>