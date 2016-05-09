@extends('../Template.layout')
@section('javascript')
<script>
    $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();

                $('#header').load('modals.html');
            });
</script>
@endsection
@section('Contenu')
<div id="header">
        <div id="index-banner-1" class="parallax-container parallax-index">
          <div class="section no-pad-bot">
            <div class="container">
              <div class="parallax-logo"><img src="{{ asset('media/logo.png') }}" alt="logo"></div>
              <h5 class="brown-text text-darken-1">L'Union des Entomologistes belges asbl</h5>
              <div class="row">
                  <p class="header col s12 m10 l6 light">Envie de participer Ã  la grande aventure du monde des insectes ? N'attendez plus, rejoignez notre asbl et bÃ©nÃ©ficiez de la revue Lambillionea.</p>
              </div>
              <div class="row">
                  <div class="col s12 m10 l6 btn-white">
                      <a href="#modal1" id="download-button" class="modal-trigger btn waves-effect waves-light">En savoir +</a>
                  </div>
              </div>
              <div class='col s12 center margin-top-30'><a href="#1"><img src="{{ asset('media/icons/fa-arrow-circle-down.png') }}" alt='arrow'></a></div>
            </div>
          </div>
          <div class="parallax"><img src="{{ asset('media/bg-1.jpg') }}" alt="Unsplashed background img 1"></div>
        </div>
</div>
<div id="1">
    <div class="container">
        <div class="section">

        <!--   Icon Section   -->
        <div class="row margin-top-30">
            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ asset('media/icons/fa-users.png') }}">
                    <h5 class="center josefin-regular">Rejoignez notre asbl</h5>
                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    <a href="#modal1" id="download-button" class="btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ asset('media/icons/fa-book.png') }}">
                    <h5 class="center josefin-regular">DÃ©couvrez notre revue</h5>
                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    <a href="{{route('laRevue')}}" id="download-button" class="btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="{{ ('media/icons/icomoon-pencil.png') }}">
                    <h5 class="center josefin-regular">Publiez vos articles</h5>
                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    <a href="" id="download-button" class="modal-trigger btn btn-bleu waves-effect waves-light">En savoir +</a>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>


  

  <div class="container">
    <div class="section">
      <div class="row"> 
        <div class="section">
            <div class="row center">
                <h2 class="josefin-bold">Qui sommes-nous ?</h2>
                <p>L'Union des Entomologistes Belges a pour but l'Ã©tude dÃ©sintÃ©ressÃ©e de l'entomologie gÃ©nÃ©rale, de la systÃ©matique, de l'Ã©thologie, de l'anatomie, de l'Ã©cologie et de la biogÃ©ographie en particulier, et des questions liÃ©es Ã  ces disciplines. L'association s'intÃ©resse Ã©galement Ã  la protection des populations d'insectes et Ã  la sauvegarde des biotopes favorables Ã  ces populations.</p>
                <br>
                <h5 class="josefin-bold">GÃ©nÃ©ralitÃ©s</h5>
                <p>Toute demande d'adhÃ©sion Ã  l'Union des Entomologistes Belges doit Ãªtre transmise par courrier au secrÃ©tariat. La qualitÃ© de membre adhÃ©rent et sa cotisation annuelle donnent droit Ã  toutes les publications normales de la revue Lambillionea et aux feuillets d'information de la sociÃ©tÃ© tel que le " Monitor entomologicus ". Les autres publications sont accessibles sÃ©parÃ©ment. Toute personne non membre peut acquÃ©rir une publication de la sociÃ©tÃ© au prix indiquÃ© dans on catalogue.</p>
            </div>
        </div>
            
      
      </div>

    </div>
  </div>
@endsection
