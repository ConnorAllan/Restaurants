<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include 'lib/constants.php';
        ?>
        <!--<title><?php //echo ASSOCIATION_NAME_SHORT; ?></title>-->
        <meta charset="utf-8">
        <meta name="author" content="Connor Allan">
        <meta name="description" content="Connor's reccommended resturants">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

        <?php
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
        // PATH SETUP

        $yourURL = DOMAIN . PHP_SELF;

// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
        // inlcude all libraries. 
// 
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        print '<!-- begin including libraries -->';

        include LIB_PATH . '/Connect-With-Database.php';

        print '<!-- libraries complete-->';
        ?>	
    </head>
    <!-- ################ body section ######################### -->

<?php
print '<body id="' . $PATH_PARTS['filename'] . '">';
include "header.php";
include "nav.php";
?>