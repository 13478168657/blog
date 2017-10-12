<?php
use App\Models\ArticleClassify;
$classify = ArticleClassify::where('pid',0)->where('show',1)->get();
?>
<nav id="topnav">
    <ul>
        <a href="/">首页</a>
        @foreach($classify as $class)
        <a href="/article/list">{{$class->name}}</a>
        @endforeach
    </ul>
</nav>