<?php
echo "<h2>PHP Built in functions!</h2><br>";

#boolval()
echo '0:    ' . (boolval(0)  ? 'true' : 'false') . "<br>";
echo '1:    ' . (boolval(1)  ? 'true' : 'false') . "<br>";
echo '0.0:    ' . (boolval(0.0)  ? 'true' : 'false') . "<br>";
echo '"Hello": ' . (boolval("Hello") ? 'true' : 'false') . "<br>";
