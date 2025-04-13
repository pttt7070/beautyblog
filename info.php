<form action="" method="post">
    Họ tên: <input type="text" name="fullname" value="">
    <button type="submit">Gửi</button>
</form>
<?php if(isset($_POST["fullname"])) { echo $_POST["fullname"]; } ?>