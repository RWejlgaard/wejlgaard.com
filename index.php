<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_SERVER["HTTP_HOST"] ?></title>
</head>

<body>
<textarea theme="simplex" style="display:none;">
<div>
	<a href="/">en</a> /
	<a href="/he">he</a>
</div>
<?php
$handle = fopen("main.md", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
		echo $line;
    }
    fclose($handle);
} else {
    echo "unable to read main.md";
}
?>
</textarea>
<br/>
<p>Also available on <a href="rasmus7vf4rcmkjy.onion">rasmus7vf4rcmkjy.onion</a></p>

<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/v/0.2/strapdown.js"></script>
</body>
</html>

