<?php 


function browse()
{
	# Mengidentifikasi Browser yang digunakan oleh client
	if (strpos($_SERVER["HTTP_USER_AGENT"], "Edge") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Edge";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Chrome") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Chrome";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Mozilla") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Mozilla";
}
elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Opera") !== FALSE) {
	echo "Broser yang kamu gunakan adalah Opera";
}elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Trident") !== FALSE) {
	echo "Broser yang kamu gunakan adalah IE";
}
}
?>