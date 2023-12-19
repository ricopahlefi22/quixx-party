
<ul x-cloak x-show="activeDropdown === '{{ $class ?? "" }}'" x-collapse class="sub-menu text-gray-500">
    {{ $slot }}
</ul>