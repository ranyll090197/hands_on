console.log($('#paypal-btn-func').val());

// paypal.Buttons({
//     createOrder: function(data, actions) {
//         // This function sets up the details of the transaction, including the amount and line item details.
//         return actions.order.create({
//             purchase_units: [{
//                 amount: {
//                     value: $('#enteredNumber').val()
//                 }
//             }]
//         });
//     }
// }).render('#paypal-btn-func');