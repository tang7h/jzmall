
  
<SCRIPT>
  var dir=1;//每步移动像素，大＝快
  var speed=10;//循环周期（毫秒）大＝慢
  var MyMar=null;
  function Marquee(){//正常移动
   var demo = document.getElementById("demo");
   var demo2 = document.getElementById("demo2");
   if (dir>0  && (demo2.offsetWidth-demo.scrollLeft)<=0)
   {
    demo.scrollLeft=0;
   }
   if (dir<0 &&(demo.scrollLeft<=0))
   {
    demo.scrollLeft=demo2.offsetWidth;
   }
   demo.scrollLeft+=dir;
  }
  function onmouseoverMy() {
   window.clearInterval(MyMar);
  }//暂停移动
  function onmouseoutMy() {
   MyMar=setInterval(Marquee,speed);
  }//继续移动
  function r_left()
  {
   if (dir==-1)
    dir=1;
  }//换向左移
  function r_right()
  {
   if (dir==1)
    dir=-1;
  }//换向右移
 
  function IsIE()
  {
   var browser=navigator.appName
   if ((browser=="Netscape"))
   {
    return false;
   }
   else if(browser=="Microsoft Internet Explorer")
   {
    return true;
   }
   else
   {
    return null;
   }
  }
  
  var _IsIE = IsIE();
  var _MousePX = 0;
  var _MousePY = 0;
  var _DivLeft = 0;
  var _DivRight = 0;
  var _AllDivWidth = 0;
  var _AllDivHeight = 0;
  function MoveDiv(e){
   var obj = document.getElementById("demo");
     _MousePX = _IsIE ? (document.body.scrollLeft + event.clientX) : e.pageX;
    _MousePY = _IsIE ? (document.body.scrollTop + event.clientY) : e.pageY;
   //Opera Browser Can Support ''window.event'' and ''e.pageX''
   var obj1 = null;
   if(obj.getBoundingClientRect)
   {
    //IE
    obj1 = document.getElementById("demo").getBoundingClientRect();
    _DivLeft = obj1.left;
    _DivRight = obj1.right;
    _AllDivWidth = _DivRight - _DivLeft;
   }
   else if(document.getBoxObjectFor)
   {
    //FireFox
    obj1 = document.getBoxObjectFor(obj); 
    var borderwidth = (obj.style.borderLeftWidth != null && obj.style.borderLeftWidth != "") ? parseInt(obj.style.borderLeftWidth) : 0;
    _DivLeft = parseInt(obj1.x) - parseInt(borderwidth);
    _AllDivWidth = Cut_Px(obj.style.width);
    _DivRight = _DivLeft + _AllDivWidth;
   }
   else
   {
    //Other Browser(Opera)
    _DivLeft = obj.offsetLeft;
    _AllDivWidth = Cut_Px(obj.style.width);
    var parent = obj.offsetParent;
    if(parent != obj)
    {
     while (parent) {  
      _DivLeft += parent.offsetLeft; 
      parent = parent.offsetParent;
     }
    }
    _DivRight = _DivLeft + _AllDivWidth;
   }
 
   var pos1,pos2;
   pos1 = parseInt(_AllDivWidth * 0.4) + _DivLeft;
   pos2 = parseInt(_AllDivWidth * 0.6) + _DivLeft;
 
   if(_MousePX > _DivLeft && _MousePX < _DivRight)
   {
    if(_MousePX > _DivLeft && _MousePX < pos1)//Move left
    {
     r_left();
    }
    else if(_MousePX < _DivRight && _MousePX > pos2)//Move right
    {
     r_right();
    }
	
    if(_MousePX > pos1 && _MousePX < pos2)//Stop
    {
     onmouseoverMy();
     MyMar=null;
    }else if(_MousePX < pos1 || _MousePX > pos2)
    {
     if(MyMar==null)
     {
      MyMar=setInterval(Marquee,speed);
     }
    }
   }
  }
 
  function Cut_Px(cswidth)
  {
   cswidth = cswidth.toLowerCase();
   if(cswidth.indexOf("px") != -1)
   {
    cswidth.replace("px","");
    cswidth = parseInt(cswidth);
   }
   return cswidth;
  }
 
  function MoveOutDiv()
  {
   if(MyMar == null)
   {
    MyMar=setInterval(Marquee,speed);
   }
  }

 </SCRIPT>
<div style="width:100px;height:100px;float: left;margin-right: 10px;">
<img src="themes/jingdong2014/images/jrsh.jpg">

</div>
<DIV id="demo" style="OVERFLOW: hidden; WIDTH: 1100px; margin:0px auto; COLOR: #ffffff; HEIGHT: 100px;float: left;" onmousemove="MoveDiv(event);" onmouseout="MoveOutDiv();">
            

    <div id="demo1" style="width:100%;">
                  <TABLE cellSpacing=0 cellPadding=0>
                    <TBODY>
                    <TR vAlign=top>
                      <TD vAlign=top noWrap>
                        <DIV align=right>
                          <a href="http://www.baidu.com">
                         <img src="themes/jingdong2014/images/membership_seminar.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/pwpsoftcover.jpg"> 
                          </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/rhemacards.jpg"> 
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/traks_classes.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/citycompschool.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/citykidssite.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/gc-general.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/groups.jpg">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/jrsh1.png">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/jrsh2.png">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/jrsh3.png">
                         </a>
                         <a href="http://www.baidu.com"> 
                         <img src="themes/jingdong2014/images/jrsh4.png">
                         </a>
                         <a href="http://www.baidu.com"> 
                  
      </DIV></TD></TR></TBODY></TABLE></TD>
                  <TD width="0">
        <div id="demo2" style="width:100%;"></div>
       </TD>
        </TR></TBODY></TABLE>
      </DIV>
</div>  
  



