<div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Upload Photos</h2>
    <div class="flex flex-wrap gap-4 mb-6">
        @foreach ($photos as $photo)
            @if ($photo)
                <div class="relative group">
                    <img src="{{ $photo->temporaryUrl() }}" alt="Photo" class="w-24 h-24 object-cover rounded-md border border-gray-200 shadow-sm">
                    {{-- <button type="button" wire:click="remove({{ $loop->index }})" class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition">✕</button> --}}
                </div>
            @endif
        @endforeach
    </div>
    <form wire:submit="save" class="space-y-4">
        <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start.window="uploading = true"
            x-on:livewire-upload-finish.window="uploading = false"
            x-on:livewire-upload-cancel.window="uploading = false"
            x-on:livewire-upload-error.window="uploading = false"
            x-on:livewire-upload-progress.window="progress = $event.detail.progress"
        >
            <div x-show="uploading" x-cloak class="mb-4">
                <progress max="100" x-bind:value="progress" class="w-full h-2 rounded bg-gray-200"></progress>
                <span class="text-sm text-gray-500">Uploading... <span x-text="progress"></span>%</span>
            </div>
        </div>
        <label class="block">
            <span class="block text-gray-700 font-medium mb-1">Select Photos</span>
            <input type="file" wire:model="photos" multiple class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </label>
        @error('photos.*')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        @dump($photos)

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">Save photo</button>
    </form>
</div>
