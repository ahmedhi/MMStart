@extends('Connect/LogMaster')

@section('title')
    Inscription
@endsection

@section('cssCustom')
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles et Jquey-->
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/Choix.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('content')
    <!--Body -->
    <div class="container">
        <div class="row vertical-center" style="position: relative; top: -8rem;">
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionU" class="card custom-card titleHeader" style="color: #cd8511;">
                    <div class="card-header " style="padding-top: 35px;padding-bottom: 35px;">
                        <h1>Compte Normal</h1>
                        <img src="img/user.png" height="90px" width="90px">
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Qu'est-ce que vous attendez !
                        </p>
                        <br>
                        <h6 class="blanc">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
                        </h6>
                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionF" class="card custom-card titleHeader" style="color: #df1921">
                    <div class="card-header " >
                        <h1>Compte Fournisseur </h1>
                        <img src="img/partenaires.png" height="90px" width="90px">
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Devenez <em>Fournisseur</em> en quelques clics !
                        </p>
                        <br>
                        <h6 class="blanc">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
                        </h6>
                        <br><br>
                    </div>

                </a>
            </div>
        </div>
    </div>
@endsection