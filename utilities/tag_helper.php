<?php

function vocabulary(string $key, bool $jq = false, bool $bold = false, bool $highlight = false) {
   $classes = '';
   $before = '';
   $after = '';

   if ($jq) {
      $before = $before . '「';
      $after = $after . '」';
   }

   if ($bold) {
      $classes = $classes . " bold";
   }

   if ($highlight) {
      $classes = $classes . " highlight";
   }

   echo "<span class=\"text $classes d-inline-block\">$before";

   echo "<span class=\"vocabulary\" key=\"$key\">"
   . "$key"
   . "</span>";

   echo "$after</span>";
}

function v(string $key, bool $jq = false) {
   vocabulary($key, $jq);
}

function vh(string $key, bool $jq = false) {
   vocabulary($key, $jq, false, true);
}

function vb(string $key, bool $jq = false) {
   vocabulary($key, $jq, true);
}

function vbh(string $key, bool $jq = false) {
   vocabulary($key, $jq, true, true);
}

function vs(string $vocabularies) {
   echo '<span class="vocabularies">';

   echo $vocabularies;

   echo '</span>';
}
