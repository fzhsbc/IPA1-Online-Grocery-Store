<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $emailaddress = $_REQUEST['email'];
        $subject = "[Online Grocery Store] Confirmation Message";
        $fullname = $_REQUEST['fullname'];
        $address = $_REQUEST['address'];
        $suburb = $_REQUEST['suburb'];
        $state = $_REQUEST['state'];
        $postcode = $_REQUEST['postcode'];
        $country = $_REQUEST['country'];
        $date = date("d-m-Y H:i:s");
        $message = "DEAR $fullname ，\n\nThank you for shopping!\nThe products you purchased will be delivered to: \n$fullname, $address, $suburb, $state, $postcode, $country\n\nPurchase date: $date \n\nRegards\nZhenFang\nStudent ID:12991701";
        $from = "12991701@student.uts.edu.au";
        $headers = "From $from";
        mail($emailaddress, $subject, $message,$headers);
        print "<font color='#000000' size='5'><b>Purchase Succeeded!</b></font>";
        print "<br><br><br>";
        print "<font color='#eeeeee' size='4'><b>A confirmation email has been sent to the email address:</b></font>";
        print "<br><br>";
        print "<font color='#eeeeee' size='4'><b>$emailaddress</b></font>";
        ?>
    </body>
</html>
