<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Обновление персональных данных</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

</head>
<body class="d-flex h-100 text-center text-bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <h1>Обновление персональных данных</h1>
    </header>
    <main class="px-3">
        <form class="col-4 offset-4" action="{{ route('update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Пол</label>
                <select id="gender" name="gender" class="form-select">
                    <option value="male" @if($user->gender == "male")selected @endif>Мужской</option>
                    <option value="female" @if($user->gender == "female")selected @endif>Женский</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nationality" class="form-label">Национальность</label>
                <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $user->nationality }}">
            </div>
            <div class="mb-3">
                <label for="name_of_the_organization" class="form-label">Название организации</label>
                <input type="text" class="form-control" id="name_of_the_organization" name="name_of_the_organization" value="{{ $user->name_of_the_organization }}">
            </div>
            <div class="mb-3">
                <label for="job_title" class="form-label">Должность</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $user->job_title }}">
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"  value="{{ $user->date_of_birth }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Обновить данные</button>
        </form>
    </main>
    <footer class="mt-auto text-white-50">

    </footer>
</div>



</body>
</html>
