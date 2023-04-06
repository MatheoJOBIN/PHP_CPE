<form action="./?action=form" method="POST">
    <fieldset>
        <legend>
            Location de véhicule
        </legend>
        <label for="immat">Immatriculation </label>
        <input type="text" id="immat" name="immat" value="<?php echo $immat ?>">
        <span class="error">* <?php echo $immatErr;?>
        <br> <br>
        <label for="type">Type </label>
        <select id="type" name="type" value="select">
            <option value="">-- Choisissez un type --</option>
            <option value="Touristique" <?php if($option == 'Touristique') echo 'selected'; ?>>Touristique</option>
            <option value="Pro" <?php if($option == 'Pro') echo 'selected'; ?>>Professionnel</option>
            <option value="Escale" <?php if($option == 'Escale') echo 'selected'; ?>>Escale</option>
        </select>
        <br> <br>
        <label>Energie</label>
        <ul>
            <li>Essence<input type="checkbox" name="Essence" <?php if($Essence) echo 'checked'; ?>></li>
            <li>Diesel<input type="checkbox" name="Diesel" <?php if($Diesel) echo 'checked'; ?>></li>
            <li>GPL<input type="checkbox" name="GPL" <?php if($GPL) echo 'checked'; ?>></li>
            <li>Bioéthanol<input type="checkbox" name="Bioéthanol" <?php if($Bio) echo 'checked'; ?>></li>
        </ul>
        <br> <br>
        <label for="km">Kilométrage</label>
        <input type="text" id="km" name="km" value="<?php echo $km ?>">
        <span class="error">* <?php echo $kmErr;?>
        <br> <br>
        <label for="nbJ">Nombre de jours</label>
        <input class="quantity" type="number" min="1" id="nbJ" name="nbJ" value="<?php echo $nbJ ?>">
        <span class="error">* <?php echo $nbJErr;?>
        <br> <br>
        <label for="assurance">Assurance</label>
        <input id="assurance" type="checkbox" name="Assu" <?php if($Assu) echo 'checked'; ?>>
        <br> <br>
        <input type="submit" value="Réinitialiser">
        <input type="submit" value="Valider">
    </fieldset>
</form>