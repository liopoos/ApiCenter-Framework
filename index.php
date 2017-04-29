<?php
/**
 * Created by PhpStorm.
 * User: hades
 * Date: 2017/4/10
 * Time: 20:32
 * 主页面
 */
include 's.php';
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="./">API Center</a>
        </div>
    </div>
</nav>
<div style="height: 50px"></div>
<!--<i class="icon-pencil item-icon"></i>-->
<div class="container">
    <p>集合</p>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="!1" class="list-group-item list-blue">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-globe item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 style="color: #fff" class="item-title">ONE·一个</h4>
                        <li class="list-unstyled icon-clock3">2017年01月20日</li>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="!2" class="list-group-item list-red">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-image item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 style="color: #fff" class="item-title">Bing壁纸</h4>
                        <li class="list-unstyled icon-clock3">2015年10月21日</li>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="!3" class="list-group-item list-orange">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-location-2 item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 style="color: #fff" class="item-title">GPS2Digit</h4>
                        <li class="list-unstyled icon-clock3">2016年10月23日</li>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="!4" class="list-group-item list-green">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-location3 item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 style="color: #fff" class="item-title">GPS2Img</h4>
                        <li class="list-unstyled icon-clock3">2016年10月23日</li>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="!5" class="list-group-item list-red">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-moon3 item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 style="color: #fff" class="item-title">美丽晚安</h4>
                        <li class="list-unstyled icon-clock3">2016年12月21日</li>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <p>工具</p>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="#" class="list-group-item list-red" data-toggle="modal" data-target="#feedback">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-mail2 item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 class="item-title">反馈</h4>
                        <p>任何问题可以向我反馈</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="#" class="list-group-item list-green" data-toggle="modal" data-target="#about">
                    <div class=" col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-aircraft item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 class="item-title">关于</h4>
                        <p>关于API Center</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a href="https://blog.mayuko.cn" class="list-group-item list-purple" target="_blank">
                    <div class=" col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-home item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h4 class="item-title">博客</h4>
                        <p>访问Hadestack</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header list-green list-header">
                        <h4 class="modal-title" id="myModalLabel">关于API Center</h4>
                    </div>
                    <div class="modal-body">
                        <p>API Center集合了mayuko.cn站点下的所有api。在API Center，你可以选择你感兴趣的API，并使用它们。API
                            Center由hades一个人维护，如果你有好玩的api，也可以进行投稿，我将优先展示优秀的作品。</p>
                        <p>目前API Center不实行用户注册制度，每一个用户就可以申请一个SK码并可以无限次调用API，希望API Center能够受大家喜欢。</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header list-red list-header">
                        <h4 class="modal-title" id="myModalLabel">反馈</h4>
                    </div>
                    <div class="modal-body">
                        <p>如果在使用中遇到任何问题，请联系i#mayuko.cn。</p>
                    </div>
                    <div class="modal-footer">
                        <a href="mailto:i@mayuko.cn" type="button" class="btn btn-danger"
                           data-dismiss="modal">发送邮件</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>统计</p>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a class="list-group-item list-red">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-arrow-with-circle-down item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h2 style="color: #fff" class="item-title">1024 调用</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a class="list-group-item list-blue">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-calculator item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h2 style="color: #fff" class="item-title">20 API</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="list-group">
                <a class="list-group-item list-yellow">
                    <div class="col-xs-3 text-center">
                        <h1 class="list-group-item-heading">
                            <i class="icon-user item-icon"></i>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h2 style="color: #fff" class="item-title">99+ 用户</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<footer id="manga-footer">
    <p>
        <small>CpoyRigh 2016-2017 Power by <a href="http://mayuko.cn">mayuko.cn</a></small>
    </p>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>