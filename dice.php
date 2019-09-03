<?php
// namespace dice;

function roll ($sides = 6 ) {
    return mt_rand(1,$sides);
}

// echo roll(8);