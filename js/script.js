$(function(){


/******************************
CONTACT FORM
******************************/
var sayHello = $('#hello');
var contactWindow = $(".contactWindow");

sayHello.on('click',function(){
  contactWindow.fadeIn(1000);

  contactWindow.find("#close").on('click',function(){
    $(this).parent().fadeOut(1000);
  })
});

/***************************************
QUICK CONTACT LINK
**************************************/
$('#quickContact').on('click',function(){
  sayHello.trigger( "click" );
});

/***************************************
ROLL DOWN MESSAGE INPUT
***************************************/
$("#contact-message").on('focusin',function(){

  $(this).animate({
    rows : 15,
  }, 500, function() {});

  // $(this).attr('rows','15');
  // $(this).on('focusout', function(){
  //   $(this).attr('rows','3');
  // })
});

/***************************************
SEND BUTTON EVENT - COLOR CHANGE
***************************************/
$("#contact-submit").on('mouseover',function(){
  $(this).css('backgroundColor','#FB6A30');
  $(this).on('mouseout',function(){
    $(this).css('backgroundColor','#303036');
  });
});

/***********************************
IMG PREVIEV EVENT ON click
***********************************/
$(".preview").find('img').on('click',function(){
  var id = $(this).data('id');
  displayWork(id);

});

function displayWork(id) {
  var width = $( window ).width(); //get viewport width
  console.log(width);
  $('#work-'+id).removeClass('hideMe').css({'position' : 'absolute', 'background-color' : 'rgba(48,48,54,0.9)'}).animate({
    top: "-90%",
    left: width/4, //sets up 25% left margin
    minWidth: "50%"
  }, 1000, function() {
    $(this).find('i').css('opacity','1').on('click',function(){
      $(this).removeAttr('style');
      $(this).parent().removeAttr('style');
    });
  });
}

/***********************************
TOP BUTTON APPEAR
***********************************/
$(window).scroll( function(){
  var window_bottom = $(window).scrollTop();
  if (window_bottom >=  100) {
    $('#top').fadeIn(2000);
  }
  else {
    $('#top').fadeOut(2000);
  }
   });


/********************************
PORTFOLIO ARROWS EVENT
********************************/
var next = $('#nextArrow');
var prev = $('#prevArrow');
var active = $('.active');
var inactive = $('.inactive');
var time = 500;
var images = $('.preview').find('img');

next.on('click',function(){
  active.fadeOut(time);
  inactive.delay(time).fadeIn(time);
  $(this).fadeOut(time);
  prev.delay(time).fadeIn(time);
});

prev.on('click', function(){
  inactive.fadeOut(time);
  active.delay(time).fadeIn(time);
  $(this).fadeOut(time);
  next.delay(time).fadeIn(time);
});



});
