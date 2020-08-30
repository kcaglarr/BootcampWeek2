<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">İsim</th>
        <th scope="col">Email</th>
        <th scope="col">Şifre</th>
        <th scope="col">İşlem</th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $user)

            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="/sil/{{$user->id}}">SİL</a>
                    <a href="/guncelle/{{$user->id}}">GÜNCELLE</a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
