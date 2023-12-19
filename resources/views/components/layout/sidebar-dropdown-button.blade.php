<button
    type="button"
    class="nav-link group"
    :class="{ 'active': activeDropdown === '{{ $class ?? "" }}' }"
    @click="activeDropdown === '{{ $class ?? "" }}' ? activeDropdown = null : activeDropdown = '{{ $class ?? "" }}'"
>
    <div class="flex items-center">
        <i data-feather="{{ $icon ?? "" }}" class="group-hover:text-blue-500"></i>
        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">{{ $label ?? "" }}</span>
    </div>
    <div class="rtl:rotate-180" :class="{ 'rotate-90': activeDropdown === '{{ $class ?? "" }}' }">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
</button>
