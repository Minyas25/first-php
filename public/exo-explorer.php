<style>
section {
    display: flex;
    flex-wrap: wrap;
}
section article {
    padding: 10px;
    box-shadow: 2px 2px 5px gray;
    margin: 10px;
    transition: all 0.3s;
}
section article:hover {
    box-shadow:  5px 5px 10px gray;
}

.folder {
    background-color: rgba(255, 0, 0, 0.1);
}
</style>

<?php

$directory = "../";
$content = scandir($directory);

echo "<section>";
foreach ($content as $value) {
    $classname = "";
    if(is_dir($directory.$value)) {
        $classname = "folder";
    }
    if($value != "." && $value != "..") {
        echo "<article class=\"{$classname}\">{$value}</article>";
    }
}
echo "</section>";