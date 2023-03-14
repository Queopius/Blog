@auth
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="height: 60px;">
    <div class="container-fluid ms-2 px-0 px-xl-3">
        <a class="navbar-brand d-inline-block ms-lg-0 pe-lg-2 me-lg-4" href="{{ url('/') }}">
            <img src="/uploads/logo/bootstrap-solid.svg"
                width="30"
                height="30"
                alt=""
            >
            {{ config('app.name', 'Blog Test') }}
        </a>

        <button class="navbar-toggler me-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="ms-3">
                    <ul class="ms-5">
                        <form class="ms-5 ps-5 justify-content-center">
                            <div class="input-group" style="width: 475px;">
                                <input class="form-control rounded-6"
                                    type="text"
                                    style="height: 35px;"
                                >
                                <span>
                                    <svg class="position-absolute text-muted top-50 start-0 translate-middle-y ms-3"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </span>
                            </div>
                        </form>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mt-1">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                        </li>
                    @endif
                @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endauth

