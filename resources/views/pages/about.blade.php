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

    <div class="py-5"></div>
    <div class="banner-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 align-self-center">
                    <h3>Doodle</h3>
                    <p>
                        It's the vivid illustration of a memory that lasts forever and reminds you of the good old days that sometimes pass before you
                        can even blink. A photo lets us use our imagination and transform our feelings, moods, and ideas into something palpable no matter
                        what passions and professional backgrounds we have.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-about-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h3>Click Here</h3>
                    <p>
                        A young boy enters a barber shop and the barber whispers to his customer, "This is the dumbest kid in the world. Watch while I prove it to you."

                        The barber puts a dollar bill in one hand and two quarters in the other, then calls the boy over and asks, "Which do you want, son?" The boy takes the quarters and leaves.

                        "What did I tell you?" said the barber. "That kid never learns!"

                        Later, when the customer leaves, he sees the same young boy coming out of the ice cream parlor.

                        "Hey, son! May I ask you a question? Why did you take the quarters instead of the dollar bill?"

                        The boy licked his cone and replied:

                        "Because the day I take the dollar the game is over!"
                    </p>
                </div>
                <div class="col-sm-6 align-self-center">

                </div>
            </div>
        </div>
    </div>
@endsection
