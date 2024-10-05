
<!DOCTYPE html>


<html lang="en">
<head>
 <title>Document</title>
</head>
<body>
    <!-- we passes the routes url to hit the website  -->
    <form action="<?php echo base_url("student_form_submit") ?>" method="post">

    <input type="hidden" name="id" value="<?=$record[0]->id?>">
        Name: <input type="text" placeholder="Enter your name" name="Name" value="<?=$record[0]->Name?>"><br><br>
        E-MAIL: <input type="text" placeholder="Enter your email" name="E-mail" value="<?=$record[0]->Email?>"> <br><br>
        WEBSITE:<input type="text" placeholder="Enter your Website" name="Website" value="<?=$record[0]->Website?>"><br><br><br><br>
        Comment:<input type="text" placeholder="Enter your Comment" name="comment" value="<?=$record[0]->Comment?>"><br><br>
        Password:<input type="Password" placeholder="Enter your password" name="password" value="<?=$record[0]->password?>"><br><br>
        Gender:
        <input type="radio" name="radio" value="1" <?php if($record[0]->Gender=='1'){
            echo 'checked';
        } ?>>Male
        <input type="radio" name="radio" value="2" <?php if($record[0]->Gender=='2'){
            echo 'checked';
        } ?>>Female
        <input type="radio"name="radio" value="3" <?php if($record[0]->Gender=='3'){
            echo 'checked';
        } ?>>others<br><br>
        <input type="submit" name="save"><br><br>
    </form>

</body>
</html>