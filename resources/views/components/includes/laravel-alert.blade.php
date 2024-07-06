@if (session('success'))
    <div class="laravel-alert laravel-alert-success">
        <div class="laravel-alert-message">
            <div>{{ session('success') }}</div>
        </div>
        <div class="laravel-alert-action">
            <a class="laravel-alert-action-link" href="{{ url()->current() }}">Close</a>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="laravel-alert laravel-alert-danger">
        <div class="laravel-alert-message">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
        <div class="laravel-alert-action">
            <a class="laravel-alert-action-link" href="{{ url()->current() }}">Close</a>
        </div>
    </div>
@endif
