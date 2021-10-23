<div id="paypal-button"></div>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
var test =$("#amount").val();
//alert(test);
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AUsvXLsoh2W4_DGqr9OM9EsgzAnX9_-jWwX59XGfIVHHA7Uv-VX4Q8Z0CBlEJXO96gXZa9swJ8dq_PqZ',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
		
	  return actions.payment.create({
	

        transactions: [{
          amount: {
            total: test,
            currency: 'AUD'
          }
        }],
		redirect_urls:
        {
          return_url: 'http://localhost:8080/artngallery/customer/execute-payment-detail.php',
		}
		
	  
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
    //  window.alert('Thank you for your purchase!');
		return actions.redirect();
      });
    }
  }, '#paypal-button');

</script>
