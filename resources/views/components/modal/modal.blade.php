<div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
    <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
        <div x-show="open" x-transition x-transition.duration.300
            class="panel border-0 p-0 rounded-lg overflow-hidden my-8 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>