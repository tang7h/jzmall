// JavaScript Document
var cookieName = "rodTc";
clsPVAndShowLog('', '', 23, 'p');
clsPVAndShowLog('', '', 24, 'p');
clsPVAndShowLog('', '', 25, 'p');
clsPVAndShowLog('', '', 26, 'p');

function getCookie(name) {
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null) return unescape(arr[2]);
    return null;
}

function getimageurl(para) {
    var domain = para % 5;
    var imagedomain = "";
    switch (domain) {
        case 0:
            imagedomain = "http://img10.360buyimg.com";
            break;
        case 1:
            imagedomain = "http://img11.360buyimg.com";
            break;
        case 2:
            imagedomain = "http://img12.360buyimg.com";
            break;
        case 3:
            imagedomain = "http://img13.360buyimg.com";
            break;
        case 4:
            imagedomain = "http://img14.360buyimg.com";
            break;
    }
    return imagedomain;
}
function getrecommend(teamid, isvalid) {
    if (teamid == undefined || teamid == null) return;
    var cityid = getCookie("jd_tuan_city") || 0;
    $.getJSON("http://my." + domain() + "/tuan/realsingle.action?teamId=" + teamid + "&flag=" + isvalid + "&cityid=" + cityid + "&jsoncallback=?", {}, function(json) {
        if (json == undefined || json == null) return;
        if (json.same == null || json.same == undefined || json.same.length == 0) {
            $('#hott').hide();
        } else {
            var html1 = "";
            html1 += "<div class=\"rmt\">同类团购推荐</div>";
            html1 += "<div class=\"rmc\">";
            for (var i = 0; i < json.same.length; i++) {
                var same = json.same[i];
                html1 += "<div class=\"" + (i === 0 ? "tcon2" : "tcon") + "\" onclick=\"clsClickLog('','','" + (same.resku || same.reTeamId) + "','" + 23 + "','" + i + "','" + cookieName + "')\">";
                html1 += "<div class=\"title\"> <a href=\"http://tuan." + domain() + "/team-" + same.reTeamId + ".html\" target=\"_blank\" title=\"" + same.reTitle + "\">" + same.reTitle + "</a></div>";
                html1 += "<div class=\"pic\"> <a href=\"http://tuan." + domain() + "/team-" + same.reTeamId + ".html\" target=\"_blank\">";
                html1 += "<img data-pinit=\"registered\" src=\"" + getimageurl(same.reTeamId) + "/tuangou/s278x185_" + same.reImage + "\" alt=\"" + same.reTitle + "\"> </a> </div>";
                html1 += "<div class=\"price\"><span class=\"qg\"><a href=\"http://tuan." + domain() + "/team-" + same.reTeamId + ".html\" target=\"_blank\" title=\"抢购\">抢购</a></span><span>" + same.reTeamPrice + "</span>元<span>" + same.reNowNumber + "</span>人已购买</div>";
                html1 += "</div>";
            }
            html1 += "<div class=\"clr\"></div>";
            html1 += "</div>";
            $('#hott').html(html1);
            clsPVAndShowLog('', '', 23, 's');
        }
        if (json.also == null || json.also == undefined || json.also.length == 0) {
            $('#hot1').hide();
        } else {
            var html2 = "";
            html2 += "<div class=\"rmt\">浏览此团购的用户还购买了</div>";
            html2 += "<div class=\"rmc\">";
            for (var i = 0; i < json.also.length; i++) {
                var also = json.also[i];
                html2 += "<div class=\"" + (i === 0 ? "tcon2" : "tcon") + "\" onclick=\"clsClickLog('','','" + (also.resku || also.rid) + "','" + 24 + "','" + i + "','" + cookieName + "')\">";
                html2 += "<div class=\"title\"> <a href=\"http://tuan." + domain() + "/team-" + also.rid + ".html\" target=\"_blank\" title=\"" + also.rtitle + "\">" + also.rtitle + "</a></div>";
                html2 += "<div class=\"pic\"> <a href=\"http://tuan." + domain() + "/team-" + also.rid + ".html\" target=\"_blank\">";
                html2 += "<img data-pinit=\"registered\" src=\"" + getimageurl(also.rid) + "/tuangou/s278x185_" + also.rimage + "\" alt=\"" + also.rtitle + "\"> </a> </div>";
                html2 += "<div class=\"price\"><span class=\"qg\"><a href=\"http://tuan." + domain() + "/team-" + also.rid + ".html\" target=\"_blank\" title=\"抢购\">抢购</a></span><span>" + also.rteamPrice + "</span>元<span>" + also.sale + "</span>人已购买</div>";
                html2 += "</div>";
            }
            html2 += "<div class=\"clr\"></div>";
            html2 += "</div>";
            $('#hot1').html(html2);
            clsPVAndShowLog('', '', 24, 's');
        }
        if (json.hot == null || json.hot == undefined || json.hot.length == 0) {
            $('#recommend1').hide();
        } else {
            var html3 = "";
            html3 += "<div class=\"menu1\">人气团购推荐</div>";
            html3 += "<div id=\"brands-left\"></div>";
            html3 += "<div id=\"reco-list\">";
            html3 += "<ul>";
            for (var i = 0; i < json.hot.length; i++) {
                var hot = json.hot[i];
                html3 += "<li onclick=\"clsClickLog('','','" + (hot.resku || hot.teamId) + "','" + 26 + "','" + i + "','" + cookieName + "')\">";
                html3 += "<div class=\"title\"><a title=\"" + hot.title + "\" target=\"_blank\" href=\"http://tuan." + domain() + "/team-" + hot.teamId + ".html\">" + hot.title + "</a></div>";
                html3 += "<div class=\"pic\"> <a target=\"_blank\" href=\"http://tuan." + domain() + "/team-" + hot.teamId + ".html\"> <img alt=\"" + hot.title + "\" src=\"" + getimageurl(hot.teamId) + "/tuangou/s278x185_" + hot.image + "\"> </a> </div>";
                html3 += "<div class=\"price\"> <span class=\"qg\"> <a title=\"抢购\" target=\"_blank\" href=\"http://tuan." + domain() + "/team-" + hot.teamId + ".html\">抢购</a></span><span>" + hot.teamPrice + "</span>元<span>" + hot.nowNumber + "</span>人已购买</div>";
                html3 += "</li>";
            }
            html3 += "</ul>";
            html3 += "</div>";
            html3 += "<div id=\"brands-right\"></div>";
            $('#recommend1').html(html3);
            $("#reco-list").jdMarquee({
                deriction: "right",
                auto: true,
                width: 688,
                height: 205,
                step: 3,
                speed: 3,
                delay: 10,
                control: true,
                _front: "#brands-right",
                _back: "#brands-left"
            });
            clsPVAndShowLog('', '', 26, 's');
        }
        if (json.browse == null || json.browse == undefined || json.browse.length == 0) {
            $('#browse').hide();
        } else {
            var html4 = "";
            html4 += "<div class=\"rmt\">最近浏览过的团购</div>";
            html4 += "<div class=\"rmc\">";
            for (var i = 0; i < json.browse.length; i++) {
                var browse = json.browse[i];
                html4 += "<div class=\"b-con\" onclick=\"clsClickLog('','','" + (browse.resku || browse.teamId) + "','" + 25 + "','" + i + "','" + cookieName + "')\">";
                html4 += "<div class=\"bimg\"><a target=\"_blank\" href=\"http://tuan." + domain() + "/team-" + browse.teamId + ".html\"><img width=\"105\" height=\"66\" src=\"" + getimageurl(browse.teamId) + "/tuangou/" + browse.image + "\"></a></div>";
                html4 += "<div class=\"btext\"><a href=\"http://tuan." + domain() + "/team-" + browse.teamId + ".html\">" + browse.title + "</a></div>";
                html4 += "<div class=\"bprice\">￥" + browse.teamPrice + "</div>";
                html4 += "</div>";
            }
            html4 += "<span class=\"clr\"></span>";
            html4 += "</div>";
            $('#browse').html(html4);
            clsPVAndShowLog('', '', 25, 's');
        }
    });
}