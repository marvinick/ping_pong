<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_playPingPong_numberOne()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "1";

            //Act
            $result = $test_PingPongGenerator->playPingPong($input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }

?>
