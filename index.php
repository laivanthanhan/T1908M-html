<!DOCTYPE html>
<html>
<head>
	<title> BT 304js</title>
</head>
<body>
	<center>
		<table>
		<tr>
			<td>Nhập giá trị a</td>
			<td>
				 <input type="text" name="giatri_a" id="A">
			</td>
		</tr>
		<tr>
			<td>Nhập giá trị b</td>
			<td>
				<input type="tet" name="giatri_b" id="B">
			</td>
		</tr>
		<tr>
			<td>Nhập giá trị c</td>
			<td>
				<input type="text" name="giatri_c" id="C">
			</td>
		</tr>
		<tr>
			<td></td>
			<td> <input type="submit" name="button_tinh" value="Giải" id="button"> </td>
		</tr>
		<tr>
			<td>Kết quả</td>
			<td><input type="text" name="x1" id="kqx1"></td>
			<td><input type="text" name="x2" id="kqx2"></td>
		</tr>
	</table>

	</center>
	
	   <script type="text/javascript">
	   	
	   	function bac_hai(a, b, c ){
	   		var delta = b*b- 4 * a*c
	   		var x1, x2;

	   		var ketqua={
	   			bien_x1: undefined,
	   			bien_x2: undefined
	   		};

	   		if(delta === 0){
	   			alert("Phương trình có nghiệm kép");
	   			x1= -b/(2*a);
	   			x2= -b/(2*a);
	   			
	   			ketqua.bien_x1 = x1;
	   			ketqua.bien_x2 = x2;
	   		}
	   		
	   		else if(delta<0){
	   			alert("Phương trình vô nghiệm ");
	   		}
	   		else{
	   			alert("Phuong trinh co 2 nghiem phan biet");
	   			x1=(-y-Math.sqrt(delta))/(2*x);
 				x2=(-y+Math.sqrt(delta))/(2*x);
 				
 				ketqua.bien_x1 = x1;
	   			ketqua.bien_x2 = x2;
	   		}
	   		return ketqua;
	   	}; 

	   	document.getElementById("button").onclick = function(){
	   		var a = document.getElementById("A").value;
	   		var b = document.getElementById("B").value;
	   		var c = document.getElementById("C").value;

	   		var ketquatu_function={
	   			bien_x1: undefined,
	   			bien_x2: undefined
	   		};

	   		ketquatu_function = bac_hai(parseFloat(a), parseFloat(b), parseFloat(c)); 

	   		document.getElementById("kqx1").value = ketquatu_function.bien_x1;
	   		document.getElementById("kqx2").value = ketquatu_function.bien_x2;
	   	}
	   </script>
</body>
</html>