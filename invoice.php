<?php
include "connection.php";

require('confing.php') ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
        }

        .container {
            border: 1px solid;
            padding: 4px 12px;

        }

        .container h1 {
            text-align: center;
            margin: 10px 0px;
        }

        .container .idAndDate {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 1px solid;
        }

        .container .address {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 10px 0px;
            border: 1px solid;
        }

        .actualData {
            text-align: center;
        }

        table {
            margin: 10px 0px;
        }

        .btnDownload {
            all: unset;
            outline: 1px solid blue;
            color: blue;
            padding: 3px 7px;
            border-radius: 4px;
        }

        .btnDownload:hover {
            color: #fff;
            background-color: blue;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form action="submit.php">
        <div class="container">
            <h1>Retail Invoice</h1>
            <div class="idAndDate">
                <span id="id">
                    <script>
                        const id = document.querySelector('#id');
                        let curId = Math.floor(Math.random() * 1000);
                        id.innerHTML = `Order-ID: ${curId}`;
                    </script>
                </span>
                <span id="date">
                    <script>
                        const date = document.querySelector('#date');
                        const orderDate = new Date().toLocaleDateString();
                        date.innerHTML = `Order Date: ${orderDate}`;
                    </script>
                </span>
            </div>
            <div class="address">
                <b>Seller Address:</b>
                <span> I.T.Seliya Bca College,Siddhpur,Gujarat </span>
            </div>
            <div class="table">
                <table border="1px">
                    <thead>

                        <tr>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $query = "SELECT * FROM cart WHERE id=$id";
                            $result = mysqli_query($conn, $query);
                            if ($row = mysqli_fetch_assoc($result)) {

                        ?>
                                <tr class="actualData">
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['Quantity']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['price'] * $row['Quantity']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="5"> <b>Grand Total:</b> <?php echo $row['price'] * $row['Quantity']; ?></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="5">
                                        <span>This Is Computer Generated Invoice And Doe Not Required Signature</span>
                                    </td>
                                </tr>

                                

                    </tbody>

                    <?php
                               function removeThisItem($id, $conn)
                               {
                                   $query = "DELETE FROM cart WHERE id=$id";
                                   $result = mysqli_query($conn, $query);
                                   if ($result) {
                                    //    echo "<script>alert('success');</script>";
                                   } else {
                                       echo "<script>alert('Error deleting item');</script>";
                                   }
                               }
                               
                    ?>
              
     
                <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key=""  
         data-amount="<?php echo ($row['price'] * $row['Quantity']) * 100; ?>" 
        data-name="DB Store"
        data-description="Purchase Product"
        data-image="images/logo1.jpg"
        data-currency="inr"
        
     
    >  
    <?php
                                // $removeItem = true;
                                removeThisItem($id, $conn);
                    ?>

</script>

                </table>
               


        <?php

                            }
                        }
        ?>

            </div>

        </div>

    </form>


</body>


</html>