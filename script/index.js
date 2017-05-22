var autoWidthTab = {
  start:function(){
    var W = $("ul.tabs").outerWidth();
    var L = $("ul.tabs > li").length;
    var W_OVER = W;
    $("ul.tabs > li").each(function(){
      W_OVER = W_OVER-$(this).outerWidth();
    });
    var over_w = ((W_OVER/4)-(L*2))-10;
    if(over_w<0){
      over_w = 0;
    }
    $("ul.tabs > li").each(function(){
      var W_LI = $(this).outerWidth()+over_w;
      $(this).css("width",W_LI);
    })
  }
}

$(document).ready(function() {
  if(isIE==false){
    autoWidthTab.start();
    $(window).resize(function(){
      autoWidthTab.start();
    })
  }
});


$(document).ready(function(){
  if(isIE==false){
    var totalSliderItem = $('.sliderItem').length;
    var $bar = $('.slider-progress .progressInner');
    if (totalSliderItem > 0){
      var time = 5;
      var $bar,
          $slick,
          $slideWrap,
          isPause,
          tick,
          percentTime;
      var slickOpts = {
        draggable: true,
        adaptiveHeight: false,
        dots: false,
        speed:10000,
        autoplay:true,
        mobileFirst: true,
        pauseOnDotsHover: true,
        fade:true,
        accessibility:false
        // arrows: false
      };
      
      $slick = $('.sliderItems');
      $slick.slick(slickOpts);
      
      $slideWrap = $('.highlightSlider');
      $slideWrap.append('<div class="slider-progress"><div class="progressInner"></div></div>');
      $slideWrap.on({
        mouseenter: function() {
          isPause = true;
        },
        mouseleave: function() {
          isPause = false;
        }
      })
      
      
      function startProgressbar() {
        return false;
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);

        var vid = document.getElementById("highlightSliderVideo");
            vid.play();
            vid.loop = true;
      }
      
      function interval() {
        if(isPause === false) {
          percentTime += 1 / (time+0.1);
          $bar.css({
            width: percentTime+"%"
          });
          if(percentTime >= 100)
            {
              $slick.slick('slickNext');
              startProgressbar();
            }
        }
      }
      
      
      function resetProgressbar() {
        $bar.css({
         width: 0+'%' 
        });
        clearTimeout(tick);
      }

      $('.sliderItems').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        startProgressbar();

      }); 

      startProgressbar();
    } else {
      $bar.css('display','none');
    }
    setTimeout(function(){
      $("body").addClass('success');
    },1000);
  }
});
function open_service(text,type){
  $("#hilightbanner_1,#hilightbanner_2").hide(0);
  $("#hilightbanner_"+type).show(0);
  delay(function(){
    if($('#service').hasClass('is-show')){
      $('#service').removeClass('is-show');
    }else{
      $('#service').removeClass('is-show');
      $('.text-title').text(text);
      $('#service').addClass('is-show');
    }
  },100);
}



/**
 *
 * TAB NEWS SCRIPT
 *
 */
// http://www.entheosweb.com/tutorials/css/tabs.asp
/* if in tab mode */
$("ul.tabs li").click(function() {
  //$("html").scrollTo("#HeadHilight",600,"easeInOutBack");
  $(".tab_content").removeClass('active');
  var activeTab = $(this).attr("data-rel"); 
  $("#"+activeTab).addClass('active');
  $(".tab_container").css({height:$("#"+activeTab).height()});
  $("ul.tabs li").removeClass("active");
  $(this).addClass("active");
  $(".tab_drawer_heading").removeClass("d_active");
  $(".tab_drawer_heading[data-rel^='"+activeTab+"']").addClass("d_active");
  $(".tab_container").stop().scrollTo("#"+activeTab,800,"easeInOutBack");
});
/* if in drawer mode */
$(".tab_drawer_heading").click(function() {
  
  $(".tab_content").removeClass('active')
  var d_activeTab = $(this).attr("data-rel"); 
  $("#"+d_activeTab).addClass('active')

$(".tab_drawer_heading").removeClass("d_active");
  $(this).addClass("d_active");

$("ul.tabs li").removeClass("active");
$("ul.tabs li[data-rel^='"+d_activeTab+"']").addClass("active");
});


/* Extra class "tab_last" 
 to add border to right side
 of last tab */
