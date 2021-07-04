@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
        
            <tbody>
              <tr>
                
                <td>Amount</td>
                <td>KSH {{$total}}</td>
                
              </tr>
              <tr>
                
                <td>Tax</td>
                <td>KSH 0.00</td>
                
              </tr>
              <tr>
                
                <td >Delivery fee</td>
                <td>KSH 10.00</td>
              </tr>
              <tr>
                
                <td >Total</td>
                <td>KSH {{$total + 10}}</td>
              </tr>
            </tbody>
          </table>

          <div class="order">
            <form action="/orderplace" method="POST">
              @csrf
              <label for="address"><h5>Enter Address :</h5></label><br><br>
              <textarea name="address" id="address" cols="30" rows="10" class="order-textarea"></textarea><br><br>
              <label for="payment"><h5>Payment Method :</h5></label><br><br>
              <input type="radio" name="payment" value="mpesa"><span>Mpesa</span><br><br>
              <input type="radio" name="payment" value="credit"><span>Credit Card</span><br><br>
              <input type="radio" name="payment" value="cash"><span>Cash</span><br><br>
              <button class="btn btn-success">Place Order</button>
            </form>
          </div>
    </div>
    
    
</div>
    
@endsection