@extends('layouts.app')
<script src="https://www.paypal.com/sdk/js?client-id=AQKSi07cXyGqVGswWM4BhO0ymonBnWjhjlyLf-omFb9YSThBH02qr_0TvC3lddfHVEmfgB8Ly8N8MoOO"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paypal Function</div>

                <div class="card-body">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label for="">Input Amount</label>
                               <input type="number" id="enteredNumber" class="form-control">
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="paypal-btn-func"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: document.getElementById("enteredNumber").value
                    }
                }]
            });
        }
    }).render('#paypal-btn-func');
</script>