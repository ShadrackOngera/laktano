@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <h2>All emails in Our mailing lists</h2>
        </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mails as $mail)
                    <tr>
                        <th scope="row">{{ $mail->id }}</th>
                        <td class="">{{ $mail->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container d-flex justify-content-between">
        <a href="{{ route('export.mails') }}">Export to pdf</a>
        <div class="">
            <button onclick="window.print()" class="btn btn-outline-indigo float-end">Print this page</button>
        </div>
    </div>

    <div class="py-5"></div>
    <div class="container">
        <button class="btn btn-outline-primary">
            <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin Home') }}</a>
        </button>
    </div>
    <div class="py-5"></div>
    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $mails->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection
