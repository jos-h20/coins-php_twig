<?php
    class CoinCombo
    {

        function makeChange($input_amount)
        {
            $coinage = [0,0,0,0];

            $coinage[3] = $input_amount;

            return $coinage;
        }

    }
?>
