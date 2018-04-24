<head>
    <script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
</head>
<?php
    include('topmenu.php');
        echo "
    <div class='container'>
    <div class='row'>
    <div class='col-md-12'>
	<nav class='navbar navbar-default navbar-light' style='background-color: #FFFFFF;'>";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connect = mysqli_connect("localhost", "root", "", "shopping") or
    die("Please, check your server connection.");
    $cartamount=0;
    $cartamount = $_POST['cartamount'];
    $_SESSION['cartamount']=$cartamount;
    if (isset($_SESSION['emailaddress']))
    {
        $email_address=$_SESSION['emailaddress'];
        echo "
                <div class='container'>
                <div class='row'>
                <div class='col-md-12'>
                Welcome " . $email_address . ". <br/>";

    }
    if (isset($_SESSION['password']))
    {
        $password=$_SESSION['password'];
    }
    if ((isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
        $sess = session_id();
        $query = "SELECT * FROM cart WHERE cart_sess = '$sess'";
        $result = mysqli_query($connect, $query) or die(mysql_error());
        $tmpr = 0;
        if(mysqli_num_rows($result)>=1)
        {
            echo"
            <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
                <input type='hidden' name='sid' value='901248156' />
                <input type='hidden' name='mode' value='2CO' /> ";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    extract($row);
                    echo"<input type='hidden' name='li_{$tmpr}_type' value='product' />
                        <input type='hidden' name='li_{$tmpr}_name' value='$cart_item_name' />
                        <input type='hidden' name='li_{$tmpr}_quantity' value='$cart_quantity' />
                        <input type='hidden' name='li_{$tmpr}_price' value='$cart_price' />";
                        $tmpr  = $tmpr+1;
                    
            }
            echo"
                <input type='hidden' name='card_holder_name' value='Checkout Shopper' />
                <input type='hidden' name='street_address' value='123 Test Address' />
                <input type='hidden' name='street_address2' value='Suite 200' />
                <input type='hidden' name='city' value='Columbus' />
                <input type='hidden' name='state' value='OH' />
                <input type='hidden' name='zip' value='43228' />
                <input type='hidden' name='country' value='USA' />
                <input type='hidden' name='email' value='example@2co.com' />
                <input type='hidden' name='phone' value='614-921-2450' />        
                If you have finished Shopping 
                <input name='submit' type='submit' value='Checkout' /> to supply 
                ShippingInformation

                </form>";
            $query = "DELETE FROM cart WHERE cart_sess = '$sess'";
            if($query !="")
            {
                $results = mysqli_query($connect, $query) or die(mysql_error());
            }
            echo " Or You can do more purchasing by selecting items from the menu ";
        }
        else
        {
            echo "You can do purchasing by selecting items from the menu on left side";
        }
    }
    else
    {
        ?>
            <html>
                <head>
                </head>
                <body>
                    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Not Logged in yet</h1>
                    <p>
                    You are currently not logged into our system.<br>
                    You can do purchasing only if you are logged in.<br>
                    If you have already registered,
                    <a href="signin.php">click here</a> to login, or if would like to create an
                    account, <a href="validatesignup.php">click here</a> to register.
                    </p>
                    </div>
                    </div>
                    </div>
                </body>
            </html>
        <?php
    }
?>