<?php
	include("header.php");

	//function to print flower
	function printItem($imageName,$itemName,$description,$price){
?>
	<div class="w3-row custom-padding">
		<div class="picture">
			<img class="w3-padding-16" src="img/<?php echo $imageName; ?>" alt="rose" width="250" height="300">
		</div>
		<div class="text-beside-image">
			<h3 class="w3-center"><?php echo ucwords($itemName); ?></h3>
				<p><?php echo $description;?></p>
				<p class="font-price"><b>Price: RM<?php echo $price;?></b></p>
				<form action="addToCart.php" method="post">
					<label>Quantity: </label>
					<input type="number" name="quantity"><br>
					<input type="hidden" name="price" value="<?php echo $price;?>">
					<input type="hidden" name="item" value="<?php echo $itemName;?>">
					<button class="w3-button w3-black w3-hover-grey w3-round-xxlarge addtocartbtn" type="submit" value="submit">Add to Cart</button>
				</form>
		</div>
	</div>
<?php
	}
?>


<div class="w3-content">
	<?php
		//safety helmet
		$description = "The SIRIM approved Proguard Safety Helmet has an ABS shell that is fastened with a unique slide-lock.
		This easy to use locking system keeps the helmet on securely and is adjustable too.
		The helmet meets safety requirements set and approved by SIRIM and is designed with an 8 point molded shock absorbing system.
		Protect your head from impact especially on construction sites.";
		printItem("safety1.jpg","safety helmet",$description,19.99);
	?>

	<?php
		//safety goggles
		$description = "3M™ 1623AF Safety Goggles feature a wrap-around design for greater peripheral vision,
		anti-fog coating to minimize fogging and a hard-coated polycarbonate lens offering scratch resistance and
		99% reduction of ultraviolet radiation (UVA and UVB) from natural sunlight.";
		printItem("safety2.jpg","safety goggles",$description,29.99);
	?>

	<?php
		//safety mask
		$description = "Compact and lightweight, the 3000 Series range of half masks offer an economical solution for repiratory protection for wide range applications.
		The 3M 3000 respirator is available in two sizes and feature face seal with a single particulate, organic gas and vapour or combination filter.
		The comfort of the soft face seal, the filter options and the organic product design together ensure a user-friendly half mask.";
		printItem("safety3.png","safety mask",$description,97.99);
	?>

	<?php
		//safety gloves
		$description = "Excellent water resistance and grip is superb. Soft gloves with good elasticity can be comfortable to wear.
		Compact design, very convenient and practical. With reflective strap to protect yourself easily.";
		printItem("safety4.jpg","safety gloves",$description,53.99);
	?>

	<?php
		//baby breath
		$description = "It's extremely bright and reflective which makes it perfect for being seen when biking riding, jogging, or walking along roads and rail trails.
		To all bicyclist, motorcyclist, dog walkers, emergency workers...etc. Also suitable for men and women";
		printItem("safety5.jpg","safety vest",$description,119.99);
	?>

	<?php
		//baby breath
		$description = "The footwear protects the wearer’s toes against risks of injury from falling objects and crushing when worn environments where potential hazards occur.";
		printItem("safety6.jpg","safety boots",$description,114.99);
	?>
</div>
<?php include("footer.php");?>
