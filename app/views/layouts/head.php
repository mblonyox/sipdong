<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css" />
  <?php foreach($styles as $style):?>
  <link rel="stylesheet" type="text/css" href="/css/<?php echo $style;?>" />
  <?php endforeach;?>
</head>
<body>