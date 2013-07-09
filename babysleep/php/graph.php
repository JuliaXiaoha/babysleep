<?php 
//set content type so that image will be rendered in the browser ... remember in jsp
header("Content-type:image/png");

//create new 300 *300 image
$myImage = ImageCreate(300,300);

// the first color allocated is the background color
$white = ImageColorAllocate($myImage,0xff,0xff,0xff);
$red = ImageColorAllocate($myImage,0xff,0,0);
$green = ImageColorAllocate($myImage,0,0xff,0);


//Draw a green rectangle around the edge of the screen

ImageRectangle($myImage,0,0,299,199,$green);

// Start Drawing line on graph

ImageLine($myImage,10,40,50,10,$green);
ImageLine($myImage,50,10,90,60,$green);
ImageLine($myImage,90,60,130,30,$green);
ImageLine($myImage,130,30,170,70,$green);
ImageLine($myImage,170,70,210,40,$green);
ImageLine($myImage,210,40,250,50,$green);

// send the bytes of the image
ImagePng($myImage);

// free the memory for the image
ImageDestroy($myImage);

?>