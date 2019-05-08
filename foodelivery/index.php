<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   
    <title>rolls and sushi</title>
    <link href="files/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="files/css/demo.css" rel="stylesheet"/>
	<link href="files/css/main.css" rel="stylesheet"/>
   <script src="files/js/jquery.js"></script>
  </head>

  <body>

    <div id="wrap" >

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#tab1" data-toggle="tab">Главная</a></li>
              <li><a href="#tab2" data-toggle="tab">Меню</a></li>
			   <li><a href="#tab3" data-toggle="tab">Вход/Регистрация</a></li> 
             
            </ul>
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
	  <div  class="tab-content" >
		<div class="tab-pane active" id="tab1">
					
			<div class="page-header">
			  <h1 align="center" style="color:#ff0000"  ><i>Доставка еды</i></h1> 
			  <img src="files\images\img2.png" width="900"  alt="Не отображается картинка">
			</div>
			<!--<p class="lead" align = "center">
			
				
				
			</p> -->
			<table  width= "1300" hi>
				<tr>
				<td align = "center" bgcolor="#FFC0CB"> Роллы, пожалуй, являются самой популярной разновидностью суши за пределами Японии.
				Сами японцы называют их «макидзуси», а распространённое на планете название произошло
				от английского глагола «to roll» («завёртывать, скатывать»).
                Роллы, называемые также «суши-рулетами», представляют собой продолговатые колбаски, 
                состоящие из риса с начинкой. Ингредиенты обычно заворачивают в лист нори (по-особому прессованных водорослей).
				Однако в западном мире широкую популярность приобрели роллы, свёрнутые наоборот, т.е. рис у них находится снаружи
				и покрывается особыми добавками (кунжутом, икрой летучей рыбы и т.д.). Их называются «урамаки».
				Готовые колбаски разрезают на несколько частей (обычно 6-8) и подаются как в виде отдельной порции,
				так и в составе особых наборов, куда может входить по 3-4 ролла или суши. Как и традиционные суши, 
				роллы едят с маринованным имбирём и горчицей «васаби».
				Это блюдо отлично подходит не только тем, кто лишь собирается попробовать яства оригинальной и необычной 
				японской кухни, но и искушённым гурманам. Разнообразие этих аппетитных рулетиков удовлетворит самого
				взыскательного ценителя вкусной пищи. Наиболее «хитовыми» считаются обёрнутые ломтиком лосося роллы «Филадельфия»,
				с одноимённым особо нежным сливочным сыром, и «Калифорния», в состав которых обязательно входят огурец или авокадо с крабовым мясом.
				Однако кроме этих, снискавших популярность по всему земному шару рецептов, существует огромное множество других.
				Самыми дешевыми роллами считаются классические хосомаки. Они станут отличным выбором для тех, кто впервые знакомится с подобной едой </td>
				<td bgcolor="#FFC0CB"> <img src="files\images\roll2.png" width="500"  alt="Не отображается картинка"> </td>
				</tr>
				
				
			</table>
			<br/>
			
			<p>
				<a href="#tab2" class="underline-link add-right-margin" data-toggle="tab">Сделайте ваш заказ</a> 
				
				
			</p>
		</div>
		
		
		<div class="tab-pane" id="tab2">
				
			<?php
			include("files/cart.php");
			?>
				
		</div>
		
		<div class="tab-pane" id="tab3">
		
		
		
		
		
			<table  width= "1300" hi>
				<tr>
				<td align = "center" bgcolor="#FFC0CB"> 
				
				<!-- <form align="center" name="authorization" method="post" action="files/authorization.php">
					<label for="login"><font face="Comic Sans MS" size=4>Введите логин:</font></label>  
					<input type="text" name="login" placeholder="Login" size="21" maxlength="50" value=""><br>
					<br><label for="password"><font face="Comic Sans MS" size=4>Введите пароль: </font></label>
					<input type="password" name="password" placeholder="Password" size="20" maxlength="50" value=""><br>	
					 <br><input type="submit" name="submit" value="Войти" >	
					
				</form>
				
					<form align="center" name="registration" method="post" action="files/registration.php">
						<input type="submit" name="submit" value="Регистрация">
					</form>	-->
					
				 <form class="form-signin" role="form" align="center" name="authorization" method="post" action="files/authorization.php">
						<h2 class="form-signin-heading">Авторизация</h2>
						<input type="text" class="form-control" placeholder="Login" name="login" maxlength="50" value="" required autofocus>
						<input type="password" class="form-control" placeholder="Password" name="password" maxlength="50" value="" required>
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Войти</button>
                 </form>
				 
				  <form class="form-signin" role="form" align="center" name="registration" method="post" action="files/registration.php">
						<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Зарегистрироваться</button>
                 </form> 
				 
				 
				</td>
				
				<td bgcolor="#FFC0CB"> <img src="files\images\roll2.png" width="500"  alt="Не отображается картинка"> </td>
				</tr>
				
				
			</table>
		 
	    
		 
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


    <script src="files/js/bootstrap.min.js"></script>
  </body>
</html>
