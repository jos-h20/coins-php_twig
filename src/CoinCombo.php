<?php
    class CoinCombo
    {

        function makeChange($input_amount)
        {
            $coinage = [0, 0, 0, 0];

            $quarters = floor($input_amount / 25);
            $coinage[0] = $quarters;
            $remainder_quarters = ($input_amount % 25);

            $dimes = floor($remainder_quarters / 10);
            $coinage[1] = $dimes;
            $remainder_dimes = ($remainder_quarters % 10);

            $nickles = floor($remainder_dimes / 5);
            $coinage[2] = $nickles;
            $remainder_nickels = ($remainder_dimes % 5);

            $pennies = $remainder_nickels;
            $coinage[3] = $pennies;

            return $coinage;
        }

    }
?>