$('ul.tabs li').last().addClass("tab_last");
function autoFocus(){
  $(".tabs").find("li.active").trigger('click');
}
$(document).ready(function(){
  $('#slick_news').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#slick_news2').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#slick_photo').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#slick_procure').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#slick_job').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#boxChart').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#boxPhotoGraph').slick({infinite: false,autoplay: true,autoplaySpeed: 10000,cssEase: 'linear',accessibility:false});
  $('#ListBanner').slick({
  infinite: false,
  slidesToShow: 5,
  slidesToScroll: 5,
  autoplay: true,
  autoplaySpeed: 10000,
  accessibility:false,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ] 
});
  $(".tab_content").removeClass('active');
  $(".tab_content:first").addClass('active');
  $(".tab_container").scrollTop('.tab_content:first');
  autoFocus(1);
  //$('.imagefill').imagefill(); 
  $("#vdoplaylist li:not(.readMore) a").click(function(){
    //$("#AjaxLoadVDO iframe").attr("src",$(this).attr("href"));
    //$("#vdoplaylist li").removeClass('active');
    //$(this).parents('li').addClass('active');
    //return false;
  })
});

$(document).ready(function() {
  if(isIE==false){
    var device_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if(isMobile() || device_width<=768){
      $("body").addClass('isMobile');
    }else{
      $("body").lazyScrollLoading({
        lazyItemSelector : "div.lazyItem",
        onLazyItemFirstVisible : function(e, $lazyItems, $firstVisibleLazyItems) {
          $firstVisibleLazyItems.each(function() {
            var dataStyle = $(this).attr("data-lazy-style");
            if(dataStyle=='FromBottom'){
              $(this).animate({opacity:1,top:0}, 1000);
            }
            if(dataStyle=='FromLeft'){
              alert(1);
              $(this).animate({opacity:1,left:0}, 1000);
            }
            if(dataStyle=='FromRight'){
              $(this).animate({opacity:1,right:0}, 1000);
            }
          });
        }
      });
    }
  }
});
$(document).on("click",function(event) {
    //Service Not Hover
    if($("#service.isHover").length==0){
      $("#service").removeClass('is-show');
    }
});
$("#service").hover(function(){
  $(this).addClass('isHover');
},function(){
  $(this).removeClass('isHover');
})

if(isIE==false){
  jQuery(document).ready(function($) {
    var device_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if(isMobile() || device_width<=768 || 1){}else{
      $(window).scroll(function(event) {
        var st = $(this).scrollTop()*1;
        var tt = ((st/2)*-1);
        if(tt<-200){
          tt = -200;
        }
        var body_h = $('body').height();
        var window_h = $(window).height();
        var max_scoll = (body_h-window_h+tt);

        //$("title").html(tt+" "+st+" "+(body_h+tt)+" "+body_h+" "+max_scoll);
        $("#container_body2").css("top",tt+"px");
        if(st>=max_scoll){
          $(window).stop().scrollTop(max_scoll);
          return false;
        }
      });
    }
  });
}

/*----------  Auto Tab  ----------*/
$(".tab_container,ul.tabs").hover(function() {
  $(".tab_container").addClass('isHover');
}, function() {
  $(".tab_container").removeClass('isHover');
});
if(isIE==false){
  setInterval(function(){
    return false;
    if($(".tab_container.isHover").length==0){
      if($("ul.tabs li.active").next().length){
        $("ul.tabs li.active").next('li').trigger('click');
      }else{
        $("ul.tabs li").eq(0).trigger('click');
      }
    }
  },10000);
}
$(document).ready(function(){
  if(isIE==false){
    if($(window).scrollTop()>300){
      $("body").addClass('isMobile');
    }
  }
  function loadMiniData(){
    $(".boxminisite .miniData > ul").fadeOut(400,function(){
      var em = this;
      var r_id = $(".mini_left li.active a").attr("data-id");
      var p_id = $(".mini_right li.active a").attr("data-id");
      $.post("?",{a:'loadMiniData',r_id:r_id,p_id:p_id},function(resp){
        $(".miniData ul").html(resp);
        //$('.imagefill').imagefill();
        $(em).fadeIn(400);
      });
    });
  }
  $(".boxminisite .mini_left > ul > li a").click(function(){
    $(this).parents('ul').find("li").removeClass('active');
    $(this).parents('li').addClass('active');
    loadMiniData();
  })
  $(".mini_left a").click(function(event) {
    var region_id = $(this).attr("data-id");
    $.post("?",{a:'loadMiniProvince',region_id:region_id},function(resp){
      $(".mini_right").html(resp);
      loadMiniData();
    });
  });
  $(document).on("click","div.mini_right a",function(){
    $("div.mini_right li").removeClass('active');
    $(this).parents('li').addClass('active');
    var t = $(this).attr('data-name');
    $(".miniData h3").html("ข่าวสารจากจังหวัด "+t);
    loadMiniData();
  })
})
