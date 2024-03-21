<?php

$extensionName = 'spartan';

if (extension_loaded($extensionName)) {
    echo "Extension '$extensionName' is loaded\n";
} else {
    echo "Extension '$extensionName' is not loaded\n";
}

runSpartan(file_get_contents('test.spartan'));
