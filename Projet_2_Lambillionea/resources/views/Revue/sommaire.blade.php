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
    <div id="header"></div>
    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <!-- Modal Structure -->
                    <div id="" class="">
                        <div class="">


                            <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE :{{$revue->fascicule}} , février {{$revue->annee}} <i class="modal-action modal-close material-icons right">close</i></span>
                            <div class="border-right col s3 center">
                                <div class="col s12">
                                    <img src="{{ asset('media/revue-01.jpg') }}" alt="couverture" >
                                </div>
                                <div class="col s12">
                                    <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                    <p>Tome : {{ $revue->tome}}, Fascicule : {{ $revue->fascicule }}, Annee : {{ $revue->annee}}</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div>
                                        <a href="{{route('ajoutPanier', ['id'=>$revue->id])}}">AJOUTER AU PANIER</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col s9">
                                <p>
                                    @foreach($articles as $article)
                                        <br>{{$article->AUTEUR2}}, {{ $article->TITRE }} : {{$article->PAGE}}
                                    @endforeach
                                </p>

                            </div>

                            <div class="clo s4 btn light-green">
                                <a class='black-text' href='{{route('laRevue')}}'>Retour à la liste des revues </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection