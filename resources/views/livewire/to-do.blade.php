<div class="my-5 d-flex justify-content-center">
    <div class="py-5" style="width:500px;">
        <form class="input-group" wire:submit.prevent="saveToDo">
            <input type="text" class="form-control" placeholder="what do you have in plan?" wire:model="action">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">AddToDo</button>
        </form>
        @error('action')
            <small class="p-0 m-0 text-danger">
                {{ $message }}
            </small>
        @enderror

        <div class="pt-3">
            @if (count($toDo) < 1)
                There are no ToDos.
            @endif
            @foreach ($toDo as $item)
                <form wire:submit.prevent="status">
                    <div class="d-flex justify-content-between align-items-center pb-1">
                        <form wire:submit.prevent="status">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="invalidCheck"
                                    wire:click="statusToDo({{ $item->id }})"
                                    @if ($item->status === 'done') checked @endif>
                                <label class="form-check-label @if ($item->status === 'done') stroke @endif"
                                    for="invalidCheck">
                                    {{ $item->action }}
                                </label>
                            </div>

                            <i class="bi bi-archive-fill text-primary" style="font-size: 1.5rem;"
                                wire:click="deleteToDo({{ $item->id }})"></i>
                        </form>

                    </div>
            @endforeach

        </div>

    </div>
    <div>
