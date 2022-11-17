<!DOCTYPE html>
<html>
<body>

Name: <input type="text" name="name" value="<?php echo $name;?>"\n>

E-mail: <input type="text" name="email" value="<?php echo $email;?>"\n>

Website: <input type="text" name="website" value="<?php echo $website;?>"\n>

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?>\n</textarea> 

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other 

</body>
</html>