<?php 
$akun = [["username"=>"Azka Dwi Fadhillah", "password"=>"siom1234"]];
if (isset($_POST["submit"])) {
	$cekemail = FALSE;
	foreach ($akun as $account) {
		if ($account["username"] == $_POST["username"]) {
			if ($account['password'] == $_POST['password']) {
				echo 'Login berhasil!<br><br>';
			} else {
				echo 'Password salah<br><br>';
			}
			$cekemail = TRUE;
			break;
		}
	}
	if ($cekemail === FALSE) {
		echo "Username salah<br><br>";
	}
}
?>