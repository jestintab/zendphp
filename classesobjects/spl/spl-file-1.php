<?php
$info = new SplFileInfo('abc.txt');
echo "<pre>";
print_r($info);
echo "</pre>";


if ($info->isFile()) {
    echo $info->getRealPath() . "<br/>";
    echo $info->getATime() . "<br/>";
    echo $info->getOwner() . "<br/>";
    echo $info->getPerms() . "<br/>";
}
?>
