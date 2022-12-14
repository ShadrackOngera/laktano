@extends('layouts.app')
@section('content')
    @can('upload photo')
        <div>
            <div class="container">
                <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-center">Hello, Uplaod a Photo Here</label>
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
    @endcan
    <div class="py-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="dropdown d-grid">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose Category
                    </button>
                    <ul class="dropdown-menu w-100 text-center">
                        <li><a class="dropdown-item" href="{{ route('filters.wedding') }}">Wedding</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.outdoor') }}">Outdoor</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.family') }}">Family</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.pregnant') }}">Pregnant</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.portrait') }}">Portrait</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.couple') }}">Couple</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.nature') }}">Nature</a></li>
                        <li><a class="dropdown-item" href="{{ route('filters.creative') }}">Creative</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5"></div>
    <div>
        <div class="container">
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-sm-4 mb-3">
                        <div class="shadow">
                            <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$photo->id}}">
                                <div class="position-relative">
                                    <div class="d-flex justify-content-between">
                                        <small class="text-capitalize">{{ $photo->category }}</small>
                                        <small class="text-capitalize"><span class="fst-italic">20 Downloads</span></small>
                                    </div>
                                    <img src="{{ asset('storage/'.$photo->photo) }}" alt="My Work" class="img-fluid w-100">
                                    <small class="bg-description translate-middle-x text-capitalize">{{ $photo->description }}</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$photo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="position-relative">
                                        <small class="text-capitalize">{{ $photo->category }}</small>
                                        <img src="{{ asset('storage/'.$photo->photo) }}" alt="My Work" class="img-fluid w-100">
                                        <small class="bg-description translate-middle-x text-capitalize">{{ $photo->description }}</small>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between my-0 py-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    @can('upload photo')
                                        <div>
                                            <form action="{{ route('photos.destroy', ["id" => $photo->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn btn-outline-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endcan
                                    <a href="{{ Storage::url($photo->photo)}}" target="_blank" class="btn btn-primary" download>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $photos->links("pagination::bootstrap-4") !!}
        </div>
    </div>
    <div class="py-5"></div>
@endsection
