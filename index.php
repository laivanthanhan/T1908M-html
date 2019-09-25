<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    table{
      border: 1px solid black;
    }
    tr td {
      border : 1px solid blue;
    }
  </style>
  <title>BT 268</title>
  <script type="text/javascript">
  function dulieu_sinhvien(so_sinhvien){
    var danhsach_sv = [];
    for(var i=0; i<so_sinhvien; i++){
      var sinhvien_i = {
        ten : "Thanh An",
        tuoi : i + 18,
        diachi : "Thanh Nhan-Hai Ba Trung",
        email : "an.laivanthanh29@gmail.com",
        dienthoai: "0975218867"
      };
      danhsach_sv.push(sinhvien_i);
    }
    return danhsach_sv;
  }
</script>
</head>
<body>
  <table id="thongtincua_sv">
    <tr>
      <td>STT</td>
      <td>TEN</td>
      <td>TUOI</td>
      <td>DIA CHI</td>
      <td>EMAIL</td>
      <td>STD</td>
    </tr>
    <tr>
      <script type="text/javascript">
        var danhsach_sv = dulieu_sinhvien(20);
        for(var i=0;i<20;i++){
            var sinhvien_i = danhsach_sv[i];
            document.write(`
                <tr>
                  <td>${i+1}</td>
                  <td>${sinhvien_i.ten}</td>
                  <td>${sinhvien_i.tuoi}</td>
                  <td>${sinhvien_i.diachi}</td>
                  <td>${sinhvien_i.email}</td>
                  <td>${sinhvien_i.dienthoai}</td>
                </tr>
              `);
        }
      </script>
    </tr>
  </table>
</body>
</html>