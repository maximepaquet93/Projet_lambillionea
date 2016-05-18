@extends('../Template.layout')
@section('javascript')

@endsection
@section('Contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">    
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif(session('status'))
                            <h1>{{session('status')}}</h1>
                        @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('abonnementConfirm') }}">
                        
                        <div class="form-group">
                                <label class="col-md-4 control-label">Nom</label>
                                <div class="col-md-6">
                                        <input type="text" class="form-control" name="nom" >
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-4 control-label">Prénom</label>
                                <div class="col-md-6">
                                        <input type="text" class="form-control" name="prenom">
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                        <input type="email" class="form-control" name="email">
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Localité</label>
                                <div class="col-md-6">
                                        <input type="text" class="form-control" name="localite">
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Rue, numéro</label>
                                <div class="col-md-6">
                                        <input type="text" class="form-control" name="rueNum">
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Code postale</label>
                                <div class="col-md-6">
                                        <input type="text" class="form-control" name="codePostale">
                                </div>
                        </div>
                        
                        <input type="hidden" name='_token' value="{{ csrf_token()}}"/>

                        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>         
                                </div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
