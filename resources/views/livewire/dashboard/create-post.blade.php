<div class="flex flex-col md:flex-row flex-wrap mx-auto w-100 py-5 space-y-0 max-md:space-y-8">

    <div class="flex-1 flex bg-indigo">

        <form class="w-[80%] space-y-3" method="POST" wire:submit.prevent='submit' enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Type here" required
                    class="input input-bordered input-accent w-full max-w-xs" wire:model='title' />
                @error('title')
                <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="image">File</label>
                <input type="file" id="image" name="image" wire:model='image'
                    class="file-input file-input-bordered file-input-accent w-full max-w-xs" />
                @error('image')
                <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" placeholder="Type here" required
                    class="textarea textarea-accent" rows="10" wire:model="description"></textarea>
                @error('description')
                <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-accent">Post</button>
            </div>

        </form>

    </div>

    @if ($image)
    <div class="flex justify-center items-center border-2 border-acent p-2 w-100">

        <div class="rounded">
            <img width="380px" src="{{$image->temporaryUrl()}}" />
        </div>

    </div>
    @endif

</div>