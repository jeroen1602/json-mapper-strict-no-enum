<?php

// Set up the object to map.
$startObject = new SomeObjectToMap();
$startObject->enum_value = SomeEnum::FIRST;

$endObject = new SomeObjectToMap();

var_dump($startObject);

$jsonString = json_encode($startObject);
$jsonObject = json_decode($jsonString);

// Run the json mapper
$jsonMapper = new JsonMapper();
$jsonMapper->bStrictObjectTypeChecking = true; // Setting this to false "fixes" the problem,
$jsonMapper->map($jsonObject, $endObject);

// Not reached in default configuration.
var_dump($endObject);
