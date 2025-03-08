@push('css')

@endpush

<div class="nav-wrap-main">
<nav class="navbar navbar-expand-lg navbar-dark  website-pt-40px website-pb-40px">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('imgs/logo-main-2.png') }}" alt="WebSiteName Logo"  class="d-inline-block align-text-top website-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto nav-main-menu">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Our Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Contact Us</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Page 1-1</a></li>
                        <li><a class="dropdown-item" href="#">Page 1-2</a></li>
                        <li><a class="dropdown-item" href="#">Page 1-3</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Page 1-1</a></li>
                        <li><a class="dropdown-item" href="#">Page 1-2</a></li>
                        <li><a class="dropdown-item" href="#">Page 1-3</a></li>
                    </ul>
                </li> --}}
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary-website btn-website-round nav-contact-btn" href="#"><i class="bi bi-person-plus"></i> GET STARTED</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-plus"></i> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
</div>
@push('js')
<script>

</script>
@endpush