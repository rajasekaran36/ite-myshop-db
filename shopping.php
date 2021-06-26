<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hello <?=$_SESSION["username"]?> .... Please Select any product</h2>
    <table>
        <tr>
            <td>
                <form action="payment.php" method="post">
                    <img src="product-images/hs1.jpeg" width="150" height="150">
                    <h4>JBL Headset</h4>
                    <input type="text" name="productname" value="JBL Headset" hidden>
                    <h5 style="color: red;">₹ 699</h5>
                    <input type="text" name="productprice" value="699" hidden>
                    <input type="submit" value="BUY">
                </form>
            </td>
            <td>
                <form action="payment.php" method="post">
                    <img src="product-images/ph1.jpeg" width="150" height="150">
                    <h4>SAMSUNG Galaxy Tab A 8.0</h4>
                    <input type="text" name="productname" value="SAMSUNG Galaxy Tab A 8.0" hidden>
                    <h5 style="color: red;">₹ 11,0000</h5>
                    <input type="text" name="productprice" value="11,0000" hidden>
                    <input type="submit" value="BUY">
                </form>

            </td>
        </tr>
    </table>

</body>

</html>