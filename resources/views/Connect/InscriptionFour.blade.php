@extends('Connect/LogMaster')

@section('title')
    Inscription Fournisseur
@endsection

@section('content')

    <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
            <img src="img/img-01.png" alt="IMG">
        </div>
        <form class="login100-form validate-form" method="post" action="/inscription">
            {{ csrf_field() }}
            <span class="login100-form-title">
						Inscription
					</span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="Adresse Mail">
                <span class="focus-input100"></span>
                <span class="symbol-input100">@section('content')

    <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
            <img src="img/img-01.png" alt="IMG">
        </div>
    <form class="login100-form validate-form" method="post" action="/inscription">
        {{ csrf_field() }}
        <span class="login100-form-title">
						Inscription
					</span>
        <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="nom" placeholder="Nom de l'entreprise">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="slug" placeholder="Slogan de l'entreprise">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>
        <br>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Adresse Mail">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Mot de passe">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Confirmer votre Mot de passe">
            <input class="input100" type="password" name="password_confirmation" placeholder="Mot de passe de confirmation">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Inscription
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
    </form>
    </div>
@endsection

							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Mot de passe">
                <input class="input100" type="password" name="password" placeholder="Mot de passe">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Confirmer votre Mot de passe">
                <input class="input100" type="password" name="password_confirmation" placeholder="Mot de passe de confirmation">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    Inscription
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
        </form>
    </div>
@endsection
