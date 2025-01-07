<div class="navbar bg-base-100 rounded-b-xl mb-5">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a wire:navigate href="/"
                        class="{{ $currentUri == '/' ? 'btn-active font-bold btn-accent' : null }}">Home</a></li>
                <li><a wire:navigate href="/blogs"
                        class="{{ $currentUri == 'blogs' ? 'btn-active font-bold btn-accent' : null }}">Blogs</a></li>
            </ul>
        </div>
        <a href="/" wire:navigate class="btn btn-ghost text-lg font-blog uppercase justify-center max-[430px]:px-0 max-[430px]:items-end max-[430px]:leading-3">
            <div class="flex justify-center items-end max-[430px]:flex-col">
                <p class="text-primary text-3xl">Blog</p>
                <div class="flex space-x-1 max-[430px]:flex-row text-xs">
                    <p class="text-error lowercase">By</p>
                    <p class="text-success lowercase">Zawad</p>
                </div>
            </div>
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 space-x-3">
            <li><a wire:navigate href="/"
                    class="{{ $currentUri == '/' ? 'btn-active font-bold btn-accent' : "outline-1 outline-gray-400 outline" }}">Home</a></li>
            <li><a wire:navigate href="/blogs"
                    class="{{ $currentUri == 'blogs' ? 'btn-active font-bold btn-accent' : "outline-1 outline-gray-400 outline" }}">Blogs</a></li>
        </ul>
    </div>

    <div class="navbar-end flex gap-3">
        <a class="btn btn-accent" wire:navigate href="/login">Login</a>
        <a class="btn btn-success" wire:navigate href="/registration">Register</a>
    </div>

</div>
