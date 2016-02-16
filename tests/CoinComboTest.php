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
            $this->assertEquals([0, 0, 0, 1], $result);
        }

        // Nickles
        function test_CoinCombo_pennyAndNickle()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 7;

            //Act
            $result = $test_CoinCombo->makeChange($input);

            //Assert
            $this->assertEquals([0, 0, 1, 2], $result);
        }

        // Dimes
        function test_CoinCombo_pennyNickleDime()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 17;

            //Act
            $result = $test_CoinCombo->makeChange($input);

            //Assert
            $this->assertEquals([0, 1, 1, 2], $result);
        }

        // Quarters
        function test_CoinCombo_pennyNickleDimeQrtrs()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $input = 42;

            //Act
            $result = $test_CoinCombo->makeChange($input);

            //Assert
            $this->assertEquals([1, 1, 1, 2], $result);
        }


    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
