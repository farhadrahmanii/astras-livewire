<div class="container mx-auto p-4 rounded-lg shadow-lg">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

</div>