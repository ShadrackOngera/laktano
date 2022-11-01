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
                        <th scope="col">email</th>
                        <th scope="col">Assign</th>
                        <th scope="col">Assign</th>
                        <th scope="col">Revoke Role(s)</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td class="text-capitalize">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('makeModerator') }}" method="POST">
                                @csrf
                                <input type="text" value="{{ $user->id }}" hidden name="user_id">

                                <button class="btn btn-outline-info" type="submit">
                                    Moderator
                                </button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('makeAdmin') }}" method="POST">
                                @csrf
                                <input type="text" value="{{ $user->id }}" hidden name="user_id">

                                <button class="btn btn-outline-info" type="submit">
                                    Admin
                                </button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('makeClient') }}" method="POST">
                                @csrf
                                <input type="text" value="{{ $user->id }}" hidden name="user_id">

                                <button class="btn btn-outline-danger" type="submit">
                                    Revoke
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $units->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection
