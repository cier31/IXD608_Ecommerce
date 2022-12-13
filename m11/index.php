<?
	include_once "lib/php/functions.php";
	// print_p($_SESSION,$_GET,$_POST);
	include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Doggies' Storage</title>
	<? include "parts/meta.php"; ?>

</head>
<body class="flush">

	<? include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image:url(img/dogbg.jpg)">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">	
		
		</div>	

	</div>	

	<div class="container">
		<h2>Home Page</h2>
		<div class="card soft">
			
			

			
       

    <!--div.container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40-->
    
	        <article id="article1" class="article">
	            <h2>Dog Dry Food</h2>
	            <div class="article-body">
	                <p>Most commercially produced dog food is made with animal feed grade ingredients and comes dry in bags (also known in the US as kibble) or wet in cans. Dry food contains 6–10% moisture by volume, as compared to 60–90% in canned food. Semi-moist products typically run 25–35%. Isotopic analysis of dog food in the Brazilian market have found that they are basically made of maize and poultry by-products.</p>
	               
	                <p>There are a few key components to consider when evaluating dietary needs. These factors include the quality and digestibility of the protein provided in the diet, as well as the composition of the amino acids included, and finally the energy density provided in the diet. Diets containing proteins that are high in quality, composition, and digestibility require less of that protein to be present. The same can be said in regards to the energy density. In contrast, high-protein diets will provide excess protein content after meeting maintenance demands; this can therefore lead to the protein being utilized in fat and energy storage.This ultimately increases the risk for developing obesity and other health related issues. Higher protein in the diet helps reduce lean body mass loss, but will not lead to an increase in size of muscle unless paired with resistance exercises or anabolic steroids under maintenance conditions.</p>
	            </div>
	        </article>
	    
	        <div class="view-window" style="background-image: url(img/dog.jpg);"></div>
	        <div class="container"></div>

	        <article id="article2" class="article">
	            <h2>Dog Wet Food</h2>
	            <div class="article-body">
	                <p>Wet or canned dog food is made by mixing animal meat, plant matter, vitamins, and other ingredients into a processed, pre-cooked stew or loaf, which is then packed into a sanitized container (e.g., a can). Typically, the dog food mixture is then re-cooked at a high temperature and pressure while in the sealed container to destroy any contaminants. </p>
	                <p>Wet food typically contains more meat protein than dry/kibble.
			Fewer carbs mean reduced potential for weight gain.
			Air-tight cans reduce the need for synthetic preservatives.
		Helps keep dogs hydrated, especially dogs who don't get enough water.
			Entices eating in dogs with teeth issues, or diminished sense of smell or appetite.</p>
	               
	            </div>
	        </article>
       
        
        <!--</div>-->
        

          


				
				
	
	</div>

	<div class="container">
		<h2>Dry Dog Food of the Week</h2>
		<? recommendedCategory("dog dry food") ?>
		<h2>Wet Dog Food of the Week</h2>
		<? recommendedSimilar("dog wet food",3) ?>
	</div>
	
</body>
</html>