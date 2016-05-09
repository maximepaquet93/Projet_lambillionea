@extends('../Template.layout')
@section('javascript')
    <script>

        $(document).ready(function(){

            $('.modal-trigger').leanModal();

            $('#header').load('modals.html');

        });

    </script>
@endsection
@section('Contenu')
    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <a href="{{route('adminLogout')}}" class="clo s4 btn light-green">Déconnexion</a>
                <p>Salut mon gros lardon, tu es bien connecté :)</p>
                <h2 class="josefin-bold">Evénements à venir</h2>
                <table class="striped">
                    <thead>
                    <tr>
                        <th data-field="date">Date</th>
                        <th data-field="name">Evénement</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($evenements as $event)
                        <tr>
                            <td class="josefin-bold">{{$event->date}}</td>
                            <td>
                                <h5 class="josefin-regular">{{$event->titre}}</h5>
                                <p>{{$event->rue}},{{$event->numero}}, {{$event->codePostal}},{{$event->localite}}</p>
                                <p>Contact Email : <a href="#">{{$event->contact}}</a></p>
                            </td>
                            <td>
                                <div>
                                    <a href="{{route('modifierEvenement', ['id'=>$event->id])}}">Modifier</a>
                                </div>
                                <div>
                                    <a href="{{route('supprimerEvenement', ['id'=>$event->id])}}">Supprimer</a>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                    <a class="col s4 btn waves-effect waves-light" href="{{route('ajouterEvenement')}}">Ajouter un evenement</a>
                </table>

            </div>
        </div>
    </div>
@endsection
