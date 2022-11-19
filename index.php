<!DOCTYPE html>
<html>
<style media="screen">
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg1.png);
    background-size: cover;
}

.col{
    padding: 12px;
    border-radius: 5px;
}

.col input
{
    float: right;
    border-radius: 5px;
    border-color: ghostwhite;
}


.box{
    position: absolute;
    font-family: 'Courier New', Courier, monospace;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(220, 220, 220, 0.6);
    box-sizing: border-box;
    border-radius: 10px;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
}

h2{
    text-align: center;
    font-style: oblique;
    font-family: 'Courier New', Courier, monospace;
}
.button input{
    display:block;
    margin: auto;
    margin-top: 40px;
    border-radius: 5px;
    padding: 10px;
    font-size: 18px;
    font-family: 'Courier New', Courier, monospace;
    border-color: rgb(183, 135, 148);
    background: rgb(213, 171, 182);
    cursor:pointer;
}

.button input:hover {
    transform: scale(1.2);
    transition: 0.5s;
}

input:focus {
  background-color: rgb(209, 225, 246);
}

</style>

<body>

    <form action="config.php">
        <div class="box">
            <h2>Contact form</h2>
            <div class="row">
                <div class="col">
                    <label for="">Your name: </label>
                    <input type="text" name="name"  autocomplete="off" required> 
                </div>


            </div>

            <div class="row">
                <div class="col">
                    <label for="">Your e-mail: </label>
                    <input type="email" name="email"  autocomplete="off" required>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="">Password: </label>
                     <input type="password" name="password"  autocomplete="off" required>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="">Age: </label>
                    <input type="number" name="age"  autocomplete="off" required>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="">Phone: </label>
                    <input type="tel" name="phone"  autocomplete="off" required>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="">Gender: </label>
                    <input type="text" name="gender"  autocomplete="off" required>
                </div>

            </div>
            <div class="row">
                <div class="button">
                    <input type="submit" value="Submit form">
                </div>
            </div>
        </div>
    </form>


</body>
</html>