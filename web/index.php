<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>

    <form action="" method="get">
        <!--Input Field Name-->
        <label for="name">Vārds</label>
        <br>
        <input required type="text" id="name" name="name" placeholder="Enter text...">

        <br>
        <br>

        <!--Input Field Email-->
        <label for="email">E-Pasts</label>
        <br>
        <input required type="text" id="email" name="email" placeholder="Enter text...">

        <br>
        <br>
        <br>
        <br>
        
        <!--Radio Buttons (yes and no)-->
        <fieldset>
  <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>

  <div>
    <input type="radio" id="yes" name="radioYes" value="yes" checked />
    <label for="yes">Yes</label>
  </div>

  <div>
    <input type="radio" id="no" name="radioNo" value="no" />
    <label for="no">No</label>
  </div>
</fieldset>

        <br>
        <br>
        <br>
        <br>

        <!--Select Dropdown (Kursa Līmenis)-->
        <label for="kursa-Limenis">Izvelies kursa līmeni: </label>

<select name="kursaLimenis" id="kursa-Limenis">
    <option value="">--Lūdzu izvēlēties--</option>
    <option value="beginner">Beginner</option>
    <option value="intermediate">Intermediate</option>
    <option value="auadvanced">Advanced</option>
</select>

        <br>
        <br>
        <br>
        <br>

        <!--Submit Button-->
        <input type="submit" value="Submit">
    </form>

    <br>

    <a href="blog.php">Go to Blog Page</a>

    <script>src="js/app.js"</script>
</body>
</html>