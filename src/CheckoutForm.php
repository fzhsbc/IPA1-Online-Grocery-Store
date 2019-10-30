<?php
$str = $_GET['strvar'];
$totalcost = 0;
$pieces = explode("!!", $str);
for ($i = 0; $i < sizeof($pieces); $i++) {
    $i++;
    $totalcost += (Float) $pieces[$i];
}  //
print "<div style='float: left;'>";
print "<font color='#000000' size='4'><b>Total Cost:$$totalcost</b></font>";
print "<div style=' width: 240px; height: 340px; overflow-y:auto; overflow-x:auto;'>";
print "<table border='0' rules='rows' >";
print "<tr height='30'>\n";
print "<td width='170'><font color='#eeeeee'><b>Name</b></font></td>";
print "<td width='70'><font color='#eeeeee'><b>Cost</b></font></td>";
print "</tr>";
for ($i = 0; $i < sizeof($pieces); $i++) {
    print "<tr height='40'>\n";
    print "<td><font id='productname' color='#eeeeee'>$pieces[$i]</font></td>";
    $i++;
    print "<td><font id='unitprice' color='#eeeeee'>$pieces[$i]</font></td>";
    print "</tr>";
}
print "</table>";
print "</div>";
print "</div>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .firstcol{
                height: 40px;
                color: #eeeeee;
            }
            .inputinfo{
                width: 210px;
                height: 20px;
                padding-left: 2px;
                border: 0px; background-color:#eeeeee; color: #111111; font-family: verdana;
            }
        </style>
        <style type="text/css">
            td{font-family: verdana;}
            .button {
                text-align: center;
                text-decoration: none;
                font: 16px/100% 'Microsoft yahei',Arial, Helvetica, sans-serif;
                padding: .1em 1em .5em;
                text-shadow: 0 1px 1px #100000;
                -webkit-box-shadow: 0 1px 2px #100000;
                -moz-box-shadow: 0 1px 2px #100000;
                box-shadow: 0 1px 2px #100000;
            }
            .button:hover {
                text-decoration: none;
            }
            .button:active {
                position: relative;
                top: 1px;
            }
            .white {
                color: #ffffff;
                border: solid 0px #b7b7b7;
                background: #ff6600;
            }
            .white:hover {
                background: #ff9734;
            }
            .white:active {
                color: #999;
            }
        </style>
    </head>
    <body>
        <div style=" float: right;">
            <br>
            <font color="#eeeeee"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Please fill in your delivery details *</b></font>
            <br>
            <form id="the_form" name="the_form" action="SendEmail.php" method="post">
                <table>
                    <tr>
                        <td class="firstcol" align="right">
                            Name:<span style="color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="fullname" name="fullname">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            Address:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="address" name="address">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            Suburb:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="suburb" name="suburb">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            State:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="state" name="state">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            Postcode:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="postcode" name="postcode">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            Country:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="country" name="country">
                        </td>
                    </tr>
                    <tr>
                        <td class="firstcol" align="right">
                            Email:<span style=" color: red;">*</span>&nbsp;
                        </td>
                        <td>
                            <input class="inputinfo" type="text" id="email" name="email">
                        </td>
                    </tr>
                    <tr align="center" style=" height: 25px;">
                        <td colspan="2" style=" vertical-align: bottom;">
                            <input class="button white" type="submit" value="Purchase" onclick="Validate_form()">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
<script type="text/javascript">
    function func(e) {
        e.preventDefault();
    }
    function Validate_form() {
        if (Hasblanks()) {
            alert("Form not completed！");
            document.querySelector('#the_form').addEventListener('submit', func, false);
            return false;
        }
        var posecode_data = document.getElementById("postcode");
        if (!CheckPostcode(posecode_data.value, "0123456789")) {
            alert("invalid postcode.");
            document.querySelector('#the_form').addEventListener('submit', func, false);
            return false;
        }
        var email_data = document.getElementById("email");
        if (Isemail(email_data.value)) {
            document.querySelector('#the_form').removeEventListener('submit', func, false);
            return true;
        } else {
            alert("Invalid email address.");

            document.querySelector('#the_form').addEventListener('submit', func, false);

            return false;
        }
    }
    //check if email is in valid form
    function Hasblanks() {
        var compulsory_fields = new Array("fullname", "address", "suburb", "state", "postcode", "country", "email");
        for (i = 0; i < compulsory_fields.length; i++) {
            var form_field = document.getElementById(compulsory_fields[i]);
            if (form_field.value === "") {
                return true;
            }
        }
        return false;
    }
    //check all fields filled
    function CheckPostcode(postcode, validchars) {
        var postcodeLength = postcode.length;
        var validcharsLength = validchars.length;
        var cValidChar;
        var cPostcode;
        var result;
        for (i = 0; i < postcodeLength; i++) {
            cPostcode = postcode.charAt(i);
            result = false;
            for (j = 0; j < validcharsLength; j++) {
                cValidChar = validchars.charAt(j);
                if (cValidChar === cPostcode) {
                    result = true;
                    break;
                }
            }
            if (result === false)
                return false;
        }
        return true;
    }
    function Isemail(mail) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (filter.test(mail)) {
            return true;
        } else {
            return false;
        }
    }
    //check if the email address is in correct form
</script>
