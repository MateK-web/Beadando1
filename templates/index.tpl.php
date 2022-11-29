<!DOCTYPE html>
<html>
<head>
	<title>Zöldmennedék</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="Style/style.css" type="text/css">
	
</head>
<body> 
	<div id="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ul class="navbar-nav">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li  <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : $url ?>">
						<?= $oldal['szoveg'] ?></a>
						&nbsp;
						</li>
					<?php } ?>
                </ul>
            </nav>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        <a href="http://zoldmenedek.hu/kutya_macska/Kezdolap.html">link</a></p>
    </footer>
</body>
</html>
