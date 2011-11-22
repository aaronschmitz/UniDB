<?php
passthru('git pull');
passthru('git submodule foreach git pull origin master');
?>
