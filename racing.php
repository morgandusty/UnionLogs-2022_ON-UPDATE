<!DOCTYPE html>
<!-- saved from url=(0034)http://ulog.union-u.net/racing.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Гонки | MorganDusty LOGS++.</title>
<link href="./assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./assets/jquery.js.Без названия"></script>
<script type="text/javascript" src="./assets/jquery.form.js.Без названия"></script>
</head>

<body><div class="menu"><table width="100%"><tbody><tr><td valign="top" align="left"><script>
	$(document).ready(function()
	{
		$(".menu").on("click", "a[rel!=no]", function()
		{
			//alert($(this).attr("href"));
			document.title = $(this).find("li").text() + " | MorganDusty LOGS++.";
			var url=$(this).attr("href");
			setLocation(url);
			$(".right").load(url + " #content",function(){
				$(".menu ul ul").slideUp();
				});
			
			return false;
		});

		$(".menu").on("click", "a[down]", function(){
			
			var togmenu = $(this).next();
			$(".menu ul ul").not(togmenu).slideUp();
			$(togmenu).slideToggle();
			
			
			return false;
		});

		//fastanswer
		$("#content").on("click", "a[edit=on]", function()
		{
			//alert("#answer" + ($(this).attr("editid")));
			var $answerid =  $("#answer" + ($(this).attr("editid")));
			
			
			$answerid.html("<input type=text value='" + $("#answer" + ($(this).attr("editid"))).text() + "' /><a cancelid='" + $(this).attr("editid") + "' href='' cancel=on>Отмена</a>");
			$(this).attr("edit", "off");
			return false;
		});
		$("#content").on("click", "a[edit=off]", function()
		{
			//alert("ok");
			var editbuttom = $(this);
			var $answerid =  $("#answer" + ($(this).attr("editid")));

			//alert($("#answer" + ($(this).attr("editid")) + " input").val());
			
			$.post("fastanswer.php", {
				id: ($(this).attr("editid")),
				answer: $("#answer" + ($(this).attr("editid")) + " input").val(),
				do: 1
				},
				function(data)
				{
					$(editbuttom).attr("edit", "on");
					//alert("ok" + data);
					$answerid.text(data);
				}
			);
			
			return false;
		});
		$("#content").on("click", "a[cancel=on]", function()
		{
			var $answerid =  $("#answer" + $(this).attr("cancelid"));
			$("#answer" + $(this).attr("cancelid")).text($("#answer" + $(this).attr("cancelid") + " input").attr("value"));
			$("a[editid=" + $(this).attr("cancelid") + "]").attr("edit", "on");
			return false;
		});

		$("#content").on("click", "a[del=on]", function()
		{
			var $buttom = $(this);
			if(confirm("Удалить быстрый ответ? \n Ответ: " + $("#answer" + $(this).attr("delid")).text() ) ) 
			{
				$.post("fastanswer.php", {
					id: ($(this).attr("delid")),
					answer: $("#answer" + ($(this).attr("delid")) + " input").val(),
					do: 2
					},
					function(data)
					{
						//alert(data);
						$("#tr" + $buttom.attr("delid")).detach();
					}
				);
			}
			return false;
		});
	});


	function setLocation(curLoc){
	    try {
	      history.pushState(null, null, curLoc);
	      return;
	    } catch(e) {}
	    location.hash = "#" + curLoc;
	}</script><a></a><ul><a></a><a href="/index.php"><li>Главная</li></a><a href="/fastanswer.php" rel="yes"><li>FastAnswer</li></a><a href="/racing.php" rel="yes"><li>Гонки</li></a><a href="/racing.php" rel="no" down=""><li>ArizonaRP</li></a><ul style="display: block;"><a href="http://ulog.union-u.net/index.php?server=1" rel="yes"><li>Phoenix</li></a><a href="http://ulog.union-u.net/index.php?server=2" rel="yes"><li>Tucson</li></a><a href="http://ulog.union-u.net/index.php?server=3" rel="yes"><li>Scottdale</li></a><a href="http://ulog.union-u.net/index.php?server=4" rel="yes"><li>Chandler</li></a><a href="http://ulog.union-u.net/index.php?server=5" rel="yes"><li>BrainBurg</li></a><a href="http://ulog.union-u.net/index.php?server=8" rel="yes"><li>SaintRose</li></a><a href="http://ulog.union-u.net/index.php?server=9" rel="yes"><li>Mesa</li></a><a href="http://ulog.union-u.net/index.php?server=10" rel="yes"><li>Redrock</li></a><a href="http://ulog.union-u.net/index.php?server=12" rel="yes"><li>Yuma</li></a><a href="http://ulog.union-u.net/index.php?server=15" rel="yes"><li>Surprise</li></a></ul><a href="http://ulog.union-u.net/racing.php" rel="no" down=""><li>RodinaRP</li></a><ul style="display: none;"><a href="http://ulog.union-u.net/index.php?server=6" rel="yes"><li>Central</li></a><a href="http://ulog.union-u.net/index.php?server=7" rel="yes"><li>Eastern</li></a><a href="http://ulog.union-u.net/index.php?server=11" rel="yes"><li>North</li></a><a href="http://ulog.union-u.net/index.php?server=13" rel="yes"><li>Vostok</li></a></ul><a href="http://ulog.union-u.net/racing.php" rel="no" down=""><li>Деревня</li></a><ul style="display: none;"><a href="http://ulog.union-u.net/index.php?server=16" rel="yes"><li>village_01</li></a><a href="http://ulog.union-u.net/index.php?server=17" rel="yes"><li>village_02</li></a><a href="http://ulog.union-u.net/index.php?server=18" rel="yes"><li>village_03</li></a><a href="http://ulog.union-u.net/index.php?server=14" rel="yes"><li>village_test</li></a></ul></ul></td><td valign="top" align="right"></td><td valign="top" align="right"><a href="http://ulog.union-u.net/user.php?id=9866"><li>Jack_sweech</li></a>
	<a href="/outuser.php" rel="no"><li>Выйти</li></a></td></tr></tbody></table></div>
    <div class="right"><div id="content">
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top"><h1>Треки для гонок</h1></td>
    </tr>
    <tr>
      <td class="middel"><div class="box">
        <div class="boxtitle">TOP 20</div><table width="100%"></table></div></td>
    </tr>
    <tr>
      <td><center>
	  @2021 by Morgan Dusty </center></td>
    </tr>
  </tbody>
</table>
</div></div>
</body></html>