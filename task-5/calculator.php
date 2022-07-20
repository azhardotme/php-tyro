<!DOCTYPE html>
<html>
<head>
<title>GPA Calculator</title>
</head>
<body>
    <form method="post" action="calculator.php">

    <label>GPA:</label><br>

    <input type="number" step="0.01" name="gpa"  placeholder="Enter your GPA"><br><br>

    <input type="submit" name="submit"><br><br>

    </form>

<?php

$igpa= $_POST['gpa'];

if ($igpa > 5.0) {
    echo "You have provided wrong grade point.";
    }
elseif ($igpa == 5.00) {
    echo "Letter Grade : A+" . "<br>";
    echo "Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.";
}
elseif ($igpa>=4.00) {
    echo "Letter Grade : A";
}
elseif ($igpa>=3.50) {
    echo "Letter Grade : A-";
}
elseif ($igpa>=3.00) {
    echo "Letter Grade : B";
}
elseif ($igpa>=2.00) {
    echo "Letter Grade : C";
}
elseif ($igpa>=1.00) {
    echo "Letter Grade : D";
}

elseif ($igpa<1) {
    echo "Failed" . "<br>";
    echo "Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success.";
}


?>

</body>
</html>