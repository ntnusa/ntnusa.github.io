if(document.body.clientWidth > 700){
 $(function() {
  $('#sdt_menu > li').bind('mouseenter',function(){
    var $elem = $(this);
    $elem.find('img').stop(true).animate({
                'width': $elem.width(),
                'height':'118px',
                'left':'0px'
              },400,'easeOutBack').andSelf()
          .find('.sdt_wrap').stop(true).animate({
                'top':'60px',
              },500,'easeOutBack').andSelf()  //sub text
              .find('.sdt_active').stop(true).animate({
                'height':'86px'
              },300,function(){
            var $sub_menu = $elem.find('.sdt_box');
            if($sub_menu.length){
              var left = $elem.width();
              if($elem.parent().children().length == $elem.index()+1)
              left = -$elem.width();
              $sub_menu.show().animate({'left':left},200);
            }
          });
	}).bind('mouseleave',function(){
		var $elem = $(this);
		var $sub_menu = $elem.find('.sdt_box');
		if($sub_menu.length)
			$sub_menu.hide().css('left','0px');
		$elem.find('.sdt_active')
			 .stop(true)
			 .animate({'height':'0px'},300)
			 .andSelf().find('img')
			 .stop(true)
			 .animate({
				'width':'0px',
				'height':'0px',
				'left':'80px'},400) //the position of the img appeal
			 .andSelf()
			 .find('.sdt_wrap')
			 .stop(true)
			 .animate({'top':'-2px'},500); //the text go back
	});
});
}
