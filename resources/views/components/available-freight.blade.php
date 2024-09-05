<div class="p-3">
    <div class="d-flex justify-content-between align-items-center">
        <h4>{{ count($freights) }} fretes disponíveis</h4>
        <a href="#">Entrar ou criar uma conta</a>
    </div>
    <div class="list-group">
        @foreach($freights as $freight)
            <a href="{{ route('freight.show', $freight->id) }}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $freight->origin }}</h5>
                    <small>R$ {{ number_format($freight->price, 2, ',', '.') }}</small>
                </div>
                <p class="mb-1">{{ $freight->destination }}</p>
                <small>{{ $freight->details }}</small>
            </a>
        @endforeach
    </div>
</div>
