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
<p>Salut mon gros lardon, tu es bien connecté :)</p>
@endsection
