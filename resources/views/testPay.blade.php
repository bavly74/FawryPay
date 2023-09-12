<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Import FawryPay CSS Library-->
    <link rel="stylesheet"
        href="https://atfawry.fawrystaging.com/atfawry/plugin/assets/payments/css/fawrypay-payments.css">
</head>

<body>
    <!-- FawryPay Checkout Button -->
    <input type="image" onclick="checkout();" src="https://www.atfawry.com/assets/img/FawryPayLogo.jpg"
        alt="pay-using-fawry" id="fawry-payment-btn" />


    <!-- Import FawryPay Staging JavaScript Library-->
    <script type="text/javascript"
        src="https://atfawry.fawrystaging.com/atfawry/plugin/assets/payments/js/fawrypay-payments.js"></script>
    <!-- Import FawryPay Production JavaScript Library -->
    <script type="text/javascript" src="https://www.atfawry.com/atfawry/plugin/assets/payments/js/fawrypay-payments.js">
    </script>

</body>
<script>
    function checkout() {
            const configuration = {
                locale : "en",  //default en
                mode: DISPLAY_MODE.POPUP,  //required, allowed values [POPUP, INSIDE_PAGE, SIDE_PAGE , SEPARATED]
            };
    FawryPay.checkout(buildChargeRequest(), configuration);
     }
//FAWRY

//  function buildChargeRequest() {
//             const chargeRequest = {
//                             merchantCode: '1tSa6uxz2nTwlaAmt38enA==',
//                             merchantRefNum: '2312465464',
//                             customerMobile: '01216532445',
//                             customerEmail: 'email@domain.com',
//                             customerName: 'Customer Name',
//                             customerProfileId: '1212',
//                             paymentExpiry: '1631138400000',
//                             chargeItems: [

//                                     {
//                                         itemId: '97092dd9e9c07888c7eef36',
//                                         description: 'Product Description',
//                                         price: 75.25,
//                                         quantity: 3,
//                                         imageUrl: 'https://developer.fawrystaging.com/photos/639855.jpg',
//                                     },
//                             ],
//                             paymentMethod: 'PayAtFawry',
//                             returnUrl: 'https://developer.fawrystaging.com',
//                             authCaptureModePayment: false,
//                             signature: "2ca4c078ab0d4c50ba90e31b3b0339d4d4ae5b32f97092dd9e9c07888c7eef36"
//                         };
//    return chargeRequest;
// }


//CARD
function buildChargeRequest() {
            const chargeRequest = {
                            merchantCode: '1tSa6uxz2nTwlaAmt38enA==',
                            merchantRefNum: '2312465464',
                            // customerMobile: '01216532445',
                            // customerEmail: 'email@domain.com',
                            // customerName: 'Customer Name',
                            // customerProfileId: '1212',
                            paymentExpiry: '1631138400000',
                            chargeItems: [

                                    {
                                        itemId: '97092dd9e9c07888c7eef36',
                                        description: 'Product Description',
                                        price: 75.25,
                                        quantity: 3,
                                        imageUrl: 'https://developer.fawrystaging.com/photos/639855.jpg',
                                    },
                            ],
                            paymentMethod: 'CARD',
                            returnUrl: 'https://developer.fawrystaging.com',
                            authCaptureModePayment: false,
                            signature: "2ca4c078ab0d4c50ba90e31b3b0339d4d4ae5b32f97092dd9e9c07888c7eef36"
                        };
   return chargeRequest;
}
</script>

</html>
