<?php include('db.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rajisthan Tourism</title>
<link rel="icon" href="orange-logo.png">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header class="spa-header">
  <div class="spa-header__left"><a href="" class="spa-header__logo"><img src="orange-logo.png" width="187px"></a> </div>
    <a href="login.php"><div id="p1" class="login">login/SignUp</div></a>
     <?php 
    session_start();
    if(isset($_SESSION['login_user'])){
        $email = $_SESSION['login_user'];
        $query = "SELECT name FROM users where email = '$email'";
        $result=mysqli_query($connection,$query);
        $name = mysqli_fetch_array($result);
        
    ?>
    <script type=text/javascript>
        document.getElementById('p1').innerHTML = "<?php echo $name[0]; ?>";
    </script>
<?php
}
    ?>
   
    <style>
        .login{    font-family: sans-serif;
    font-size: 20px;border:1px solid black;
    position: fixed;right: 10px;top: 20px;color: white;background-color: black;height: 31px;width: 140px;text-align: center;padding-top: 6px;border-radius: 25px;}
        .tab1{width: 50%;float: left;height: 100%;background-color: rgba(255,255,255,0.3);}
        .tab2{width: 50%;height: 100%;float: right;    background-color: rgba(255,255,255,0.3);}
        .login:hover{color: black;background-color: white;}
        .tab1 h1,.tab2 h1,.tab3 h1{padding-top: 45%;}
        .tab3 h1{padding-top: 25%;}
        @keyframes anim2{from{font-size: 3rem;padding-top: 25%;}to{font-size: 4.5rem;padding-top: 23%;}}
/*        @keyframes anim3{from{font-size: 3rem;padding-top: 30%;}to{font-size: 4.5rem;padding-top: 27%;}}*/
        @keyframes anim{from{font-size: 3rem;padding-top: 45%;}to{font-size: 4.5rem;padding-top: 43%;}}
        @keyframes anim1{from{ background-color: rgba(255,255,255,0.3);}to{ background-color: rgba(255,255,255,0.7);}}
        .tab1:hover, .tab2:hover,.tab3:hover,.tab4:hover{animation-name: anim1;animation-duration: .2s;animation-fill-mode: forwards;}
        .tab1:hover > h1,.tab2:hover > h1{animation-name: anim;animation-duration: 0.2s;animation-fill-mode: forwards;}
        .tab3:hover > h1{animation-name: anim2;animation-duration: 0.2s;animation-fill-mode: forwards;}
        .tab3{width: 100%;height: 100%;background-color: rgba(255,255,255,0.3);}
        .tab4{width: 50%;height: 50%;float: left;}
        .tab4 h1{padding-top: 25%;}
        .tab4:hover > h1{animation-name: anim2;animation-duration: 0.2s;animation-fill-mode: forwards;}</style>
</header>
<section class="sticky-nav-tabs n1">
<img src="Webp.net-gifmaker.gif" class="img">
  <div class="sticky-nav-tabs-container"> <a class="sticky-nav-tab" href="#tab-react">Accomodation</a> <a class="sticky-nav-tab" href="#tab-angular">Food</a> <a class="sticky-nav-tab" href="#tab-cssscript">Travel</a> <a class="sticky-nav-tab" href="#tab-vue">Guide</a> <a class="sticky-nav-tab" href="#tab-last">Trainer</a> <span class="sticky-nav-tab-slider"></span> </div>
</section>
<main class="spa-main">
    <style>
        #tab-react,#tab-last{background-image: url(545298.jpg);background-repeat: no-repeat;}
        #tab-angular{background-image: url(india_hd_wallpaper.jpg);background-repeat: no-repeat;}
        #tab-cssscript{background-image: url(thumb-1920-562058.jpg);background-repeat: no-repeat;}
        #tab-vue{background-image: url(thumb-1920-562059.jpg);background-repeat: no-repeat;}</style>
  <section class="spa-slide" id="tab-react">
      <div class="tab1"><h1>HOTEL</h1></div>
      <a href="cottage/index.php"><div class="tab2"><h1>COTTAGE</h1></div></a>
   </section>
  <section class="spa-slide" id="tab-angular">
      <a href="pay_restaurant/index.php"><div class="tab1"><h1>PAY FOR FOOD</h1></div></a>
      <a href="meals_on_wheels/index.php"><div class="tab2"><h1>MEALS ON WHEELS</h1></div></a>
   </section>
  <section class="spa-slide" id="tab-cssscript">
      <a href="book_travel/index.php"><div class="tab1"><h1>BOOK</h1></div></a>
      <a href="rent_travel/index.php"><div class="tab2"><h1>RENT</h1></div></a>
   </section>
  <section class="spa-slide" id="tab-vue">
      <div class="tab3"><h1>Guide</h1></div>
   </section>
  <section class="spa-slide" id="tab-last">
      <div class="tab4"><h1>YOGA TRAINER</h1></div>
       <div class="tab4"><h1>MASSEUR</h1></div>
       <div class="tab4"><h1>REIKI TRAINER</h1></div>
       <div class="tab4"><h1>TATTOO ARTIST</h1></div>  
   </section>
  
</main>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script>
class StickyNavigation {
	
	constructor() {
		this.currentId = null;
		this.currentTab = null;
		this.tabContainerHeight = 70;
		this.lastScroll = 0;
		let self = this;
		$('.sticky-nav-tab').click(function() { 
			self.onTabClick(event, $(this)); 
		});
		$(window).scroll(() => { this.onScroll(); });
		$(window).resize(() => { this.onResize(); });
	}
	
	onTabClick(event, element) {
		event.preventDefault();
		let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
		$('html, body').animate({ scrollTop: scrollTop }, 600);
	}
	
	onScroll() {
		this.checkHeaderPosition();
    this.findCurrentTabSelector();
		this.lastScroll = $(window).scrollTop();
	}
	
	onResize() {
		if(this.currentId) {
			this.setSliderCss();
		}
	}
	
	checkHeaderPosition() {
		const headerHeight = 75;
		if($(window).scrollTop() > headerHeight) {
			$('.spa-header').addClass('spa-header--scrolled');
		} else {
			$('.spa-header').addClass('spa-header--scrolled');
		}
		let offset = ($('.sticky-nav-tabs').offset().top + $('.sticky-nav-tabs').height() - this.tabContainerHeight) - headerHeight;
		if($(window).scrollTop() > this.lastScroll && $(window).scrollTop() > offset) {
			$('.spa-header').addClass('spa-header--move-up');
			$('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-first');
			$('.sticky-nav-tabs-container').addClass('sticky-nav-tabs-container--top-second');
		} 
		else if($(window).scrollTop() < this.lastScroll && $(window).scrollTop() > offset) {
			$('.spa-header').removeClass('spa-header--move-up');
			$('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-second');
			$('.sticky-nav-tabs-container').addClass('sticky-nav-tabs-container--top-first');
		}
		else {
			$('.spa-header').removeClass('spa-header--move-up');
			$('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-first');
			$('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-second');
		}
	}
	
	findCurrentTabSelector(element) {
		let newCurrentId;
		let newCurrentTab;
		let self = this;
		$('.sticky-nav-tab').each(function() {
			let id = $(this).attr('href');
			let offsetTop = $(id).offset().top - self.tabContainerHeight;
			let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
			if($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
				newCurrentId = id;
				newCurrentTab = $(this);
			}
		});
		if(this.currentId != newCurrentId || this.currentId === null) {
			this.currentId = newCurrentId;
			this.currentTab = newCurrentTab;
			this.setSliderCss();
		}
	}
	
	setSliderCss() {
		let width = 0;
		let left = 0;
		if(this.currentTab) {
			width = this.currentTab.css('width');
			left = this.currentTab.offset().left;
		}
		$('.sticky-nav-tab-slider').css('width', width);
		$('.sticky-nav-tab-slider').css('left', left);
	}
	
}

new StickyNavigation();
</script>
 
</body>
</html>
