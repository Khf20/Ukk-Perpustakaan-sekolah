<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Perpustakaan">
    <meta name="author" content="">

    <title>Perpustakaan - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/izitoast/css/iziToast.min.css')}}">

    <style>
        .bg-gradient-warning {
            background: linear-gradient(135deg,rgb(0, 68, 255),rgb(222, 217, 209));
        }
        
        .card {
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-control-user {
            border-radius: 10px;
            padding: 1.2rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control-user:focus {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-warning {
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(59, 120, 233, 0.3);
        }

        .small {
            transition: all 0.3s ease;
            color: #666;
        }

        .small:hover {
            color:rgb(18, 18, 16);
            text-decoration: none;
        }

        .login-header {
            margin-bottom: 2rem;
        }

        .login-header h1 {
            font-weight: 700;
            color: #333;
        }

        .bg-login-image img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 15px 0 0 15px;
        }
    </style>
</head>

<body class="bg-gradient-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="assets/img/login-biru.png" alt="Login Image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center login-header">
                                        <h1 class="h4 text-gray-900">Selamat Datang di Perpustakaan Sekolah!</h1>
                                        <p class="text-muted mb-4">Silakan masuk ke akun Anda</p>
                                    </div>
                                    <form action="{{route('postlogin')}}" method="post" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-transparent border-0">
                                                        <i class="fas fa-envelope text-warning"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Masukkan Email" name="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-transparent border-0">
                                                        <i class="fas fa-lock text-warning"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <div class="text-center mt-4">
                                        <a class="small" href="/register">Belum punya akun? Daftar sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="{{asset('assets/vendor/izitoast/js/iziToast.min.js')}}"></script>

    @if(session('sukses'))
    <script>
        iziToast.success({
            title: 'Berhasil',
            message: '{{session('sukses')}}',
            position: 'topRight'
        });
    </script>
    @elseif(session('gagal'))
    <script>
        iziToast.error({
            title: 'Gagal', 
            message: '{{session('gagal')}}',
            position: 'topRight'
        });
    </script>
    @endif
</body>
</html>