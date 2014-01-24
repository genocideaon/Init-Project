<!DOCTYPE html>
<html lang="EN">
<head>
	<?php include_once( 'inc/header.php'); ?>
	<style>
		.orange {background: #ccc; }
		.object-wrp {position: absolute; top: 100px; left: 100px; }
		.object {background: #666; width: 100px; height: 100px; margin: 0 0 15px; }

		.result-log {position: fixed; top: 0; right: 0; left: 80%; bottom: 0; }
		.result-log .content {padding: 20px; color: #ccc; }
		.result-log .bg {position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: #000; opacity: 0.8; filter: alpha(opacity=80); }
	</style>
</head>
	<div id="targetObj" class="object-wrp">
		<div class="object">
			Object1
		</div>
		<div class="object">
			Object2
		</div>
		<div class="object">
			Object3
		</div>
	</div>
	<div class="result-log">
		<div class="bg"><div>
		<div id="resultLog" class="content"><div>
		
	</div>
	
<body>
	
		
	<script>
		function textLog(text){
			var resultLog = document.getElementById('resultLog');
			if(window.console){
				window.console.log(text);
				resultLog.innerHTML += text + '<br>';
			}else{
				resultLog.innerHTML += text + '<br>';
			}
		}
		function responsiveScreen(){
			var MN = window.matchMedia("(max-width: 400px)"),
				docbody = document.body;

			

			function doMediaCheck(){
				if(MN.matches){
					docbody.innerHTML = 'less than 400';
					docbody.className = 'orange';
				}else{
					docbody.innerHTML = 'more than 400';
					docbody.className = '';
				}
			}

			function chkScreenWidth(){
				
			}

			window.onresize = function(){
				doMediaCheck();
			};

			doMediaCheck();
		}

		function chkScreenWidth(){
			var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			x = w.innerWidth || e.clientWidth || g.clientWidth,
			y = w.innerHeight|| e.clientHeight|| g.clientHeight;
		}

		function getOffset(elem){
			for(i = 0; i < elem.length; i++){
				textLog(window.pageYOffset);
				textLog(document.documentElement.scrollTop);
			}
		}

		var targetObj = document.getElementById('targetObj'),
			elemDiv = targetObj.getElementsByTagName('div');
		
		getOffset(elemDiv);

		
	</script>
</body>

</html>