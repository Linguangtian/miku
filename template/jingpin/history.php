<?php  include 'head.php';$history='active';?>
<title>历史记录</title>
<link href="/template/jingpin/css/zy.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>
    ul li {
        text-align: left;
        margin-bottom:0.7rem;
        font-size: 0.7rem;
        line-height:  1.4rem;
        border-bottom: 1px solid #C5C5C5;
    }
    ul li span{
       margin-right: 10px;

    }
    body {
        padding-top: 10px;
    }
    .top-line:before{border: 0}
</style>
</head>
<body>
<h3 style="text-align: center;color: orangered;font-weight:bold ">全部历史</h3>
    <div class="container">
        <div class="row">
            <div class="stui-pannel stui-pannel-bg clearfix">

                <div class="stui-pannel-box">
                    <div class="hy-video-head" style=" text-align: center;">

                            <ul class="history clearfix" id="stui_history"></ul>

                    </div>


                </div>
            </div>
        </div>

    </div>

</body>

    <script>
        if ($.cookie("recente")) {
            var json = eval("(" + $.cookie("recente") + ")");
            var list = "";
            for (i = 0; i < json.length; i++) {
                list = list + "<li class='top-line'><a href='" + json[i].vod_url + "' title='" + json[i].vod_name + "'><span class='pull-left text-red'>" + json[i].vod_part + "</span>" + json[i].vod_name + "</a></li>"
            }
            $("#stui_history").append(list)
        } else {
            $("#stui_history").append("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>")
        }
        $(".historyclean").on("click", function () {
            $.cookie("recente", null, {expires: -1, path: "/"})
        })


    </script>

<?php  include 'footer.php';?>