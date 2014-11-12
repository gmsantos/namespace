<?php

require 'vendor/autoload.php';

$cloud = new MyApp\CloudProvider();

echo $cloud->getProviderClass();