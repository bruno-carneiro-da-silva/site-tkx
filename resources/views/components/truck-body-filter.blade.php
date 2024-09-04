<div class="filter-component">
    <h5>{{ $title }}</h5>
    @foreach($options as $category => $items)
        <span>{{ $category }}</span>
        @foreach($items as $item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="{{ $name }}[]" id="{{ $name }}_{{ $loop->parent->index }}_{{ $loop->index }}" value="{{ $item }}">
                <label class="form-check-label" for="{{ $name }}_{{ $loop->parent->index }}_{{ $loop->index }}">
                    {{ $item }}
                </label>
            </div>
        @endforeach
    @endforeach
</div>
