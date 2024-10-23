<?php

include('../config/root.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= PAGES[$_GET['page']]['seo']['title'] ?> - Nom de mon site</title>
	<link rel="stylesheet" href="style/style.css">
	<meta name="description" content="<?= PAGES[$_GET['page']]['seo']['description'] ?>">
</head>

<body>
	<?php include('partials/_header.html') ?>
	<main>
		<?php include('../public/pages/' . PAGES[$_GET['page']]['template']); ?>
	</main>
	<?php include('partials/_footer.html') ?>
</body>

</html>