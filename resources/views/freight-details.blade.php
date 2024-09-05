@extends('layouts.main')

@section('title', 'Lista de fretes')

@section('content')
<div class="container mt-5" style="padding-top: 70px;">
    <div class="row">
        <!-- Coluna da Esquerda -->
        <div class="col-md-8">
            <!-- Detalhes do Frete -->
            <x-freight-details :freight="$freight" />
            <!-- Botão de Ver Contatos -->
            <button class="btn btn-danger mb-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">Ver contatos</button>
        </div>
        <!-- Coluna da Direita -->
        <div class="col-md-4">
            <!-- Detalhes da Empresa -->
            <div class="card">
                <div class="card-header">
                    <h5>Empresa</h5>
                </div>
                <div class="card-body">
                    <p><strong>Cidade:</strong> {{ $freight->company_city }}</p>
                    <p><strong>Ativa há:</strong> {{ $freight->company_active_time }}</p>
                    <p><strong>Fretes Ativos:</strong> {{ $freight->company_active_freights }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contatos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Aqui vai a lista de contatos...</p>
    </div>
</div>
@endsection
