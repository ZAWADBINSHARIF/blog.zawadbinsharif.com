<div class="space-y-10 pb-14">

    <div class="flex flex-wrap gap-8 justify-center">

        @for ($i = 0; $i < 10; $i++)
            <livewire:blog-item />
        @endfor

    </div>

    <div class="w-full flex justify-center">
        <div class="join">
            <button class="join-item btn">«</button>
            <button class="join-item btn">Page 22</button>
            <button class="join-item btn">»</button>
        </div>
    </div>

</div>
