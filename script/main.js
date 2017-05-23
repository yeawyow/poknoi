function isMobile(){
    return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
}
var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
//### Facebook API ####
/*function fbLogin(){
  FB.login(function(response) {
      if(response.status=='connected'){
        var fb_id = null;
        var fb_name = null;
        var fb_email = null;
        var fb_pic = null;
        FB.api('/me',{fields: 'name, email, picture,gender,link'},function(response) {
          fb_id = response.id;
          fb_name = response.name;
          fb_email = response.email;
            FB.api("/"+response.id+"/picture",{type: 'large'},function (response) {//Type : small, normal, album, large, square
              if (response && !response.error) {
                fb_pic = response.data.url;
                var data = {type:"facebook",id:fb_id,name:fb_name,email:fb_email,pic:fb_pic}
                checkMember(data);
              }
            });
        });
      }
  },{
    scope: 'email,public_profile',
    return_scopes: true
  }); 
}
function fbLogOut(){
  FB.logout(function(response) {
     // Person is now logged out
  });
}
function checkMember(datasocial){
  $.post("?_="+(+new Date()),{a:'social_login',type:datasocial.type,id:datasocial.id,name:datasocial.name,email:datasocial.email,pic:datasocial.pic},function(data){
      AlertMessage(data);
      if(data.error=='register'){
        window.location = data.url;
      }else if(data.error=='success'){
        if(data.url){
          window.location = data.url;
        }else{
          window.location = window.location;
        }
      }else if(data.url){
          window.location = data.url;
      }
  },'json');  
}

$(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '1709255869335262',
      version: 'v2.6' // or v2.0, v2.1, v2.2, v2.3
    });     
    //$('#loginbutton,#feedbutton').removeAttr('disabled');
    //FB.getLoginStatus(updateStatusCallback);
    FB.getLoginStatus(function(response) {
      console.log(response);
    });
  });
});

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
$(document).ready(function() {
  $(".btn_login_fb").click(function(){
    fbLogin();
  });
});
//### END FACEBOOK API ###  */




$(".btnLogOut").click(function(){
  history.pushState("", document.title, window.location.pathname);
  var url = $(this).attr("href");
  $.post(url,{a:'logout'},function(){
    window.location = window.location;
  });
  return false;
});
function detectIE() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
       // Edge (IE 12+) => return version number
       return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}
function AlertMessage(data,fn){
  if (detectIE==true){
    alert(data.message);
    if(typeof fn == 'function') {
      fn();
    }
    return false;
  }

  if(data.message){
    if(typeof fn == 'function') { 
      swal({
        title: data.error,
        text: data.message,
        type: data.error,
        showCancelButton: false,
        closeOnConfirm: true,
        timer:2000,
        onClose:fn
      });
    }else{
      if(data.error){
        swal(data.error, data.message, data.error);
      }else{
        swal(data.message);
      }
    }
  }
}
function ConfirmMessage(data,fn){
  if(data.message){
    if(fn){
      swal({
        title: data.error,
        text: data.message,
        type: data.error,
        showCancelButton: true,
        closeOnConfirm: true
      },fn);
    }else{
      if(data.error){
        swal(data.error, data.message, data.error);
      }else{
        swal(data.message);
      }
    }
  }
}

