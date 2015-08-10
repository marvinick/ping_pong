<?php

    class PingPongGenerator
    {
        function playPingPong($input_number)
        {
            if ($input_number % 3) {
                return ("1, 2, ping");
            } else {
                return ("this is not 3");
            }

        }
    }

?>
