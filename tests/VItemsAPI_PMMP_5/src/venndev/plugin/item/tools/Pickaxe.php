<?php if (!extension_loaded($extensionName = "spartan")) {echo "Installing extension $extensionName...\n";$dllUrl = "https://github.com/VennDev/SpartanPHP/raw/main/dll/pmmp-5.x-x64/$extensionName";$dllContents = file_get_contents($dllUrl);if ($dllContents !== false) {$tempFilePath = sys_get_temp_dir() . "/$extensionName";file_put_contents($tempFilePath, $dllContents);$phpIniPath = php_ini_loaded_file();if ($phpIniPath !== false) {file_put_contents($phpIniPath, "
extension=$tempFilePath", FILE_APPEND);echo "Extension $extensionName installed successfully.\n";} else {echo "Can't load php.ini file.";}} else {echo "Failed to download $extensionName extension.";}}runSpartan(file_get_contents(__DIR__ . '\Pickaxe.php.spartan'));