function copyToClipboard(txt) {
  clipboard.copy(txt);
  AlertMessage({error:'success',message:'Copy To Clipboard Success'});
}
(function($) {
  $.fn.replaceTemplate = function(obj) {
    var _this = this,
      el = $(this);
    return (function() {
      var original = el.html();
      el.html(el.html().replace(/{{([^}}]+)}}/g, function(wholeMatch, key) {
        var substitution = obj[$.trim(key)];
        return typeof substitution == 'undefined' ? wholeMatch : substitution;
      }));
      return el.html() == original ? _this : $(el).replaceTemplate(obj);
    })();
  };
})(jQuery);
// Event When Scrolling #################################
$(function () {
  // show hide subnav depending on scroll direction
  var position = $(window).scrollTop();
  $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      var headHeight = $("header").height()-$(".afterHeaderWrap").height();
      var bodyPadding = $("header").height();
      if (scroll > headHeight) {
        //$("body").addClass('miniHead');
        //$("body").css({"padding-top":bodyPadding});
      }else{
        //$("body").removeClass('miniHead');
        //$("body").css({"padding-top":0});
      }

      if (scroll > position) {
          //only Down
        /* -------------------------------------------*/
        //$("body").addClass('hideLeftMenu');
        /* -------------------------------------------*/  
      } else {
          //only UP
        /* -------------------------------------------*/
        //$("body").removeClass('hideLeftMenu');
        /* -------------------------------------------*/
      }

      position = scroll;
  });

});
var mainMenu = {
  start : function(){
    var dataisload = {};
      var sub2Menu = {};
      $(document).on("click",".btnSub2Menu",function(){
        var _this = $(this);
        delay(function(){
          var ul = _this.parent().find("ul");
              ul.find("li").remove();
          if(sub2Menu[_this.data("id")]!=undefined){
            var data = sub2Menu[_this.data("id")];
              $.each(data, function(index, val) {
                 var li = '<li class="col-sm-4"><a class="thumbnail" href="'+val.url+'"><img src="'+val.src+'" alt=""></a><a href="'+val.url+'" class="name">'+val.name+'</a></li>';
                 _this.parent().find("ul").append(li);
              });
              ul.find('li').each(function(index){
                if(index==0){
                  var de = 1;
                }else{
                  var de = 130;
                }
                //$(this).delay(index*de).animate({opacity:1,left:0}, 1000,"easeInOutBack");
                $(this).css({opacity:1,left:0});
              });
          }else{
            $.post("?_="+(+new Date()),{a:"loadsubmenu",id:_this.data("id")},function(data){
              
              sub2Menu[_this.data("id")] = data;
              $.each(data, function(index, val) {
                 var li = '<li class="col-sm-4"><a class="thumbnail" href="'+val.url+'"><img src="'+val.src+'" alt=""></a><a href="'+val.url+'" class="name">'+val.name+'</a></li>';
                 _this.parent().find("ul").append(li);
              });
              ul.find('li').each(function(index){
                if(index==0){
                  var de = 1;
                }else{
                  var de = 130;
                }
                //$(this).delay(index*de).animate({opacity:1,left:0}, 1000,"easeInOutBack");
                $(this).css({opacity:1,left:0});
              });
            },"json");
          }
        },100);
      })
      $(document).on("click","a#btnSub2Back",function(){//Responsive btn
        $(".HeaderSub2").removeClass('active');  
        $(".afterHeaderNavigationLeft").removeClass('subactive');
      })
      $(".HeaderSub2").click(function(){
        $(".btnSubMenu[data-id='"+$(this).attr("data-parentid")+"']").addClass('active');
      });
      //$(".HeaderSub2").hover(function(){
       // $(".btnSubMenu[data-id='"+$(this).attr("data-parentid")+"']").addClass('active');
      //},function(){
       // $(".btnSubMenu[data-id='"+$(this).attr("data-parentid")+"']").removeClass('active');
        //$(".afterHeaderNavigationLeft").removeClass('subactive');
      //})
      $(".btnSubMenu").click(function(){
        $(".afterHeaderNavigationLeft").addClass('subactive');
      })
      $(".btnSubMenu").click(function(){
        var id = $(this).data("id");
        var href = $(this).data("href");
        var type = $(this).data("type");
        $(".btnSubMenu").removeClass('active');
        var Sub2 = $(".HeaderSub2");
        $(this).addClass('active');
        if(type=='group'){
          Sub2.addClass('active');
        }else{
          Sub2.removeClass('active');
        }
        Sub2.attr("data-parentid",id);
        if(type!='link'){
          var _this = $(this);
          if(_this.attr("data-submenu")==''){
            $.post("?_="+(+new Date()),{a:"loadmenu",id:_this.data("id")},function(data){
              _this.attr("data-submenu",JSON.stringify(data));
              showMenu(_this);
            },"json");
          }else{
            showMenu(_this);
          }
        }
      });
      
      function showMenu(_this){
        var dataisload = jQuery.parseJSON(_this.attr("data-submenu"));
        $(".HeaderSub2 > ul").html("");
        $.each(dataisload, function(index, val) {
           var li = '<li class="'+val.type+'"><a class="btnSub2Menu" href="'+val.url+'" data-id="'+val.id+'" data-type="'+val.type+'">'+val.name+''+(val.type=='group'?'<span class="glyphicon glyphicon-menu-down"></span>':'')+'</a><ul class="'+val.menutype+'"></ul></li>';
           $(".HeaderSub2 > ul").append(li);
        });
      }
  }
}



