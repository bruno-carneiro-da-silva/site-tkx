@extends('layouts.main')

@section('title', 'Lista de fretes')

@section('content')
<div class="container freight-list-container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-3 mt-5">
            <div class=" mb-5">
                <x-location-filter />
            </div>

            <div class=" mb-2">
                <x-radio-range-filter title="Raio (Distância)" :options="[50, 100, 200]" name="raio" />
            </div>
            <div class=" mb-2">
            <x-truck-body-filter
                title="Veículo"
                :options="[
                    'Pesados' => ['Carreta', 'Carreta LS', 'Vanderléia', 'Bitrem', 'Rodotrem'],
                    'Médios' => ['Truck', 'Bitruck'],
                    'Leves' => ['Fiorino', 'VLC', '3/4', 'Toco']
                ]"
                name="veículo"
            />
            <x-truck-body-filter
                title="Carroceria"
                :options="[
                    'Abertas' => ['Graneleiro', 'Grade Baixa', 'Prancha', 'Caçamba', 'Plataforma'],
                    'Fechadas' => ['Sider', 'Baú', 'Baú Frigorífico', 'Baú Refrigerado'],
                    'Especiais' => ['Silo', 'Cegonheiro', 'Gaiola', 'Tanque', 'Bug Porta Container', 'Munk', 'Apenas Cavalo', 'Cavaqueira', 'Hopper']
                ]"
                name="carroceria"
            />
            </div>

            <div class=" mb-2">
                <x-filter-component title="Rastreador" :options="['Sim', 'Não', 'Ambos']" name="rastreador" />
            </div>
            <div class=" mb-2">
                <x-filter-component title="Agenciador" :options="['Sim', 'Não', 'Ambos']" name="agenciador" />
            </div>
            <div class=" mb-2">
                <x-filter-component title="Preço" :options="['Sim', 'Não', 'Ambos']" name="preco" />
            </div>
            <div class=" mb-2">
                <x-filter-component title="Complemento" :options="['Sim', 'Não', 'Ambos']" name="complemento" />
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <x-available-freight :freights="$freights" />
            @if (count($freights) === 0)
                <div class="alert alert-info mt-3" role="alert">
                    Nenhum frete disponível
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
