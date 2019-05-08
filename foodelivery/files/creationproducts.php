<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   
    <title>rolls and sushi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/demo.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   <script src="js/jquery.js"></script>
  </head>

  <body>

    <div id="wrap" >

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
         
            </button>
          
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#tab1" data-toggle="tab">Изменение меню</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
	  <div  class="tab-content" >
		<div class="tab-pane active" id="tab1">
					
			<div class="page-header">
			  
			  
			  	<table  width= "1000" >
				<tr>
				<td align = "center" > <img src="images\logotipe.png" width="150"  height="150"  alt="Не отображается картинка"> </td>
				<td ><h1 align="center" style="color:#ff0000"  ><i>Введите данные</i></h1>  </td>
				</tr>
				
			</table>
			
			</div>
			
			
			<!--<p class="lead" align = "center">
			
			</p> -->
			
				<table class="table table-striped"  width= "500" >
				  <form align="center" class="form-products" name="addingproducts" role="form"  method="post" action="addingproducts.php">
						<tr cellpadding="200">
						 
							<td > 
								
									Введите название продукта
														
							</td>
							<td> 
									<input type="text" class="form-control"  name="nameproduct" maxlength="50" value="" required autofocus>
							</td>
						
						</tr>
						
						<tr>
							<td> Введите цену </td>
							<td> <input type="text" class="form-control"  name="price" maxlength="4" value="" required autofocus> </td>
							
						</tr>
						
						<tr>
							<td> Введите описание продукта </td>
							<td> <input type="text" class="form-control"  name="description" maxlength="500" value="" required autofocus> </td>
						
						</tr>
						
						<tr>
							<td> Картинка продукта </td>
							<td> <input type="text" class="form-control"  name="name" maxlength="500" value="" required autofocus> </td>
						
						</tr>
						
						<tr >
						
							<td align="center" cellspacing="60"> <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" onclick="PopupForNewProduct()">Добавить</button> </td>
						
						</tr>
				</form>
				</table>
				
		
			
			<p>
				<a href="#tab2" class="underline-link add-right-margin" data-toggle="tab">Сделайте ваш заказ</a> 
				
			</p>
		</div>		

</div>
		
	</div>
	  
	  
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit">
		Сеть доставок ВашиСуши
		</p>
      </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
	<script src="js/operation.js"></script>
  </body>
</html>

