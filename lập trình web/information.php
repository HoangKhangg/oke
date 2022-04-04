<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function checkInput1($name) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($name)) {
                    header("Location: http://localhost/homepage.php");
                } else {
                    echo $name;
                }
            }else {echo "TAI SAO";}
            // Begin so hard :"3
        }
    ?>
    <p>THÔNG TIN ĐẶT CHỖ</p>
    <p>Họ và tên: 
        <?php checkInput1($_POST['nameCustomer']);?>
    <br>
    </p>
    <p>Độ tuổi: 
        <?php checkInput1($_POST['age']); ?>
    / Giới tính:
        <?php checkInput1($_POST['sex']);?>
    <br></p>
    <p>Địa chỉ:
        <?php checkInput1($_POST['address']); ?>
    <br></p>
    <h3>Thông tin đặt chỗ</h3>
    <p>Số khách tham dự bữa tiệc
        <?php checkInput1($_POST['numberCustomer']);?>
    - Ngày đặt tiệc: 
    <?php checkInput1($_POST['date']); ?>
    </p>
    <p>Loại tiệc:
    <?php checkInput1($_POST['categoriesParty']);?>
    </p>
    <br>
    <p>Địa điểm:
    <?php checkInput1($_POST['addressParty']);?>
    </p>
    <p>Các yêu cầu kèm theo:
        <?php checkInput1($_POST['message'])?>
    </p>
    <p>Quý khách biết chúng tôi qua:
        <?php checkInput1($_POST['knowTo']); ?>
    </p>
    <p>Chúng tôi đã nhận được thông tin đặt chỗ của quý khách vào lúc: 
    <?php checkInput1($_POST['date']);?>
    </p>
</body>
</html>