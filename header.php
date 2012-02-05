<!DOCTYPE html>
<html>
  <head>
  
  <meta charset="utf-8">
  <title><?php bloginfo('name'); print "/";?></title>
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <style type="text/css">
  </style>
  
  <script type="text/javascript">
 
  function toggleReactions(buttonID, divID) {
  
    //switch button toggle text
	var button = document.getElementById(buttonID);
	var toggledText = button.getAttribute("toggledtext");
	button.setAttribute("toggledtext", button.innerHTML);
	button.innerHTML = toggledText;

	var div = document.getElementById(divID);
	if (div.style.display == "block")
	{
     	div.style.display = "none"
	}
	else
	{
     	div.style.display = "block";
	}
	

  } 

  </script>
  
  </head>
  
  <body id="home">
  
    <div id="container">
    
      <header>
      
            <nav>
              <ul>
                <li><a href="<?php bloginfo('rss2_url'); ?>">rss</a></li>
                <li><a href="http://twitter.com/koma5">twitter</a></li>
              </ul>
            </nav>
    
      </header>