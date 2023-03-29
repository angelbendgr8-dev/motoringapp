<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col justify-center items-center min-h-screen">
            <a href="#" class="z-10 flex pt-5">
                <img alt="MotoringHub admin" src="{{ asset('/images/logobig.png') }}">
                {{-- <span class="text-white text-lg ml-3"> Tinker </span> --}}
            </a>
            {{-- <div class="my-auto">
                <img alt="MotoringApp " class="-intro-x w-1/2 -mt-16" src="{{asset('Admin/dist/images/illustration.svg')}}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign in to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
            </div> --}}
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                <div class="bg-red-300">
                    @if (session()->has('error'))
                        <div class="text-black text-center">

                            {{ session('error') }}

                        </div>
                    @endif

                </div>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                    account. Manage all your e-commerce accounts in one place</div>
                <div class="intro-x mt-8 ">
                    <input wire:model='email' type="text"
                        class=" login__input form-control py-3 px-4 block  @error('email') border-2 border-red-400 @enderror"
                        placeholder="Email">
                    @error('email')
                        <div>
                            <p class="text-red-400 float-right">Email field is required</p>
                        </div>
                    @enderror
                    <input wire:model='password' type="password"
                        class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                    @error('password')
                        <div>
                            <p class="text-red-400 float-right">Password field is required</p>
                        </div>
                    @enderror
                </div>
                <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4 clear-right">
                    <div class="flex items-center mr-auto">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button wire:click='authenticate'
                        class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>

                </div>
                <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By
                    signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                        Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                </div>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>
