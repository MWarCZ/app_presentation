<?php

function supportWEBP($image)
{
  $a_formats = $image->queryFormats();
  foreach ($a_formats as $format) {
    if ($format == 'WEBP') return true;
  }
  return false;
}


function tryResizeAndConvert2webp($file, $max_size = 1000, $compression_quality = 80)
{
  if (!file_exists($file)) {
    return false;
  }
  $output_file = $file;
  $image = new Imagick();
  $image->readImage($file);

  $h = $image->getImageHeight();
  $w = $image->getImageWidth();
  if ($h > $max_size || $w > $max_size) {
    $image->scaleImage($max_size, $max_size, true);
  }
  $file_info = pathinfo($output_file);
  // Try convert to WEBP if WEBP is supported.
  if (supportWEBP($image)) {
    $image->setImageFormat('WEBP');
    $image->setImageCompressionQuality($compression_quality);
    $image->setOption('webp:lossless', 'true');
    $file_info['extension'] = 'webp';
  }
  $output_file = $file_info['dirname'] . '/x_' . $file_info['filename'] . '.' . $file_info['extension'];
  $image->writeImage($output_file);
  return $output_file;
}

tryResizeAndConvert2webp('./img/2000.jpg');
// $img = new Imagick('./img/2000.jpg');
// $file_info = pathinfo('./img/2000.jpg');
// var_dump($file_info);
// echo $file_info['dirname'] . '/' . $file_info['filename'] . '.' . $file_info['extension'];
// $output_file = str_replace("%body%", ".webp", $output_file);
