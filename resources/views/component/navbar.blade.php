<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h4 class="text-primary m-0">
                <img src="{{asset('assets/images/icon-vacation.png')}}" alt="" srcset=""> CATERING BOX 3 PUTRI
            </h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link {{Request::path() == '/' ? 'active' : ''}}" aria-current="page">Home</a>
                <a href="/about" class="nav-item nav-link {{Request::path() == 'about' ? 'active' : ''}}">About</a>
                <a href="/package" class="nav-item nav-link {{Request::path() == 'package' ? 'active' : ''}}">Paket</a>
                <div class="nav-item dropdown mb-2">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="/menuGallery" class="dropdown-item {{Request::path() == 'menuGallery' ? 'active' : ''}}">Menu Gallery</a>
                        <a href="/jobList" class="dropdown-item {{Request::path() == 'career' ? 'active' : ''}}">Career</a>
                        <a href="/testimonial" class="dropdown-item {{Request::path() == 'testimonial' ? 'active' : ''}}">Testimonial</a>
                        <a href="/contact" class="dropdown-item {{Request::path() == 'contact' ? 'active' : ''}}">Contact</a>
                    </div>
                </div>
            </div>
            <a href="/order" class="btn btn-primary py-2 px-4">Order Now</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->