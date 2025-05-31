<div>
    @foreach ($photos as $photo)
        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}" alt="Photo" style="width: 100px; height: 100px;">
            {{-- <button type="button" wire:click="remove({{ $loop->index }})">Remove</button> --}}
        @endif
    @endforeach
    <form wire:submit="save">
        <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start.window="uploading = true"
            x-on:livewire-upload-finish.window="uploading = false"
            x-on:livewire-upload-cancel.window="uploading = false"
            x-on:livewire-upload-error.window="uploading = false"
            x-on:livewire-upload-progress.window="progress = $event.detail.progress"
        >
            {{-- <div x-show="uploading" x-cloak> --}}
                <progress max="100" x-bind:value="progress"></progress>
            {{-- </div> --}}
        </div>
        <input type="file" wire:model="photos" multiple>

        @error('photos.*')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        @dump($photos)

        <button type="submit">Save photo</button>
    </form>
</div>
