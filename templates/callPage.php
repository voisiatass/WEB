<?php include 'inc/header.php';?>

<h2> Įveskite savo numerį ir mes su jumis susisieksime</h2>

<form method="post" action="call.php">
    <div class="row">
        <div class="col-md-6 form-group">

            <p>Telefono numeris:</p>

            <input class="margin-bottom" name="phone" type="tel" pattern="+[0-9]{11, 13}" required>
            <p>(Tinka tik mobilaus telefono numeris ir reikia įvesti šalies kodą(+370))</p>
            <input type="submit" class="btn btn-secondary" value="submit" name="submit">

        </div>
    </div>
</form>





<?php include 'inc/footer.php';?>
