<?php

if (extension_loaded('spartan')) {
    echo "Extension '$extensionName' is loaded\n";
} else {
    echo "Extension '$extensionName' is not loaded\n";
}

runSpartan(file_get_contents('test.spartan'));
