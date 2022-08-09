<?php

use Ahcvisser\JmsSerializerAccessorDefaultValue\DefaultValuesAndAccessors;

include('./vendor/autoload.php');

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
echo json_encode($serializer->fromArray([], DefaultValuesAndAccessors::class), JSON_PRETTY_PRINT);
