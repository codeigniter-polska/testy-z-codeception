<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Logowanie <?= ENVIRONMENT; ?></title>
</head>
<body>

<?= form_open(); ?>

	<?= form_label('Login'); ?>
	<?= form_input('username'); ?>

	<?= form_label('Hasło'); ?>
	<?= form_password('password'); ?>

	<?= form_submit('submit', 'Zaloguj'); ?>

<?= form_close(); ?>

</body>
</html>