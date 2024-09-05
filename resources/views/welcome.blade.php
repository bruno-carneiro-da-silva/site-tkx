@extends('layouts.main')
@section('title', 'TKX Mobilidade inteligente')

@section('content')
    <main>
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
                    <span>TKX mobilidade inteligente é</span>
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


        <section class="membership-section section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    {{-- matriz de transporte --}}
                    <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                        <h1>Para motoristas de carga</h1>
                    </div>
                    <div class="col-lg-6 partner-driver col-12 mb-2 mb-lg-0 d-flex border align-items-center d-flex align-items-center justify-content-center col-12 me-auto mb-lg-0 p-4">
                        <div>
                            <h2 class="mb-4 pb-lg-2">Matriz de transporte</h2>

                            <div class="table-responsive">
                            <p>
                                O aplicativo, projetado para motoristas parceiros, é
                                confiável e fácil de usar. Tanto a empresa quanto os
                                motoristas de carga, ele fornece todas as informações
                                necessárias para se tornar um motorista parceiro da Truck
                            </p>
                            <div class="custom-btn-group">
                                <a
                                href="https://play.google.com/store/apps/developer?id=Via+Integra+Tecnologia+Ltda&hl=pt_BR"
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
                            class=" gps-image img-fluid"
                            alt="gps-image"
                            srcset=""
                        />
                    </div>

                    <div class="col-lg-12 col-12 text-start mx-auto mb-lg-5 mb-4" style="margin-top: 50px;">
                        <h1>Como a Truck Tkx funciona</h1>
                        <p>Facilitamos a conexão entre empresas e cargas em todo o Brasil, atendendo tanto frotistas quanto caminhoneiros autônomos.</p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column flex-lg-row justify-content-between gap-3">
                                    <div class="card w-100" style="min-width: 200px;">
                                        <div class="card-body d-flex flex-column">
                                            <div class="rounded-circle bg-light mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2">
                                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                                                    <path d="M10 6h4"/>
                                                    <path d="M10 10h4"/>
                                                    <path d="M10 14h4"/>
                                                    <path d="M10 18h4"/>
                                                </svg>
                                            </div>
                                            <h5 class="card-title fw-bold">Para empresas</h5>
                                            <p class="card-text mb-3">
                                                As empresas anunciam fretes e cargas disponíveis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card w-100" style="min-width: 200px;">
                                        <div class="card-body d-flex flex-column">
                                            <div class="rounded-circle bg-light mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck">
                                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/>
                                                    <path d="M15 18H9"/>
                                                    <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/>
                                                    <circle cx="17" cy="18" r="2"/>
                                                    <circle cx="7" cy="18" r="2"/>
                                                </svg>
                                            </div>
                                            <h5 class="card-title fw-bold">Para caminhoneiros</h5>
                                            <p class="card-text">
                                                Os motoristas procuram por fretes que estão
                                                disponíveis e compatíveis com seus veículos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card w-100" style="min-width: 200px;">
                                        <div class="card-body d-flex flex-column">
                                            <div class="rounded-circle bg-light mb-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check-2">
                                                    <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"/>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                                                    <path d="m3 15 2 2 4-4"/>
                                                </svg>
                                            </div>
                                            <h5 class="card-title fw-bold">Negociação</h5>
                                            <p class="card-text">
                                                Tanto a empresa quanto o motorista fazem a negociação do frete diretamente.
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                <h1 class="text-center text-white mb-5">Outros segmentos de atuação</h1>
                <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-check">
                                    <path d="m16 16 2 2 4-4"/>
                                    <path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/>
                                    <path d="m7.5 4.27 9 5.15"/>
                                    <polyline points="3.29 7 12 12 20.71 7"/>
                                    <line x1="12" x2="12" y1="22" y2="12"/>
                                </svg>
                            </div>
                            <h2 class="ms-4">TKX Entregador</h2>
                        </div>
                        <p class="mb-3">
                            Nosso aplicativo permite que mototaxistas recebam novas corridas e aumentem o faturamento diário do profissional.
                        </p>
                        <div class="d-flex justify-content-start gap-3">
                            <a href="https://play.google.com/store/apps/details?id=br.com.tkxentregas.taxi.taximachine" class="button-link" target="_blank">
                                Saiba mais
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right">
                                    <path d="M18 8L22 12L18 16"/>
                                    <path d="M2 12H22"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dollar-sign">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/>
                                    <path d="M12 18V6"/>
                                </svg>
                            </div>
                            <h2 class="ms-4">Taxibras</h2>
                        </div>
                        <p class="mb-3">
                            Nosso aplicativo permite que motoristas, entregadores recebam seus pagamentos e tenham
                            em suas mãos um controle financeiro.
                        </p>
                        <div class="d-flex justify-content-start gap-3">
                            <a href="https://play.google.com/store/apps/details?id=com.taxibras&hl=pt_BR" class="button-link" target="_blank">
                                Saiba mais
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right">
                                    <path d="M18 8L22 12L18 16"/>
                                    <path d="M2 12H22"/>
                                </svg>
                            </a>
                        </div>
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

        <section class="about-section section-padding" id="section_3">
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

                <div class="col-lg-5 col-md-6 mt-3 col-12 mb-4 mb-lg-0 mb-md-0">
                <div class="member-block">
                    <div class="member-block-image-wrap">
                        <img
                            src="images/driver.jpeg"
                            class="member-block-image img-fluid"
                            alt="motorista segurando o celular"
                        />
                    <div
                    class="member-block-image-overlay"></div>
                    </div>
                </div>
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
                    <h2 class="mb-4 pb-2">Entre em contato</h2>

                    <div class="row">
                        {{-- fullname --}}
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
                        {{-- email --}}
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
                        {{-- content --}}
                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                            <input
                                class="form-control"
                                id="message"
                                name="message"
                                placeholder="Assunto"
                            ></input>

                            <label for="floatingTextarea">Assunto</label>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                            <input
                                type="text"
                                name="full-name"
                                id="full-name"
                                pattern="[0-9]{11}"
                                class="form-control"
                                placeholder="Telefone"
                                required=""
                            />

                            <label for="floatingInput">Telefone</label>
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <select class="form-control" id="originSelect" aria-label="Select Origin">
                                    <option value="" disabled selected>Escolha o departamento</option>
                                    <optgroup label="Setores">
                                        <option value="sudeste">Comercial</option>
                                        <option value="sul">Vendas</option>
                                        <option value="centro-oeste">Financeiro</option>
                                        <option value="nordeste">Administração</option>
                                        <option value="norte">Suporte</option>
                                        <option value="norte">SAC</option>
                                        <option value="norte">RH</option>
                                    </optgroup>
                                </select>


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

@endsection
