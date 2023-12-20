<div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
    <div class="font-bold text-lg">{{ $title ?? '' }}</div>
    <button type="button" class="text-white-dark hover:text-dark" @click="toggle">
        <i data-feather="x" class="group-hover:text-slate-200"></i>
    </button>
</div>