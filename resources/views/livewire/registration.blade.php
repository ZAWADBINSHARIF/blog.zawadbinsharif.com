<div class="flex justify-center p-4 h-screen">
    <form class="w-full md:w-1/2 space-y-5 h-min p-5 border-2 border-success rounded-xl shadow-xl"
        wire:submit.prevent='submit' method="POST">
        @csrf
        <div>
            <label class="input input-bordered flex items-center gap-2 input-success">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                        d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path
                        d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
                <input wire:model.live='email' type="text" class="grow" name="email" placeholder="Email" />
            </label>
            @error('email')
            <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div>

            <label class="input input-bordered flex items-center gap-2 input-success">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input wire:model.live='name' type="text" class="grow" name="name" placeholder="Name" />
            </label>
            @error('name')
            <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label class="input input-bordered flex items-center gap-2 input-success">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                        clip-rule="evenodd" />
                </svg>
                <input wire:model.live='password' type="password" class="grow" name="password" placeholder="Password" />
            </label>
            @error('password')
            <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label class="input input-bordered flex items-center gap-2 input-success">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                        clip-rule="evenodd" />
                </svg>
                <input wire:model.live='password_confirmation' type="password" class="grow" name="password_confirmation"
                    placeholder="Password Confirmation" />
            </label>
            @error('password')
            <div class="text-red-500 text-xs font-bold">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn btn-success">Sign Up</button>
        </div>
    </form>
</div>