<?php

$currentUser = $this->data;
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Добрый день, <?php echo $currentUser['name'] ?></h1>
        </div>
    </div>
</div>