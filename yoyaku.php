<!DOCTYPE html>
<html lang="ja">
<heade>
<title>予約完了ページ</title>
    <meta charset="UTF-8">
</heade>

<style>
.text_center {
  text-align: center;
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

}

.text_center .title {
  display: inline-block;
}

.text_center .title .title_text {
  text-align: left;
  font-size: 40px;
  font-weight: bold;
  color: black;
  white-space: nowrap;
  overflow: hidden;
  letter-spacing: 0.1em;
  text-indent: 0.1em;
  animation: title_text 1.0s forwards linear;
}

@-webkit-keyframes title_text {
  0% {
    width: 0%;
  }
  100% {
    width: 100%;
  }
}

@keyframes title_text {
  0% {
    width: 0%;
  }
  100% {
    width: 100%;
  }
}

.btn {
  position: absolute;
  top: 80%;
  left: 90%;
 border-radius: 5px;

 padding: 10px;
 text-decoration: none;
 color: black;
}

.example img{
  position: absolute;
  top: 20%;
  left: 10%;
  width: 80%;
  height: 60%;
  }
</style>

<div class="text_center">
        <div class="title">
            <div class="title_text">
                予約完了
            </div>
        </div>
 </div>
<body>
<a href = "http://localhost/2024i/templates/toppge.php/" class = "btn">トップページ</a>
<div class="example">
<img src="https://user0514.cdnw.net/shared/img/thumb/NKJ56_taketomishimanoumitosora_TP_V.jpg"/>
</boby>

