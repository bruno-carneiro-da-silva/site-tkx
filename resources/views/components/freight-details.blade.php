<!-- resources/views/components/freight-details.blade.php -->
<div class="card mb-3">
    <div class="card-header">
        <h5>Detalhes do Frete</h5>
    </div>
    <div class="card-body">
        <p><strong>Código do Frete:</strong> #{{ $freight->id }}</p>
        <p><strong>Origem:</strong> {{ $freight->origin }}</p>
        <p><strong>Destino:</strong> {{ $freight->destination }}</p>
        <p><strong>Produto / Preço:</strong> {{ $freight->product }} / PREÇO: {{ $freight->price }}</p>
        <p><strong>Data:</strong> <span class="text-danger">{{ $freight->date }}</span></p>
        <hr>
        <!-- Detalhes do Veículo -->
        <p><strong>Veículos:</strong> {{ $freight->vehicles }}</p>
        <p><strong>Carroceria:</strong> {{ $freight->bodywork }}</p>
        <p><strong>KM:</strong> {{ $freight->km }}</p>
        <p><strong>Espécie:</strong> {{ $freight->species }}</p>
        <p><strong>Tipo de Carga:</strong> {{ $freight->load_type }}</p>
        <p><strong>Rastreamento:</strong> {{ $freight->tracking }}</p>
        <p><strong>Agenciamento:</strong> {{ $freight->agency }}</p>
        <p><strong>Precisa de Lona:</strong> {{ $freight->tarp }}</p>
        <p><strong>Obs.:</strong> {{ $freight->notes }}</p>
        <hr>
        <p><strong>Peso Total da Carga:</strong> {{ $freight->total_weight }} toneladas</p>
        <p><strong>Pedágio:</strong> {{ $freight->toll }}</p>
    </div>
</div>
