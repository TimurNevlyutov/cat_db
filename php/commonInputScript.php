<?php
include '../config.php';
include '../bd/bd.php';
$insertTest='INSERT INTO "public"."cat_object" VALUES (2, 1)';
$stmt1 = $db->prepare($insertTest);

		$stmt1->execute();

?>