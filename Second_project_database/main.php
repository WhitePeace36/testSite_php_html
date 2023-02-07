<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
</head>

<body>
    <center>
        <h1> Formular</h1>
    </center>
    <form action="code.php" method="post">
        <div class="container">
            <label>Firstname : </label>
            <input type="text" placeholder="Firstname" name="firstname" required>
            <label>Lastname : </label>
            <input type="text" placeholder="Lastname" name="lastname" required>
            <label>Birthday : </label>
            <input type="date" name="birthday" required>
            <label>Email : </label>
            <input type="email" placeholder="bsp@domain.com" name="email" required>
            <label>Password : </label>
            <input type="password" placeholder="Password" name="password" required>
            <label>Repeat password : </label>
            <input type="password" placeholder="Password" name="pw2" required>
        </div>
        <div class="container">
            <label>Street : </label>
            <input type="text" placeholder="Street" name="street" required>
            <div class="container2">
                <div class="half-container">
                    <label>Housenumber : </label>
                    <br>
                    <input type="half" placeholder="Housenumber" name="housenumber" required>
                </div>
                <div class="half-container">
                    <label>PLZ : </label>
                    <br>
                    <input type="half" placeholder="e.g. 5020" name="plz" required pattern="[0-9]{5}">
                </div>
                <div class="half-container">
                    <label>City : </label>
                    <br>
                    <input type="half" placeholder="city" name="city" required>
                </div>
                <div class="half-container">
                    <label>State : </label>
                    <br>
                    <select name="state" required>
                        <option value="" selected>Please choose</option>
                        <option value="Burgenland">Burgenland</option>
                        <option value="Kärnten">Kärnten</option>
                        <option value="Niederösterreich">Niederösterreich</option>
                        <option value="Salzburg">Salzburg</option>
                        <option value="Steiermark">Steiermark</option>
                        <option value="Tirol">Tirol</option>
                        <option value="Oberösterreich">Oberösterreich</option>
                        <option value="Vorarlberg">vorarlberg</option>
                        <option value="Wien">Wien</option>
                    </select>
                </div>
            </div>
            <label>Telephone : </label>
            <input type="text" placeholder="+430xxxxxxx" name="telephone">
        </div>
        <div class="container">
            <label>Upload file :</label>
            <input type="file" name="file">
        </div>
        <button type="submit">Login</button>
        <button type="button" class="cancelbtn" onclick="window.location.href='index.html'"> Cancel</button>
        
    </form>
</body>

</html>