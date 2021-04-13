fl=0;
$(document).ready(function() {
				
	$('.dark').css({opacity:0, display:'none'})
				
	/// follow us
	$('.follow').find('img').css({opacity:0.5})
	
	$('.follow img').hover(function(){
		$(this).stop().animate({opacity:1},400)							 
	}, function(){
		$(this).stop().animate({opacity:0.5},400)	
	})
	
		////// submenu
	$('ul#menu').superfish({
      delay:       10,
      animation:   {opacity:'show'},
      speed:       600,
      autoArrows:  false,
      dropShadows: false
    });
	
	//// sub menu
	$('.submenu > ul > li').find('> a > span').css({opacity:0.7})
	$(".girl1").css({left:'-500px',display:'block'}).stop(true,true).delay(1400).animate({left:'-40px',top:'150px',display:'block'}, 750, 'easeOutCubic');
	 $(".girl2").css({right:'-500px'}).stop(true,true).delay(1400).animate({right:'-30px',top:'50px'}, 750, 'easeOutCubic');
	 $(".girl3").css({width:'50px', height:'64px',right:'400px', top:'-100px'}).stop(true,true).delay(1400).animate({top:'-50px',width:'249px',height:'318px',right:'170px'}, 750, 'easeOutCubic');
	
	$('.submenu > ul > li').hover(function(){
		$(this).find('> a > span').stop().animate({opacity:1},400)							 
	}, function(){		
		$(this).find('> a > span').stop().animate({opacity:0.7},400)		
	})

			// video 
	$('.video1').find('span').css({opacity:0})
	
	$('.video1 > a').hover(function(){
		$(this).find('span').stop().animate({opacity:0.5},400)	
		$(this).find('.img_act').stop().animate({opacity:0},400)
	}, function(){
		$(this).find('span').stop().animate({opacity:0},400)
		$(this).find('.img_act').stop().animate({opacity:1},400)
		
	})
	
		//////// read more
	$('.button1 span').css({opacity:'0'})
	
	$('.button1').hover(function(){
		$(this).find('span').stop().animate({opacity:'1'})							 
	}, function(){
		$(this).find('span').stop().animate({opacity:'0'})							 
	})
	
	///////// gallery
	
	$('.photo2').find('span').css({opacity:0})
	
	$('.photo2 > a').hover(function(){
		$(this).find('span').stop().animate({opacity:0.5},400)								
	}, function(){
		$(this).find('span').stop().animate({opacity:0},400)								
	})
	
	
	
	

	// for lightbox
	 $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark_square',social_tools:false,allow_resize: true,default_width: 500,default_height: 344})


}); //// ready




$(window).load(function() {	
						
						
	$('#bgStretch').bgStretch({
			align:'leftTop',
			navigs:$('#pagination').navigs()
		})
		.sImg({
			spinner:$('<div class="spinner"></div>').css({opacity:.7}).hide()
	})
	
	$('#pagination li').eq(0).addClass('active');
	
	
	// scroll
	$('.scroll').cScroll({
		duration:700,
		step:100,
		trackCl:'track',
		shuttleCl:'shuttle',
		upButtonCl:'_up-butt',
		downButtonCl:'_down-butt'
	})	
	
	
	
	//content switch
	var content=$('#content'),
		nav=$('.menu'),
		footer_nav=$('.footer_menu');
	nav.navs({
		useHash:true,
		hoverIn:function(li){
			//$('> a > span',li).stop().animate({opacity:'1'},400);
			//$('> a > span').stop().animate({backgroundPosition:'0px 0px'},400, 'easeOutQuad')
			//Cufon.replace($(this).find('> a > p'), { fontFamily: 'Myriad Web Pro', color:'#000' });
			
			
		},
		hoverOut:function(li){
			//$('> a > span',li).stop().animate({opacity:'0'},400);
			//$('> a > span').stop().animate({backgroundPosition:'-200px 0px'},400, 'easeOutQuad')
		},
		hover:false
	})		
	footer_nav.navs({
		useHash:true,
		hover:true
	});
	nav.navs(function(n, _){
		content.cont_sw(n);
		footer_nav.navs(n);
	})
	content.cont_sw({
		showFu:function(){
			var _=this			
			$.when(_.li).then(function(){
				_.next.css({display:'block'}).stop().animate({top:0},1000,'easeOutBack');	
				$('.dark').css({display:'block'}).stop().animate({opacity:1})
			});
		},
		hideFu:function(){
			var _=this
			_.li.stop().animate({top:600},600,'easeInCirc', function(){
				_.li.css({display:'none',top:-500});
				$('.dark').stop().animate({opacity:0}, function(){
					$(this).css({display:'none'})
				})
			})
						
		},
		preFu:function(){
			var _=this
			_.li.css({position:'absolute', display:'none'});
		}
	})
	
	
	
	
	var h_cont=800;
	function centre() {
		var h=$(document).height();
		if (h>h_cont) {
			m_top=~~(h-h_cont)/2;
		} else {
			m_top=0;
		}
		$('.main1').stop().animate({marginTop:m_top})
	}
	centre();
	$(window).resize(centre);
	
	
}) /// load