<?php

	require 'class/faker.php';

	$data = $_POST['data'];
	$method = $_POST['method'];

	$faker = new Faker();

	$result = $faker->$method($data);

	echo $result;
?>