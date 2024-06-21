<!DOCTYPE html>
<html lang="ja">
<head>
  <title>galトップページ</title>
  <meta charset="UTF-8">
　<link rel="stylesheet" href="../templates_c/toppge.css">
</head>
<style>
  body {
    font-family:inherit;
    font-size:20px;
    margin: 0;
    padding: 0;
    background-size:cover;
}
.example {
  position: static;
  }
.example a {/*aタグを画像の真ん中に*/
  position: absolute;
  top: 60%;
  left: 30%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  /*以下装飾*/
  margin:0;/*余計な隙間を除く*/
  font-size: 60px;/*文字サイズ*/
  border: solid white 6px; /*線で囲う*/
  padding: 21px;/*文字と線の間の余白*/
  color: white;/*文字色*/
  text-decoration: none;/*下線を表示させない*/
  }

.example a:hover{/*カーソルを当てたとき*/
  background: rgba(255,255,255,0.3);/*背景を半透明に*/
  }

.example img {
  width: 100%;
  }
.example1 {
  position: static;
  }
.example1 a {/*aタグを画像の真ん中に*/
  position: absolute;
  top: 60%;
  left: 65%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  /*以下装飾*/
  margin:0;/*余計な隙間を除く*/
  font-size: 60px;/*文字サイズ*/
  border: solid white 6px; /*線で囲う*/
  padding: 21px;/*文字と線の間の余白*/
  color: white;/*文字色*/
  text-decoration: none;/*下線を表示させない*/
  }

.example1 a:hover{/*カーソルを当てたとき*/
  background: rgba(255, 255, 255, 0.3);/*背景を半透明に*/
  }

.example1 img {
  width: 100%;
  }
.btn {
  position: absolute;
  top: 8%;
  left: 90%;
 border-radius: 5px;
 background-color: blueviolet;
 padding: 10px;
 text-decoration: none;
 color: white;
}

</style>
<body>
  <h1>GALAXY AIRLINES</h1>
  <a href = "https://www.jal.co.jp/jp/ja/" class = "btn">ログイン</a>
  <div class="example">
  <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg"/>
    <a href="https://www.jal.co.jp/jp/ja/"> 国内線</a></div>
  <div class = "example1">
    <a href="https://www.jal.co.jp/jp/ja/"> 国際線</a>
  </div>

</body>
</html>