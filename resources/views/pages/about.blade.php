@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 align-self-center text-center">
                    <h2>Hello, I'm Walter Laktano</h2>
                    <p>
                        I am the Founder and CEO of <span class="fst-italic small">{{ config('app.name') }}</span>
                    </p>
                </div>
                <div class="col-sm-5 text-center">
                    <img src="{{ asset('images/pics/man.svg') }}" alt="..." height="450">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
@endsection
