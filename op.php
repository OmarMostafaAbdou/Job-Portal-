<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/all.css" />
  <!-- font awesome library -->
  <link rel="stylesheet" href="css/all.min.css" />
  <!--main css style -->
  <link rel="stylesheet" href="css/styling.css" />
  <!-- nav css  -->
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
    integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <style>
    .col {
      /* display: none; */
    }

    .tabshow {
      display: block;
    }

    .tm-list-item-img {
      width: 35%;
      align-self: center;
    }

    .stnBtn {
      margin-bottom: 15px;
      margin-top: 0;
      align-self: self-start;
    }
  </style>
</head>

<body>

  <div id="row">
    <div class="col" id="mydiv">
      <div class="settings tabshow">
        <h1>المعلومات الشخصية</h1>
        <img src="../images/a.png" class="tm-list-item-img" />
        <h2>الاسم</h2>
        <p style="width: 100%">عبدالله صلاح</p>
        <h2>البريد الإلكتروني</h2>
        <p style="width: 100%">adbo@wow.com</p>
        <h2>تاريخ الميلاد</h2>
        <p style="width: 100%">30/1/1997</p>
        <button class="btn stnBtn" onclick="stng()">الإعدادات</button>
      </div>
    </div>
  </div>

  <script>
    let col = document.getElementById("col");
    var dontRepeat = false;
    var flag = 0;

    function stng() {
      if (!dontRepeat) {
        col.style.display = "none";
        if (div.style.display == "none") {
          div.style.display = "block";
        }
      }
      dontRepeat = true;
      if (flag > 0) {
        col.style.display = "none";
        document.getElementById("mydiv").style.display = "block";
      }
      flag++;
    }
  </script>
</body>

</html>