<!DOCTYPE html>
<html>
<head>
	<title>BT259JS</title>
</head>
<body>
	<table>
		<tr>
			<td>Nhập giá trị a</td>
			<td>
				<input type="text" name="A" id="hihi">
			</td>
		</tr>
		<tr>
			<td>Nhập giá trị b</td>
			<td>
				<input type="text" name="B" id="haha">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="kq" id="kq">
			</td>
		</tr>
		<tr>
			<td>Kết quả</td>
			<td>
				<input type="text" name="ketqua" id="ketqua">
			</td>
		</tr>

		<script type="text/javascript">
			function Kq_bacnhat(a, b){
				if(a===0){
					return null;
				}
				return -b/a;

			}

			document.getElementById("kq").onclick=function(){
				let a = document.getElementById("hihi").value;
				let b = document.getElementById("haha").value;

				let c = Kq_bacnhat(parseFloat(a), parseFloat(b));
				 
				document.getElementById("ketqua").value = c;


			}
		</script>
	</table>
	<!-- <p> Giải phương trình bậc nhất (ax + b) = 0</p>
	<p>Bước 1: Hiển thị prompt để nhập giá trị cho a</p>
	<p>Bước 2: Nhập giá trị cho b bằng prompt</p>
	<p>Bước 3: In ra kết quả</p>
	
	<script type="text/javascript">
		a = prompt("Nhap gia tri a")
		b = prompt("Nhap gia tri b")
		x = -b/a 
		alert(x)
	</script>
 -->
</body>
</html>