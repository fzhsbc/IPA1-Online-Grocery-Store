<!-- show instock according to item in shopping cart -->
<style type="text/css">
    td{font-family: verdana;}
    .button {
        text-align: center;
        text-decoration: none;
        font: 12px/100% 'Microsoft yahei',Arial, Helvetica, sans-serif;
        padding: .2em 1em .40em;
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
        color: #606000;
        border: solid 0px #b7b7b7;
        background: #fff;
    }
    .white:hover {
        background: #ededed;
    }
    .white:active {
        color: #999;
    }
</style>
<?php
$connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
//connection to database
$product_id = $_REQUEST['product_id'];
$query_string = "select * from products where (product_id like '%$product_id%')";
$result = mysqli_query($connection, $query_string);
$num_rows = mysqli_num_rows($result);
//associative array
if ($num_rows > 0) {
    print "<table border='0' rules='rows' >";
    print "<tr height='30'>\n";
    print "<td width='170'><font color='#111111'><b>Name</b></font></td>";
    print "<td width='70'><font color='#111111'><b>U/P</b></font></td>";
    print "<td width='110'><font color='#111111'><b>U/Qty</b></font></td>";
    print "<td width='70'><font color='#111111'><b>Stock</b></font></td>";
    print "<td width='60'><font color='#111111'><b>Qty</b></font></td>";
    print "</tr>";
    $counter = 0;
    while ($a_row = mysqli_fetch_assoc($result)) {
        $counter++;
        print "<tr height='40'>\n";
        print "<td><font id='$a_row[product_id]productname' color='#111111'>$a_row[product_name]</font></td>";
        print "<td><font id='$a_row[product_id]unitprice' color='#111111'>$a_row[unit_price]</font></td>";
        print "<td><font id='$a_row[product_id]unitquantity' color='#111111'>$a_row[unit_quantity]</font></td>";
        print "<td><font id='$a_row[product_id]instock' color='#111111'>$a_row[in_stock]</font></td>";
        print "<td><input id='$a_row[product_id]input' type='text' value='1' style='width:40px; border: 0px; background-color:#ffffff; color: #111111; font-family: verdana;'></td>";
        print "<td><a id='$a_row[product_id]' href='#' class='button white' onclick='AddProduct(this)'>Add</a></td>";
        print "</tr>";
        //change top right instock
        echo "<script type='text/javascript'>ChangeTRInstock('$a_row[product_id]');</script>";
    }
    print "</table>";
}
mysqli_close($connection);
?>
<!-- chagne top right instock according to item in shopping cart -->
<script type="text/javascript"> //define functions
    function ChangeTRInstock(id) {
        var t1 = 3;
        t1 = t1 + 2;
        alert(id);
        if (parent.document.getElementById(id + "CartInput")) {//alrady in shopping cart
            var cartInput = parent.document.getElementById(id + "CartInput").innerHTML;
            //alert(cartInput);
            if (document.getElementById(id + "instock")) {//will display in top right
                var cartInput = document.getElementById("1002" + "instock").innerHTML;
                //alert(cartInput);
                var itemp = parseInt(cartInput) - parseInt(cartInput);
                document.getElementById(id + "instock").innerHTML = itemp.toString();
            }}}
    function AddProduct(obj) {
        if (validate_quantity(obj) === false) {
            return false;
        }
        var productname = document.getElementById(obj.id + "productname").innerHTML;
        var unitprice = document.getElementById(obj.id + "unitprice").innerHTML;
        var unitquantity = document.getElementById(obj.id + "unitquantity").innerHTML;
        var instock = document.getElementById(obj.id + "instock").innerHTML;
        //##########  calculate price  ##########
        var input = document.getElementById(obj.id + "input").value;
        var price = parseFloat(input) * parseFloat(unitprice);
        price = price.toFixed(2);
        parent.document.getElementById("IdCheckout").style.visibility = "visible";
        var cartTotalItem = document.getElementById(obj.id + "instock").innerHTML;
        var iInput = parseInt(input);
        var itemp = parseInt(cartTotalItem) - iInput;
        document.getElementById(obj.id + "instock").innerHTML = itemp.toString();
        var cartTotalItem = parent.document.getElementById("IdTotalItem").innerHTML;
        var itemp = parseInt(cartTotalItem) + parseInt(input);
        parent.document.getElementById("IdTotalItem").innerHTML = itemp.toString();
        var cartTotalValue = parent.document.getElementById("IdTotalValue").innerHTML;
        var itemp = parseFloat(cartTotalValue) + parseFloat(price);
        itemp = itemp.toFixed(2);
        parent.document.getElementById("IdTotalValue").innerHTML = itemp.toString();
        if (parent.document.getElementById(obj.id + "CartInput")) {
            var cartInput = parent.document.getElementById(obj.id + "CartInput").innerHTML;
            var itemp = parseInt(cartInput) + parseInt(input);
            parent.document.getElementById(obj.id + "CartInput").innerHTML = itemp.toString();
            var cartPrice = parent.document.getElementById(obj.id + "CartPrice").innerHTML;
            var itemp = parseFloat(cartPrice) + parseFloat(price);
            itemp = itemp.toFixed(2);
            parent.document.getElementById(obj.id + "CartPrice").innerHTML = itemp.toString();
        } else {
            var tab = parent.document.getElementById("IdShoppingCart"); //get table
            var num = parent.document.getElementById("IdShoppingCart").rows.length;//current rows num of table
            var rownum = num;
            tab.insertRow(rownum);
            for (var i = 0; i < 5; i++)
            {
                tab.rows[rownum].insertCell(i);//insert cell
                tab.rows[rownum].setAttribute('height', '30');
                if (i === 0) {
                    tab.rows[rownum].cells[i].setAttribute('id', 'flag');
                    tab.rows[rownum].cells[i].setAttribute('width', '170');
                    tab.rows[rownum].cells[i].innerHTML = "<font color='#222222'>" + productname + "</font>";
                } else if (i === 1) {
                    tab.rows[rownum].cells[i].setAttribute('width', '70');
                    tab.rows[rownum].cells[i].innerHTML = "<font color='#222222'>" + unitprice + "</font>";
                } else if (i === 2) {
                    tab.rows[rownum].cells[i].setAttribute('width', '120');
                    tab.rows[rownum].cells[i].innerHTML = "<font color='#222222'>" + unitquantity + "</font>";
                } else if (i === 3) {
                    tab.rows[rownum].cells[i].setAttribute('width', '50');
                    tab.rows[rownum].cells[i].innerHTML = "<font id='" + obj.id + "CartInput" + "' color='#222222'>" + input + "</font>";
                } else {
                    tab.rows[rownum].cells[i].setAttribute('width', '70');
                    tab.rows[rownum].cells[i].innerHTML = "<font id='" + obj.id + "CartPrice" + "' color='#222222'>" + price + "</font>";
                }
            }
            tab.rows[rownum].insertCell(i);
            tab.rows[rownum].cells[i].innerHTML = "<a id='" + obj.id + "' href='#' class='buttonSmall whiteSmall' onclick='DelItem(this)'>Clear</a>";
        }
    }
    function validate_quantity(obj) {
        var input = document.getElementById(obj.id + "input").value;
        if (input === "") {
            alert("Please input quantity!");
            return false;
        }
        i = 0;
        //##########  Integer Only  ##########
        while (true) {
            if (input.charAt(i) === '0' || input.charAt(i) === '1' || input.charAt(i) === '2' || input.charAt(i) === '3'
                    || input.charAt(i) === '4' || input.charAt(i) === '5' || input.charAt(i) === '6'
                    || input.charAt(i) === '7' || input.charAt(i) === '8' || input.charAt(i) === '9') {
                i++;
            } else {
                break;
            }
        }
        if (input.length !== i) {
            alert("Integer Only!");
            document.getElementById(obj.id + "input").value = "";
            return false;
        }
        //##########  Check stock  ##########
        var instock = document.getElementById(obj.id + "instock").innerHTML;
        var iInput = parseInt(input);
        var iInstock = parseInt(instock);
        if (iInput === 0) {
            alert("The quantity cannot be zero!\nPlease input again!");
            document.getElementById(obj.id + "input").value = "";
            return false;
        }
        if (iInput > iInstock) {
            alert("No enough inventory!\nPlease input quantity again!");
            document.getElementById(obj.id + "input").value = "";
            return false;
        }
        return true;
    }
</script>
