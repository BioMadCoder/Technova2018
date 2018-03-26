$(document).ready(function(){

var count=0;
var introLines=['<div class="branch-name">Biomedical</div><div class="tag-line">A COMMITMENT TO COMMUNITY<br><br><br></div>','<div class="branch-name">MEDITRONICA</div><div class="tag-line">Department of Biomedical Engineering,<br>DCRUST, Murthal<br><br> Welcomes you!</div>'];
setInterval(function(){
      $('.intro-text-content').css({'opacity': '0'});
      if(count<introLines.length-1){
        count++;
      }else{
        count=0;
      }
      $('.intro-text-content').html(introLines[count]);
          $('.intro-text-content').animate({opacity: '1'},"slow");
      },5000);
});
