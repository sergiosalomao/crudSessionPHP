<select>
    <?php
    $anoInicio = 1989;
    while ($anoInicio <= 2000) {
        if ($anoInicio % 2 == 0) {
            echo "<option>$anoInicio</option>";
        }
        $anoInicio++;
    } ?>
</select>