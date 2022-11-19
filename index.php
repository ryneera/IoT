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
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: gainsboro;
    box-sizing: border-box;
    border-radius: 10px;
}

.box .input-box{
    position: relative;
}

.box .input-box input{
    padding: 3px;
    margin: 10px;
    border-radius: 5px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
}

.box input[type="submit"]{
    display:block;
    margin: auto;
    margin-top: 40px;
    border-radius: 5px;
    padding: 10px;
    font-size: 18px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: beige;
    cursor:pointer;
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