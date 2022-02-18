<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear una cita nueva') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            aqui va una a crear una cita el perro XD
        </h2>
    </x-slot>
    <div class="container">
        <div class="align">
            <img class="logo" src="img/logo.svg">
            <div class="card">
                <div class="head">
                    <div></div>
                    <a id="login" class="selected" href="#login">Login</a>
                    <a id="register" href="#register">Register</a>
                    <div></div>
                </div>
                <div class="tabs">
                    <form>
                        <div class="inputs">
                            <div class="input">
                                <input placeholder="Username" type="text">
                                <img src="img/user.svg">
                            </div>
                            <div class="input">
                                <input placeholder="Password" type="password">
                                <img src="img/pass.svg">
                            </div>
                            <label class="checkbox">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <button>Login</button>
                    </form>
                    <form>
                        <div class="inputs">
                            <div class="input">
                                <input placeholder="Email" type="text">
                                <img src="img/mail.svg">
                            </div>
                            <div class="input">
                                <input placeholder="Username" type="text">
                                <img src="img/user.svg">
                            </div>
                            <div class="input">
                                <input placeholder="Password" type="password">
                                <img src="img/pass.svg">
                            </div>
                        </div>
                        <button>Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

<!--AQUI SE MANDA  ALLAMAR TODO LO QUE TENGA QUE VER CON BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="fonts/fonts/style.css">
<link rel="stylesheet" href="../estilos/css/estiloFormulario.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>