<form action="./?action=form" method="POST">
    <fieldset>
        <legend>
            Location de véhicule
        </legend>
        <label for="immat">Immatriculation </label>
        <input type="text" id="immat" name="immat" value="<?php echo $immat ?>">
        <br> <br>
        <label for="type">Type </label>
        <select id="type" name="type">
            <option value="">-- Choisissez un type --</option>
            <option value="touristique">Touristique</option>
            <option value="pro">Professionnel</option>
            <option value="escale">Escale</option>
        </select>
        <br> <br>
        <label>Energie</label>
        <ul>
            <li>Essence<input type="checkbox" name="Essence"></li>
            <li>Diesel<input type="checkbox" name="Diesel"></li>
            <li>GPL<input type="checkbox" name="GPL"></li>
            <li>Bioéthanol<input type="checkbox" name="Bioéthanol"></li>
        </ul>
        <br> <br>
        <label for="km">Kilométrage</label>
        <input type="text" id="km" name="km">
        <br> <br>
        <label for="nbJ">Nombre de jours</label>
        <input class="quantity" type="number" min="1" id="nbJ" name="nbJ">
        <br> <br>
        <label for="assurance">Assurance</label>
        <input id="assurance" type="checkbox" name="assurance">
        <br> <br>
        <input type="submit" value="Réinitialiser">
        <input type="submit" value="Valider">
    </fieldset>
</form>