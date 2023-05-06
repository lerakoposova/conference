@extends ("layout")
@section("title","Список участников конференции")
@section("content")
    <body>
    <h1 class="mb-3">Список участников конференции</h1>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя Фамилия</th>
                <th scope="col">Название организации</th>
                <th scope="col">email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}} {{$user->surname}}</td>
                    <td>{{$user->name_of_the_organization}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
@endsection
