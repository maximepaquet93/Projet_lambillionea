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
<a href="{{route('adminLogout')}}" class="clo s4 btn light-green">Déconnexion</a>
<p>Salut mon gros lardon, tu es bien connecté :)</p>
@endsection
