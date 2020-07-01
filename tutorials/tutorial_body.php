<!-- You can place up to 3 cards per row -->
<div class="tutorialPageContainor">
	<div class="cardContainor">
		<div class="row">
			
			<div class="card">
				<a href="joltespresso/tutorials/content/pour_over_tutorial.html"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>Pour Over</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>
			
			<div class="card">
				<a href="coffee.php"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>Coffee</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>

			<div class="card">
			<a href="espresso.php"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>dover</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>
		</div>

		<div class="row">
			<div class="card">
			<a href="espresso.php"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>Jane Doe</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>
			
			<div class="card">
			<a href="espresso.php"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>Jane Doe</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>

			<div class="card">
			<a href="espresso.php"></a>
			  <img src="joltespresso/images/pour_over_setup.jpg" alt="test" style="width:100%">
			  <div class="container">
				<h2><b>Jane Doe</b></h2> 
				<p>Interior Designer</p> 
			  </div>
			</div>
		</div>

		<script>
			$(".card").click(function() {
				var link = $(this).find("a").attr("href"); 
				$.get(link, function( data ) {
						$('.tutorialPageContainor').html(data);
				});
				
			});
		</script>
		
	</div>
</div>

