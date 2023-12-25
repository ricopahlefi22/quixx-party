<div class="modal fade" id="{{ $id ?? '' }}" tabindex="-1" aria-labelledby="defaultLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ $action ?? '' }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                {{ $slot }}
            </div>
        </form>
    </div>
</div>
<!-- ----------------------- -->
