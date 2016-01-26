var Speed1 = 30; //速度(毫秒)
var Space1 = 20; //每次移动(px)
var PageWidth1 =228; //翻页宽度
var fill1 = 0; //整体移位
var MoveLock1 = false;
var MoveTimeObj1;
var Comp1 = 0;
var AutoPlay1Obj = null;
GetObj1("List2").innerHTML = GetObj1("List1").innerHTML;
GetObj1('ISL_Cont1').scrollLeft = fill1;
GetObj1("ISL_Cont1").onmouseover = function(){clearInterval(AutoPlay1Obj);}
GetObj1("ISL_Cont1").onmouseout = function(){AutoPlay1();}
AutoPlay1();
function GetObj1(objName1){if(document.getElementById){return eval('document.getElementById("'+objName1+'")')}else{return eval

('document.all.'+objName1)}}
function AutoPlay1(){ //自动滚动
clearInterval(AutoPlay1Obj);
AutoPlay1Obj = setInterval('ISL_GoDown1();ISL_StopDown1();',2000); //间隔时间
}
function ISL_GoUp1(){ //上翻开始
if(MoveLock1) return;
clearInterval(AutoPlay1Obj);
MoveLock1 = true;
MoveTimeObj1 = setInterval('ISL_ScrUp1();',Speed1);
}
function ISL_StopUp1(){ //上翻停止
clearInterval(MoveTimeObj1);
if(GetObj1('ISL_Cont1').scrollLeft % PageWidth1 - fill1 != 0){
Comp1 = fill1 - (GetObj1('ISL_Cont1').scrollLeft % PageWidth1);
Comp1Scr1();
}else{
MoveLock1 = false;
}
AutoPlay1();
}
function ISL_ScrUp1(){ //上翻动作
if(GetObj1('ISL_Cont1').scrollLeft <= 0){GetObj1('ISL_Cont1').scrollLeft = GetObj1

('ISL_Cont1').scrollLeft + GetObj1('List1').offsetWidth}
GetObj1('ISL_Cont1').scrollLeft -= Space1 ;
}
function ISL_GoDown1(){ //下翻
clearInterval(MoveTimeObj1);
if(MoveLock1) return;
clearInterval(AutoPlay1Obj);
MoveLock1 = true;
ISL_ScrDown1();
MoveTimeObj1 = setInterval('ISL_ScrDown1()',Speed1);
}
function ISL_StopDown1(){ //下翻停止
clearInterval(MoveTimeObj1);
if(GetObj1('ISL_Cont1').scrollLeft % PageWidth1 - fill1 != 0 ){
Comp1 = PageWidth1 - GetObj1('ISL_Cont1').scrollLeft % PageWidth1 + fill1;
Comp1Scr1();
}else{
MoveLock1 = false;
}
AutoPlay1();
}
function ISL_ScrDown1(){ //下翻动作
if(GetObj1('ISL_Cont1').scrollLeft >= GetObj1('List1').scrollWidth){GetObj1('ISL_Cont1').scrollLeft =

GetObj1('ISL_Cont1').scrollLeft - GetObj1('List1').scrollWidth;}
GetObj1('ISL_Cont1').scrollLeft += Space1 ;
}
function Comp1Scr1(){
var num1;
if(Comp1 == 0){MoveLock1 = false;return;}
if(Comp1 < 0){ //上翻
if(Comp1 < -Space1){
   Comp1 += Space1;
   num1 = Space1;
}else{
   num1 = -Comp1;
   Comp1 = 0;
}
GetObj1('ISL_Cont1').scrollLeft -= num1;
setTimeout('Comp1Scr1()',Speed1);
}else{ //下翻
if(Comp1 > Space1){
   Comp1 -= Space1;
   num1 = Space1;
}else{
   num1 = Comp1;
   Comp1 = 0;
}
GetObj1('ISL_Cont1').scrollLeft += num1;
setTimeout('Comp1Scr1()',Speed1);
}
}

