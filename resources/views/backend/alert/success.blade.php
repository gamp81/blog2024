@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i>
        ¡Mensaje rápido!
        <p>{{ session('success') }}</p>
    </div>
@endif