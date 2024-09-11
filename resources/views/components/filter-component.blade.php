<div class="filter-component border" >
    <h5>{{ $title }}</h5>
    @foreach($options as $option)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="{{ $name }}_{{ $loop->index }}" value="{{ $option }}">
            <label class="form-check-label" for="{{ $name }}_{{ $loop->index }}">
                {{ $option }}
            </label>
        </div>
    @endforeach
</div>
