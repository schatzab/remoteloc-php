<?
session_start();
session_unset($_SESSION["valid_rl_user"]);
session_destroy();

header("Location: http://www.remoteloc.com/"); // redirect browser home
exit();
?>