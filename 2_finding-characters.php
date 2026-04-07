<?php
$text = 'Home sweet home';
?>

<p>
  <b>First match (case-sensitive):</b>
  <?= strpos($text, 'ho')?> (11)<br> 
  <b>First match (not case-sensitive):</b>
  <?= stripos($text, 'me', 5)?> (13)<br>
  <b>Last match (case-sensitive):마지막 일치</b>
  <?= strrpos($text, 'Ho')?> (0)<br>
  <b>Last match (not case-sensitive): 마지막 단어(대소문자 무시)</b>
  <?= strripos($text, 'Ho')?> (11)<br>
  <b>Text after first match (case-sensitive): 첫 일치할수 있는 물자열 후에 일치하는 문자열</b>
  <?= strstr($text, 'ho')?> (home)<br>
  <b>Text after first match (not case-sensitive): 일치하고 텍스트 출력(대소문자 상관x)</b>
  <?= stristr($text, 'ho')?> (Home sweet home)<br>
  <b>Text between from position 1 to length:</b>
  <?= substr($text, 5, 5)?> (sweet)<br>
</p>
