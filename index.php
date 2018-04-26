<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thailand Wedsite</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti:500,600,700" rel="stylesheet">
    <style media="screen">
      html,body{font-family: 'Athiti', sans-serif;}
    </style>
    <script src="/la-project/assets/js/jquery.js" charset="utf-8"></script>
    <script src="thailandweb.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h3>Thailand Website</h3>
        <div class="col-md-4">
          <form>
            <div class="form-group">
              <label>ท่องเว็บจังหวัดทั่วไทย</label>
              <select class="form-control s1"></select>
            </div>
            <div class="form-group">
              <label>การเงิน/ธนาคาร</label>
              <select class="form-control s2"></select>
            </div>
            <div class="form-group">
              <label>เว็บไซต์กระทรวง</label>
              <select class="form-control s3"></select>
            </div>
            <div class="form-group">
              <label>สถาบันการศึกษ</label>
              <select class="form-control s4"></select>
            </div>
            <div class="form-group">
              <label>เว็บไซต์หน่วยงานสังกัด มท.</label>
              <select class="form-control s5"></select>
            </div>
            <div class="form-group">
              <label>ข่าวหนังสือพิมพ์ / ทีวี</label>
              <select class="form-control s6"></select>
            </div>
          </form>
        </div>
        <div class="col-md-8">
          <div class="well">
            <table class="table table-striped table-bordered">
            <caption>คุณสมบัติ</caption>
              <thead>
                <tr>
                  <th>Property</th>
                  <th>Default</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>tbname</td>
                  <td>"webnews"</td>
                  <td>
                    <ul>
                      เลือกฐานข้อมูล
                      <li>webbank: "การเงิน/ธนาคาร"</li>
                      <li>webeducation: "สถาบันการศึกษา"</li>
                      <li>webkrasuang: "เว็บไซต์กระทรวง"</li>
                      <li>webnews: "ข่าวหนังสือพิมพ์ / ทีวี"</li>
                      <li>weboffsetmt: "เว็บไซต์หน่วยงานสังกัด มท."</li>
                      <li>webprovinces: "ท่องเว็บจังหวัดทั่วไทย"</li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="well">
            <caption>วิธีใช้งาน</caption>
            <pre>
              นำเข้าไฟล์ thailandweb.js จากนั้นเรียกใช้งานตามตัวอย่างข้างล่างได้เลย
              $('.s1').thailandweb({
                tbname : 'webprovinces'
              });
            </pre>
          </div>
        </div>
      </div>
    </div>
    <!-- onchange="window.location.href=this.options[this.selectedIndex].value" -->
  </body>
  <script type="text/javascript">
    $('.s1').thailandweb({
      tbname : 'webprovinces'
    });
    $('.s2').thailandweb({
      tbname : 'webbank'
    });
    $('.s3').thailandweb({
      tbname : 'webkrasuang'
    });
    $('.s4').thailandweb({
      tbname : 'webeducation'
    });
    $('.s5').thailandweb({
      tbname : 'weboffsetmt'
    });
    $('.s6').thailandweb({
      tbname : 'webnews'
    });
  </script>
</html>
