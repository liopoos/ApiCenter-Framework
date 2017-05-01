<?php
/**
 * Created by PhpStorm.
 * User: hades
 * Date: 2017/4/18
 * Time: 17:12
 * 详细介绍页面
 */
$i = $_GET['i'];
include "s.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>API名称 - API Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/prism.css">
</head>
<body>
<div class="jumbotron list-red">
    <div class="container">

        <h1><i class="icon-github item-icon"></i>API名称</h1>
        <p>这里是API描述，你可以填写描述信息。</p>
        <ul class="list-unstyled">
            <li class="icon-clock3">&nbsp;更新时间</li>
        </ul>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div id="casepage" class="postlist">
                <div class="page-header">
                    <h3>实例效果</h3>
                </div>
                <p><a href="#">效果页面</a></p>
            </div>
            <div id="posturl" class="postlist">
                <h3>请求地址</h3>
                <div class="well">
                    https://api.mayuko.cn/v2/请求地址
                </div>
            </div>
            <div id="postway" class="postlist">
                <h3>请求方式</h3>
                <hr>
                <span class="label label-success">HTTPS</span>
                <span class="label label-primary">请求方式（GET／POST）</span>
            </div>
            <div id="postparm" class="postlist">
                <div class="page-header">
                    <h3>请求参数</h3>
                </div>
                <p>非文件上传的POST时，enctype=application/x-www-form-urlencoded。</p>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>系统级参数</strong></h4></div>
                    <div class="panel-body">
                        <p>所有接入点需要的参数。</p>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>参数名称</th>
                            <th>类型</th>
                            <th>示例值</th>
                            <th>必须</th>
                            <th>说明</th>
                        </tr>
                        <tr>
                            <td>SK</td>
                            <td>string</td>
                            <td>c7acff69c5a5acd08fcc4af108b592dd</td>
                            <td>必须</td>
                            <td>每一个用户名对应唯一一个SK值。</td>
                        </tr>
                    </table>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>应用级参数</strong></h4></div>
                    <div class="panel-body">
                        <p>每个接入点自己的参数。</p>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>参数名称</th>
                            <th>类型</th>
                            <th>示例值</th>
                            <th>必须</th>
                            <th>说明</th>
                        </tr>
                        <tr>
                            <td>date</td>
                            <td>int</td>
                            <td>5</td>
                            <td>非必须</td>
                            <td>获取某天的内容，0为当天的内容，1为前一天，2为前两天，最大为6即6天前，默认为0。</td>
                        </tr>
                        <tr>
                            <td>value</td>
                            <td>int</td>
                            <td>1</td>
                            <td>非必须</td>
                            <td>判定输出内容，0为全部输出，1只输出图文，2只输出文章，3只输出问答，默认为1。</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="postback" class="postlist">
                <div class="page-header">
                    <h3>返回参数</h3>
                </div>
                <p>以JSON格式返回结果。</p>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>系统级参数</strong></h4></div>
                    <div class="panel-body">
                        <p>所有接入点需要的参数。</p>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>参数名称</th>
                            <th>类型</th>
                            <th>说明</th>
                        </tr>
                        <tr>
                            <td>code</td>
                            <td>string</td>
                            <td>1：正常<br>-1：SK错误<br>-2：参数错误</td>
                        </tr>
                    </table>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>应用级参数</strong></h4></div>
                    <div class="panel-body">
                        <p>每个接入点自己的参数。</p>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>参数名称</th>
                            <th>类型</th>
                            <th>说明</th>
                        </tr>
                        <tr>
                            <td>code</td>
                            <td>int</td>
                            <td>返回码</td>
                        </tr>
                        <tr>
                            <td>titulo_title</td>
                            <td>string</td>
                            <td>图文标题</td>
                        </tr>
                        <tr>
                            <td>titulo_img_url</td>
                            <td>string</td>
                            <td>图文图片地址</td>
                        </tr>
                        <tr>
                            <td>titulo_img_title</td>
                            <td>string</td>
                            <td>图文图片标题</td>
                        </tr>
                        <tr>
                            <td>titulo_content</td>
                            <td>string</td>
                            <td>图文正文</td>
                        </tr>
                        <tr>
                            <td>article_title</td>
                            <td>string</td>
                            <td>文章标题</td>
                        </tr>
                        <tr>
                            <td>article_autor</td>
                            <td>string</td>
                            <td>文章作者</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="postcase" class="postlist">
                <h3>请求实例</h3>
                <hr>
                <p>以
                    <kbd>PHP</kbd>
                    为例的请求实例。
                </p>
                <pre>
                    <code class="language-php">
$sk = '';
$url = "https://api.mayuko.cn/v2/请求地址";
echo get_file($url);
function get_file($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}
                    </code>
                </pre>
                <p>以
                    <kbd>JAVA</kbd>
                    为例的请求实例。
                </p>
                <pre>
                    <code class="language-java">
public static void main(String path[]) throws Exception {
    URL u=new URL("https://api.mayuko.cn/v2/请求地址");
    InputStream in=u.openStream();
    ByteArrayOutputStream out=new ByteArrayOutputStream();
    try {
        byte buf[]=new byte[1024];
        int read = 0;
        while ((read = in.read(buf)) > 0) {
            out.write(buf, 0, read);
        }
    } finally {
        if (in != null) {
            in.close();
        }
    }
    byte b[]=out.toByteArray( );
    System.out.println(new String(b,"utf-8"));
}
                    </code>
                </pre>
                <p>以
                    <kbd>Python</kbd>
                    为例的请求实例。
                </p>
                <pre>
                    <code class="language-python">
import urllib.parse
import urllib.request

data={}
data['sk']=''
data['参数']=''
url_values=urllib.parse.urlencode(data)
url = 'https://api.mayuko.cn/v2/请求地址?'
full_url=url+url_values
data=urllib.request.urlopen(full_url).read()
z_data=data.decode('UTF-8')
print(z_data)
                    </code>
                </pre>
            </div>
            <div id="caseback" class="postlist">
                <div class="page-header">
                    <h3>返回实例</h3>
                </div>
                <p>以<kbd>JSON</kbd>格式返回结果。</p>
                <pre>
{
“code”:1,
“titulo_title”:“”,
“titulo_img_url”:“”,
“titulo_img_title”:“”,
“article_title”:“”,
“article_autor”:“”,
“article_content”:“”,
“question_title”:“”,
“question_q”:“”,
“question_a”:“”
}
                </pre>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-unstyled nav-stacked" style="padding-left:20px">
                <li role="presentation" class="menu-nav"><a href="#casepage">实例效果</a></li>
                <li role="presentation" class="menu-nav"><a href="#posturl">请求地址</a></li>
                <li role="presentation" class="menu-nav"><a href="#postway">请求方式</a></li>
                <li role="presentation" class="menu-nav"><a href="#postparm">请求参数</a></li>
                <li role="presentation" class="menu-nav"><a href="#postback">返回参数</a></li>
                <li role="presentation" class="menu-nav"><a href="#postcase">请求实例</a></li>
                <li role="presentation" class="menu-nav"><a href="#caseback">返回实例</a></li>
                <li role="presentation" class="menu-nav"><a href="./">返回主页</a></li>
            </ul>
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
<script src="js/prism.js"></script>
</body>
</html>