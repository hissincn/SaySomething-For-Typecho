<?php
/**
* 说说
*
* @package custom
* @author Hissin'   hissin@126.com  i@hissin.com
* @author'site https://hissin.cn
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function shuoshuo($content) {
$content = preg_replace('/\<a href\=\"(.*?)\"\>(.*?)\<\/a\>/', '$1', $content);
$content = preg_replace('/\{/', '<div id="kuang"><div id="tupian" style="background:url(', $content);
$content = preg_replace('/\}/', ')"></div>', $content);
$content = preg_replace( '/\+\[(.*?)\]\+\[(.*?)\]/', '<div id="word">$1</div><a id="date">$2</a></div>', $content);
return $content;}//非mirages主题可能需要修改以上四个replace正则语句

$this->need('component/header.php');?>
<style>
/*总体*/
#kuang{
margin:0% auto 0% auto;
overflow:hidden;
position: relative;
height: auto;
    width: 100%;
color:white !important;
letter-spacing:2.5px;
z-index: 1;
}
#tupian{
width: 100%;
height: 100%;
position:absolute!important;
z-index:-1!important;
-webkit-filter: brightness(80%); 
filter: brightness(80%);

}
#word{
font-size:1.2em;
line-height:30px;
margin:20px 20px 10px 20px;
color:white !important;
}
#date{
font-size:1.6em;
float:left;
margin:0px 20px 20px 20px;
color:white !important;
}
@media screen and (max-width: 768px) {/*小于768px*/
#kuang{
border-radius:5px;
}
}/*END*/
@media screen and (min-width: 768px) { /*大于768px*/
#kuang{
border-radius:10px;
}
}/*END*/
</style>
<body>
<?php echo shuoshuo($this->content); ?>
</body>
<?php $this->need('component/footer.php'); ?>