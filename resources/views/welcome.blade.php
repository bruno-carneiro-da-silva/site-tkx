<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TKX - Mobilidade Urbana</title>

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

        {{-- <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style> --}}
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img
                    src="images/logo-fb.png"
                    class="navbar-brand-image img-fluid"
                    alt="TKX logo"
                  />
                  <span class="navbar-brand-text">
                    Mobilidade
                    <small>Urbana</small>
                  </span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                  <a
                    class="btn custom-btn custom-border-btn"
                    data-bs-toggle="offcanvas"
                    href="#offcanvasExample"
                    role="button"
                    aria-controls="offcanvasExample"
                    >Login</a
                  >
                </div>

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
                      <a class="nav-link click-scroll" href="#section_2">Sobre nós</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link click-scroll" href="#section_3">Dirigir</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link click-scroll" href="#section_5">Contato</a>
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
                          <a class="dropdown-item" href="event-listing.html"
                            >Lista de eventos</a
                          >
                        </li>

                        <li>
                          <a class="dropdown-item" href="event-detail.html"
                            >Detalhe do evento</a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <div class="d-none d-lg-block ms-lg-3">
                    <a
                      class="btn custom-btn custom-border-btn"
                      data-bs-toggle="offcanvas"
                      href="#offcanvasExample"
                      role="button"
                      aria-controls="offcanvasExample"
                      >Login</a
                    >
                  </div>
                </div>
              </div>
            </nav>

            <div
              class="offcanvas offcanvas-end"
              data-bs-scroll="true"
              tabindex="-1"
              id="offcanvasExample"
              aria-labelledby="offcanvasExampleLabel"
            >
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Login</h5>

                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>

              <div class="offcanvas-body d-flex flex-column">
                <form
                  class="custom-form member-login-form"
                  action="#"
                  method="post"
                  role="form"
                >
                  <div class="member-login-form-body">
                    <div class="mb-4">
                      <label class="form-label mb-2" for="member-login-number"
                        >No. de cadastro</label
                      >

                      <input
                        type="text"
                        name="member-login-number"
                        id="member-login-number"
                        class="form-control"
                        placeholder="11002560"
                        autocomplete="username"
                        required
                      />
                    </div>

                    <div class="mb-4">
                      <label class="form-label mb-2" for="member-login-password"
                        >Senha</label
                      >

                      <input
                        type="password"
                        name="member-login-password"
                        id="member-login-password"
                        pattern="[0-9a-zA-Z]{4,10}"
                        class="form-control"
                        placeholder="Senha"
                        autocomplete="username"
                        required="Senha é obrigatória"
                      />
                    </div>

                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        name="flexCheckDefault"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                      />

                      <label class="form-check-label" for="flexCheckDefault">
                        Lembra credenciais
                      </label>
                    </div>

                    <div class="col-lg-5 col-md-7 col-8 mx-auto">
                      <button type="submit" class="form-control">Login</button>
                    </div>

                    <div class="text-center my-4">
                      <a href="#">Esqueceu a senha?</a>
                    </div>
                  </div>
                </form>

                <div class="mt-auto mb-5">
                  <p>
                    <strong class="text-white me-3">Alguma Dúvida?</strong>

                    <a href="tel: 010-020-0340" class="contact-link">
                      010-020-0340
                    </a>
                  </p>
                </div>
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                  fill="#3D405B"
                  fill-opacity="1"
                  d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
              </svg>
            </div>

            <section
              class="hero-section d-flex justify-content-center align-items-center"
              id="section_1"
            >
              <div class="section-overlay"></div>

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                  fill="#000"
                  fill-opacity="1"
                  d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
                ></path>
              </svg>

              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-12 mb-lg-5 mb-lg-0">
                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                      <span>TKX mobilidade Urbana é</span>
                      <span class="cd-words-wrapper">
                        <b class="is-visible">Moderna</b>
                        <b>Praticidade</b>
                        <b>Segurança</b>
                      </span>
                    </h1>
                    <p class="text-white description">
                      Peça uma corrida, embarque no veículo e aproveite a viagem.
                    </p>

                    <div class="input-group-location">
                      <div class="input-wrapper">
                        <span class="input-icon">&#8226;</span>
                        <!-- ícone do ponto -->
                        <input
                          type="text"
                          placeholder="Informe o local"
                          class="input-field"
                          id="location-input"
                        />
                        <button onclick="getUserLocation()" class="arrow-button">
                          <span class="input-icon-right">&#10148;</span>
                          <!-- ícone da seta -->
                        </button>
                      </div>
                      <div class="input-wrapper">
                        <span class="input-icon-square">&#8226;</span>
                        <!-- ícone quadrado -->
                        <input
                          type="text"
                          placeholder="Informar o destino"
                          class="input-field"
                          id="destination-input"
                        />
                      </div>
                    </div>
                    <div class="custom-btn-group">
                      <a
                        href="https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login"
                        target="_blank"
                        class="btn custom-btn smoothscroll me-3"
                        >Ver disponibilidade</a
                      >
                    </div>
                  </div>

                  <!-- <div class="col-lg-6 col-12">
                                  <div class="ratio ratio-16x9">
                                      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/MGNgbNGOzh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                  <!-- </div>
                              </div> -->
                </div>
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                  fill="#ffffff"
                  fill-opacity="1"
                  d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
              </svg>
            </section>

            <section class="about-section section-padding" id="section_2">
              <div class="container">
                <div class="row">
                  <div
                    class="col-lg-6 partner-driver d-flex align-items-center justify-content-center col-12 me-auto mb-4 mb-lg-0 border p-4"
                  >
                    <div>
                      <h2>
                        Na <strong style="color: var(--primary-color)">TKX</strong>,
                        você pode torna-se um dos nossos motorista parceiros e
                        incrementar seus ganhos.
                      </h2>

                      <p>
                        Você poderá aproveitar os planos de incentivo da TKX para
                        assegurar sua renda.
                      </p>

                      <div class="custom-btn-group">
                        <a
                          href="https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login"
                          target="_blank"
                          class="btn custom-btn smoothscroll me-3"
                          >Quero ser um motorista parceiro</a
                        >
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="member-block">
                      <div class="member-block-image-wrap">
                        <!-- Adicione a imagem abaixo dos quadrados -->
                        <img
                          src="images/driver.jpeg"
                          class="member-block-image img-fluid"
                          alt=""
                        />

                        <div
                        class="member-block-image-overlay"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-bg-image">
              <svg
                viewBox="0 0 1265 144"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                  stroke-width="0"
                ></path>
              </svg>

              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                      <h2 class="mb-lg-3">Cadastre-se na nossa newsletter</h2>

                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor ut labore et dolore.
                      </p>

                      <form
                        action="#"
                        method="get"
                        class="custom-form mt-lg-4 mt-2"
                        role="form"
                      >
                        <div class="input-group input-group-lg">
                          <span
                            class="input-group-text bi-envelope"
                            id="basic-addon1"
                          ></span>

                          <input
                            type="email"
                            name="email"
                            pattern="[^ @]*@[^ @]*"
                            class="form-control"
                            placeholder="Endereço de Email"
                            required=""
                          />

                          <button type="submit" class="form-control">
                            Cadastrar
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <svg
                viewBox="0 0 1265 144"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z"
                  stroke-width="0"
                ></path>
                <path
                  fill="rgba(255, 255, 255, 1)"
                  d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z"
                  stroke-width="0"
                ></path>
              </svg>
            </section>

            <section class="membership-section section-padding" id="section_3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                    <h2><span>App</span> dos motoristas de carga</h2>
                  </div>

                  <div class="col-lg-6 col-12 mb-3 mb-lg-0 d-flex align-items-center">
                    <div>
                      <h2 class="mb-4 pb-lg-2">Matriz de transporte</h2>

                      <div class="table-responsive">
                        <p>
                          O aplicativo, projetado para motoristas parceiros, é
                          confiável e fácil de usar. Tanto a empresa quanto os
                          motoristas de carga, ele fornece todas as informações
                          necessárias para se tornar um motorista parceiro da TKX
                        </p>
                        <div class="custom-btn-group">
                          <a
                            href="https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login"
                            target="_blank"
                            class="btn custom-btn smoothscroll me-3"
                            >Baixar o aplicativo</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5 col-12 mx-auto d-flex align-items-center">
                    <img
                      src="images/135° 30° 12° (2).png"
                      class="member-block-image img-fluid"
                      style="width: 600px; height: 400px; margin-top: 35px"
                      alt="gps-image"
                      srcset=""
                    />
                  </div>
                </div>
              </div>
            </section>

            <section class="events-section section-bg section-padding" id="section_4">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-3">Perguntas frequentes</h2>
                  </div>

                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item rounded">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne"
                          aria-expanded="false"
                          aria-controls="flush-collapseOne"
                        >
                          Como é dirigir pelo app da TKX comparado com outros apps?
                        </button>
                      </h2>
                      <div
                        id="flush-collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          Dirigir pelo app da TKX oferece uma experiência única e
                          vantajosa. O app é projetado especificamente para motoristas
                          de carga, proporcionando uma interface intuitiva e
                          funcionalidades que atendem às necessidades do dia a dia.
                          Comparado com outros apps, a TKX oferece suporte dedicado,
                          planos de incentivo atrativos e uma plataforma confiável que
                          ajuda a maximizar seus ganhos.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item rounded">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTwo"
                          aria-expanded="false"
                          aria-controls="flush-collapseTwo"
                        >
                          Tenho um caminhão próprio, posso me tornar um motorista de
                          carga também?
                        </button>
                      </h2>
                      <div
                        id="flush-collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          Sim, se você possui um caminhão próprio, pode se tornar um
                          motorista de carga parceiro. Ter seu próprio veículo pode
                          oferecer mais flexibilidade e potencial de ganhos,
                          aproveitando as oportunidades disponíveis na plataforma.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item rounded">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree"
                          aria-expanded="false"
                          aria-controls="flush-collapseThree"
                        >
                          Existe alguma frequência mínima de viagens que devo fazer?
                        </button>
                      </h2>
                      <div
                        id="flush-collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          Não, não há uma frequência mínima de viagens que você deve
                          fazer. Você pode escolher quando e com que frequência deseja
                          dirigir. No entanto, manter uma atividade regular pode
                          ajudá-lo a maximizar seus ganhos e aproveitar melhor os
                          incentivos oferecidos.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="contact-section section-padding" id="section_5">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-12">
                    <form
                      action="#"
                      method="post"
                      class="custom-form contact-form"
                      role="form"
                    >
                      <h2 class="mb-4 pb-2">Perguntas frequentes</h2>

                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-floating">
                            <input
                              type="text"
                              name="full-name"
                              id="full-name"
                              class="form-control"
                              placeholder="Nome Completo"
                              required=""
                            />

                            <label for="floatingInput">Nome completo</label>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-floating">
                            <input
                              type="email"
                              name="email"
                              id="email"
                              pattern="[^ @]*@[^ @]*"
                              class="form-control"
                              placeholder="Endereço de Email"
                              required=""
                            />

                            <label for="floatingInput">Endereço de Email</label>
                          </div>
                        </div>

                        <div class="col-lg-12 col-12">
                          <div class="form-floating">
                            <textarea
                              class="form-control"
                              id="message"
                              name="message"
                              placeholder="Describe message here"
                            ></textarea>

                            <label for="floatingTextarea">Mensagem</label>
                          </div>

                          <button type="submit" class="form-control">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="contact-info mt-5">
                      <div class="contact-info-item">
                        <div class="contact-info-body">
                          <strong>Lavras, Minas gerais</strong>

                          <p class="mt-2 mb-1">
                            <a href="tel: 010-020-0340" class="contact-link">
                              +55 35 99974-6660
                            </a>
                          </p>

                          <p class="mb-0">
                            <a
                              href="mailto:contato@viaintegra.com.br"
                              class="contact-link"
                            >
                              contato@viaintegra.com.br
                            </a>
                          </p>
                        </div>

                        <div class="contact-info-footer">
                          <a href="#">Rotas</a>
                        </div>
                      </div>

                      <img src="images/WorldMap.svg" class="img-fluid" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>

          <footer class="site-footer">
            <div class="container d-flex justify-content-center">
                <div class="row w-100 mt-5 align-items-start">
                    <div class="col-lg-3 col-12 mb-4">
                        <h2 class="site-footer-title">TKX</h2>
                        <ul class="list-styled">
                            <li>Politicas de privacidade</li>
                            <li>Termos de uso</li>
                            <li>Politicas de privacidade</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-12 mb-4">
                        <h2 class="site-footer-title">Saiba mais</h2>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <i class="bx bx-chevron-right me-2"></i>
                                Mobilidade
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
