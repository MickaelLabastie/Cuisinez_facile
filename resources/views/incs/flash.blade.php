@if ($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

@endif