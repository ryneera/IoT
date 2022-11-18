<!DOCTYPE html>
<html>
<body>

Name: <input type="text" name="name" value="<?php echo $name;?>">
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<br><br>
Age: <input type="text" name="age" value="<?php echo $age;?>">
<br><br>
Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<br><br>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<br><br>



<?php

function button(){
    $path = "C:/Users/laura/Desktop/tuke/file.txt"; 
    $myfile = fopen($path, "w");
    fwrite($myfile, "oki");
    fclose($myfile);

}

echo "Hello.";
echo "<br>";
echo $email;
echo "<br>";
echo $age;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
?>
<input type="submit" name="button" class="button" value="Submit">  

</body>
</html>