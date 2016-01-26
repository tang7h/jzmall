// JavaScript Document
var GeoIpService = "http://price.360buy.com/ows/GetIPLocation.aspx";
var StockSoaService = "http://price.360buy.com/stocksoa/StockHandler.ashx";
var iplocation = {"北京": { id: "1", root: 0, djd: 1,c:72 },"上海": { id: "2", root: 1, djd: 1,c:78 },"天津": { id: "3", root: 0, djd: 1,c:83 },"重庆": { id: "4", root: 3, djd: 1,c:87 },"河北": { id: "5", root: 0, djd: 1,c:142 },"山西": { id: "6", root: 0, djd: 1,c:303 },"河南": { id: "7", root: 0, djd: 1,c:412 },"辽宁": { id: "8", root: 0, djd: 1,c:560 },"吉林": { id: "9", root: 0, djd: 1,c:639 },"黑龙江": { id: "10", root: 0, djd: 1,c:698 },"内蒙古": { id: "11", root: 0, djd: 0,c:799 },"江苏": { id: "12", root: 1, djd: 1,c:904 },"山东": { id: "13", root: 0, djd: 1,c:1000 },"安徽": { id: "14", root: 1, djd: 1,c:1116 },"浙江": { id: "15", root: 1, djd: 1,c:1158 },"福建": { id: "16", root: 2, djd: 1,c:1303 },"湖北": { id: "17", root: 0, djd: 1,c:1381 },"湖南": { id: "18", root: 2, djd: 1,c:1482 },"广东": { id: "19", root: 2, djd: 1,c:1601 },"广西": { id: "20", root: 2, djd: 1,c:1715 },"江西": { id: "21", root: 2, djd: 1,c:1827 },"四川": { id: "22", root: 3, djd: 1,c:1930 },"海南": { id: "23", root: 2, djd: 1,c:2121 },"贵州": { id: "24", root: 3, djd: 1,c:2144 },"云南": { id: "25", root: 3, djd: 1,c:2235 },"西藏": { id: "26", root: 3, djd: 0,c:2951 },"陕西": { id: "27", root: 3, djd: 1,c:2376 },"甘肃": { id: "28", root: 3, djd: 1,c:2487 },"青海": { id: "29", root: 3, djd: 0,c:2580 },"宁夏": { id: "30", root: 3, djd: 1,c:2628 },"新疆": { id: "31", root: 3, djd: 0,c:2652 },"台湾": { id: "32", root: 2, djd: 0,c:2768 },"香港": { id: "42", root: 2, djd: 0,c:2754 },"澳门": { id: "43", root: 2, djd: 0,c:2770 }};
var stockstatus = { 33: "现货", 34: "无货", 36: "预订", 39: "在途", 0: "统计中" };
var cName = "ipLocation";
var currentLocation = "北京";
var currentProvinceId = 1;

function getStockDescWords(state,isPurchase,skuid,skukey,arrivalDate,isNotice,ext,provinceId){
	var text = "";
	if (state == 33){
		text = "有货";
	}
	else if (state == 34 || state == 0){
		text = "无货";
	}
	else if (state == 39 || state == 40){
		text = "有货";
	}
	else if (state == 36){
		text = "预订";
	}
	return text;
}

function getProvinceStockCallback(result) {
	if (result.stock) {
		$("#storeinfo .i-storeinfo div").html(currentLocation + getStockDescWords(result.stock.StockState,result.stock.IsPurchase,wareinfo.pid,wareinfo.sid,result.stock.ArrivalDate,true,result.stock.Ext,currentProvinceId));
		$("#storeinfocontainer").show();
		return;
	}
}
//stock
function GetRealStock(provinceid) {
	if (wareinfo) {$.getJSONP(StockSoaService + "?callback=getProvinceStockCallback&type=provincestock&skuid="+wareinfo.sid+"&provinceid="+provinceid,getProvinceStockCallback);}
}

//Main Logic
function ShowStockForAll() {
	//if (!stockdata) return false;
	//Notify
	//SetNotifyByNoneStock();
	//Cookie
	var ck = getCookie(cName);
	if (ck) {
		var pid = iplocation[ck];
		if (pid) {
			currentLocation = ck;
			currentProvinceId = pid.id;
			GetRealStock(pid.id);
		}
		else {
			currentLocation = "北京";
			currentProvinceId = 1;
			GetRealStock(1);
		}
	}
	else {
			currentLocation = "北京";
			currentProvinceId = 1;
			GetRealStock(1);
			setCookie(cName, currentLocation, 30, "/", "360buy.com", false);
			setDjdCookie(iplocation[currentLocation].id,iplocation[currentLocation].c);
	}
	$("#storeinfo").find("a").click(function() {
		var t = $(this).attr("p");
		$("#storeinfo").removeClass("hover");
		currentLocation = $(this).html();
		currentProvinceId = t;
		GetRealStock(t);
		setCookie(cName, $(this).html(), 30, "/", "360buy.com", false);
		setDjdCookie(iplocation[currentLocation].id,iplocation[currentLocation].c);
	}).end().hoverForIE6();
}
ShowStockForAll();

//cookie operate
function getCookie(name) {
	var start = document.cookie.indexOf(name + "=");
	var len = start + name.length + 1;
	if ((!start) && (name != document.cookie.substring(0, name.length))) {
		return null;
	}
	if (start == -1) return null;
	var end = document.cookie.indexOf(';', len);
	if (end == -1) end = document.cookie.length;
	return unescape(document.cookie.substring(len, end));
};
function setCookie(name, value, expires, path, domain, secure) {
	var today = new Date();
	today.setTime(today.getTime());
	if (expires) {
		expires = expires * 1000 * 60 * 60 * 24;
	}
	var expires_date = new Date(today.getTime() + (expires));
	document.cookie = name + '=' + escape(value) +
        ((expires) ? ';expires=' + expires_date.toGMTString() : '') + //expires.toGMTString()
        ((path) ? ';path=' + path : '') +
        ((domain) ? ';domain=' + domain : '') +
        ((secure) ? ';secure' : '');
};
function deleteCookie(name, path, domain) {
	if (getCookie(name)) document.cookie = name + '=' +
            ((path) ? ';path=' + path : '') +
            ((domain) ? ';domain=' + domain : '') +
            ';expires=Thu, 01-Jan-1970 00:00:01 GMT';
};
function setDjdCookie(p,c){var a = getCookie("ipLoc-djd");if (!a||a.split("-")[0]!=p)setCookie("ipLoc-djd", p+(c?("-"+c):""), 30, "/", "360buy.com", false);}