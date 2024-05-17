<?php
// Please validate auto_prepend_file setting before removing this file

if (file_exists('/home/ujianori/engagement.id/wp-content/plugins/malcare-security/protect/prepend/ignitor.php')) {
	define("MCDATAPATH", '/home/ujianori/engagement.id/wp-content/mc_data/');
	define("MCCONFKEY", '73446e28f509f756bf8be384f97b95ac');
	include_once('/home/ujianori/engagement.id/wp-content/plugins/malcare-security/protect/prepend/ignitor.php');
}
