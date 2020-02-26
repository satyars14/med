<head>
        <!--title>My Medical Mate</title-->
        
<script type='text/javascript'> 
title = "My Medical Mate...     ";
position = 0;
function scrolltitle() {
    document.title = title.substring(position, title.length) + title.substring(0, position); 
    position++;
    if (position > title.length) position = 0;
    titleScroll = window.setTimeout(scrolltitle,500);
}
scrolltitle();
</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/favicon.ico" rel="icon" type="image/x-icon">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/stylesheet.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/mainstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
  
    </head>