@extends('Connect/LogMaster')

@section('title')
    Login
@endsection

@section('CustomCss')
@endsection

@section('content')

    <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
            <img src="img/img-01.png" alt="IMG">
        </div>
    <form class="login100-form validate-form" action="connexion" method="post">
        {{ csrf_field() }}
					<span class="login100-form-title">
						Connexion
					</span>

        <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" placeholder="Adresse Mail">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Connexion
            </button>
        </div>

        <div class="text-center p-t-12">
						<span class="txt1">
							Perdu ?
						</span>
            <a class="txt2" href="#">
                Contactez notre service !
            </a>
        </div>

        <div class="text-center p-t-136">
            <a class="txt2" href="inscription">
                Crée un compte
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>
    </div>

@endsection