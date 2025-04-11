<?php


require __DIR__ . '/vendor/autoload.php';

use Codewithkyrian\Transformers\Transformers;
use Codewithkyrian\Transformers\Utils\ImageDriver;
use function Codewithkyrian\Transformers\Pipelines\pipeline;


Transformers::setup()
    ->setImageDriver(ImageDriver::IMAGICK)
    ->setCacheDir('./models')
    ->apply();


$pipeline = pipeline('image-to-text');


$result = $pipeline('test.jpeg');


echo $result[0]['generated_text'] . PHP_EOL;
