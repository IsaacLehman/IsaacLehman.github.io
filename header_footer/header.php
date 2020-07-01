<!DOCTYPE html>
<html lang="en">
    <head>
		<base href="<?php echo BASE_URL ?>"/>
        <meta charset="UTF-8">
        <meta name="description" content="Isaac's first website in PHP">
		<meta name="keywords" content="Coffee, Espresso, pour over, nespresso, pods, original, barista">
		<meta name="author" content="Isaac T. Lehman">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="joltespresso/css/style.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Jolt Espresso</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
	
	
    <body>
		<div class="top_header">
		  <h1 id="top_header_txt">Jolt ⚡ Espresso</h1>
		</div>


		<nav class="navigation">
			<ul>
				<li><a class="mainTab" href='/'>Home</a></li>
				<li><a href="joltespresso/recipes">Recipes</a></li>
				<li><a href="joltespresso/tutorials/">Tutorials</a></li>
				<li><a href="joltespresso/nespresso">Nespresso</a></li>
				<li style="float:right"><a href="joltespresso/about">About</a></li>
			</ul>
			
			
		</nav>
		
		<script>
			// Create the dropdown base
			$("<select />").appendTo("nav");

			// Create default option "Go to..."
			$("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "☰ Menu"
			}).appendTo("nav select");

			// Populate dropdown with menu items
			$("nav a").each(function() {
			 var el = $(this);
			 $("<option />", {
				 "value"   : el.attr("href"),
				 "text"    : el.text()
			 }).appendTo("nav select");
			});
			
			$("nav select").change(function() {
				window.location = $(this).find("option:selected").val();
			});
		</script>
		
		
	
        <div id="mainContent" class="content">