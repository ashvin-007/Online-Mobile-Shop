<?php

// include "confing.php";

// if (isset($_POST['stripeToken'])) {

//     \Stripe\Stripe::setVerifySslCerts(false);


//     $token = $_POST['stripeToken'];

//     $data = \Stripe\Charge::create([
//         'amount' => 500000,
//         'currency' => 'inr',
//         'description' => 'Purchase Product',
//         'source' => $token, // This token should be obtained from Stripe.js on the client side
//     ]);

//     echo "<pre>";
//     print_r($data);


// }
?>
<?php
// include "confing.php";
// include "connection.php";

// if(isset($_POST['stripeToken'])) {
//     \Stripe\Stripe::setVerifySslCerts(false);
//     $token = $_POST['stripeToken'];
//     if(isset($_GET['id']))
//     {
//         echo $_GET['id'];
//     $productId = $_GET['id'];
//     $query = "SELECT * FROM brandtable WHERE id=$productId";
//     $result = mysqli_query($conn,$query);
//     while($row=mysqli_fetch_assoc($result))
//     {



// try {
//     $charge = \Stripe\Charge::create([
//         'amount' => $row['currentPrice'], // Convert amount to cents
//         'currency' => 'inr',
//         'description' => 'Purchase Product',
//         'source' => $token, // Token obtained from Stripe.js on the client side
//     ]);


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Charge Details</title>
</head>
<body>
    <h1>Stripe Charge Details</h1>
    <ul>
        <li><strong>Charge ID:</strong> <?php echo $charge->id; ?></li>
        <li><strong>Amount:</strong> <?php echo $charge->amount / 100; ?> <?php echo $charge->currency; ?></li>
        <li><strong>Description:</strong> <?php echo $charge->description; ?></li>
        <li><strong>Status:</strong> <?php echo $charge->status; ?></li>
        <li><strong>Payment Method:</strong> <?php echo $charge->payment_method_details->card->brand; ?> ending in <?php echo $charge->payment_method_details->card->last4; ?></li>
        <li><strong>Billing Details:</strong> 
            <ul>
                <li><strong>Name:</strong> <?php echo $charge->billing_details->name; ?></li>
                <li><strong>Email:</strong> <?php echo $charge->billing_details->email; ?></li>
                
            </ul>
        </li>
       
    </ul>
</body>
</html> -->
<?php
//     } catch (Exception $e) {

//         echo 'Error: ' . $e->getMessage();
//     }
// }
// }
// }
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{

                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 70vh;
                flex-direction: column;
                gap: 30px;
        }
        .centerData {

            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* height: 40vh; *//

        }
        a{
            text-decoration: none;
        }
        .buttons{
            display: flex;
            gap: 20px;
        }
        .buttons button{
            all: unset;
            outline: 1px solid  rgb(5, 252, 104);
            padding: 3px 6px;
            color: rgb(5, 252, 104);
            border-radius: 4px;
            font-weight: 500;
        }
        .buttons button:hover{
            background-color: rgb(5, 252, 104);
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="centerData">
        <h2>Thank You For Payment</h2>
        <h2>Your Order Has Been Placed Successfully</h2>
    </div>
    <div class="buttons">
    <a href="home.php"> <button >Back To Home</button></a>
        <!-- <button>View The Invoice</button> -->
    </div>
</body>

</html>