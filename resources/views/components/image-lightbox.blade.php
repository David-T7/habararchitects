{{--
    Full-screen photo viewer. Open it from anywhere on the page with:
    $dispatch('open-lightbox', { urls: [...], index: 0 })
    Closes with the × button, Esc, or a click on the dark backdrop; arrows / arrow keys step through photos.
--}}
<div
    x-data="{
        open: false,
        urls: [],
        index: 0,
        show(detail) {
            this.urls = detail.urls;
            this.index = detail.index ?? 0;
            this.open = true;
        },
        prev() { this.index = (this.index - 1 + this.urls.length) % this.urls.length; },
        next() { this.index = (this.index + 1) % this.urls.length; },
    }"
    @open-lightbox.window="show($event.detail)"
    @keydown.escape.window="open = false"
    @keydown.arrow-left.window="open && urls.length > 1 && prev()"
    @keydown.arrow-right.window="open && urls.length > 1 && next()"
    x-effect="document.body.classList.toggle('overflow-hidden', open)"
    x-show="open"
    x-cloak
    x-transition.opacity
    @click.self="open = false"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4 sm:p-10"
    role="dialog"
    aria-modal="true"
>
    <img :src="urls[index]" alt="Project photo" class="max-h-full max-w-full object-contain rounded shadow-2xl">

    <button type="button" @click="open = false" title="Close (Esc)" class="absolute top-4 right-4 h-10 w-10 flex items-center justify-center rounded-full bg-white/90 text-gray-800 text-2xl leading-none shadow hover:bg-white">&times;</button>

    <template x-if="urls.length > 1">
        <div>
            <button type="button" @click="prev()" title="Previous" class="absolute left-4 top-1/2 -translate-y-1/2 h-11 w-11 flex items-center justify-center rounded-full bg-white/90 text-gray-800 text-2xl shadow hover:bg-white">&lsaquo;</button>
            <button type="button" @click="next()" title="Next" class="absolute right-4 top-1/2 -translate-y-1/2 h-11 w-11 flex items-center justify-center rounded-full bg-white/90 text-gray-800 text-2xl shadow hover:bg-white">&rsaquo;</button>
            <p class="absolute bottom-4 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-black/60 text-white text-sm" x-text="(index + 1) + ' / ' + urls.length"></p>
        </div>
    </template>
</div>
