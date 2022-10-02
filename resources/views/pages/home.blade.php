@extends('layouts.app')

@section('content')
<div class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/pics/hand.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pics/slide.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pics/art.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="py-5"></div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <h2>Photgraphy</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi perspiciatis sed sequi suscipit tempore. Eligendi in modi odit sint voluptas.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="col-sm-6 align-self-center">
                <img src="{{ asset('images/pics/boats.jpg') }}" alt="..." class="img-fluid rounded-3">
            </div>
        </div>
    </div>
</div>

<div class="py-5"></div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 align-self-center">
                    <img src="{{ asset('images/pics/ice.jpg') }}" alt="..." class="img-fluid">
                </div>
                <div class="col-sm-7 align-self-center">
                    <h2 class="text-center">
                        Why Choose Us
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, dolore doloribus!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium commodi corporis doloremque eaque enim esse exercitationem expedita itaque libero, quidem ratione rem!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem expedita fugiat ipsa labore molestiae placeat quae.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5"></div>

    <div>
        <div class="container">
            <h2 class="text-center fw-bold text-uppercase">
                We Are Professionals In:
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/dad-child.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Family Photos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/bike.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Outdoor Photography
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/pregnant.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Pregnant Photography
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/wedding.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Wedding Photos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/couple.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Couple Photography
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/portrait.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Portrait Photography
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/wedding.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Wedding Photos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/creative.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Creative Photography
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" border-0">
                        <div class="card-body">
                            <img src="{{ asset('images/pics/tree-two.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Nature Photography
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <small class="">
                    “Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.”
                </small><br>
                <small class="fw-bold">
                    ~ Aaron Siskind
                </small>
            </div>
        </div>
    </div>

<div class="py-5"></div>
@endsection
