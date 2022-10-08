@extends('layouts.app')
@section('content')
    <div class="banner-pricing">
        <div class="container">

        </div>
    </div>
    <div class="py-5"></div>
    <div>
        <div class="container">
            <form action="{{ route('pricing.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Photography Type" name="type" required>
                    <label for="floatingInput">Photography Type</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price" required>
                    <label for="floatingInput">Price</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Number of Photos" name="quantity" required>
                    <label for="floatingInput">Number of Photos</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="py-5"></div>
    <div>
        <div class="container">
            @foreach($pricings as $pricing)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photography Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Number of Photos</th>
                            <th scope="col">Description</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $pricing->id }}</th>
                            <td>{{ $pricing->type }}</td>
                            <td>{{ $pricing->price }}</td>
                            <td>{{ $pricing->quantity }}</td>
                            <td>{{ $pricing->description }}</td>
                            <td>
                                <form action="{{ route('pricing.destroy', ["id" => $pricing->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
