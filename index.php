<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table>
			<tr>
				<td>Nhap a: </td>
				<td>
					<input type="text" name="a" id="A">
				</td>
			</tr>
			<tr>
				<td>Nhap b: </td>
				<td>
					<input type="text" name="b" id="B">
				</td>
			</tr>
			<tr>
				<td>Nhap c: </td>
				<td>
					<input type="text" name="c" id="C">
				</td>
			</tr>
			<tr>
				<td>Nhap d: </td>
				<td>
					<input type="text" name="d" id="D">
				</td>
			</tr>
			<tr>
				<td>Nhap e: </td>
				<td>
					<input type="text" name="e" id="E">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="button_tim" id="button_tim" value="Max">
				</td>
			</tr>
			<tr>
				<td>Kết quả:</td>
				<td>
					<input type="text" name="kq" id="ketqua">
				</td>
			</tr>
		</table>

	</center>
	
	<script type="text/javascript">

		function tim_max(a, b, c, d, e){
			var max = a;
			var bien_max ={
				lon_nhat: undefined
			};

			if(b>a){
				bien_max.lon_nhat = b;
			}
			if(c>b){
				bien_max.lon_nhat = c;
			}
			if(d>c){
				bien_max.lon_nhat = d;
			}
			if(e>d){
				bien_max.lon_nhat = e;
			}
			return bien_max;
		};

		document.getElementById("button_tim").onclick=function(){
			var a = document.getElementById("A").value;
			var b = document.getElementById("B").value;
			var c = document.getElementById("C").value;
			var d = document.getElementById("D").value;
			var e = document.getElementById("E").value;
			var bien_max ={
				lon_nhat: undefined
			};

			bien_max = tim_max(parseFloat(a), parseFloat(b),  parseFloat(c),  parseFloat(d),  parseFloat(e));

			document.getElementById("ketqua").value = bien_max.lon_nhat;
		}
	</script>

</body>
</html>