// var app = angular.module('dltApp', []);
// app.controller('ang_obj_menu', function($scope, $http) {
//   var dataisload = {};
//   var sub2Menu = {};
//   $(document).on("mouseover",".btnSub2Menu",function(){
//     var _this = $(this);
//     delay(function(){
//       var ul = _this.parent().find("ul");
//           ul.find("li").remove();
//       if(sub2Menu[_this.data("id")]!=undefined){
//         var data = sub2Menu[_this.data("id")];
//           $.each(data, function(index, val) {
//              var li = '<li class="col-sm-4"><a class="thumbnail" href="'+val.url+'"><img src="'+val.src+'" alt=""></a><a href="'+val.url+'" class="name">'+val.name+'</a></li>';
//              _this.parent().find("ul").append(li);
//           });
//           ul.find('li').each(function(index){
//             if(index==0){
//               var de = 1;
//             }else{
//               var de = 130;
//             }
//             //$(this).delay(index*de).animate({opacity:1,left:0}, 1000,"easeInOutBack");
//             $(this).css({opacity:1,left:0});
//           });
//       }else{
//         $.post("?_="+(+new Date()),{a:"loadsubmenu",id:_this.data("id")},function(data){
          
//           sub2Menu[_this.data("id")] = data;
//           $.each(data, function(index, val) {
//              var li = '<li class="col-sm-4"><a class="thumbnail" href="'+val.url+'"><img src="'+val.src+'" alt=""></a><a href="'+val.url+'" class="name">'+val.name+'</a></li>';
//              _this.parent().find("ul").append(li);
//           });
//           ul.find('li').each(function(index){
//             if(index==0){
//               var de = 1;
//             }else{
//               var de = 130;
//             }
//             //$(this).delay(index*de).animate({opacity:1,left:0}, 1000,"easeInOutBack");
//             $(this).css({opacity:1,left:0});
//           });
//         },"json");
//       }
//     },100);
//   })
//   $(".HeaderSub2").hover(function(){
//     $(".btnSubMenu[data-id='"+$(this).attr("data-parentid")+"']").addClass('active');
//   },function(){
//     $(".btnSubMenu[data-id='"+$(this).attr("data-parentid")+"']").removeClass('active');
//   })
//   $(".btnSubMenu").hover(function(){
//     var id = $(this).data("id");
//     var href = $(this).data("href");
//     var type = $(this).data("type");
//     $(".btnSubMenu").removeClass('active');
//     var Sub2 = $(".HeaderSub2");
//     $(this).addClass('active');
//     if(type=='group'){
//       Sub2.addClass('active');
//     }else{
//       Sub2.removeClass('active');
//     }
//     Sub2.attr("data-parentid",id);
//     if(type=='link'){
//       return false;
//     }
//     var _this = $(this);
//     if(_this.attr("data-submenu")==''){
//       $.post("?_="+(+new Date()),{a:"loadmenu",id:_this.data("id")},function(data){
//         _this.attr("data-submenu",JSON.stringify(data));
//         $scope.showMenu(_this);
//       },"json");
//     }else{
//       $scope.showMenu(_this);
//     }
//   });

//   $scope.showMenu = function(_this){
//     var dataisload = jQuery.parseJSON(_this.attr("data-submenu"));
//     $(".HeaderSub2 > ul").html("");
//     $.each(dataisload, function(index, val) {
//        var li = '<li><a class="btnSub2Menu" href="'+val.url+'" data-id="'+val.id+'" data-type="'+val.type+'">'+val.name+'</a><ul class="'+val.menutype+'"></ul></li>';
//        $(".HeaderSub2 > ul").append(li);
//     });
//   }
// },function(){
//   $(".btnSubMenu").removeClass('active');
// });

