<!DOCTYPE html>
<html ng-app="">
  <head>
    <title>FORM PAY</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="js/javascript.js" type="text/javascript"></script>
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="container">
    <h1 style="margin:10px;">PAYMENT</h1>
    <form class="" action="index.html" method="post">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Nama">
      <input required class="input-form laf" type="number" name="" value="" placeholder="08..">
      <input required class="input-form-number laf" type="number" name="" value="1" placeholder="Jumlah" ng-model="jumlah">
      <input required class="input-form-number laf" type="number" name="" value="20000" ng-model="harga">
      <input disabled required class="input-form-value" type="number" name="" value="{{jumlah*harga}}" placeholder="Hasil" ng-model="Hasil">
      <textarea class="input-form" cols="5" rows="5" name="comment" placeholder="Catatan" required></textarea>
      </textarea>

      <div style="overflow-x:auto;">
        <label>Pilih Metode Pembayaran</label>
        <table border=0 cellpadding="10">
          <tr>
            <th><input type="checkbox"  value=""><img src="img/bni.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/logo-bca.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/bri.png" width="60px" height="25px"></th>
            <th><input type="checkbox"  value=""><img src="img/bjb.png" width="60px" height="30px"></th>
            <th><input type="checkbox"  value=""><img src="img/bankdki.png" width="60px" height="25px"></th>
            <th><input type="checkbox"  value=""><img src="img/bankbb.png" width="60px" height="20px"></th>
          </tr>
          <tr>
            <th><input type="checkbox"  value=""><img src="img/visa.png" width="60px" height="30px"></th>
            <th><input type="checkbox"  value=""><img src="img/masterc.png" width="60px" height="30px"></th>
            <th><input type="checkbox"  value=""><img src="img/paypal.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/alfa.jpg" width="70px" height="50px"></th>
            <th><input type="checkbox"  value=""><img src="img/indomaret.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/gopay.jpg" width="65px" height="40px"></th>
          </tr>
        </table>
      </div>
      <button class="btn-form-pay">Proses</button>
      <button class="btn-form-change" id="Proses">Batal</button>

      <h1> thank you for order:) </h1>
    </form>
  </div>
  </body>
</html>
