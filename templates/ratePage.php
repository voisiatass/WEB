<?php include 'inc/header.php';?>

<h2 class="text-center margin-bottom">Ivęrtinkite mus</h2>
        <form method="post" action="rate.php">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Komunikabilumas</label><br>
                    <input type="radio" name="Komunikabilumas" value="1" required>1 <br>
                    <input type="radio" name="Komunikabilumas" value="2">2 <br>
                    <input type="radio" name="Komunikabilumas" value="3">3 <br>
                    <input type="radio" name="Komunikabilumas" value="4">4 <br>
                    <input type="radio" name="Komunikabilumas" value="5">5
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Ryšio kokybė</label><br>
                    <input type="radio" name="kokybe" value="1" required>1<br>
                    <input type="radio" name="kokybe" value="2">2<br>
                    <input type="radio" name="kokybe" value="3">3<br>
                    <input type="radio" name="kokybe" value="4">4<br>
                    <input type="radio" name="kokybe" value="5">5
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Pagalba</label><br>
                    <input type="radio" name="pagalba" value="1" required>1<br>
                    <input type="radio" name="pagalba" value="2">2<br>
                    <input type="radio" name="pagalba" value="3">3<br>
                    <input type="radio" name="pagalba" value="4">4<br>
                    <input type="radio" name="pagalba" value="5">5
                </div>
                <input type="submit" class="btn btn-secondary" value="submit" name="submit">
            </div>
        </form>



<?php include 'inc/footer.php';?>
