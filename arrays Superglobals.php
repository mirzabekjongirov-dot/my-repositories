<?php
function test(){
  $GLOBALS["a"]="working";

}
test();

function result(){
    echo $GLOBALS["a"];

}

result();
?>