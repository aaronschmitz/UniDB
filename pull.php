<?php
passthru('git pull origin master -v');
passthru('git submodule init -v');
passthru('git submodule update --recursive -v');
?>
