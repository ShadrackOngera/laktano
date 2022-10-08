@extends('layouts.app')
@section('content')
    <div style="min-height: 20vh">
        <div class="container align-self-center">
            <h1 class="fw-bold text-center align-self-center">
                Leave a Message
            </h1>
        </div>
    </div>

    <div style="min-height: 70vh">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center mb-3">
                    <img src="{{ asset('images/pics/booth.jpg') }}" alt="..." class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('contacts.store') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" required>
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="email@email.com" name="email" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span>|</span>
                            <span>|</span>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea2" style="height: 150px"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
@endsection
