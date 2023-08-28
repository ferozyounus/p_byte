@extends('layouts.dashboard.main')
@section('content')
<style>
    .card-header.align-content-end {
        align-items: end;
    }
    div#card-element {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    label {
        text-transform: capitalize;
        font-size: 14px;
    }
</style>
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            @php
            use App\Models\Subscription;
            $subscriptionCheck=Subscription::where('user_id',Auth::user()->id)->where('stripe_status','active')->first();
            @endphp
           
                    <div class="card">
                        <div class="card-header align-content-end" >
                            <h2 class="mb-0">{{ $plan->name }}</h2>
                        <small style=" margin-left: 10px;  display: block; color: red; font-weight: bold;"> (You will be charged ${{ number_format($plan->price, 2) }}) </small>
                        </div>
                        <div class="card-body">
                            @if(isset($subscriptionCheck) && $subscriptionCheck->count()>= 1)
                                <a href = '/UnSubcription/{{ $subscriptionCheck->stripe_id  }}' class="btn btn-danger">UNSUBCRIBE</a>
                            @endif
                            @if(!isset($subscriptionCheck))
                                <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" id="card-holder-name" class="form-control" value="" placeholder="Name on the card">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="">Card details</label>
                                                <div id="card-element"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                        <hr>
                                            <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                              @endif
                        </div>
                    </div>
        </div>
    </div>
</div>
  
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51JO2MjCztsJ6v3X9wR4hLc9OGBF2oQJAEdnEGEiKhCALHeHqcQ20YiGufshNIPaJaHixaByBd2F6o86ma3eFGsuA00LQV1ViwZ')
    console.log(stripe);
  
    const elements = stripe.elements()
    const cardElement = elements.create('card')
  
    cardElement.mount('#card-element')
  
    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')
  
    form.addEventListener('submit', async (e) => {
        e.preventDefault()
        // alert('Successfully Charged By '+cardHolderName.value)
        cardBtn.disabled = true
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }   
                }
            }
        )
        // window.location.href='sucsessfuly_Subscribe';
  
        if(error) {
            cardBtn.disable = false
        } else {
            let token = document.createElement('input')
            token.setAttribute('type', 'hidden')
            token.setAttribute('name', 'token')
            token.setAttribute('value', setupIntent.payment_method)
            form.appendChild(token)
            form.submit();
            // alert('Successfully Charged By '+cardHolderName.value)
            
        }
    })
</script>

  
@endsection