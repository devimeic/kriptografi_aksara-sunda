<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <title>Document</title>
  <style>
    * {
  outline:none;
	border:none;
	margin:0px;
	padding:0px;
	font-family:Courier, monospace;
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
#text {
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
	border-bottom:3px solid #FFF;
	color:#FFF;
	font-size:20px;
	font-family:Courier, monospace;
	height:28px;
	font-weight:bold;
	width:220px;
}
#button {
	cursor:pointer;
	margin-top:20px;
	float: left;
	height:40px;
	padding-left:24px;
	padding-right:24px;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold;
	font-size:20px;
	color:#FFF;
	text-shadow: 0px -1px 0px #000000;
	-webkit-border-radius:8px;
	border-radius:8px;
	border-top:1px solid #FFF;
	-webkit-box-shadow: 0px 2px 14px #000;
	box-shadow: 0px 2px 14px #000;
	background-color: #62add6;
	background-image:url(https://static.tumblr.com/maopbtg/ZHLmgtok7/button.png);
	background-repeat:repeat-x;
}
#button:active {
	zoom: 1;
	filter: alpha(opacity=80);
	opacity: 0.8;
}
#button:focus {
	zoom: 1;
	filter: alpha(opacity=80);
	opacity: 0.8;
}
#wrapper {
	width:700px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	margin-top:24px;
	margin-bottom:100px;
}
  </style>
</head>

<body>
  <div id="wrapper">
    <table>
      <tr>
        <td> <h1> enkripsi</h1> enkripsi</td>
      </tr>
      <tr>
        <td>
          <form id="paper" method="get" action="">
          <textarea placeholder="Enter something funny." id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>
          </form>
        </td>
      </tr>
      <tr>
        <td><input id="button" type="submit" value="Create"></td>
        <td><input id="button" type="submit" value="Create"></td>
        <td><input id="button" type="submit" value="Create"></td>

      </tr>
    </table>

</div>

  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      // ketika tombol di reset maka halaman di reload
      $("#reset").click(function () {
        location.reload();
      });
      // ketika tombol encrypt di tekan
      $("#encrypt").click(function () {
        let input = $("textarea").val().split("");

        // jika inputan ada spasi maka lakukan split
        if (input.includes(" ")) {
          input = input.join("").split(" ");
        }

        // jika inputan kosong maka akan muncul alert
        if (input == "") {
          $(".alert")
            .html(
              '<div id="alert" class="alert alert-danger rounded-5" role="alert">Wajib diisi </div>'
            )
            .show("slow")
            .delay();
        } else {
          let hasil = encrypt(input);
          $(".result").html(
            "<h6 class='text-light'>Hasil: </h6>" +
            "<textarea id='result' rows='1' class='bg-info rounded-5 shadow p-3 mt-3 col-12 border-0 form-control rounded-5 shadow'>" +
            "Layer 2 = "+ window.sunda.toSundanese(hasil) +'<br>'+hasil+
            "</textarea>" +
            '<button id="copy" type="button" class="btn btn-sm btn-outline-light rounded-5 px-sm-3 px-5 mt-3">Copy</button>'
          );
          // membuat tombol copy dan melakukan fungsi copy


        }
      });

      // ketika tombol decrypt di tekan
      $("#decrypt").click(function () {
        var x = document.getElementById("exampleFormControlTextarea1").value;

        let zz = window.sunda.toLatin(x);
        let input = zz.split("");
        // let input = window.sunda.toLatin(inpu);

        // jika inputan kosong maka akan muncul alert
        if (input == "") {
          $(".alert")
            .html(
              '<div id="alert" class="alert alert-danger rounded-5" role="alert">Wajib diisi </div>'
            )
            .show("slow")
            .delay();
        } else {
          let hasil = decrypt(input);
          $(".result").html(
            "<h6 class='text-light'>Hasil: </h6>" +
            "<div id='result' class='text-md-center bg-info rounded-5 shadow p-3 mt-3'>" +
                hasil +
            "</div>"
          );
        }
      });
    });

    // definisikan characterSymbol
    let charSym = " abcdefghijklmnopqrstuvwxyz";
    // ubah menjadi array
    charSym = charSym.split("");

    // Definisikan allChar
    let allCharKeyb =
      "?ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    // ubah menjadi array
    allCharKeyb = allCharKeyb.split("");

    // fungsi penambahan noll
    let tamNol = (num) => {
      // conversi num ke string
      num = num.toString();
      j = "";
      if (num.length === 1) {
        j = "000";
      } else if (num.length === 2) {
        j = "00";
      }
      //else if (num.length === 3) {
      //  j = "0";
      //}
      return j;
    };

    // definisikan objek dari lopping caracter terdapat 30 character menamabahkan pasangan key yang dibuat dengan menggunakan looping berdasarkan banyak karakter di dalam array objek
    // dan mendefinisikan value dari array yang dibuat dengan menggunakan
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
            '<div id="alert" class="alert alert-danger rounded-5" role="alert">Tidak ada karakter yang sesuai di dalam Allowed Symbol </div>'
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
        // jika bilangan itu ganjil maka
        if (i % 2 == 1) {
          hasil = num + 5;
        } else {
          hasil = num * 2;
        }
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
        // rumus operasi pengurangan 5 dan pembagian 2
        // jika bilangan itu ganjil maka
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
