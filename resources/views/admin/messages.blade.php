@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <h2>All Logged in Users</h2>
        </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                    @can('delete user')
                        <th scope="col">Delete Message</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td class="text-capitalize">{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>

                        @can('delete user')
                            <td>
                                <form action="{{ route('contacts.destroy', ["id" => $message->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-outline-danger">
                                        Delete Message
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

        <div class="container">
            <div class="d-flex justify-content-center">
                {!! $messages->links("pagination::bootstrap-4") !!}
            </div>
        </div>
@endsection
