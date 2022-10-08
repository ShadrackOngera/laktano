@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile" name="photo" required>
                </div>

                <select class="form-select mb-3" aria-label="Default select example" name="category">
                    <option selected>Select Category</option>
                    <option value="wedding">Wedding</option>
                    <option value="outdoor">Outdoor</option>
                    <option value="family">Family</option>
                    <option value="pregnant">Pregnant</option>
                    <option value="portrait">Portrait</option>
                    <option value="couple">Couple</option>
                    <option value="nature">Nature</option>
                    <option value="creative">Creative</option>
                </select>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="description" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="py-5"></div>
    <div style="min-height: 70vh">
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-sm-4 mb-3">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <img src="{{ asset('storage/'.$photo->photo) }}" alt="My Work" class="img-fluid mb-2">
                                <div class="text-center">
                                    <small>{{ $photo->description }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
