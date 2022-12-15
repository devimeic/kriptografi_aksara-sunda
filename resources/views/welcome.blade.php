<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enkripsi Deskripsi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
     * {
  outline:none;
	border:none;
	margin:0px;
	padding:0px;
	font-family:Courier, monospace,'Noto Sans Sundanese', sans-serif;
}
body {
	background:#333 url(https://static.tumblr.com/maopbtg/a5emgtoju/inflicted.png) repeat;
}
#paper {
	color:#FFF;
	font-size:20px;
}
#margin {
	margin-left:12px;
	margin-bottom:20px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}
.form-control {
	width:500px;
	overflow:hidden;
	background-color:#FFF;
	color:#222;
	font-family:Courier, monospace;
	font-weight:normal;
	font-size:24px;
	resize:none;
	line-height:40px;
	padding-left:100px;
	padding-right:100px;
	padding-top:45px;
	padding-bottom:34px;
	background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
	background-repeat:repeat-y, repeat;
	-webkit-border-radius:12px;
	border-radius:12px;
	-webkit-box-shadow: 0px 2px 14px #000;
	box-shadow: 0px 2px 14px #000;
	border-top:1px solid #FFF;
	border-bottom:1px solid #FFF;
}
#title {
	background-color:transparent;
	/* border-bottom:3px solid #FFF; */
	color:#FFF;
	font-size:22px;
	font-family:Courier, monospace;
	height:28px;
	font-weight:bolder;
	width:220px;
  margin-bottom: 10px;
}
.btn {
	margin-top:20px;
}

h2{
  font-size: 18px;
  font-family:Courier, monospace;
}

