<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/autorisation.css">

</head>


<body style="background:linear-gradient(180deg, #868686, #ffffff) ;">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <main>

            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card text-white" style="border-radius: 1rem;background-color: #5C5C5C; color: white;">
                                <div class="card-body p-5 text-center main">

                                    <div class="mb-md-1 mt-md-1 pb-1 min__block">
                                        <div class="d-flex title">
                                            <h6 class="fw-bold mb-2 text-uppercase"> УМНАЯ ПРАКТИКА </h6>
                                            <img src="img/Group.svg" height="30" width="30" alt="">
                                            <h6 class="fw-bold mb-2 text-uppercase">ТЕХНИКУМ КРАСИНА</h6>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" name="email" id="email" class="form-control form-control-lg" :value="old('email')" placeholder="Введите Email" required autofocus autocomplete="username" />
                                            <x-input-error  :messages="$errors->get('email')" class="mt-2 error" />
                                        </div>
                                        <!-- Password -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="current-password" placeholder="Введите пароль" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 error" />

                                        </div>

                                        <!-- button -->
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Войти</button>
                                    </div>
                                    <div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </form>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
