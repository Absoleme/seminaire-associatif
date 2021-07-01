<script>paypal.Buttons({
    style : {
        shape: 'rect',
        color: 'silver',
        layout: 'vertical',
        label: 'paypal',
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: <?php
                    if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){
                        echo $prixA;
                    }

                    if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){
                        echo $prixU;
                    }?>
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace(<?php header("Location:./php/approvePayment.php");?>)
        })
    },
    onCancel: function (data) {
        window.location.replace(<?php header("Location:./myBasket.php");?>)
    }
}).render('#paypal-payment-button');</script>
