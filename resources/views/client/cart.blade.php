@extends('client_layout.client')
@section('tittle')
	CART
@endsection
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
								
	<!-- start content -->

    <div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>

							
                              @if (session('pid')==1)
                               
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bell Pepper </h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
								<td class="price">$15.70</td>
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							
							@endif
                            @if(session('pid')==2)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-2.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Strawberry</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td> 

						     	<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==3)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Green Beans</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						    
							  <td>
									
								<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
							
							</td>
							
							
								
						  
							
							<td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==4)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Purple Cabbage</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==5)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-5.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Tomatoe</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==6)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-6.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Brocolli</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
					        	<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==7)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-7.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Carrots</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
					        	<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==8)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-8.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Fruit Juice</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==9)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-9.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Onion</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==10)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-10.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Apple</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						     
					        	<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==11)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-11.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Garlic</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
							  @if(session('pid')==12)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(frontend/images/product-12.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Chilli</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
								<td>
									
									<input id="qnty" placeholder="1" name="qnty" style="width: 17%"  type="number">
								
								</td>
								
						        
									
					          
						        
						        <td class="total" id="total">$15.70</td>
						      </tr><!-- END TR-->
							  @endif
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
				@if(session('pid'))
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span >Subtotal</span>
    						<span id="sub">$15.70</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span id="net">$12.70</span>
    					</p>
    				</div>
						
					@else
					<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Cart Totals</h3>
							<p class="d-flex">
								<span>Subtotal</span>
								<span>$0</span>
							</p>
							<p class="d-flex">
								<span>Delivery</span>
								<span>$0.00</span>
							</p>
							<p class="d-flex">
								<span>Discount</span>
								<span>$3.00</span>
							</p>
							<hr>
							<p class="d-flex total-price">
								<span>Total</span>
								<span>$0</span>
							</p>
						</div>
					@endif
    				<p><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
	<!-- end content -->
		


  
  
	
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){
	$('#qnty').on('input',function(){
		var quantitiy=0;
		 let qnty=$('#qnty').val();
		if(qnty==0)
		{
			qnty=1;
		}
		 let total=qnty*15.70;
		  total=total.toFixed(2);
		  $('#total').text(total);
          
		$('#sub').text(total);
		total=total-3;
	    
		$('#net').text(total);

	})
});
		
function got(){
	let qnty=$('#qnty').val();
		 let total=qnty*15.70;
		  total=total.toFixed(2);
		  let url="checkout/"+total;
	window.location.href =url;
}
	</script>
@section('scripts')


	
@endsection