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
                    <h2 class="josefin-bold">La revue</h2>
                    <section class="col s8">
                        <!--Début de la boucle pour afficher les revues-->
                        @foreach($revues as $revue)
                            <div class="card col s12">
                                <div class="card-image waves-effect waves-block waves-light col s4">
                                    <img class="activator margin-10" src="{{ asset('media/revue-01.jpg') }}">
                                </div>

                                <div class="card-content col s8">
                                    <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                    <p>Tome:{{$revue->tome}}, Fascicule:{{$revue->fascicule}}, {{ $revue->annee }}</p>
                                    <p>
                                    Liste des tags :
                                        @foreach($revue->articles as $article)
                                            @foreach($article->tags as $tag)
                                                @foreach($article->tags as $tagExist)
                                                    @if($tag->nom != $tagExist->nom)
                                                        <a></a>
                                                    @else
                                                        <a>{{$tag->nom}}</a>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>

                                    <div class="card-action">
                                        <a href="{{route('ajoutPanier', ['id'=>$revue->id])}}">AJOUTER AU PANIER</a>
                                        <a class="modal-trigger right" href="#revue{{$revue->id}}" >EN SAVOIR +</a>

                                    </div>
                                </div>
                            </div>

                                    <!--Fin de la boucle-->
                        @endforeach
                            <!--Pagination-->
                            <?php echo $revues->render(); ?>
                    </section>


                            <!-- Modal Structure -->
                    @foreach($revues as $revue)
                    <div id="revue{{$revue->id}}" class="modal bottom-sheet">
                        <div class="modal-content">


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
                                    @foreach($revue->articles as $article)
                                        <br>{{$article->AUTEUR2}}, {{ $article->TITRE }} : {{$article->PAGE}}

                                    @endforeach
                                </p>


                            </div>


                        </div>

                    </div>


                    @endforeach
                    <!--Menu des options de tri des articles-->
                    <aside class="col s4">
                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field white">
                                        <input id="search" type="search" placeholder="Recherchez" required>
                                        <label for="search"><i class="material-icons grey-text text-darken-3">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>

                        <div class="margin-top-30">
                            <h5 class="josefin-bold">Options de tri</h5>
                        </div>

                        <form action="{{route('triRevues') }}" method="get">
                            <p>
                                <input name="group1" type="radio" id="test1" value="2016" />
                                <label for="test1">Année 2016</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test2" value="2015" />
                                <label for="test2">Année 2015</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test3" value="2014" />
                                <label for="test3">Année 2014</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test4" value="2013" />
                                <label for="test4">Année 2013</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test5" value="2012" />
                                <label for="test5">Année 2012</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test6" value="2011"/>
                                <label for="test6">Année 2011</label>
                            </p>
                            <input type="submit" value="Trier"/>
                        </form>
                    </aside>


                </div>
            </div>
        </div>
    </div>
@endsection