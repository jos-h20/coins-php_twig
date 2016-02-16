<?php

    require_once "src/CoinCombo.php";

    class CoinComboTest extends PHPUnit_Framework_TestCase
    {

        function test_CoinCombo_onePenny()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 1;

            //Act: runs the actual method that we are testing.
            $result = $test_CoinCombo->makeChange($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals([1, 0, 0, 0], $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
