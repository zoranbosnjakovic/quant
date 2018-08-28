<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <h2>Register</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="text" name="first_name" placeholder="NAME" required=""><br /><br />
            <input type="email" name="email" placeholder="EMAIL" required=""><br /><br />
            <input type="password" name="password" placeholder="PASSWORD" required=""><br /><br />
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required=""><br /><br />
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="REGISTER">
            </div>
        </form>
    </div>
</div>