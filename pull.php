<?php
passthru('git fetch origin master');
passthru('git submodule update --recursive');
?>
