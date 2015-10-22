<?php
// Permanent redirection
$subdomain = current(explode(".",$_SERVER['HTTP_HOST']));

header("HTTP/1.1 301 Moved Permanently");
if ($subdomain == "www") {
  header("Location: http://moadib.fr/");
} else {
  header("Location: http://$subdomain.moadib.fr/");
}
exit();
?>
