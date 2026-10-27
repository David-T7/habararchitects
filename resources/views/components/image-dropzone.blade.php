@props(['name' => 'project_pictures[]', 'required' => false, 'coverFirst' => false])

{{--
    Drag-and-drop / click-to-browse picker for several images.
    The chosen files are kept in the real file input (via DataTransfer), so they post with the form.
--}}
<div
    x-data="{
        files: [],
        dragging: false,
        add(list) {
            [...list].filter(file => file.type.startsWith('image/')).forEach(file => {
                this.files.push({ file, url: URL.createObjectURL(file) });
            });
            this.sync();
        },
        remove(index) {
            URL.revokeObjectURL(this.files[index].url);
            this.files.splice(index, 1);
            this.sync();
        },
        sync() {
            const transfer = new DataTransfer();
            this.files.forEach(entry => transfer.items.add(entry.file));
            this.$refs.input.files = transfer.files;
        },
        size(bytes) {
            return bytes > 1048576 ? (bytes / 1048576).toFixed(1) + ' MB' : Math.round(bytes / 1024) + ' KB';
        },
    }"
>
    <label
        @dragover.prevent="dragging = true"
        @dragleave.prevent="dragging = false"
        @drop.prevent="dragging = false; add($event.dataTransfer.files)"
        :class="dragging ? 'border-red-500 bg-red-50' : 'border-gray-300 hover:border-gray-400'"
        class="mt-1 flex flex-col items-center justify-center px-6 py-8 border-2 border-dashed rounded-md cursor-pointer transition"
    >
        <svg class="h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="mt-2 text-sm text-gray-600">
            <span class="font-medium text-red-700">Click to browse</span> or drag and drop images here
        </p>
        <p class="text-xs text-gray-500">PNG, JPG, GIF, WEBP up to 10MB each &middot; you can add several at once</p>

        <input
            x-ref="input"
            type="file"
            name="{{ $name }}"
            accept="image/*"
            multiple
            @if ($required) required @endif
            @change="add([...$event.target.files])"
            class="sr-only"
        >
    </label>

    <ul x-show="files.length" x-cloak class="mt-4 grid grid-cols-1 gap-4">
        <template x-for="(entry, index) in files" :key="entry.url">
            <li class="relative rounded-md overflow-hidden border border-gray-200 bg-gray-50">
                <img :src="entry.url" alt="" @click="$dispatch('open-lightbox', { urls: files.map(f => f.url), index })" title="View photo" class="h-80 sm:h-[28rem] w-full object-cover cursor-zoom-in">
                @if ($coverFirst)
                    <span x-show="index === 0" class="absolute top-2 left-2 px-2 py-0.5 rounded-full bg-red-700 text-white text-xs">Cover</span>
                @endif
                <button
                    type="button"
                    @click="remove(index)"
                    class="absolute top-2 right-2 h-8 w-8 flex items-center justify-center rounded-full bg-white text-gray-700 text-xl leading-none hover:bg-red-600 hover:text-white shadow"
                    title="Remove"
                >&times;</button>
                <div class="px-2 py-1 text-xs text-gray-600 truncate" x-text="entry.file.name + ' · ' + size(entry.file.size)"></div>
            </li>
        </template>
    </ul>
</div>
