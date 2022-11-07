@extends('layouts.app')
@section('content')

    <div class="py-5"></div>
    @can('upload photo')
        <div>
            <div class="container">
                <h3 class="text-center">
                    ADD ANOTHER PRICING TYPE
                </h3>
                <form action="{{ route('pricing.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Photography Type" name="type" required>
                        <label for="floatingInput">Photography Type</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price" min="10" required>
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
    @endcan
    <div class="py-5"></div>
    <div>
        <div class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photography Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Number of Photos</th>
                            <th scope="col">Description</th>
                            @can('upload photo')
                                <th scope="col">Delete</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pricings as $pricing)
                        <tr>
                            <th scope="row">{{ $pricing->id }}</th>
                            <td>{{ $pricing->type }}</td>
                            <td>{{ $pricing->price }}</td>
                            <td>{{ $pricing->quantity }}</td>
                            <td>{{ $pricing->description }}</td>
                            @can('upload photo')
                                <td>
                                    <form action="{{ route('pricing.destroy', ["id" => $pricing->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
