$(document).ready(function(){
var canvas=document.getElementById('m_canvas');
itsWidth=canvas.width;
itsHeight=canvas.height;

ctx=canvas.getContext('2d');
ctx.beginPath();
ctx.moveTo(0,0);
ctx.fillRect(0,0,itsWidth,itsHeight);
ctx.fillStyle="#000";
ctx.fill();

stars=[];
for(var i=0;i<100;i++){
  stars.push({x:Math.random()*itsWidth,y:Math.random()*itsHeight,radius:Math.random()*0.5});
  drawStar(stars[i].x,stars[i].y,stars[i].radius);
}

setInterval(function(){
  for(var i=0;i<100;i++){
    ctx.beginPath();
    var x=stars[i].x;
    var y=stars[i].y;
    var radius=stars[i].radius;
    //ctx.arc(++x:-x?x>0&&x<itsWidth,++y:-y?x>0&&x<itsHeight,radius,0,2*Math.PI,false);
    if(x>0&&y>0&&x<itsWidth&&y>itsHeight){
    ctx.arc(x+=10,y+=10,2,0,2*Math.PI,false);
  }else{
    ctx.arc(-x,-y,radius,0,2*Math.PI,false);
  }
    ctx.fillStyle="#fff";
    ctx.fill();
  }
},100);
});

function drawStar(x,y,radius){
  ctx.beginPath();
  ctx.arc(x,y,radius,0,2*Math.PI,false);
  ctx.fillStyle="#fff";
  ctx.fill();
}
