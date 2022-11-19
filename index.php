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
if(array_key_exists('button1', $_POST)) {
    button();
}
function button(){
    echo "yopp";
    
    $myfile = fopen("file.txt", "w");
    fwrite($myfile, $_POST['name']);
    fclose($myfile);
    
    

}


?>
<form method="post">
    <input type="submit" name="button" class="button" value="Submit">  
</form>

</body>
</html>