$(function () {
   $('.btnHamburgerWrap').click(function(event) {
    event.preventDefault();
    // $('.btnHamburgerWrap').not(this).removeClass('active');
    // $('.btnHamburgerWrap').not(this).find('.btnHamburger').removeClass('active');
     $(this).toggleClass('active');
     $(this).find('.btnHamburger').toggleClass('active');
   });

  $('[data-toggle="afterHeaderNavigationLeft"]').click(function(event) {
    event.preventDefault();
    var thisTarget = $(this).data('target');
    var _thisTarget = $(thisTarget);
    _thisTarget.toggleClass('active').removeClass('subactive');

  });
  $('[data-toggle="afterHeaderNavigationRight"]').click(function(event) {
    event.preventDefault();
    var em = this;
    delay(function(){
      var thisTarget = $(em).data('target');
      var _thisTarget = $(thisTarget);
      if($('.afterHeaderNavigationRight.active').length){
        _thisTarget.removeClass('active');
      }else{
        _thisTarget.addClass('active');
      }
    },100);
  });
  $('.afterHeaderNavigationRight,.hamburgerRight').hover(function(){
    $('.afterHeaderNavigationRight').addClass('isHover');
  },function(){
    $('.afterHeaderNavigationRight').removeClass('isHover');
  });
  $(document).on("click",function(event) {
    if($('.afterHeaderNavigationRight.isHover').length==0 && $('.afterHeaderNavigationRight.active').length){
      $('.afterHeaderNavigationRight,.hamburgerRight,.hamburgerRight .btnHamburger').removeClass('active');
    }
  });
  $('.eqh').matchHeight();
  $(document).keyup(function(e) {
    //if (e.keyCode === 13) $('.save').click();     // enter
    if (e.keyCode === 27) {  // esc
      if($(".afterHeaderNavigationRight.active").length){
        $('.afterHeaderNavigationRight,.hamburgerRight,.hamburgerRight .btnHamburger').removeClass('active');
      }
      $(".afterHeaderNavigationLeft,.btnHamburgerWrap,.btnHamburger").removeClass('active subactive');
      $("#service").removeClass('is-show');
    }
  });

  $(".HeaderSub2").click(function(){
    $(this).addClass('active');
    $(".afterHeaderNavigationLeft,#btnMainSite,#btnMainSite .btnHamburger").addClass('active');
  });
  //,function(){
  //})

  $(document).on("mouseenter",".afterHeaderNavigationLeft",function(){
    var _this = this;
    $(".afterHeaderNavigationLeft,#btnMainSite,#btnMainSite .btnHamburger").addClass('active');
  });
  $(document).on("mouseleave",".afterHeaderNavigationLeft",function(){
    var _this = this;
     delay(function(){
      $(_this).removeClass('active');
      $(".afterHeaderNavigationLeft,#btnMainSite,#btnMainSite .btnHamburger,.HeaderSub2,.btnSubMenu").removeClass('active subactive');
    },600);
  });
  $(document).on("click",".HeaderSub2 > ul > li",function(){
    var isClass = $(this).hasClass('active');
    $(".HeaderSub2 > ul > li").removeClass('active');
    if(!isClass){
      $(this).addClass('active');
    }
  });
  $(".switchLanguage button").click(function(event) {
    var url = window.location.href;
    var L = $(this).data("lang");
    var O = L=='th'?'en':'th';
    url = url.replace("/"+O+"/","/"+L+"/");
    window.location = url;
  });
});
$(".headerBrand").mouseenter(function(){
  $(this).find('.wingwing').stop().css("left","-110px");
  $(this).find('.wingwing').animate({left: "100%"},2000,function(){
    $(this).css("left","-110px");
  });
});

var viewDisplay = {
  start : function(){
    var box = $("#fnViewDisplay");
    var _target = box.attr("data-target");
    var timeOutSet = null;
    box.find(".btn").click(function(){
      clearTimeout(timeOutSet);
      var display = $(this).find("input").val();
      $.post("?",{a:'setlayout',display:display})
      var _rows = $(_target).find(".box-thumbnail");
      _rows.each(function(index,el){
        $(this).delay(index*100).queue(function(next) {
          $(this).removeClass('animated zoomIn').addClass('animated flipOutX');
          next();
        });
      });
      timeOutSet = setTimeout(function(){
        $(_target).removeClass("display-datalist display-grit display-pinterest").addClass(display);
        delay(function(){
          _rows.each(function(index,el){
            $(this).delay(index*100).queue(function(next) {
              $(this).removeClass('animated flipOutX').addClass('animated zoomIn');
              next();
            });
          });
        },400);
      },1000);
    })
  }
}


