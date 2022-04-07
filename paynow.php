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



    <html lang="en">

<head>

    <title> Payment Gateway Integration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

     

        .panel.price .btn {
    width: 200px !important;
    margin: 50px auto !important;
    background: #488fcc;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius:10px;
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

.price.panel-red>.panel-heading{
border:none;}

</style>
</head>

<body style="background:#ffffff">




 

<div class="container text-center">

    <br/>


    <br/>

    <div class="row">

<div class="col-12 text-center">


    <img class="mt-5 mb-2 img-fluid" src="img/pay-top.png"> 

        
        

            <!-- PRICE ITEM -->
            
                <form class="mx-auto text-center" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">

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
                <center>
                  <form class="mx-auto text-center" method="POST" action="controller/charge.php">
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
   
