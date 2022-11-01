<div class="container">
    <img src="{{ asset('images/pics/logo-black-smaller.png') }}" alt="logo" class="img-fluid">

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
</div>
