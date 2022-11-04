@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <h2>Admin Home Page</h2>
            <p>
                As an Admin, You have the power to do what you want. You can delete any user, make another user an admin, delete user accounts and data,
                view all users and do WHATEVER THE FUCK YOU WANT!!
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <h4 class="">
                Website Navigation
            </h4>
            <hr>
            <div class="col-sm-4">
                <h3>Normal user pages</h3>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('photos.index') }}">{{ __('Portfolio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing.index') }}">{{ __('Pricing') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>Admin Pages</h3>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">{{ __('Users') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages') }}">{{ __('Messages') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mailing') }}">{{ __('Mailing list') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>Admin Forms</h3>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">{{ __('Photography Categories') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('photos.index') }}">{{ __('Portfolio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing.index') }}">{{ __('Pricing') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mailing') }}">{{ __('Mailing list') }}</a>
                    </li>
                </ul>
            </div>
            <hr>
        </div>
    </div>

    <div class="py-5"></div>
    <div>
        <div class="container">
            <h4 class="text-center">
                Below is a quick <span class="text-success">guide</span> on how to do WHATEVER THE FUCK YOU WANT!!
            </h4>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            View all users with an account
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Click <a href="{{ route('users') }}">Users page</a>
                            <br>
                            From here, You can assign roles to users and also revoke roles from the users.
                            <br>
                            <br>
                            Bravo!!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            View or print emails from the Emailing list
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="fst-italic">
                                Breathe in, Breathe out. (I have also done this)
                            </p>
                            <p>
                                Navigate to <a href="{{ route('mailing') }}">mailing lists</a> and enjoy
                            </p>
                            <p>
                                To download, click the Print button on the same page.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