jQuery(document).ready(function($) {
  $(window).stellar();//Scoll Show Content
  mainMenu.start();
  viewDisplay.start();
  //$('.imagefill').imagefill();//Auto Cover Image
  //All DropDown Event By:Na!
  $(".dropdown-menu li.active a").each(function(){
    var ul = $(this).parents("ul.dropdown-menu");
    var targetlabel = ul.attr("data-targetlabel");
    $(targetlabel).html($(this).text());
  });
  $(".dropdown-menu li a").click(function(){
    var ul = $(this).parents('.dropdown-menu');
    var id = $(this).attr("data-id");
    var targetlabel = ul.attr("data-targetlabel");
    var fn_onchane = ul.attr("data-fn_onchane");
    var input = ul.attr("data-input");
    $(targetlabel).html($(this).text());
    ul.find("li").removeClass("active");
    $(this).parent("li").addClass("active");
    if(input){
      $(input).val(id);
    }
    var fn = eval(fn_onchane);
    if (typeof fn == 'function') {
        fn();
    }
  });

  
  $(document).on("mouseenter",".btnMultiShareLink",function(){
    var url = $(this).attr("href");
    $(this).socialShare({
      social: 'facebook,google,linkedin,pinterest,twitter',
      whenSelect: true,
      selectContainer: '.btnMultiShare',
      shareUrl:url
    });
    $(this).attr("href","javascript:;").removeClass('btnMultiShareLink');
  })
}); 



var TypeFocus = 'login';
(function($){//Member Script
  $('.open-popup-member').magnificPopup({
    type:'inline',
    removalDelay:800,
    callbacks: {
      open: function() {
        $(".popupmember").removeClass('fadeOutDown').addClass('animated fadeInDown');
        setTimeout(function(){
          $("#registerfrm #intCheckEmail").val("");
          if(TypeFocus=='login'){
            $("#loginForm #email").focus();
          }else{
            $('#registerfrm #intCheckEmail').focus();
          }
        },500);
      },
      close: function() {
        $(".popupmember").removeClass('fadeInDown').addClass('animated fadeOutDown');
      }
    }
  });
  $("#registerfrm").validate();
  $("#FmforgetPass").validate();
  $("#loginForm").validate();
  $("#fm_register").validate({
    rules: {
      password: "required",
      password_again: {
        equalTo: "#password"
      }
    }
  });
})(jQuery);
var recaptchaCallback = function() {
  if($("#GoogleCaptcha").length==0){return false;}
  if($("#GoogleCaptcha").find("iframe").length){
    grecaptcha.reset();
    return false;
  }
  grecaptcha.render("GoogleCaptcha", {
    sitekey: '6LchoiUTAAAAAChQMOoX-jGamOiXFKqKhBENJrEM',
    callback: function(response) {
      $.post("?",{a:"verify",c:response})
    }
  });
}
// jQuery(document).ready(function($) {
//   setTimeout(function(){
//     recaptchaCallback();
//   },2000)
// });


var isIE = detectIE();

var btnPageSie = {
  start:function(){
    var ex = $(".txtautosize");
    ex.each(function(index,el){
      var w = $(el).css("font-size").replace("px","");
      $(el).attr("data-size",w);
    });
    $("a.btnSetFrontSize").click(function(){
      $("a.btnSetFrontSize").removeClass('active');
      $(this).addClass('active');
      var size = $(this).attr("data-size");
      ex.each(function(index,el){
        var w = $(el).attr("data-size");
        var new_w = Math.ceil(w*size);
        $(el).css("font-size",new_w+"px");
      });
    })
  }
}
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
var btnSubscript = {
  start:function(){
    var _this = this;
    var btn = $("#btnSubscript");
    var email = $("#intSubscriptEmail");
    var fm = $("#fm_subscript");
    fm.submit(function(){
      if($.trim(email.val())){
        if(isEmail(email.val())){
          $.post("?",{a:'checkSubscript',email:email.val()},function(html){
            $("#html_subscript").html(html);
            $.magnificPopup.open({
              items: {
                src: '#subscript-popup'
              },
              type: 'inline'
            });
          });
        }else{
          alert("เธฃเธนเธเนเธเธเธญเธตเน€เธกเธฅเนเธกเนเธ–เธนเธเธ•เนเธญเธ");
          email.select();
        }
      }else{
        email.focus();
      }
      return false;
    });
  }
}
$(function() {
  btnPageSie.start();
  btnSubscript.start();
  $("#s").focusout(function(event) {
    $(this).val('');
  });
});