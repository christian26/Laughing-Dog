$(function () {
  if(navigator.userAgent.indexOf("IE 7.0") != -1 && location.pathname.indexOf('home.php') == -1){
     var sitePath = location.pathname;
     var newURLarray = sitePath.split('/');
     var newURL = newURLarray.join('/');
     location.href = location.protocol + '//' + location.hostname + newURL +'home.php';
  }

if(navigator.userAgent.indexOf("IE 7.0") == -1){
  var siteURL = location.protocol + '//' + location.hostname + '/' + location.pathname + '/';
  var currentPage = siteURL.split('/');
  currentPage = currentPage[currentPage.length-1];

  function initAnimation(){
    // if( currentPage == 'home' || currentPage == 'about' || currentPage == 'clients' || currentPage == 'contact'){
    //   unloadPage('home');
    //   loadPage(currentPage,'home');
    //   $('body').attr('data-page',currentPage);
    // }else{
      setTimeout(function(){
        $('.logo').velocity("transition.shrinkIn",{ duration:1000 });
      }, 900);
      setTimeout(function(){
        $('.content-nav').velocity("fadeIn",{ duration:1200 });
      },1500);
      setTimeout(function(){
        $('.home .social-icons').velocity("transition.slideUpIn",{ duration:1000 });
      },1700);
    // }
  }


  /* page unload process */

  function unloadHome(){
    setTimeout(function(){
      $('#main_header').velocity("transition.slideDownBigIn",{ duration:300 });
    },500);
  }

  function unloadAboutUs(){}
  function unloadClients(){
    $('#clients .inner').css('transform','none');}
  function unloadContact(){}

  function unloadPage(page){
      switch(page){
        case 'home':
          unloadHome();
          break;
        case 'abouts':
          unloadAboutUs();
          break;
        case 'clients':
          unloadClients();
          break;
        case 'contact':
          unloadContact();
          break;
      }
      setTimeout(function(){
          $('#'+page+' .inner').velocity("transition.shrinkOut",{ duration:500 });
          setTimeout(function(){
           $('.page-content .inner').css('display','none');
          },50)
      },800);
  }

  /* Loading pages */

  function loadHome(){
    $('#main_header').velocity("fadeOut",{ duration:500 });
  }
  function loadAboutUs(){}
  function loadClients(){
    $('#clients .inner').css('transform','none');
  }
  function loadContact(){}
  
  var tmpLastRnd = Math.floor(Math.random() * 4);
  function loadPage(newPage,page){
       $('body').removeClass(page).attr('data-page',newPage).addClass(newPage);
       $('#'+page).css('z-index',z);
       $('#'+newPage).css('z-index',++z);
       var startPosition = [['top','100%'],['left','-100%'],['left','100%'],['top','-100%']];
       var endPosition = [['top','0'],['left','0'],['left','0'],['top','0']];
       var rndAnimationNum = Math.floor(Math.random() * 4);
       while(rndAnimationNum == tmpLastRnd){
         rndAnimationNum = Math.floor(Math.random() * 4);
         if(rndAnimationNum != tmpLastRnd){
          tmpLastRnd = rndAnimationNum;
          break;
          }
       }
       tmpLastRnd = rndAnimationNum;

       if(startPosition[rndAnimationNum][0] == 'top'){
          $('#'+newPage).css({top: startPosition[rndAnimationNum][1], left: 0});
          $('#'+newPage).velocity("fadeIn",{ duration:1000 }).velocity({ top: endPosition[rndAnimationNum][1] }, 600);
       }else{
          $('#'+newPage).css({left: startPosition[rndAnimationNum][1], top: 0});
          $('#'+newPage).velocity("fadeIn",{ duration:1000 }).velocity({ left: endPosition[rndAnimationNum][1] }, 600);
       }
       setTimeout(function(){
          switch(newPage){
              case 'home':
                loadHome();
                break;
              case 'about':
                loadAboutUs();
                break;
              case 'clients':
                loadClients();
                break;
              case 'contact':
                loadContact();
                break;
            }
          $('#'+newPage+' .inner').velocity("fadeIn",{ duration:600 });
          setTimeout(function(){
            
          },500);
       },1600);
}

  var z = 2;
  initAnimation();
  $('.content-nav li a').add('#main_header li a').on('click',function(e){
    e.preventDefault();
    var page = $('body').attr('data-page');
    var newPage = $(this).attr('data-page');
    if(page !== newPage){
      $(this).velocity("callout.pulse",{ duration:100 });
      unloadPage(page);
      loadPage(newPage,page);
      //history.pushState(null, null, siteURL+newPage);
      if($('#main_header').hasClass('mobile-open')){
        $('#main_header').velocity({ height: '40px'},300).removeClass('mobile-open');
        $('#show-mobile-menu').removeClass('visible');
      }
    }
  });
  $('#show-mobile-menu').on('click',function(e){
    if(!$(this).hasClass('visible')){
      $('#main_header').velocity({ height: '140px'},300).addClass('mobile-open');
      $(this).addClass('visible');
    }else{
      $('#main_header').velocity({ height: '40px'},300).removeClass('mobile-open');
      $(this).removeClass('visible');
    }
  });
  $('.page-content').on('click',function(){
    if($('#main_header').hasClass('mobile-open')){
      $('#main_header').velocity({ height: '40px'},300).removeClass('mobile-open');
      $('#show-mobile-menu').removeClass('visible');
    }
  });
  window.onresize = function(){
      if($('body').width() > 600){
        $('#main_header').css('height','80px');
      }else{
        $('#main_header').css('height','40px');
      }
  };
}
});
