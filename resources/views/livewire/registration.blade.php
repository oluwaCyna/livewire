<div class="py-5 w-75 mx-auto">
    <img src="{{asset($user[0]->image)}}" />
    <form class="row g-3" wire:submit.prevent="register">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" value="{{ old('first_name') }}" id="validationCustom01" wire:model="first_name">
            @error('first_name')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" value="{{ old('last_name') }}" id="validationCustom02" wire:model="last_name">
            @error('last_name')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="text" class="form-control" value="{{ old('email') }}" id="validationCustom03" wire:model="email">
            @error('email')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">City</label>
            <input type="text" class="form-control" value="{{ old('city') }}" id="validationCustom04" wire:model="city">
            @error('city')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">State</label>
            <select class="form-select" id="validationCustom05" wire:model="state">
                <option selected disabled value="">Choose...</option>
                @foreach ($states as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('state')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="validationCustom06" class="form-label">Zip</label>
            <input type="text" class="form-control" value="{{ old('zip') }}" id="validationCustom06" wire:model="zip">
            @error('zip')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" wire:model="image">
            </div>
            @error('image')
                <small class="p-0 m-0 text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-md-6">
            @if ($image)
                Photo Preview:
                <img src="{{ $image->temporaryUrl() }}">
            @endif
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" wire:model="tc">
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                @error('tc')
                    <small class="p-0 m-0 text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
