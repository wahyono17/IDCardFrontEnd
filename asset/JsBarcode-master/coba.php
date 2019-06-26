<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="dist/JsBarcode.all.js"></script>
	<script>
		Number.prototype.zeroPadding = function(){
			var ret = "" + this.valueOf();
			return ret.length == 1 ? "0" + ret : ret;
		};
	</script>
</head>
<body>
	<div>
		<img id="barcode1"/>
		<script>JsBarcode("#barcode1", "Hi!");</script>
	</div>

	<div>
		<img id="barcode2"/>
		<script>
			JsBarcode("#barcode2", "9780199532179", {
			  format:"EAN13",
			  displayValue:true,
			  fontSize:24,
			  lineColor: "#0cc"
			});
		</script>
	</div>

	<div>
		<img id="barcode3"/>
		<script>JsBarcode("#barcode3", "9780199532179", {
			format:"EAN13",
			displayValue:true,
			fontSize:20
		});</script>
	</div>

	<div>
		<img id="barcode4"/>
		<script>
			var repeat4 = function(){
				var date = new Date();
				JsBarcode("#barcode4",
						date.getHours().zeroPadding() + ":" +
						date.getMinutes().zeroPadding() + ":" +
						date.getSeconds().zeroPadding(),
					{displayValue: true});
			};
			setInterval(repeat4,1000);
			repeat4();
		</script>
	</div>

	<div>
		<img id="barcode5"/>
		<script>
			var repeat5 = function(){
				JsBarcode("#barcode5", Math.floor(1000000+Math.random()*9000000)+"",{displayValue:true,fontSize:20});
			};
			setInterval(repeat5,500);
			repeat5();
		</script>
	</div>
</body>
</html>
