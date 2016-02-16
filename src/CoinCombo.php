<?php
    class CoinCombo
    {

        function makeChange($input_amount)
        {
            $coinage = [0, 0, 0, 0];

            $dimes = floor($input_amount / 10);
            $coinage[1] = $dimes;
            $remainder_dimes = ($input_amount % 10);

            $nickles = floor($remainder_dimes / 5);
            $coinage[2] = $nickles;
            $remainder_nickels = ($input_amount % 5);

            $pennies = $remainder_nickels;
            $coinage[3] = $pennies;

            return $coinage;
        }

    }
?>
