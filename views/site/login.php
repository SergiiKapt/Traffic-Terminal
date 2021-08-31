<div class="container">
<div class="row">
<div class="col-md-3 col-md-offset-5">
<h1>Аутентификация</h1>

<?php
$message = $this->data;
$showForm = true;
?>
    <?php
if(($message)){
    if ($message['status'] == 'disable') {
        $showForm = false;
        echo "<p class='bg-danger'>{$message['message']}</p>";
    } else {
        $class = ($message['status'] == 'error') ? 'bg-danger' : 'bg-success';
        echo "<p class='$class'>{$message['message']}</p>";
    }
}
if($showForm) {
    ?>
    <form action='<?php echo URL ?>/site/signin ' method="POST">
        <div class="form-group">
            <label for="login">Имя пользователя:</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="form-group">
            <label for="pwd">Пароль:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Login</button>
</div>
</div>
</div>
</form>
<?php
}
//\core\Session::destroy()
?>