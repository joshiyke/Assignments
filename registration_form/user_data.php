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
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $date = $_POST['date_of_birth'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];

        $client = [$fname, $lname, $date, $gender, $country];

        $filename = 'userdata.csv';

        $file = fopen($filename, 'a');
        fputcsv($file, $client);
        fclose($file);


        print_r($client);     
    }else{echo "nothing to display";}
   

    ?>
</body>
</html>