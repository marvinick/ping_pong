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
            $results = "";
            $count = 1;
            while ($count <= $input_number) {
                if ($count % 3 == 0 && $count % 5 == 0) {
                    $results .= ", ping pong";
                    // $results = $result . "ping";
                } elseif ($count % 5 == 0) {
                    $results .= ", pong";
                } elseif ($count % 3 == 0) {
                    $results .= ", ping";
                }  else {
                      $results .=  ", " . $count;
                  }
                 ++$count;
                }
                $results = substr($results, 2);
                return $results;
            }
        }

?>
