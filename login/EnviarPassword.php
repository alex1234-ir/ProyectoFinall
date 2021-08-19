<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['estado']['msg'])){
    $statusMsg = $sessData['estado']['msg'];
    $statusMsgType = $sessData['estado']['type'];
    unset($_SESSION['sessData']['estado']);
}
include('header.php');
?>
<style>

	*{
		background: linear-gradient(145deg, rgb(195, 240, 200), rgb(80, 155, 245));
		text-align:center;
	}
</style>


<div class="col-sm-3 r-form-1-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
<div class="col-sm-6 r-form-1-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
	<h2>USUARIO REGISTRO Y LOGIN </h2>
		<h4>Ingrese Email de su cuenta a reniciar nuevo Password</h4>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="MiCuenta.php" method="post">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="CONTINUAR">
				</div>
			</form>
		</div>
	</div>



<div class="col-sm-3 r-form-1-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;></div>



