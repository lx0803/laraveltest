<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <script>
	ws = new WebSocket("ws://127.0.0.1:10015");
	ws.onopen = function() {
		alert("连接成功");
		ws.send('tomsdfsf');
		alert("给服务端发送一个字符串：tom");
	};
	ws.onmessage = function(e) {
		alert("收到服务端的消息：" + e.data);
	};
  </script>
 </body>
</html>
