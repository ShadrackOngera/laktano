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
                <img src="{{ asset('images/pics/caving.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Annie Leibovitz</h5>
                    <p>“The camera makes you forget you’re there. It’s not like you are hiding but you forget, you are just looking so much.”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pics/slide.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Patience and Flexibility</h5>
                    <p>No matter how much you try to control every variable, things just won’t go your way at times.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/pics/ice.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>An Eye for Detail</h5>
                    <p>Even the tiniest detail can make or break a photograph.</p>
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
            <div class="col-sm-6 align-self-center mb-2">
                <h2>Photography</h2>
                <p>
                    Photography is the art, application, and practice of creating durable images by recording light, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film or Digital image.
                </p>
                <p>
                    Photography is important because we can document something and have it forever and use it to re-kindle memories.
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
                <div class="col-sm-5 align-self-center mb-3">
                    <img src="{{ asset('images/pics/yellow-photographer.jpg') }}" alt="..." class="img-fluid rounded-3">
                </div>
                <div class="col-sm-7 align-self-center">
                    <h2 class="text-center">
                        Why Choose Us
                    </h2>
                    <p>
                        There are many important components to creating a stunning photograph. Some of the most important are your ability to capture the right light, the right composition, and the right moment.
                    </p>
                    <p>
                        With us, you are able to perceive the world from different perspectives and appreciate the most diverse scenarios and situations captured in a frozen moment.
                    </p>
                    <p>
                        From our <a href="{{ route('photos.index') }}">Portfolio page</a>, We are able to Demonstrate our capabilities, from Creativity and Imagination, An eye for detail, Patience and Flexibility to Passion
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5"></div>
    <div class="py-3"></div>

    <div>
        <div class="container">
            <h2 class="text-center fw-bold text-uppercase mb-5">
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
                            <img src="{{ asset('images/pics/ring.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
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
                            <img src="{{ asset('images/pics/dog.jpg') }}" alt="..." class="img-fluid w-100 rounded-1">
                            <p class="text-center py-3">
                                Animal Photography
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

            <div class="py-5"></div>
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
