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
 <div id="header">

<div class="z-depth-3">
    <div class="container">
        <div class="section">
            <div class="row">
                <h2 class="josefin-bold">Mon panier</h2>
                
                <section class="col s8">

                    @foreach($panier as $revuePan)
                        @foreach($revues as $revue)
                            @if($revuePan->revueID === $revue->id)
                                <div class="card col s12">
                                    <div class="card-image waves-effect waves-block waves-light col s4">
                                        <img class="activator margin-10" src="{{ asset('media/revue-04.jpg') }}">
                                    </div>
                                    <div class="card-content col s8">
                                        <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                        <p>Tome : {{$revue->tome}}, Fascicule: {{$revue->fascicule}}, {{$revue->annee}}</p>
                                        <span class="card-price grey-text text-lighten-1">50€</span>
                                        <div class="card-action">
                                            <a href="{{route('suppRevuePanier', ['id'=>$revue->id])}}" class="delete">RETIRER DU PANIER</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                    

                
                </section>
                
                <aside class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Sous-total ({{ $nbreRevues }} articles) :</span>
                            <span class="prix-panier red-text">{{ $nbreRevues*50 }} €</span>
                        </div>
                        <div class="card-action">
                            <a href="#modal4" class="modal-trigger">Passez la commande</a>
                            <a href="#modal0" class="modal-trigger">Connectez-vous</a>
                        </div>
                    </div>
                    
                </aside>
                
            </div>
        </div>
    </div>
</div>
     </div>
 <!--======================LES MODALS================================================-->
  <!-- POPUP PAIEMENT -->
    <div id="modal4" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <h4 class="josefin-bold">VOTRE COMMANDE</h4>
                </div>
                <div class="col s6">
                    <h5>Paiement PayPal</h5>
                    <p>Adresse Paypal : lambillionea@yahoo.fr
                    <br>Ajoutez 4.5 % exemple : pour 65 €, verser (65 *1.045 =) 67.9 €
                    <br>add 4.5 % example : for 65 €, pay (65 *1.045 =) 67.9 €</p>
                    
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="accounts@freelanceswitch.com">
                        <input type="hidden" name="item_name" value="Donation">
                        <input type="hidden" name="item_number" value="1">
                        <input type="hidden" name="amount" value="9.00">
                        <input type="hidden" name="no_shipping" value="0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="lc" value="AU">
                        <input type="hidden" name="bn" value="PP-BuyNowBF">
                        <input type="image" src="https://www.paypal.com/en_AU/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
                        <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <div class="col s6">
                    <h5>Paiement par virement</h5>
                    <p>Union des Entomologistes Belges / Lambillionea :
                    <br>57 rue Genot, B-4032, Chênée, Belgique
                    <br>Pour la Belgique :
                    <br>BE38 7925 8328 2472</p>
                    
                    <div>
                        <p>Pour l'étranger
                        <br>Utiliser codes SWIFT-BIC, IBAN 
                        <br>et/ou frais à charge du payeur
                        <br>N° IBAN : BE38-7925-8328-2472</p>
                    </div>
                    
                    <div>
                        <p>Foreign bank transfer 
                        <br>Use the SWIFT-BIC, IBAN codes 
                        <br>and/or charge for the buyer
                        <br>SWIFT/BIC : GKCCBEBB</p>
                    </div>
                </div>
                
          </div>
            
        </div>
        <div class="modal-footer left">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Payez</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat left">retour</a>
        </div>
    </div>
    
    <!-- FIN -->
@endsection
