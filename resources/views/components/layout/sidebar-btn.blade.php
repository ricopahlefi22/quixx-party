<li class="menu nav-item">
    <a href="{{ $url ?? '' }}" class="nav-link group">
        <div class="flex items-center">
            <i data-feather="{{ $icon ?? '' }}" class="group-hover:text-blue-500"></i>
            <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">{{ $label ?? '' }}</span>
        </div>
    </a>
</li>