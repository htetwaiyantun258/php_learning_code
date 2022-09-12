<?php

function doIt(...$var){
    echo $var[0] ?? "Helllo Jasmine";
}

doIt();