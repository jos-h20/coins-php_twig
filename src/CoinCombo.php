<?php
    class CoinCombo
    {

        function makeChange($input_amount)
        {
            $coinage = [0, 0, 0, 0];

            $nickles = floor($input_amount / 5);
            $coinage[2] = $nickles;
            $remainder = ($input_amount % 5);

            $pennies = $remainder;
            $coinage[3] = $pennies;

            return $coinage;
        }

    }
?>
