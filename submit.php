

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