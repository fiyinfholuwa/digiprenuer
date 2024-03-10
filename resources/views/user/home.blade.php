<div id="error_result">
    @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show text-dark" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger text-danger alert-dismissible fade show" role="alert">
            <strong>Oh Oops!</strong> {{ Session::get('fail') }}
        </div>
    @endif
</div>

<h1> WELCOME </h2>
