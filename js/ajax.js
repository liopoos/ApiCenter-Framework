/**
 * Created by hades on 2017/3/20.
 */
function m_ajax(s) {
    $.ajax({
        url: './ajax.php?s='+s,
        type: 'GET',
        dataType: 'xml',
        timeout: 50000,
        cache: false,
        error: function (xml) {
            alert("load xml error");
        },
        success: function (xml) {
            $(".loader").remove();
            $(xml).find("item").each(function (i) {
                var title = $(this).children("title");
                var magnet = $(this).children("enclosure").attr("url");

                $("#magnet").append('<li class="list-group-item"><a href="' + magnet + '">' + title.text() + '</a> </li>');
            });
            var lasttime = $(xml).find("channel").children("pubDate");
            $("#last-time").html("最后信息检索：" + lasttime.text());
        }
    });
}
