@extends('Template.app')

@section('content')
<style>
    h4
    {
        background-color: rgb(30, 87, 97) !important;
        color: white !important;
        padding: 5px
    }
</style>
<br> <br> <br>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <div class="formulaire">
                <form id='checkout-form' class="card p-3 "  action="{{ route('stripe.post') }}"  method="post">
                    <h4 style="font-weight: 800" class="panel-title">Informations de livraison</h4>
                    @csrf
                    <p>
                        <label for="nom">Votre nom</label>
                        <input type="text" class="form-control" placeholder="Votre nom" name="nom" required>
                        @error('nom')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <p>
                        <label for="prenom">Votre prénom</label>
                        <input type="text" class="form-control" placeholder="Votre prenom" name="prenom" required>
                        @error('prenom')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    </p>
                    <p>
                        <label for="email">Votre email</label>
                        <input type="email" class="form-control" placeholder="Votre email" name="email" required>
                        @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    </p>
                    <p>
                        <label for="adresse">Votre Adresse de livraison</label>
                        <input type="text" class="form-control" placeholder="Burkina Faso,Ouaga,BP6000" name="adresse" required>
                        @error('adresse')
                          <small style="color:red">{{ $message }}</small>
                        @enderror
                    </p>
                    <div class="form-group">
                        <label for="create-account">
                            <input type="checkbox" id="create-account" name="create-account" onchange="togglePasswordField()"> Créer un compte
                        </label>
                    </div>

                    <div class="form-group" id="password-field" style="display: none;">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    {{-- <p>
                        <button type="submit" class="btn btn-primary fw-bolder">ENVOYER <i class="fa-solid mx-3 fa-paper-plane"></i></button>
                    </p> --}}
                {{-- </form> --}}
            </div>
        </div>
        <div class="col-md-5 card p-3 ">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <h4 style="font-weight: 800" class="panel-title">Informations de paiement</h4>
                </div>
                <div class="panel-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                        <input type='hidden' name='stripeToken' id='stripe-token-id'>
                        <br>
                        <div class="form-group">
                            <label for="card-number">Votre numero de carte</label>
                            <div id="card-number" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label for="expiry">Date d'expriration</label>
                            <div id="expiry" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <div id="cvc" class="form-control"></div>
                        </div>
                        <button
                            id='pay-btn'
                            class="btn fw-bolder btn-success mt-3"
                            type="button"
                            style="margin-top: 20px; width: 100%;padding: 7px;"
                            onclick="createToken()">Valider la commande
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '24px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var cardNumber = elements.create('cardNumber', { style: style });
    cardNumber.mount('#card-number');

    var expiry = elements.create('cardExpiry', { style: style });
    expiry.mount('#expiry');

    var cvc = elements.create('cardCvc', { style: style });
    cvc.mount('#cvc');

    /*------------------------------------------
    --------------------------------------------
    Create Token Code
    --------------------------------------------
    --------------------------------------------*/
    function createToken() {
        document.getElementById("pay-btn").disabled = true;
        stripe.createToken(cardNumber).then(function(result) {

            if (typeof result.error != 'undefined') {
                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message);
            }

            /* creating token success */
            if (typeof result.token != 'undefined') {
                document.getElementById("stripe-token-id").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }

    function togglePasswordField() {
    var checkbox = document.getElementById('create-account');
    var passwordField = document.getElementById('password-field');

    // Si la case à cocher est cochée, affiche le champ de mot de passe
    if (checkbox.checked) {
        passwordField.style.display = 'block';
    } else {
        // Sinon, cache le champ de mot de passe
        passwordField.style.display = 'none';
    }
}

</script>


@endsection
