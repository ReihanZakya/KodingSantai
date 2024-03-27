<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container-fluid" style="height: 100vh;">
        <div class="row" style="height: 100vh;">
            <div class="col-md-6 p-0 d-flex">
                <div class="p-5  d-flex align-items-center mx-auto">
                    <div class="">
                        <form class="align-items-center f-lightblue" style="width: 20rem">
                            <h3 class="align-items-center mb-5">Daftar</h3>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <p for="">Lupa Password? Klik disini</p>
                            </div>
                            <button type="submit" class="myBtn-blue">Submit</button>
                        </form>
                        <button class="myBtn-blue mt-5"><a href="/"
                                class="text-decoration-none text-white">Kembali Ke
                                Halaman Utama</a> </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 d-flex" style="background-color: #77A6F7;">
                <div class="p-5 justify-content-center d-flex align-items-center  mx-auto">
                    <div class="align-items-center d-flex">
                        <div class="align-items-center text-center text-white">
                            <h1 class="align-items-center">Selamat Datang!</h1>
                            <h2>Sudah Punya Akun? Ayo Masuk</h2>
                            <button class="myBtn-white"><a href="/login"
                                    class="text-decoration-none f-lightblue">Masuk</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
