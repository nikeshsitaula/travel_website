<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
var test =$("#amount").val();
//alert(test);
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'Aa__kFfguZO_Bh_MilO7v2W7QcQLj-RRjm7VWvVilolnW7qRjSPWIbkfh9pYaz1fsM2YyGO_eA5JHuHU',
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
          return_url: 'http://localhost:/travel_website/customer/execute-payment-detail.php',
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