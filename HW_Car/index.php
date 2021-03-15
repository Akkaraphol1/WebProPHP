<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="indexdiv">
        <img src="img/Header.jpg" style="width: 100%;">
        <form method="get" action="CalculateCar.php" class="formindex">
            <fieldset>
                <legend style="text-align: center;">Car Model</legend><br>
                เลือกรุ่นรถยนต์ <select name="carname">
                    <option value="Accord">Accord</option>
                    <option value="Civic">Civic</option>
                    <option value="Jazz">Jazz</option>
                    <option value="City">City</option>
                </select>
                <input type="submit" value="Submit" name="submit"><br><br>
                <center>
                    <table border="1" class="centd">
                        <tr >
                            <td >ภาพรถยนต์</td>
                            <td>รุ่นรถยนต์</td>
                            <td>ราคารถยนต์<br>(บาท)</td>
                            <td>อัตราดอกเบี้ย ต่อปี <br>(ร้อยละ,%)</td>
                        </tr>
                        <tr>
                            <td><img src="img/Accord.png" width = "100"  height = "50" class="indeximg"></td>
                            <td>Accord</td>
                            <td>1,799,000</td>
                            <td>2.00</td>
                        </tr>
                        <tr>
                            <td><img src="img/Civic.png" width = "100"  height = "50" class="indeximg"></td>
                            <td>Civic</td>
                            <td>1,145,000</td>
                            <td>2.00</td>
                        </tr>
                        <tr>
                            <td><img src="img/Jazz.png" width = "100"  height = "50" class="indeximg"></td>
                            <td>Jazz</td>
                            <td>754,000</td>
                            <td>4.00</td>
                        </tr>
                        <tr>
                            <td><img src="img/City.png" width = "100"  height = "50" class="indeximg"></td>
                            <td>City</td>
                            <td>749,000</td>
                            <td>4.00</td>
                        </tr>
                    </table>
                </center>
            </fieldset>
        </form>
    </div>
</body>
</html>