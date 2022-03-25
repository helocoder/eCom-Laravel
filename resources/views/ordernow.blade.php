@extends ('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">

            
  <table class="table">

    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>$ 6</td>
      </tr>

      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+6}}</td>
      </tr>

    </tbody>
  </table>

  <div class="form">
<form action="/action_page.php">
  <div class="form-group">
    <textarea type="email" placeholder="Enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type = "radio" name="payment"> <span>online payment</span> <br> <br>
      <input type = "radio" name="payment"> <span>EMI payment</span>  <br> <br>
        <input type = "radio" name="payment"> <span>Payment on Delivery</span> <br> <br>
 
  </div>

  <button type="submit" class="btn btn-Success">Order Now</button>
</form>


  </div>


</div>
</div>
@endsection