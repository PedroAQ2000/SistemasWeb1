<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID
        AS - vL7PH9xkLV9fe6 - CI9BWUzHExQDlIfWVgROg0IMssdAlrga9UW9TrtsGa4uFD - WZ3_SkXFI10h - 4
        currency=BOB"></script>
    </head>
    <body>
    <div id="paypal-button-container" ></div>
    <script>
        paypal.Buttons({
            style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay',
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }]
                })
            },

            onApprove: function(data, actions){
                actions.order.capture().then(function(detalles){
                    console.log(destalles);
                });
            },
            
            onCancel: function(data){
                alert("Pago Cancelado")
                console.log(data);
            }
        }).render('#paypal-button-container')
    </script>
    </body>
</html>