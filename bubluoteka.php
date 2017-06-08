 <!DOCTYPE html>
<html>
    <head>
        <title>Библиотека</title>
        <?php require_once "head.php";
        ?>
         <link rel="stylesheet" href="css/bubl_style.css">
        
    </head>
  

    <body>
  <?php require_once "blocks/header.php"?>
        <div class= "layout"> 
         <div class="content"> 
		<section id="photo-wall">
 			<ul>
 				<li>
 					<a href="">
 						<img src="img/вино из одуванчиков.jpg" alt="картинка">
                        <h3>Вино из одуванчиков <br>Рей Бредбери</h3><br>
                        <p>Войдите в светлый мир двенадцатилетнего мальчика и проживите с ним одно лето, наполненное событиями радостными и печальными, загадочными и тревожными; лето, когда каждый день совершаются удивительные открытия, главное из которых — ты...</p>
 					</a>
 				</li>
        
 				<li>
 					<a href="">
 						<img src="img/1984.jpg" alt="картинка">  
                        <h3>1984</h3>
                        <p>Своеобразный антипод второй великой антиутопии XX века - "О дивный новый мир" Олдоса Хаксли. Что, в сущности, страшнее: доведенное до абсурда "общество потребления" - или доведенное до абсолюта "общество идеи"? По Оруэллу, нет и не может..</p> 
 					</a>
 				</li>
 				<li>
 					<a href="">
 						<img src="img/мастер и маргарита.jpg" alt="картинка">
 						<h3>Мастер и Маргарита</h3>
 						<p>Один из самых загадочных и удивительных романов XX века. Роман "Мастер и Маргарита" - визитная карточка Михаила Афанасьевича Булгакова. Более десяти лет Булгаков работал над книгой, которая стала его романом-судьбой, романом-завещанием. В...</p> 
 					</a>
 				</li>
 				<li>
 					<a href="">
 						<img src="img/фаренгейт.jpg" alt="картинка">
 						<h3>451° по Фаренгейту</h3>
 						<p>Мастер мирового масштаба, совмещающий в литературе несовместимое. Создатель таких ярчайших шедевров, как "Марсианские хроники", "451° по Фаренгейту", "Вино из одуванчиков" и так далее и так далее. Лауреат многочисленных премий. Это Рэй...</p> 
 					</a>
 				</li>
 				<li>
 					<a href="">
 						<img src="img/три товарища.jpg" alt="картинка">
 						<h3>Три товарища</h3>
 						<p>Трое друзей - Робби, отчаянный автогонщик Кестер и "последний романтик" Ленц прошли Первую мировую войну. Вернувшись в гражданскую жизнь, они основали небольшую автомастерскую. И хотя призраки прошлого преследуют их, они не унывают - ведь...</p> 
 					</a>
 				</li>
 				<li>
 					<a href="">
 						<img src="img/портрет дориана грея.jpg" alt="картинка">
 						<h3>Портрет Дориана Грея</h3>
 						<p>«Портрет Дориана Грея» – одно из величайших произведений последних полутора столетий, роман, который пытались запретить, а автора осуждали за «непристойное поведение». Превращение прекрасного и невинного юноши Дориана в чудовище под...</p> 
 					</a>
 				</li>
 				<li>
 					<a href="">
 						<img src="img/шантарам.jpg" alt="картинка">
 						<h3>Шантарам</h3>
 						<p>Представляем читателю один из самых поразительных романов начала XXI века (в 2015 году получивший долгожданное продолжение – «Тень горы»). Эта преломленная в художественной форме исповедь человека, который сумел выбраться из бездны и...</p> 
 					</a>
 				</li>
 			</ul>
            <div id="scroller">
                <center><canvas id='example'>Обновите браузер</canvas></center></div>
		</section>
         
	    </div> 
           <?php require_once "blocks/right_col.php"?>
        </div>
        
		<script>
            var canvas = document.getElementById("example");
            var context = canvas.getContext("2d");

             context.beginPath();
             context.arc(45, 45, 40, 0, 2*Math.PI, false);
             context.fillStyle = "rgba(51,70,103,1)";
             context.fill();
             context.lineWidth = 5;
             context.strokeStyle = "rgba(6,22,55,0.5)";
             context.stroke();
            context.beginPath();

            context.moveTo(45,10);
            context.lineTo(10,60);
            context.lineTo(78,60);
            context.fillStyle = "rgba(51,70,103,0.8)";
            context.strokeStyle = "rgba(6,22,55,0.2)";
            context.closePath();

            context.fillStyle = "rgba(100,150,185,0.5)";

            context.fill();
            context.stroke();
       
            $(document).ready(function(){   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
		</script>
      <?php require_once "blocks/footer.php"?>
   <div id="scroller">
                <center><canvas id='example'>Обновите браузер</canvas></center></div>     
  </body>
</html>