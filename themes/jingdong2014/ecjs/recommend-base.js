// JavaScript Document
function getRecommendDomain() {
    return "my."+domain();
}
function domain() {
    try {
        return pageConfig.FN_getDomain();
    } catch(e) {}
    return "jd.com";
}
function log(type1, type2, arg1, arg2, arg3, arg4, arg5, arg6, arg7, arg8, arg9, arg10) {
    var data = '';
    for (i = 2; i < arguments.length; i++) {
        data = data + arguments[i] + '|||';
    }
    var pin = decodeURIComponent(escape(getCookie("pin")));
    var loguri = "http://csc."+domain()+"/log.ashx?type1=$type1$&type2=$type2$&data=$data$&pin=$pin$&referrer=$referrer$&jinfo=$jinfo$&callback=?";
    var url = loguri.replace(/\$type1\$/, escape(type1));
    url = url.replace(/\$type2\$/, escape(type2));
    url = url.replace(/\$data\$/, escape(data));
    url = url.replace(/\$pin\$/, escape(pin));
    url = url.replace(/\$referrer\$/, escape(document.referrer));
    url = url.replace(/\$jinfo\$/, escape(''));
    $.getJSON(url, function() {
    });
}
function getWarePriceimg(sku) {
    return "<img data-img='3' src='http://jprice.360buyimg.com/price/gp" + sku + "-1-1-1.png' />";
}
//处理价格 保留两位小数
function verifyPrice(price) {
    if (!price || price == '') {
        return '';
    }
    var pn = parseFloat(price.toString());
    if (!isNaN(pn)) {
        return pn.toFixed(2);
    }
    return '';
}
function getProductlink(sku) {
    if (sku > 10000000 && sku < 20000000) {
        return "http://book." + domain() + "/" + sku + ".html";
    }
    else if (sku > 20000000 && sku < 30000000) {
        return "http://mvd." + domain() + "/" + sku + ".html";
    }
    else if (sku > 30000000 && sku < 40000000) {
        return "http://e." + domain() + "/" + sku + ".html";
    }
    else {
        return "http://item.jd.com/" + sku + ".html";
    }
}
function GetImgMasterUrl(wid, Folder) {
    var domain = 10;
    switch (wid % 5) {
        case 0:
            domain = 10;
            break;
        case 1:
            domain = 11;
            break;
        case 2:
            domain = 12;
            break;
        case 3:
            domain = 13;
            break;
        case 4:
            domain = 14;
            break;
        default:
            domain = 10;
            break;
    }
    return "http://img" + domain + ".360buyimg.com/" + Folder + "/";
}
/**
 * 点击流统计，调用例如：clsLog("3425&special","","174620#988",4,"reWidsBookSpecial")
 * type3 三级分类
 * pwid  当前商品wid，没有为空串''
 * sku   推荐商品wid
 * num   位置，从0开始
 * reCookieName   cookieName
 * 将要被废弃，新埋点不要使用，使用下面“新版”统计方法
 */
function clsLog(type3, pwid, sku, num, reCookieName) {
    appendCookie(reCookieName, sku, type3);
    sku = sku.split("#")[0];
    log(3, type3, sku);
}
/**
 * 新版-点击流统计-页面pv和显示次数
 * wpid 主商品三级分类，没有为空串''
 * psku 主商品sku，没有为空串''，根据它来判断此商品为pop还是非pop
 * markId 推荐位标记，找张斌要
 * op s:显示、p:pv
 */
function clsPVAndShowLog(wpid, psku, markId, op) {
    var key = wpid + "." + markId + "." + skutype(psku) + "." + op;
    log('d', 'o', key);
}
/**
 * 新版-点击流统计-二次点击量
 * wpid 主商品三级分类，没有为空串''
 * psku 主商品sku，没有为空串''，根据它来判断此商品为pop还是非pop
 * rsku 推荐商品sku
 * markId 推荐位标记，找张斌要
 * num 位置，从0开始
 * reCookieName cookie名称，跟刘风栓确定
 */
function clsClickLog(wpid, psku, rsku, markId, num, reCookieName) {
    var key = wpid + "." + markId + "." + skutype(psku);
    appendCookie(reCookieName, rsku, key);
    log('d', 'o', key + ".c");
}
function appendCookie(reCookieName, sku, key) {
    var reWidsCookies = eval('(' + getCookie(reCookieName) + ')');
    if (reWidsCookies == null || reWidsCookies == '') {
        reWidsCookies = new Object();
    }
    if (reWidsCookies[key] == null) {
        reWidsCookies[key] = '';
    }
    var pos = reWidsCookies[key].indexOf(sku);
    if (pos < 0) {
        reWidsCookies[key] = reWidsCookies[key] + "," + sku;
    }
    setCookie(reCookieName, $.toJSON(reWidsCookies), 15);
}
/**
 * sku存在并且长度为10位为pop商品，否则为自营商品
 * sku 主商品sku
 */
function skutype(sku) {
    if (sku) {
        var len = sku.toString().length;
        return len == 10 ? 1 : 0;
    }

    return 0;
}
function setCookie(name, value, date) {
    var exp = new Date();
    exp.setTime(exp.getTime() + date * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/;domain=."+domain();
}
function getCookie(name) {
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null) return unescape(arr[2]);
    return null;
}
function trimEnd(str, endchar) {
    if (str == undefined || endchar == undefined || str.length < 1 || endchar.length != 1) {
        return str;
    }
    for (var u = (str.length - 1); u > 0; u --) {
        if (str[u] == endchar) {
            str = str.substring(0, u);
        } else {
            break;
        }
    }
    return str;
}

function myTryLogin() {
    try {
        var descurl = "http://"+getRecommendDomain()+"/personal/guess.html";
        $.login({
            modal: true,
            complete: function(result) {
                if (result != null && result.IsAuthenticated != null && result.IsAuthenticated) {
                    window.location = descurl
                } else {
                    jdModelCallCenter.settings = {
                        'url': descurl,
                        'clstag1': "login|keycount|5|5",
                        'clstag2': "login|keycount|5|6",
                        'fn': function() {
                            jdModelCallCenter.autoLocation(this.url);
                        }
                    };
                    jdModelCallCenter.login();
                }
            }
        })
    } catch (e) {
    }
}