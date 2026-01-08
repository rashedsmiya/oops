<?php

    class Father {
       public const mark = 101;
        function disp() {
            echo self::mark;
        }

    }

echo Father::mark;
