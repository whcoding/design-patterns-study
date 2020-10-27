<?php

require __DIR__.'/../../vendor/autoload.php';

use App\Adapter\Impl\EBookAdapter;
use App\Adapter\Impl\Kindle;

$a = new EBookAdapter(new Kindle());
$a->open();