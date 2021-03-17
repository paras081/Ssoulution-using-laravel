<!-- Carousel wrapper -->
<div
    id="carouselBasicExample"
    class="carousel slide carousel-fade"
    data-mdb-ride="carousel"
>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"></li>
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">

            <img
                src="{{ asset('demo/img/laravel_banner.png') }}"
                class="d-block w-100"

                height="500px"
                alt="image not loaded"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>We Develop</h5>
            </div>
        </div>


        <!-- Single item -->
        <div class="carousel-item">
            <img
                src="{{ asset('demo/img/webdev.jpg') }}"
                class="d-block w-100"
                height="500px"
                alt="..."
            />

        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img
                src="{{ asset('demo/img/mobileapp.png') }}"
                class="d-block w-100"
                height="500px"
                alt="..."
            />
        </div>

        <div class="carousel-item">
            <img
                src="{{ asset('demo/img/flutterdev.jpg') }}"
                class="d-block w-100"
                height="500px"
                alt="..."
            />
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a
        class="carousel-control-prev"
        href="#carouselBasicExample"
        role="button"
        data-mdb-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselBasicExample"
        role="button"
        data-mdb-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
<!-- Carousel wrapper -->
