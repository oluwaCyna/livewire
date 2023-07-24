<div class="my-5 d-flex justify-content-center">
    <div class="input-group py-5 w-50">
        <select class="form-select" id="inputGroupSelect01" wire:model="selectedState" wire:change="loadLGA">
            <option selected>Choose a state...</option>
            @foreach ($states as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <span class="input-group-text">|||</span>
        <select class="form-select" id="inputGroupSelect02">
            @if (count($lga) > 0)
            @foreach ($lga as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
            @else
            <option selected>loading...</option>
            @endif
        </select>
    </div>

</div>
