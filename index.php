<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Tech Fellow</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="head-container">
    <div class="header-left">
    <h1>オモロタス</h1>
    </div>
    <div class="header-right">
    <ul>
     <a><li>トップ</li></a>  
     <a><li>アバウト</li></a> 
     <a><li>アイドル</li></a>
     <a><li>お問い合わせ</li></a>
   </ul>
    </div>
    </div>
  </header>


<div class="top-wrapper">
  <div class="top-container">
    <a href="#" class="btn sinki">新規登録</a>
    <a href="#" class="btn facebook">facebook</a>
    <a href="#" class="btn twitter">twitter</a>
  </div>
</div>

<img class="line" src="img/line.jpg">


<footer>
<div class="fotter-left">
 Tech Fellow
</div>

<div class="fotter-right">
  <%= link_to "Top",root_path%>
  <%= link_to "About",about_path%>
  <%= link_to "create",new_note_path%>
  <%= link_to "Login","#"%>
  <%= link_to "Index",notes_path%>
</div>

</footer>

</body>
</html>
