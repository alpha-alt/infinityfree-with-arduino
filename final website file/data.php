<?php

setcookie('id_for_arduino',' ',time()-32323);

setcookie('username_for_arduino',' ',time()-32323);


echo"<form action='test.php' method='post'>";

echo "Ticket for another custumer :<input type ='number' name='id_of_custumer' />";

echo"<p> starting point </p>";
echo"<select name='starting'>";
echo"<option value='1'> station 1  </option>";
echo"<option value='2'> station 2  </option>";
echo"<option value='3'> station 3  </option>";
echo"<option value='4'> station 4  </option>";
echo"<option value='5'> station 5  </option>";
echo"<option value='6'> station 6  </option>";
echo"<option value='7'> station 7  </option>";
echo"<option value='8'> station 8  </option>";
echo"<option value='9'> station 9  </option>";
echo"<option value='10'> station 10  </option>";
echo"</select>";
echo"<p> destination </p>";
echo"<select name='destination'>";
echo"<option value='1'> station 1  </option>";
echo"<option value='2'> station 2  </option>";
echo"<option value='3'> station 3  </option>";
echo"<option value='4'> station 4  </option>";
echo"<option value='5'> station 5  </option>";
echo"<option value='6'> station 6  </option>";
echo"<option value='7'> station 7  </option>";
echo"<option value='8'> station 8  </option>";
echo"<option value='9'> station 9  </option>";
echo"<option value='10'> station 10  </option>";

echo"</select>";
echo"</br>";
echo"</br>";

echo"</br>";
echo"<input type='submit' name='submit' value='approve' >";
echo"</form>";



?>