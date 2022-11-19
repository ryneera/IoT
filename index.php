<!DOCTYPE html>
<html>
<style media="screen">
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg.png);
    background-size: cover;
}

.box{
align-items: center;
top: 50%;
left: 50%;
padding: 20px;
margin: auto;
width: 40%;
border: 10px solid gainsboro;
background: gainsboro;

}
</style>

<body>

    <form action="config.php">
        <div class="box">
            <div class="input-box">
                <label for="">Your name: </label>
                <input type="text" name="name"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Your e-mail: </label>
                <input type="email" name="email"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Password: </label>
                <input type="password" name="password"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Age: </label>
                <input type="number" name="age"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Phone: </label>
                <input type="tel" name="phone"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Gender: </label>
                <input type="text" name="gender"  autocomplete="off" required>
            </div>
            <input type="submit" value="Save">  
        </div>
    </form>

</body>
</html>