<!DOCTYPE html>
<html>
<body>

    <form action="config.php">
        <div class="input-box">
                <label for="">Your name: </label>
                <input type="text" name="name"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Your e-mail: </label>
                <input type="email" name="email"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Age: </label>
                <input type="number" name="age"  autocomplete="off" required>
            </div>
            <div class="input-box">
                <label for="">Phone: </label>
                <input type="tel" name="phone"  autocomplete="off" required>
            </div>
        <input type="submit" value="Save">  
    </form>

</body>
</html>