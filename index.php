<?php
    require "example.php";

    $rc=new ReflectionClass(ab::class);
    var_dump($rc->getMethods(ReflectionProperty::IS_PRIVATE));
?>