<?php
passthru('git pull origin master -v');
passthru('git submodule init');
passthru('git submodule update --recursive');
?>
