<?php /* Smarty version 2.6.6, created on 2017-05-14 10:02:44
         compiled from js.tpl */ ?>
<?php echo '
<script type="text/javascript"> 
    function keyfind(e)
    {
        var code;
        if (!e) var e = window.event;
        if (e.keyCode) code = e.keyCode;
        else if (e.which) code = e.which;
        var character = String.fromCharCode(code);
        if($(\'#header_searchbar\').css(\'display\')!=\'none\'){
            character=0;}
            if(character ==\'J\' || character ==\'j\'){

               var a=new Array();
               var b=new Array();
               var c=new Array();
               var i=0;
               $(\'.gag-link\').each(function(){
                a[i]=$(this).attr(\'id\');
                b[i]=$(this).offset().top; 
                c[i]=$(this).height();

                i++;
            });
               var curloc=$(window).scrollTop();
               var j=0;
               var k=0;

               for(;j<a.length;){

                if(b[j]+c[j]-39>curloc && curloc >= b[j]-39){
                    var k=j;
                    break;
                }
                j++;
            }
            if(k == a.length-1){ $(\'#go-next\').click();  }
            $.scrollTo(b[k+1]-38);

        }
        if(character ==\'K\' || character ==\'k\'){
           var a=new Array();
           var b=new Array();
           var c=new Array();
           var i=0;
           $(\'.gag-link\').each(function(){
            a[i]=$(this).attr(\'id\');
            b[i]=$(this).offset().top; 
            c[i]=$(this).height();
            i++;
        });
           var curloc=$(window).scrollTop();
           var j=0;
           var k=0;
           for(;j<a.length;){
            if(b[j]+c[j]-39>curloc && curloc >= b[j]-39){
                var k=j;
                break;
            }
            j++;
        }
        $.scrollTo(b[k-1]-38);
    }
    if(character==\'L\' || character==\'l\'){
       var a=new Array();
       var b=new Array();
       var i=0;
       $(\'.gag-link\').each(function(){
        a[i]=$(this).attr(\'gagId\');
        b[i]=$(this).offset().top; 
        i++;
    });
       var curloc=$(window).scrollTop();
       var j=0;
       for(;j<a.length;){
        if(b[j]>curloc){
            break;
        }
        j++;
    }
    $.scrollTo(\'.gag-link:eq(\'+(j)+\')\');
    $(\'#post_love_\'+a[j]).trigger(\'click\');
}
if(character==\'H\' || character==\'h\'){
   var a=new Array();
   var b=new Array();
   var i=0;
   $(\'.gag-link\').each(function(){
    a[i]=$(this).attr(\'gagId\');
    b[i]=$(this).offset().top; 
    i++;
});
   var curloc=$(window).scrollTop();
   var j=0;
   for(;j<a.length;){
    if(b[j]>curloc){
        break;
    }
    j++;
}
$.scrollTo(\'.gag-link:eq(\'+(j)+\')\');
$(\'#vote-down-btn-\'+a[j]).trigger(\'click\');
}
if(character==\'R\' || character==\'r\'){
    $(\'#rand-but\').click();
}
}
$(window).scroll(function () {

   var a=new Array();
   var b=new Array();
   var c=new Array();
   var i=0;
   $(\'.gag-link\').each(function(){
    a[i]=$(this).attr(\'gagId\');
    b[i]=$(this).offset().top; 
    c[i]=$(this).height();
    i++;
});
   var curloc=$(window).scrollTop();
   var j=0;
   var k=0;

   for(;j<a.length;){

    if(b[j]+c[j]>curloc && curloc > b[j]){
        var k=j;
        break;
    }
    j++;
}            
var winh = $(window).height();
var ach  = $(\'#action-\'+a[0]).height()+30;

if((curloc > (b[k]+c[k] - ach)) || curloc < b[0]){

    $(\'.b9gcs-stop\').css(\'position\',\'static\');
    $(\'.b9gcs-stop\').css(\'top\',\'!important\');


}else{
    if((k==0 && curloc >= b[k]) || k>=1){
        $(\'#action-\'+a[k]).css(\'position\',\'fixed\');
        $(\'#action-\'+a[k]).css(\'top\',\'55px\');
    }
}                
});

function toggle(obj) {
    var el = document.getElementById(obj);
    if ( el.style.display != \'none\' ) {
        $(\'#\' + obj).hide();
    }
    else {
        $(\'#\' + obj).show();
    }
}

$(function() {
  var $blocks = $(\'.gifContent\');
  var $window = $(window);

  $window.on(\'scroll\', function(e){
    $blocks.each(function(i,elem){
      isScrolledIntoView($(this));
    });
  });
});

function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();
  var elemOffset = 0;
  
  if(elem.data(\'offset\') != undefined) {
    elemOffset = elem.data(\'offset\');
  }
  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();
  
  if(elemOffset != 0) { // custom offset is updated based on scrolling direction
    if(docViewTop - elemTop >= 0) {
      // scrolling up from bottom
      elemTop = $(elem).offset().top + elemOffset;
    } else {
      // scrolling down from top
      elemBottom = elemTop + $(elem).height() - elemOffset;
    }
  }
  
  if((elemBottom <= docViewBottom) && (elemTop >= docViewTop)) {
    // once an element is visible exchange the classes
    $(elem).find(\'.thumb-wrapper\').hide();
    $(elem).find(\'.gifimg\').show();
  } else {
    $(elem).find(\'.thumb-wrapper\').show();
    $(elem).find(\'.gifimg\').hide();
  }
}

</script>
'; ?>