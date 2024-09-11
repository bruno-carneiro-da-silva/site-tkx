<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <!-- Direct CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/Template-tkx.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
        {{-- scroll button --}}
        <button id="scrollToTopBtn" class="scroll-btn bg-warning cursor-pointer border-transparent">
            <i class='bx bx-up-arrow-alt'></i>
        </button>
        {{-- support button --}}
        <x-chatbot-window />
        <x-success-msg />
        <button id="supportBtn" name="support-btn" class="support-btn bg-warning cursor-pointer border-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="M14.05 2a9 9 0 0 1 8 7.94"/><path d="M14.05 6A5 5 0 0 1 18 10"/></svg>
        </button>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img
                src="{{ asset('images/logo-fb.png') }}"
                    class="navbar-brand-image img-fluid"
                    alt="TKX logo"
                />
                <span class="navbar-brand-text">
                Mobilidade
                <small>Inteligente</small>
                </span>
            </a>

            {{-- <div class="d-lg-none ms-auto me-3">
                <x-login-toggle button-text="Entrar" />
            </div> --}}

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1"
                    >Página Inicial</a
                    >
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_2">Aplicações</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_3">Parceiro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll"href="{{ url('/') }}#section_3">Dirigir</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_4">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_5">Contato</a>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarLightDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >Páginas</a
                    >

                    <ul
                    class="dropdown-menu dropdown-menu-light"
                    aria-labelledby="navbarLightDropdownMenuLink"
                    >
                    <li>
                        <a class="dropdown-item" href="{{ url('/lista-de-fretes') }}">
                        Lista de Fretes</a>
                    </li>

                    {{-- <li>
                        <a class="dropdown-item" href="{{ url('/lista-de-cidades') }}"
                        >Lista de Cidades</a
                        >
                    </li> --}}
                    </ul>
                </li>
                </ul>

                <div class="d-none d-lg-block ms-lg-3">
                    <x-login-toggle button-text="Entrar" />
                </div>
            </div>
            </div>
        </nav>
            @yield('content')
        <footer class="site-footer">
            <div class="container d-flex justify-content-center">
                <div class="row w-100 mt-5 align-items-start">
                    <div class="col-lg-3 col-12 mb-4">
                        <h2 class="site-footer-title">TKX</h2>
                        <ul class="list-styled">
                            <li>
                                <a  href="{{ url('/politicas') }}">Politicas de privacidade</a>
                            </li>
                            <li>
                                <a  href="{{ url('/termos') }}">Termos de uso</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-12 mb-4">
                        <h2 class="site-footer-title">Saiba mais</h2>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <i class="bx bx-chevron-right me-2"></i>
                                <a  href="{{ url('/aplicativos') }}" target="_blank">Truck</a>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bx-chevron-right me-2"></i>
                                <a  href="{{ url('/aplicativos') }}" target="_blank">Mobilidade</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-12 mb-4">
                        <h5 class="site-footer-title mb-4">Horarios de Atendimento:</h5>
                        <p class="d-flex border-bottom pb-3 mb-3">
                            <span>Seg-Sex</span>
                            6:00 AM - 6:00 PM
                        </p>
                        <p class="d-flex">
                            <span>Sab-Dom</span>
                            6:30 AM - 8:30 PM
                        </p>
                        <br />
                    </div>
                    <div class="col-lg-2 col-12 mb-4 ms-auto">
                        <ul class="social-icon mb-4">
                            <li class="social-icon-item">
                                <a
                                    href="https://www.instagram.com/tkxmobilidadelavras/"
                                    target="_blank"
                                    class="social-icon-link bi-instagram"
                                ></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>
                            <li class="social-icon-item">
                                <a
                                    href="https://api.whatsapp.com/send/?phone=5535999746660&text=Sua+mensagem%3A&type=phone_number&app_absent=0"
                                    class="social-icon-link bi-whatsapp"
                                    target="_blank"
                                ></a>
                            </li>
                        </ul>
                        <p class="copyright-text text-white">
                            Design:
                            <a class="text-warning" rel="nofollow" href="https://tkx.truck.log.br/socket/public/" target="_blank"> TKX Mobilidade</a>
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-warning" ="copyright-text">Copyright © 2024 TKX Mobilidade</p>

                    </div>

                </div>
            </div>
        </footer>
        <!-- Script do Google Maps Places API -->
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
        <script src="{{ mix('js/autocomplete.js') }}"></script>
        <script src="{{ mix('js/notifications.js') }}"></script>
        <script src="{{ mix('js/chatbot.js') }}"></script>
        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/geolocation.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/animated-headline.js') }}"></script>
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
