@extends('layouts.main')

@section('title', 'Baixe o app')

@section('content')
<section class="contact-section section-padding">
    <div class="container">
        <div class="row align-items-center">

            {{-- download app buttons & image --}}
            <div class="download-app-div row align-items-center">
                <div class="col-lg-5 col-12 me-auto">
                    <h2>Como faço para baixar o app?</h2>
                    <p>
                        Para baixar o app, basta acessar a loja de aplicativos do seu
                        smartphone e procurar por TKX. Em seguida, clique em instalar e
                        aguarde o download.
                    </p>

                        <div class="row">
                            <div class="col-lg-12 col-12 d-flex justify-content-start">
                                <div class="custom-btn-group">
                                    <a
                                        href="https://play.google.com/store/apps/developer?id=Via+Integra+Tecnologia&pli=1"
                                        target="_blank"
                                        class="btn custom-btn smoothscroll me-3"
                                    >
                                    {{-- crie uma tag i com uma seta na horizontal --}}
                                    <span style="font-size: 18px; margin-right: 5px;">Google Play</span>
                                    <span class="input-icon">&#10148;</span>
                                </a>
                                <a
                                    href="https://apps.apple.com/br/app/tkx-usu%C3%A1rio/id6476009058"
                                    target="_blank"
                                    class="btn custom-btn app-store-btn smoothscroll me-3"
                                >
                                    {{-- crie uma tag i com uma seta na horizontal --}}
                                    <span style="font-size: 18px; margin-right: 5px;">App Store</span>
                                    <span class=" input-icon-white">&#10148;</span>
                                </a>
                                </div>
                            </div>
                        </div>

                </div>

                <div class="col-lg-6 col-2 justify-content-center">
                    <div class="contact-info mt-5">
                        <img style="width: 430px; height: 430px;" src="images/smartphone-1833950_1280.png" class="img-fluid" alt="driver" />
                    </div>
                </div>
            </div>

            {{-- driver & inputs --}}
            <div class="col-lg-5 col-12 me-auto">
                <div class="contact-info mt-5">
                    <img src="images/mercedes-benz-1036355_1920.jpg" class="img-fluid" alt="driver" />
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="contact-info mt-5">
                    <h2>Quer solicitar uma corrida agora?</h2>
                    <p>
                        Peça uma corrida, embarque no veículo e aproveite a viagem.
                    </p>
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
                    <div class="input-wrapper mt-2">
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
                <div class="col-lg-12 col-12 d-flex justify-content-end">
                    <div class="custom-btn-group">
                        <a
                            href="https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login"
                            target="_blank"
                            class="btn custom-btn smoothscroll me-3"
                        >Ver preços</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
