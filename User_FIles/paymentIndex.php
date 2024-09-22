
<?php
 session_start();

 include ( 'connect.php');
 //include ('userFunction.php');
 
 $sessionName=$_SESSION['username'];
 
// echo $sessionName;
 
 $query="SELECT * FROM flateowners where email='$sessionName'";
 $result = mysqli_query($con,$query);
 
                 if(mysqli_num_rows($result) > 0)
                 {
                   
                    while($row=mysqli_fetch_assoc($result)){
 
                       $Name=$row['name'];
                       $flateNo=$row['flateNo'];
                       $Oid=$row['id'];
 
                     }
                   }
 
                   echo $Name;
                   echo $flateNo;
 
                   $amount;
                   $query2="SELECT * FROM flatedetails where flatNo=$flateNo";
                        $result2 = mysqli_query($con,$query2);
                            
                        if(mysqli_num_rows($result2) > 0)
                           {
                            
                             while($row2=mysqli_fetch_assoc($result2)){
                                     
                              $amount=$row2['maintenance'];
                              
                                     
                                }
                                  }

                                 // echo $amount;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>



  <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            background-color:  rgb(175, 134, 223);
        }
        .smain{
            width: 350px;
            height: 420px;
            background: white;
            overflow: hidden;
            margin-top:50px;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        
        }
        #chk{
            display: none;
        }
        .payment{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .lh{
            color:black;
            font-size:1.5em;
            justify-content: center;
            display: flex;
            margin-top: 30px;
            margin-bottom:10px;
            font-weight:bold;
            cursor:pointer;
            transition: .5s ease-in-out;

        }

        .button{
            width:100%;
            height: 50px;
            margin:10px auto;
            justify-content: center;
            display: block;
            color:#ffff;
            background: green;
            font-size: 1em;
            margin-top:150px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;

        }

        .button:hover{
            background: #6d44b8;

        }
        .payfiels{
          width:90%;
          padding:5px;
          margin:10px 10px 0px 10px;
          border-bottom:2px solid black;
        }
        .payfiels input{
            width:100%;
            border:none;
        }


        
        
        
    </style>





</head>
<body>

<div class="container mt-3">
<div class="row">

 <div class="smain">
       <input type="checkbox" id="chk" aria-hidden="true">
        <div class="payment">
           <form action="" method="POST">
            <label for="chk" aria-hidden="true" class="lh">payment</label>
            
            <div class="payfiels"><?php echo "<input type='text'  id='oid' value='$Oid'>";?></div>
            <div class="payfiels"><?php echo "<input type='text' id='name'  value='$Name'>"; ?></div>
            <div class="payfiels"><?php echo "<input type='text' id='flatno'  value='$flateNo'>"; ?></div>
            <div class="payfiels"><?php echo "<input type='text'  id='Amount'  value='$amount'>"; ?></div>
           
           
            <?php echo ""; ?>
            
            <input type="button" id="payNowButton" value="Pay" class="button" />


           </form>
        </div>


</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
 
    var razorpay = new Razorpay({
        key: 'rzp_test_M5JQDhI4afCoH7', // Your Razorpay API Key
        amount: amount * 100, // Amount in the smallest currency unit (e.g., paise for INR)
        currency: 'INR',
        name: 'VSMS',
        description: 'Purchase Description',
        handler: function (response) {
            alert('Payment successful. Please Note the Payment ID: ' + response.razorpay_payment_id);
            var paymentid = response.razorpay_payment_id;

            $.ajax({
                url: 'payment_process.php',
                type: 'POST',
                data: { username: username, payment_id: paymentid, amount: amount },
                success: function (response) {
                    submitBtn.disabled = false;
                    payNowButton.disabled = true;
                },
                error: function (xhr, status, error) {
                    console.error('Error loading page:', error);
                    submitBtn.disabled = true;
                    payNowButton.disabled = false;
                }
            });
        },
        "theme": {
            "color": "#3399cc"
        }
    });

    document.getElementById('payNowButton').addEventListener('click', function () {
        razorpay.open();
    });
</script>
</body>
</html>
