$(function(){
  // 預設圖片淡出淡入的動畫時間
  var _fadeSpeed = 600;

  // 把每一個 .slideshow 取出來做處理
  $('.slideshow').each(function(){
    // 先取得相關的 ul , li
    // 並產生控制器
    var $this = $(this),
    $ul = $this.find('ul'),
    $li = $ul.find('li'),
    $controller = $('<div class="slideshowController"><a href="#"></a><a href="#" class="play"></a><a href="#" class="next"></a></div>').css('opacity', 0),
    _len = $li.length,
    _index = 0, timer, _speed = 2000;

    // 先把第一張圖片之外的都透明度設成 0
    $li.eq(_index).css('z-index', 2).siblings().css('opacity', 0);

    // 加入控制器並當滑鼠移入時顯示; 滑鼠移出時隱藏
    $this.append($controller).hover(function(){
      $controller.stop().animate({
        opacity: 1
      });
    }, function(){
      $controller.stop().animate({
        opacity: 0
      });
    });

    // 當點擊到控制器上面的按鈕時
    $controller.delegate('a', 'click', function(){
      // 先取得按鈕的 class
      var $a = $(this),
      _className = $a.attr('class');


      // 如果按的是 play 或是 pause 鈕
      if(('play pause').indexOf(_className) > -1){
        // 切換目前按鈕圖案
        // 並依狀態來啟動或停止計時器
        $a.toggleClass('pause').hasClass('pause') ? timer = setTimeout(autoClickNext, _fadeSpeed + _speed) : clearTimeout(timer);
        return false;
      }

      // 停止計時器
      clearTimeout(timer);
      // 移除 pause 鈕
      $a.siblings('.pause').removeClass('pause');
      // 依按鈕功能來決定上下張圖片索引
      _index = ('next' == _className ? _index + 1 : _index - 1 + _len) % _len;
      // 切換圖片
      show();

      return false;
    });

    // 自動播放下一張
    function autoClickNext() {
      _index = (_index + 1) % _len;
      show();
      timer = setTimeout(autoClickNext, _fadeSpeed + _speed);
    }

    // 淡入淡出圖片
    function show() {
      $li.eq(_index).animate({
        opacity: 1,
        zIndex: 2
      }, _fadeSpeed).siblings(':visible').animate({
        opacity: 0,
        zIndex: 1
      }, _fadeSpeed);
    }

    if($this.hasClass('autoPlay')){
      $controller.find('.play').click();
    }
  });

});
