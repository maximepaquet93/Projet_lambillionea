<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>LAMBILLIONEA</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <!--JAVASCRIPT-->
    @yield('javascript')
    <div class="bg-grass">
<header class="navbar-fixed z-depth-2">    
    
    <!-- NAVIGATION -->
    <nav class="light-green darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{route('accueil')}}" class="white-text">ACCUEIL</a></li>
                <li><a href="{{route('laRevue')}}" class="white-text">LA REVUE</a></li>
                <li><a href="{{route('ajoutArticle')}}" class="white-text">PUBLIER UN ARTICLE</a></li>
                <li><a href="{{route('lesEvenements')}}" class="white-text">Evenements</a></li>
            </ul>
            
            <ul class="right hide-on-med-and-down">
                <li class="light-green darken-3"><a href="#modal0" class="modal-trigger white-text"><img src="{{ asset('media/icons/fa-power.png') }}" style="margin-right: 10px">S'abonner</a></li>
                <li class="light-green darken-3" style="margin-left: 5px"><a href="{{route('monPanier')}}" class="white-text"><img src="{{ asset('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{route('accueil')}}">ACCUEIL</a></li>
                <li><a href="{{route('laRevue')}}">LA REVUE</a></li>
                <li><a href="{{route('ajoutArticle')}}">PUBLIER UN ARTICLE</a></li>
                <li><a href="{{route('lesEvenements')}}">Evenements</a></li>
                <li class="light-green darken-3"><a href="#modal0" class="modal-trigger white-text"><img src="{{ ('media/icons/fa-power.png') }}" style="margin-right: 10px">S'abonner</a></li>
                <li class="light-green darken-3"><a href="{{route('monPanier')}}" class="white-text"><img src="{{ ('media/icons/fa-shopping-cart.png') }}" style="margin-right: 10px">MON PANIER</a></li>
            </ul>

        </div>
    </nav>
    <!-- FIN -->
    
</header> 
    <main>
     @yield('Contenu')
    </main>
  <footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="josefin-bold white-text">Lambillionea asbl</h5>
                <p class="grey-text text-lighten-4">FondÃ©e en 2010 par Thierry BOUYER, Jacques HECQ et Auguste FRANCOTTE.
                <br>(anciennement "SociÃ©tÃ© entomologique namuroise" crÃ©Ã©e Ã  Namur en 1896)
                <br>SiÃ¨ge : 57, rue GENOT, B - 4032 ChÃªnÃ©e, Belgique .
                <br><br>E-mail : <a href="#">lambillionea@hotmail.com</a></p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
      </div>
    </div>
  </footer>
    </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
   <!-- POPUP CONNEXION -->

    <div id="modal0" class="modal modal-fixed-footer">
        <div class="modal-content center">
            <div class="row">
                <div class="col s12">
                    <h4 class="josefin-bold">CONNEXION</h4>
                    <p>Vous êtes déjà membre adhérent de Lambillionea?<br>Connectez vous sans plus attendre.</p>
                    <form>
                        <div class="row">
                        <div class="input-field">
                            <input id="job" type="text" class="validate">
                            <label for="job">Votre pseudo</label>
                        </div>
                    </div>
                        <div class="row">
                        <div class="input-field">
                            <input id="password" type="password" class="validate">
                            <label for="password">Votre mot de passe</label>
                        </div>
                    </div>
                    </form>
                    <p>Vous n'êtes pas encore membre adhérent ?<a href='#modal1' class='modal-trigger bleu'> INSCRIVEZ-VOUS</a></p>
                </div>
          </div>
            
        </div>
        <div class="modal-footer left">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyez</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat left">Retour</a>
        </div>
    </div>

  </body>
</html>

