<?php

 ?>
 <link href="files/css/main.css" rel="stylesheet"/> <div id="cart-container">
	<div class="col-md-7">
		<div class="page-header">
		  <h1>Выберите продукт</h1>
		</div>
		<?php
		//Loading the products.xml file
		if(file_exists("products.xml"))
		{
			$file="products.xml";
		}
		else
		if(file_exists("files/products.xml"))
		{
			$file="files/products.xml";
		}
		else
		{
			die("No products.xml file found");
		}
		
		//Loading the config.xml file
		if(file_exists("config.xml"))
		{
			$config_file="config.xml";
		}
		else
		if(file_exists("files/config.xml"))
		{
			$config_file="files/config.xml";
		}
		else
		{
			die("No config.xml file found");
		}
		
		//Initializing the config settings
		$xml_config = simplexml_load_file($config_file);
		$currency_symbol=$xml_config->configuration->currency_symbol;
		$currency_code=$xml_config->configuration->currency_code;
		
		$xml = simplexml_load_file($file);
	
		$script_products="";
		$script_product_prices="";
		
		//Loop through the products defined in the products.xml file
		foreach ($xml->product as $r) 
		{
			$script_products.="products[".($r->id)."]=\"".($r->name)."\";\n";
			$script_product_prices.="product_prices[".($r->id)."]=\"".($r->price)."\";\n";
		?>	
			<div>
			<p class="lead">
				<h3 class="pull-right no-top-margin"><?php echo $currency_symbol;?><?php echo $r->price;?></h3>
				<h3><?php echo $r->name;?></h3>
			</p>
			<img src="<?php echo $r->img_link;?>" width="40%"  alt="Не отображается картинка">
			<p>
				<?php echo $r->description;?>
			</p>
			<br/>
			<?php
			//If there is details link set for the product, show a Details button
			if(trim($r->details_link)!="")
			{
			?>
				<!-- <a target="_blank" href="http://<?php echo str_replace("http://","",trim($r->details_link));?>" class="btn btn-xs btn-default add-right-margin">Детали</a> -->
			<?php
			}
			?>
			<a class="btn btn-xs btn-info" href="javascript:AddToCart(<?php echo $r->id;?>)">Добавить в корзину</a>
		 </div>
		<hr/>

		<?php
		}
		?>
		<script>
		var currency_symbol="<?php echo $currency_symbol;?>";
		var products=Array();
		<?php echo $script_products;?>
		var product_prices=Array();
		<?php echo $script_product_prices;?>
		</script>
		  
	</div>
	<div class="col-md-1">
		<!--margin between the 2 columns-->
	</div>
	<div class="col-md-4">
		<br/><br/>
		 <div class="panel panel-default cart-panel">
			<div class="panel-heading">
				<img class="pull-left add-right-margin" height="20" src="files/images/cart-m.png"/>
			  <h3  class="pull-left panel-title">Ваша корзина</h3>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<div id="Cart">
					Корзина пуста!
				</div>
			</div>
		  </div>
		
	</div>
</div>
<div class="clearfix"></div>
<div id="payment-container">
	<div class="page-header">
		 <h1>Способ оплаты</h1>
	</div>
		
	<form id="payment-from" action="files/process_order.php" target="ajax-ifr">
	<input type="hidden" value="1" name="proceed" id="proceed"/>
	<input type="hidden" value="" name="products_list" id="products_list"/>
	<input type="hidden" value="" name="products_value" id="products_value"/>
	
	<?php
	$first_option = true;
	
	if(trim($xml_config->configuration->paypal_account)!="")
	{
	?>
		<input <?php if($first_option) echo "checked";?> type="radio" name="payment_option" value="paypal"/>
		<img src="files/images/paypal.png" alt="Payment through PayPal.com"/>
	<?php
	}
	
	
	?>
	<div class="clearfix"></div>
	<br/><br/>
	<a href="javascript:GoToCart()" class="btn btn-xs btn-default add-right-margin">Обратно</a>
	<a href="javascript:SubmitPaymentForm()" type="button" class="btn btn-xs btn-info">Продолжить</a>
	
	</form>
</div>


<div id="popup" class="alert alert-warning"></div>

<iframe id="ajax-ifr" name="ajax-ifr" src="files/empty.html" class="no-visibility" width="1" height="1"> </iframe>

<script src="files/js/operation.js"></script>
