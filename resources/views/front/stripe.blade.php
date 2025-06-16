@extends('layouts.main')
 
@section('extra-meta')

<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('extra-css')

<style>
/* Variables */


#payment-form {
  width: 30vw;
  min-width: 500px;
  align-self: center;
  box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
    0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
  border-radius: 7px;
  padding: 40px;
}

.hidden {
  display: none;
}

#payment-message {
  color: black;
  font-size: 16px;
  line-height: 20px;
  padding-top: 12px;
  text-align: center;
}

#payment-element {
  margin-bottom: 24px;
}

/* Buttons and links */
button {
  background: #5469d4;
  font-family: Arial, sans-serif;
  color: #ffffff;
  border-radius: 4px;
  border: 0;
  padding: 12px 16px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  display: block;
  transition: all 0.2s ease;
  box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
  width: 100%;
}
button:hover {
  filter: contrast(115%);
}
button:disabled {
  opacity: 0.5;
  cursor: default;
}

/* spinner/processing state, errors */
.spinner,
.spinner:before,
.spinner:after {
  border-radius: 50%;
}
.spinner {
  color: #ffffff;
  font-size: 22px;
  text-indent: -99999px;
  margin: 0px auto;
  position: relative;
  width: 20px;
  height: 20px;
  box-shadow: inset 0 0 0 2px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.spinner:before,
.spinner:after {
  position: absolute;
  content: "";
}
.spinner:before {
  width: 10.4px;
  height: 20.4px;
  background: #5469d4;
  border-radius: 20.4px 0 0 20.4px;
  top: -0.2px;
  left: -0.2px;
  -webkit-transform-origin: 10.4px 10.2px;
  transform-origin: 10.4px 10.2px;
  -webkit-animation: loading 2s infinite ease 1.5s;
  animation: loading 2s infinite ease 1.5s;
}
.spinner:after {
  width: 10.4px;
  height: 10.2px;
  background: #5469d4;
  border-radius: 0 10.2px 10.2px 0;
  top: -0.1px;
  left: 10.2px;
  -webkit-transform-origin: 0px 10.2px;
  transform-origin: 0px 10.2px;
  -webkit-animation: loading 2s infinite ease;
  animation: loading 2s infinite ease;
}

@-webkit-keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@media only screen and (max-width: 600px) {
  form {
    width: 80vw;
    min-width: initial;
  }
}
</style>
    
@endsection

@section('content')
<div class="container pt-50 pb-18 pb-md-20 pt-md-14 pb-lg-21 text-center" style="margin-top: 50px;">
  @if (session('success'))
  <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
    <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
    <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('error')}}</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <center>
        <form id="payment-form" method="POST" action="{{ route('stripe.save') }}">
            <div id="payment-element">
              <!-- Elements will create form elements here -->
            </div>
            <button id="submit">Submit</button>
            <div id="error-message">
              <!-- Display error message to your customers here -->
            </div>
            <div id="message">
              <!-- Display error message to your customers here -->
            </div>

        </form>
        <div id="home" style="display: none">
            <p> <strong style="text-align: center"><a href="{{ route('shop') }}">Retourner à la boutique </a></strong></p>
        </div>
    </center>
</div>
@endsection

@section('extra-js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51L02GtIPKVIU8ML6NmIuxv9ocEaajcXArRKO8TloMG4eT0mpSagApoKIXKmYmnzNnFEtaAC5tCDfj4B0kYKPqLVL00wM7hoCut');
    const options = {
    clientSecret: '{{$clientSecret}}',
    // Fully customizable with appearance API.
    appearance: {/*...*/},
    };

    const appearance = {
    theme: 'night',

    variables: {
        colorPrimary: '#0570de',
        colorBackground: '#000000',
        colorText: '#30313d',
        colorDanger: '#df1b41',
        fontFamily: 'Ideal Sans, system-ui, sans-serif',
        spacingUnit: '2px',
        borderRadius: '4px',
        // See all possible variables below
    }
    };

    // Pass the appearance object to the Elements instance
    const style = stripe.elements("{{$clientSecret}}", appearance);

    // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 2
    const elements = stripe.elements(options);

    // Create and mount the Payment Element
    const paymentElement = elements.create('payment');
    paymentElement.mount('#payment-element');
    const form = document.getElementById('payment-form');

    form.addEventListener('submit', async (event) => {
    event.preventDefault();

    const {error} = await stripe.confirmPayment({
        //`Elements` instance that was used to create the Payment Element
        elements,
        redirect:'if_required'
        /* confirmParams: {
        return_url: 'https://example.com/order/123/complete',
        }, */
    });

    if (error) {
        // This point will only be reached if there is an immediate error when
        // confirming the payment. Show error to your customer (for example, payment
        // details incomplete)
        const messageContainer = document.querySelector('#error-message');
        messageContainer.textContent = error.message;
    } else {
      stripe.retrievePaymentIntent("{{$clientSecret}}")
            .then(({paymentIntent}) => {
            const message = document.querySelector('#message')
            const home = document.querySelector('#home')

            if (paymentIntent.status == 'succeeded') {
                message.innerText = 'Success! Payment received.';
                home.setAttribute("style", "display:block");
                    console.log("avant",paymentIntent);
                            var paymentIntent=paymentIntent;
                            var token=document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                            var forms = document.getElementById('payment-form'); 
                            var url=forms.action;

                            fetch(
                                url,
                                {
                                    headers:{
                                        "Content-Type":"application/json",
                                        "Accept":"application/json text-plain, */*",
                                        "X-Requested-With":"XMLHttpRequest",
                                        "X-CSRF-TOKEN":token
                                    },
                                    method:"post",
                                    body:JSON.stringify({
                                        paymentIntent:paymentIntent
                                    })
                                }
                            ).then((data) =>{
                                //location.reload();
                                console.log("data",data);
                                console.log("data1",paymentIntent);
                            }).catch((error)=>{
                                console.log(error);
                            })
            } else {
                console.log(paymentIntent.status);
            }
                
        });
    }
    });
    
</script>
    
@endsection
