var Speed3 = 30; //速度(毫秒)
var Space3 = 20; //每次移动(px)
var PageWidth3 = 145; //翻页宽度
var fill3 = 0; //整体移位
var MoveLock3 = false;
var MoveTimeObj3;
var Comp3 = 0;
var AutoPlay3Obj = null;
GetObj3("List6").innerHTML = GetObj3("List5").innerHTML;
GetObj3('ISL_Cont3').scrollLeft = fill3;
GetObj3("ISL_Cont3").onmouseover = function(){clearInterval(AutoPlay3Obj);}
GetObj3("ISL_Cont3").onmouseout = function(){AutoPlay3();}
AutoPlay3();
function GetObj3(objName3){if(document.getElementById){return eval('document.getElementById("'+objName3+'")')}else{return eval

('document.all.'+objName3)}}
function AutoPlay3(){ //自动滚动
clearInterval(AutoPlay3Obj);
AutoPlay3Obj = setInterval('ISL_GoDown3();ISL_StopDown3();',3000); //间隔时间
}
function ISL_GoUp3(){ //上翻开始
if(MoveLock3) return;
clearInterval(AutoPlay3Obj);
MoveLock3 = true;
MoveTimeObj3 = setInterval('ISL_ScrUp3();',Speed3);
}
function ISL_StopUp3(){ //上翻停止
clearInterval(MoveTimeObj3);
if(GetObj3('ISL_Cont3').scrollLeft % PageWidth3 - fill3 != 0){
Comp3 = fill3 - (GetObj3('ISL_Cont3').scrollLeft % PageWidth3);
Comp3Scr3();
}else{
MoveLock3 = false;
}
AutoPlay3();
}
function ISL_ScrUp3(){ //上翻动作
if(GetObj3('ISL_Cont3').scrollLeft <= 0){GetObj3('ISL_Cont3').scrollLeft = GetObj3

('ISL_Cont3').scrollLeft + GetObj3('List5').offsetWidth}
GetObj3('ISL_Cont3').scrollLeft -= Space3 ;
}
function ISL_GoDown3(){ //下翻
clearInterval(MoveTimeObj3);
if(MoveLock3) return;
clearInterval(AutoPlay3Obj);
MoveLock3 = true;
ISL_ScrDown3();
MoveTimeObj3 = setInterval('ISL_ScrDown3()',Speed3);
}
function ISL_StopDown3(){ //下翻停止
clearInterval(MoveTimeObj3);
if(GetObj3('ISL_Cont3').scrollLeft % PageWidth3 - fill3 != 0 ){
Comp3 = PageWidth3 - GetObj3('ISL_Cont3').scrollLeft % PageWidth3 + fill3;
Comp3Scr3();
}else{
MoveLock3 = false;
}
AutoPlay3();
}
function ISL_ScrDown3(){ //下翻动作
if(GetObj3('ISL_Cont3').scrollLeft >= GetObj3('List5').scrollWidth){GetObj3('ISL_Cont3').scrollLeft =

GetObj3('ISL_Cont3').scrollLeft - GetObj3('List5').scrollWidth;}
GetObj3('ISL_Cont3').scrollLeft += Space3 ;
}
function Comp3Scr3(){
var num3;
if(Comp3 == 0){MoveLock3 = false;return;}
if(Comp3 < 0){ //上翻
if(Comp3 < -Space3){
   Comp3 += Space3;
   num3 = Space3;
}else{
   num3 = -Comp3;
   Comp3 = 0;
}
GetObj3('ISL_Cont3').scrollLeft -= num3;
setTimeout('Comp3Scr3()',Speed3);
}else{ //下翻
if(Comp3 > Space3){
   Comp3 -= Space3;
   num3 = Space3;
}else{
   num3 = Comp3;
   Comp3 = 0;
}
GetObj3('ISL_Cont3').scrollLeft += num3;
setTimeout('Comp3Scr3()',Speed3);
}
}

