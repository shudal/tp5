<?php /*a:3:{s:47:"../application/index/view/the1/other/index.html";i:1542374766;s:40:"../application/index/view/the1/base.html";i:1542423612;s:31:"the1/static/css/other_index.css";i:1542375089;}*/ ?>
<title>Perci</title>
<link rel="stylesheet" type="text/css" href="/the1/static/css/style.css" />
<style>
ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
 
/*鼠标移动到选项上修改背景颜色 */

#a:hover {
    background-color: #111;
}
</style>
<ul class='menu'>
<li class='menu-list'><a class='menu-item' id ="a" href="/">最近</a></li>
<li class='menu-list'><a class='menu-item' href="<?php echo url('index/blog/rindex'); ?>" id="a">博文</a></li>
<li class='menu-list'><a class='menu-item' href="<?php echo url('index/blog/search'); ?>" id="a">搜索</a></li>
<li class='menu-list'><a class='menu-item' href="<?php echo url('index/other/index'); ?>" id="a">其他</a><li>
</ul><br><br>
<?php if(!(empty($distai) || (($distai instanceof \think\Collection || $distai instanceof \think\Paginator ) && $distai->isEmpty()))): ?>
<?php echo htmlentities($distai); endif; if(!(empty($tm) || (($tm instanceof \think\Collection || $tm instanceof \think\Paginator ) && $tm->isEmpty()))): ?>
hi;
<?php endif; ?>


<style>
body{
  background:url('https://perci-1253331419.cos.ap-chengdu.myqcloud.com/kon/K-ON!.full.517062.jpg');
  background-repeat:no-repeat; background-size:100% 100%;-moz-background-size:100% 100%;
}
</style>


其他<br>
<?php if(!(empty($pages) || (($pages instanceof \think\Collection || $pages instanceof \think\Paginator ) && $pages->isEmpty()))): foreach($pages as $page): ?>
<a href='<?php echo url('index/other/index',['id'=>$page['id']]); ?>'><?php echo htmlentities($page['name']); ?></a><br>
<?php endforeach; endif; ?>


<br><br><br>
<a href="<?php echo url('index/blog/login'); ?>">登陆</a>
<a href="<?php echo url('index/blog/regis'); ?>">注册</a>