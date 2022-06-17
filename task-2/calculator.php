<?php


if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1/$add2;

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2 style="text-align: center;">Simple Calculator</h2>

    <form style="text-align: center;">

    First Number : <input type="text" name="fvalue"><br><br>
    Second Number : <input type="text" name="lvalue"><br><br>

                <td style="color:burlywood; font-family:'Times New Roman'">Select Operator</td>

                    <select name="operator" style="width: 163px">
                            <option>select one</option>
                            <option>+</option>

                            <option>-</option>

                            <option>*</option>

                            <option>/</option>

                    </select>     
                    <input type="submit" name="calculate" value="Calculate" /><br><br>

                    <h3>Output: <?php echo $res;?></h3>
           
       
 </form>

</body>
</html>

 