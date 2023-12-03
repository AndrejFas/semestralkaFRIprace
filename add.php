
<?php

$errors = array('nazov' => '', 'veduci' => '', 'popis' => '');

    if (isset($_POST['submit'])){
        if (empty($_POST['nazov'])){
            $errors['nazov'] = 'Nazov nebol zadany<br />';
        }
        if (empty($_POST['veduci'])){
            $errors['veduci'] = 'Veduci nebol zadany<br />';
        }
        if (empty($_POST['popis'])){
            $errors['popis'] = 'Popis nebol zadany<br />';
        }
    }

?>

<!DOCTYPE html>
<html lang="sk">

<?php include('templates/header.php') ?>
<div class="card-body card mx-auto" style="display: block; width: 50rem">
    <section class="container">
        <h4 class="center">Pridaj pracu</h4>
        <form action="" method="POST" class="white">
            <div>
                <div><label>Nazov</label></div>
                <label>
                    <input type="text" name="nazov" style="width: 46rem">
                </label>
                <div class="errorText"><?php echo $errors['nazov']; ?></div>
            </div>
            <div>
                <div><label>Veduci</label></div>
                <label>
                    <input type="text" name="veduci" style="width: 46rem">
                </label>
                <div class="errorText"><?php echo $errors['veduci']; ?></div>
            </div>
            <div>
                <div><label>Tutor</label></div>
                <label>
                    <input type="text" name="tutor" style="width: 46rem">
                </label>
            </div>
            <div>
                <div><label>Popis</label></div>
                <label>
                    <textarea rows="5" name="popis" style="width: 46rem;row"></textarea>
                </label>
                <div class="errorText"><?php echo $errors['popis']; ?></div>
            </div>

            <label class="text">Katedra</label>
            <div class="input-group">
                <label for="katedra"></label>
                <select class="form-select" id="katedra">
                    <option value="1">KIS</option>
                    <option value="2">KI</option>
                    <option value="3">KMME</option>
                    <option value="4">KMNT</option>
                    <option value="5">KMMOA</option>
                    <option value="6">KST</option>
                    <option value="7">KTK</option>
                </select>
            </div>

            <label class="text">Stupen</label>
            <div class="input-group">
                <label for="stupen"></label>
                <select class="form-select" id="stupen">
                    <option value="1">Bakalár</option>
                    <option value="2">Inžinier</option>
                </select>
            </div>

            <label class="text">Odbor</label>
            <div class="input-group">
                <label for="odbor"></label>
                <select class="form-select" id="odbor">
                    <option value="1">MAN</option>
                    <option value="2">INF</option>
                    <option value="3">IaST</option>
                    <option value="4">IaR</option>
                    <option value="5">PI</option>
                </select>
            </div>

            <label class="text">Jazyk</label>
            <div class="input-group">
                <label for="jazyk"></label>
                <select class="form-select" id="jazyk">
                    <option selected>...</option>
                    <option value="1">sk</option>
                    <option value="2">en</option>
                </select>
            </div>



            <div>
                <input type="submit" name="submit" value="Pridaj" style="align-content: center">
            </div>

        </form>
    </section>
</div>

<?php include('templates/footer.php') ?>
</html>