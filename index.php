<?php
require_once 'config/functions.php';

?>

<?php
	require_once './blocks/header.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once "blocks/head.php";
        $vegetable = getVegetables(10);
    ?>
</head>

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Мы подаем свежие овощи &amp; фрукты</h1>
	              <h2 class="subheading mb-4">Мы доставляем органические овощи &amp; фрукты</h2>
	              <p><a href="about.php" class="btn btn-primary">Подробнее</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Свежесть &amp; Органическая еда</h1>
	              <h2 class="subheading mb-4">Мы доставляем органические овощи &amp; фрукты</h2>
	              <p><a href="about.php" class="btn btn-primary">Подробнее</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Бесплатная доставка</h3>
                <span>При заказе свыше 40 000₸</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Всегда свежие</h3>
                <span>Хорошая упаковка продукта</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Превосходное качество</h3>
                <span>Качественные продукты</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Тех. поддержка</h3>
                <span>24/7 с вами</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Овощи</h2>
										<p>Защищать здоровье в каждом доме</p>
										<p><a href="shop.php" class="btn btn-primary">Купить сейчас</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Овощи</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Фрукты</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Напитки</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Сухофрукты</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Популярные продукты</span>
            <h2 class="mb-4">Наши продукты</h2>
            <p>Открой двери к здоровому питанию с нашим разнообразием свежих и качественных продуктов, чтобы достичь своих фитнес-целей и поддерживать активный образ жизни.</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">

					<?php

					//проверка
					//if($i == 0)
					for($i=0; $i<count($vegetable); $i++){

					
					echo "<div class=\"col-md-6 col-lg-3 ftco-animate\">";
						echo "<div class=\"product\">";
							echo '<a href="#" class="img-prod"><img class="img-fuild" style="width:165px;" src="/images/vegetables/'.$vegetable[$i]['id'].'.jpg" alt="Colorlib Template">';
								echo '<div class="overlay"></div>';
							echo '</a>';
							echo "<div class=\"text py-3 pb-4 px-3 text-center\"";
								echo "<h3><a href=\"#\">".$vegetable[$i]['name_veg']."</a></h3>";
								echo "<div class=\"d-flex\">";
									echo "<div class=\"pricing\">";
									echo "<p class=\"price\"><span>".$vegetable[$i]['price'].'₸'."</span></p>";
								echo "</div></div>";

								// echo "<a href=\"cart.php\" class=\"buy-now d-flex justify-content-center align-items-center mx-1\">
								// <span><i class=\"ion-ios-cart\"></i></span>
								// </a>";

								echo "
								<div class=\"product__quantity\" style=\"margin-bottom: 50px;\"></div>
								<div class=\"bottom-area d-flex px-3\">
	    						<div class=\"m-auto d-flex\">
										<a href=\"#\" class=\"add-to-cart d-flex justify-content-center align-items-center text-center\">
											<span><i class=\"ion-ios-menu\"></i></span>
										</a>


										
										<a href=\"#\" class=\"heart\" 
										data-sb-id-or-vendor-code=\"038\"
										data-sb-product-name=".$vegetable[$i]['name_veg']."
										data-sb-product-price=".$vegetable[$i]['price']."
										data-sb-product-quantity=\"1\"
										data-sb-product-img='/images/vegetables/".$vegetable[$i]['id'].".jpg'>
											<span><i class=\"ion-ios-heart\"></i></span>
										</a>
									</div>
								</div>";
						echo "</div>";
					echo "</div>";
					echo "</div>";
					

					}
					?>




    		</div>
    	</div>
    </section>
		
		<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Лучшая цена для Вас</span>
            <h2 class="mb-4">Сделка дня</h2>
            <p>Не упустите шанс на здоровье! Каждый день у нас новая сделка, чтобы вы могли с радостью попробовать разнообразные здоровые продукты и преобразить свое питание!</p>
            <h3><a href="#">Шпинат</a></h3>
            <span class="price">3 500 ₸<a href="#"> только сейчас 2 015 ₸ </a></span>
						</div>
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Подтверждение</span>
            <h2 class="mb-4">Наши довольные клиенты говорят:</h2>
            <p>Питайтесь с удовольствием и создавайте хорошие впечатления с нашими качественными и вкусными продуктами. Позвольте вашему питанию стать источником радости и благополучия каждый день!</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Я абсолютно в восторге от этого онлайн магазина здорового питания! Здесь я нашел все, что нужно для своего здорового образа жизни. Продукты высокого качества, широкий ассортимент и удобная доставка - все это делает мои покупки максимально комфортными. Благодаря этому магазину, я могу легко приобретать питательные продукты и поддерживать свое здоровье без лишних хлопот. Я рекомендую этот магазин всем, кто ценит свое здоровье и ищет качественные продукты!</p>
                    <p class="name">Бакыт Назаров</p>
                    <span class="position">Менеджер по маркетингу</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Я просто влюбился в этот онлайн магазин здорового питания! Каждый раз, когда делаю заказ, я уверен, что получу только самые свежие и натуральные продукты. Выбор здесь просто огромный - от органических овощей и фруктов до веганских и безглютеновых вариантов. Кроме того, у них всегда есть интересные новинки и специальные предложения. Я чувствую себя поддержанным и вдохновленным в своем пути к здоровому питанию благодаря этому замечательному магазину!</p>
                    <p class="name">Даулет Жумабаев</p>
                    <span class="position">Дизайнер интерьера</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Этот онлайн магазин здорового питания - настоящая находка для меня! Я очень заботлюсь о своем здоровье, и здесь я могу найти все необходимое без лишних хлопот. Качество продуктов просто потрясающее, а их упаковка надежно защищает все питательные свойства. Кроме того, их клиентская поддержка просто превосходна - всегда готовы помочь и ответить на любые вопросы. Большое спасибо этому магазину за то, что делает здоровое питание легким и приятным!</p>
                    <p class="name">Айбек Касымов</p>
                    <span class="position">UI/UX Дизайнер</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Онлайн-магазин здорового питания - просто волшебство! Я был впечатлен широким ассортиментом качественных и свежих продуктов, которые они предлагают. Заказывая здесь, я получил все необходимое для поддержания здорового образа жизни. Отличное качество продукции и оперативная доставка удивили меня. Более того, сайт магазина был интуитивно понятным и удобным в использовании. Я остался доволен своим опытом покупок и безусловно буду рекомендовать этот онлайн-магазин всем, кто заботится о своем здоровье!</p>
                    <p class="name">Даулет Касен</p>
                    <span class="position">Web Разработчик</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Этот онлайн магазин здорового питания превзошел все мои ожидания! Я приятно удивлен широким ассортиментом продуктов, которые помогают поддерживать мое здоровье и достигать фитнес-целей. Каждый раз, когда получаю свою посылку, я чувствую, что вложился в заботу о себе. Качество продуктов на высшем уровне, их вкус невероятен! Этот магазин стал моим надежным партнером в стремлении к здоровому образу жизни. Огромное спасибо за отличный сервис и заботу о своих клиентах!</p>
                    <p class="name">Ержан Муканов</p>
                    <span class="position">Системный аналитик</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0"> Подписывайтесь на нашу рассылку.</h2>
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

	<?php require_once './blocks/footer.php' ?>
    
  

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

  <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

<div class="smart-basket__wrapper"></div>

<script src="./smartbasket/js/smartbasket.min.js"></script>
	<script>
		$(function () {
			$('.smart-basket__wrapper').smbasket({
				productElement: 'product',
				buttonAddToBasket: 'heart',
				productPrice: 'product__price-number',
				productSize: 'product__size-element',
				
				productQuantityWrapper: 'product__quantity',
				smartBasketMinArea: 'buy-now',
				countryCode: '+7',
				smartBasketCurrency: 'KZT',
				smartBasketMinIconPath: './smartbasket/img/shopping-basket-wight.svg',

				agreement: {
					isRequired: true,
					isChecked: true,
					isLink: 'https://pay.kaspi.kz/SignIn',
				},
				nameIsRequired: false,
			});
		});
	</script>
  </body>
</html>