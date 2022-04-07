<?php include("controller/cookie.php");?>

<?php
 include_once 'controller/config.php';
 
 $tid      = $_GET['tid'];
 $get_ord  = mysqli_query($con,"SELECT * FROM payment_transaction WHERE transaction_id='$tid'");
 
 $order_get = mysqli_fetch_array($get_ord);
 $amount    = $order_get['amount'];
 $transaction_id    = $order_get['transaction_id'];
 $acc_id            = $order_get['account_from'];   
 
?>

<center><img src="https://static.vecteezy.com/system/resources/previews/000/684/243/non_2x/online-payment.jpg"></center>    


    <html lang="en">

<head>

    <title> Payment Gateway Integration</title>

</head>

<body style="background:#ffffff">

<style type="text/css">

        .price.panel-red>.panel-heading {

            color: #fff;

            background-color: #D04E50;

            border-color: #FF6062;

            border-bottom: 1px solid #FF6062;

        }   

        .price.panel-red>.panel-body {

            color: #fff;

            background-color: #EF5A5C;

        }

        .price .list-group-item{

            border-bottom-:1px solid rgba(250,250,250, .5);

        }

        .panel.price .list-group-item:last-child {

            border-bottom-right-radius: 0px;

            border-bottom-left-radius: 0px;

        }

        .panel.price .list-group-item:first-child {

            border-top-right-radius: 0px;

            border-top-left-radius: 0px;

        }

        .price .panel-footer {

            color: #fff;

            border-bottom:0px;

            background-color: red;

            box-shadow: 0px 3px 0px rgba(0,0,0, .3);
            width: 200px;
            margin: 0 auto;
            height:40px
        }

        .panel.price .btn {
    width: 200px !important;
    margin: 0 auto !important;
    background: red;
    border: none;
    color: #fff;
    padding: 10px 20px;
}

        input.razorpay-payment-button {
    background: #3958e6 !important;
    border: none !important;
    height: 38px !important;
    border-radius: 10px !important;
    color: #fff !important;
    padding: 10px !important;
    margin: 0 auto!important;
    text-align: center !important;
}

</style>


 

<div class="container text-center">

    <br/>


    <br/>

    <div class="row">

        <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-4 col-lg-3">

        

            <!-- PRICE ITEM -->
               <center>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">

                    <div class="panel price panel-red">

                            <input type="hidden" name="business" value="demo@mustplay.com">

                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- <input type="hidden" name="item_name" value="It Solution Stuff"> -->

                            <!-- <input type="hidden" name="item_number" value="2"> -->

                            <input type="hidden" name="amount" value="<?php echo $amount; ?>">

                            <!-- <input type="hidden" name="no_shipping" value="1"> -->

                            <input type="hidden" name="currency_code" value="GBP">

                            <input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">



                            <input type="hidden" name="return" value="https://sharukh.dbtechserver.online/betasker/controller/charge.php?order_id=<?php echo $transaction_id; ?>">  

                            
                            <input type="hidden" name="orderid" value="<?php echo $transaction_id; ?>">
                            

                        <div class="panel-heading  text-center">

                        <!-- <h3>PRO PLAN</h3> -->

                        </div>


                        <div class="panel-footer text-center mx-auto">

                           <center> <button class="btn btn-lg btn-block btn-danger" href="#">Add Fund</button></center> 

                        </div>

                    </div>

                </form>

                  <form method="POST" action="controller/charge.php">
                   <input type="hidden" name="orderid" value="<?php echo $transaction_id; ?>">
                   <input type="hidden" name="account_id" value="<?php echo $acc_id; ?>">
                   <input type="hidden" name="amount" value="<?php echo $amount; ?>">

                    <button type="submit" name="submit">Skip</button>
                  </form>
                 </center>
            
        </div>

    </div>

</div>

</body>

</html>
   
