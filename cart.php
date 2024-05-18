<?php
	require_once 'config/config.php';
	require_once 'config/functions.php';

	$vegetable = getVegetables(10);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WellnessMarket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+7 708 - 377 - 06-70</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">uurusai@vk.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Доставка в течении 3-5 рабочих дней &amp; Бесплатный возврат</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">WellnessMarket</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Главная</a></li>
	          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Магазин</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Ассортимент</a>
              	<a class="dropdown-item" href="wishlist.html">Избранное</a>
                <a class="dropdown-item" href="product-single.html">Болгарский перец</a>
                <a class="dropdown-item" href="product two.html">Клубника</a>
                <a class="dropdown-item" href="cart.html">Корзина</a>
                <a class="dropdown-item" href="checkout.html">Оплата</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">О нас</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Связаться с нами</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Главная</a></span> <span>Корзина</span></p>
            <h1 class="mb-0 bread">Моя корзина</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Название</th>
						        <th>Цена</th>
						        <th>Количество</th>
						        <th>Итого:</th>
						      </tr>
						    </thead>
						    <tbody>
							<?php
								for($i=0; $i<count($vegetable); $i++){
									echo "<tr class=\"text-center\">
									<td class=\"product-remove\"><a href=\"#\"><span class=\"ion-ios-close\"></span></a></td>";

									echo "<td class=\"image-prod\"><div class=\"img\" style=\"background-image:url(images/vegetables/'.$vegetables[$i]['id'].'.jpg);\"></div></td>";
									echo "<td class=\"product-name\">";
									echo "<h3>".$vegetable[$i]['name_veg']."</h3>";
									echo "<p>".$vegetable[$i]['description']."</p>";
									echo "</td>";

								echo "<td class=\"price\">".$vegetable[$i]['price'].'₸'."</td>";

								echo "		        
						        <td class=\"quantity\">
						        	<div class=\"input-group mb-3\">
					             		<input type=\"text\" name=\"quantity\" class=\"quantity form-control input-number\" value=\"8\" min=\"8\" max=\"100\">
					          		</div>
					          	</td>";

								echo "<td class=\"total\">".$vegetable[$i]['price'].'₸'."</td>";
								echo "</tr>";
								}
							?>



						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Код купона</h3>
    					<p>Введите код купона, если он у вас есть</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Код купона</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Использовать купон</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Рассчитать стоимость доставки и налоги</h3>
    					<p>Введите пункт назначения, чтобы получить стоимость доставки</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Страна</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Город/пригород</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Почтовый индекс</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Рассчитать</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Общая корзина</h3>
    					<p class="d-flex">
    						<span>Промежуточный итог</span>
    						<span>22 230 ₸</span>
    					</p>
    					<p class="d-flex">
    						<span>Доставка</span>
    						<span>2 000 ₸</span>
    					</p>
    					<p class="d-flex">
    						<span>Скидка</span>
    						<span>800 ₸</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Итого</span>
    						<span>23 430 ₸</span>
    					</p>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4"> Перейти к оформлению заказа</a></p>
    			</div>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Подписывайтесь на нашу рассылку.</h2>
          	<span>Получайте по электронной почте информацию о наших последних обновлениях и специальных предложениях</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Введите адрес электронной почты">
                <input type="submit" value="Подписаться" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">WellnessMarket</h2>
              <p>Здоровое питание. Легко. Быстро. Качественно.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Меню</h2>
              <ul class="list-unstyled">
                <li><a href="shop.html" class="py-2 d-block">Магазин</a></li>
                <li><a href="about.html" class="py-2 d-block">О нас</a></li>
                <li><a href="vegetables.html" class="py-2 d-block">Каталог</a></li>
                <li><a href="contact.html" class="py-2 d-block">Связаться с нами</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	              </ul>
	              <ul class="list-unstyled">
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">У вас есть вопрос?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Толе би 109б, Алмалинский район, Алматы, Казахстан</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+7 708 - 377 - 06-70</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">uurusai@vk.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены | Сделано с  <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="" target="_blank">WellnessMarket</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>