@extends('layouts.app')

@section('content')
    <div class="row">
        <div id="cartItemsContainer" class="buyItemAll-cart-container col-sm-12 col-md-8"></div>
        <div class="buyItemAll-total-container  col-sm-12 col-md-4">
            <span>Total:</span>
            <span class="buyItemAll-total-price">$0.00</span>
            <span class="buyItemAll-total-price">$0.00</span>
        </div>
    </div>
    {{--  <div style="text-align: center; margin: 20px;">
        <button class="buyItemAll-checkout-btn">Checkout</button>
    </div> --}}
@endsection
