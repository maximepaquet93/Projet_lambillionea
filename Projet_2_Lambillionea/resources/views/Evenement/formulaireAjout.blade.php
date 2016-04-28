@extends ('../Template.layout')

@section('contenu')

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

<form action="{{ route('valid')}}" method="post">
    <fieldset>

            <div class="row center">
                <div class="col s6">
                    <h3>Ajouter un évenement</h3>
                    <div class="input-field"><label for="titre">Titre</label>
                        <input type="text" id="titre" class="validate" required="required" name="titre" value="{{old('titre')}}"/>
                    </div>

                    <div class="input-field">
                        <label for="rue">Rue</label>
                        <input type="text" id="rue" class="validate"  name="rue" value="{{old('rue')}}"/>
                    </div>
                    <div class="input-field">    
                        <label for="numero">Numero</label>
                        <input type="text" id="numero" class="validate"  name="numero" value="{{old('numero')}}"/>
                    </div>
                    <div class="input-field">    
                        <label for="codePostal">Code Postal</label>
                        <input type="text" id="codePostal" class="validate"  name="codePostal" value="{{old('codePostal')}}"/>
                    </div>
                    <div class="input-field">
                        <label for="localite">Localite</label>
                        <input type="text" id="localite" class="validate"  name="localite" value="{{old('localite')}}"/>
                    </div>
                    <div class="input-field"><label for="date">Date</label>
                        <input type="text" id="date" class="validate"  name="date" value="{{old('date')}}"/>
                    </div>
                    <div class="input-field"><label for="contact">Contact</label>
                        <input type="text" id="contact" class="validate"  name="contact" value="{{old('contact')}}"/>
                    </div>
                    


                    <input type="hidden" name='_token' value="{{ csrf_token()}}"/>

                    <div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
                    </div>
            </div>
               
            </div>
    </fieldset>
</form>

@endsection 
