<?php
// happy ticket
error_reporting(E_ERROR);
$number = 111222333;

$digits = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY);

$ticket = 0;
//считаем сколько может быть счастливых билетиков

for($one = 999; $one > 0; $one--){
  for($two = 999; $two > 0; $two--){
    $tmp_one = preg_split('//', $one, -1, PREG_SPLIT_NO_EMPTY);
    $tmp_two = preg_split('//', $two, -1, PREG_SPLIT_NO_EMPTY);

    $sum_one = (int)$tmp_one[0] + (int)$tmp_one[1] + (int)$tmp_one[2];
    $sum_two = (int)$tmp_two[0] + (int)$tmp_two[1] + (int)$tmp_two[2];

    if($sum_one == $sum_two){
      $ticket++;
    }
  }
}

echo $ticket;
