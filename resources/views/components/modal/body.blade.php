<form action="{{ $action ?? '' }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="dark:text-white-dark/70 text-base font-medium text-[#1f2937]">
        {{ $slot }}
    </div>
</form>