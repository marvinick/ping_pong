<?php

    class PingPongGenerator
    {
        // function playPingPong($input_number)
        // {
        //     if ($input_number == 3) {
        //         return ("1, 2, ping");
        //     } elseif ($input_number == 5 ) {
        //         return ("1, 2, ping, 4, pong");
        //     } elseif ($input_number == 15 ) {
        //         return ("1, 2, ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, ping pong");
        //     } elseif ($input_number == 1 ) {
        //         return ("1");
        //     } elseif ($input_number == 2 ) {
        //         return ("1, 2");
        //     } else {
        //         return ("this number is not divisible by 3 or 5");
        //     }
        //
        // }
        function playPingPong($input_number)
        {
            $input_number = 0;
            while ($input_number > 0) {
                if ($input_number % 3) {
                    return "ping";
                } elseif ($input_number % 5) {
                    return "pong";
                } elseif ($input_number % 3 && $input_number % 5) {
                    return "ping pong";
                  else {
                      return $input_number;
                  }
                }
                ++$input_number;
            }
        }
    }

?>
