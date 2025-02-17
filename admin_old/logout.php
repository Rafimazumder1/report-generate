<?php
    session_start();
	session_destroy();
	header("Location: https://swaadu.org/admin/");
?>