/* CSS */
.button-86 {
  all: unset;
  width: 100px;
  height: 30px;
  font-size: 16px;
  background: transparent;
  border: none;
  position: relative;
  color: #f0f0f0;
  cursor: pointer;
  z-index: 1;
  padding: 10px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  white-space: nowrap;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-86::after,
.button-86::before {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: -99999;
  transition: all .4s;
}

.button-86::before {
  transform: translate(0%, 0%);
  width: 100%;
  height: 100%;
  background: #fff1;
  border-radius: 10px;
}

.button-86::after {
  transform: translate(10px, 10px);
  width: 35px;
  height: 35px;
  background: #ffffff15;
  backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(5px);
  border-radius: 50px;
}

.button-86:hover::before {
  transform: translate(5%, 20%);
  width: 110%;
  height: 110%;
}

.button-86:hover::after {
  border-radius: 10px;
  transform: translate(0, 0);
  width: 100%;
  height: 100%;
}

.button-86:active::after {
  transition: 0s;
  transform: translate(0, 5%);
}

 @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Sundanese&display=swap'); </style>



  <!-- </styl> -->
</head>
<body >
<div>
<div class="container">
    <div class="row align-items-center g-lg-5 py-2">


        <div class="col-3"></div>
        <div class="col-6">
        <h3 id="title" >Enkripsi dan Deskripsi Text</h3>
        <table class="mt-4">
            <form id="paper">
                <tr>
                    <td>
                        <div class="alert mb-0 p-0"></div>
                        <textarea id="exampleFormControlTextarea1" class="form-control" rows="5" cols="70" placeholder="Masukkan Kata" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button id="reset" class="btn btn-success button-86 mt-3" type="reset"><h2>Clear</h2></button>
                    </td>
                    <td>
                        <button id="encrypt" type="button" class="btn btn-primary mx-2 button-86"><h2>Encrypt</h2></button>
                    </td>
                    <td>
                        <button id="decrypt" class="btn btn-danger button-86" type="button"><h2>Decrypt</h2></button>
                    </td>
                </tr>
            </form>
        </table>
        <div class="container mt-2">
        <div class="row">
          <div class="col-md-6">
            <div class="result"></div>
          </div>
        </div>
      </div>
      <div class="col-3"></div>
        </div>
        
    </div>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>

	// Button Clear
    $(document).ready(function () {

      $("#reset").click(function () {
        location.reload();
      });


      $("#encrypt").click(function () {
        let input = $("textarea").val().split("");


        if (input == "") {
          $(".alert")
            .html(
              '<div id="alert" class="alert alert-danger" role="alert">Pastikan Isian Terisi</div>'
            )
            .show("slow")
            .delay();
        } else {
          let hasil = encrypt(input);
          $(".result").html(
            "<h6 class='text fw-bold'>Hasil: </h6>" +
            "<textarea id='result' rows='1' class='bg-warning p-3 mt-3 border-0 form-control' readonly style='white-space: pre-line;overflow-y: scroll;'>" +
                "layer 2 = "+hasil+

            "</textarea>" +
            "<textarea id='result' rows='1' class='bg-warning p-3 mt-3 border-0 form-control' readonly style='white-space: pre-line; overflow-y: scroll;'>" +
                "layer 3 aksara sunda = "+window.sunda.toSundanese(hasil)+

            "</textarea>"

          );



        }
      });

      // ketika tombol decrypt di tekan
      $("#decrypt").click(function () {
        var x = document.getElementById("exampleFormControlTextarea1").value;

        let zz = window.sunda.toLatin(x);
        let input = zz.split("");

        // jika inputan kosong maka akan muncul alert
        if (input == "") {
          $(".alert")
            .html(
              '<div id="alert" class="alert alert-danger" role="alert">Error 404</div>'
            )
            .show("slow")
            .delay();
        } else {
          let hasil = decrypt(input);
          $(".result").html(
            "<h6 class='text fw-bold'>Hasil: </h6>" +
            "<div id='result' class='text-md-center bg-info p-3 mt-3'>" +
            hasil +
            "</div>"
          );
        }
      });
    });


    let charSym = " abcdefghijklmnopqrstuvwxyz";
    charSym = charSym.split("");
    let allCharKeyb = ["0","a","é","i","o","u","e","eu","ka","ga","nga","ca","ja","nya","ta","da","na","pa","ba","ma","ya","ra","la","wa","sa","ha","fa","va","qa","xa","za","kha","sya","ki","gi","ngi","ci","ji","nyi","ti","di","ni","pi","bi","1","2","3","4","5","6","7","8",'9'];

    // fungsi penambahan noll
    let tamNol = (num) => {
      // conversi num ke string
      num = num.toString();
      j = "";
      if (num.length === 1) {
        j = "00";
      } else if (num.length === 2) {
        j = "0";
      }
      return j;
    };


    let objChar = (sym) => {
      let i = 0;
      let arr = [];
      sym.forEach((c) => {
        // jalankan fungsi tambah nol jika i memiliki lebih dari 1 karakter
        let tamn = tamNol(i);
        let key = tamn + i;
        // Definiskan key dan value
        let obj = {
          [key]: c,
        };
        arr.push(obj);
        i++;
      });
      return arr;
    };

    // inisiasi objek character
    let charObj = objChar(charSym);
    // inisiasi objek allChar
    let charObjKeyb = objChar(allCharKeyb);

    // fungsi ambil key dari objek character
    let getKey = (obj) => {
      arr = [];
      obj.forEach((o) => {
        arr.push(Object.keys(o)[0]);
      });
      return arr;
    };

    // fungsi ambil value dari objek character
    var getValue = (obj) => {
      var arr = [];
      obj.forEach((o) => {
        arr.push(Object.values(o)[0]);
      });
      return arr;
    };

    /* ======================================= Fungsi Encrypt / Deckrip ======================================= */

    // fungsi jika tombol encrypt di tekan
    let encrypt = (i) => {
      // definisikan inputan user
      let input = i;


      // jika karakter inputan tidak ada di dalam get value maka akan muncul alert
      let cek = input.every((i) => {
        return getValue(charObj).includes(i);
      });
      if (cek == false) {
        $(".alert")
          .html(
            '<div id="alert" class="alert alert-danger rounded-5" role="alert">Sistem Error, tidak bisa menggunakan space </div>'
          )
          .show("slow")
          .delay();
      }


      // tampilkan key jika inputan adalah value
      let key = input.map((i) => {
        let index = getValue(charObj).indexOf(i);
        return getKey(charObj)[index];
      });


      // lakukan proses operasi pertambahan terhadap key layer 1
      // dan lakukan operasi aritmatika karakter tersebut dengan metode lompatan 2
      i = 0;
      hasil = key.map((k) => {
        num = parseInt(k);

       hasil = num * 2;
        return hasil;
        i++;
      });


      // ubah hasil menjadi character baru
      let charNew = hasil.map((h) => {
        key = tamNol(h);
        // ambil value char jika key di panggil
        index = getKey(charObjKeyb).indexOf(key + h);
        return getValue(charObjKeyb)[index];
      });
      return charNew.join("");
    };


    // fungsi jika tombol decrypt di tekan
    let decrypt = (i) => {
      // definisikan inputan user
      input = i;


      // ubah i kedalam key
      key = input.map((i) => {
        index = getValue(charObjKeyb).indexOf(i);
        return getKey(charObjKeyb)[index];
      });


      // lakukan proses operasi pengurangan terhadap key layer 1
      // dan lakukan operasi aritmatika karakter tersebut dengan metode lompatan 2
      i = 0;
      hasil = key.map((k) => {
        num = parseInt(k);

       hasil = num / 2;
        return hasil;
        i++;
      });


      // panggil value dari key yang di dapat dari hasil operasi layer 1
      let charOld = hasil.map((h) => {
        key = tamNol(h);
        // ambil value char jika key di panggil
        index = getKey(charObj).indexOf(key + h);
        return getValue(charObj)[index];
      });

      return charOld.join("");
    };
  </script>
  <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
