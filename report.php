<!DOCTYPE html>
<html>
<head>
    <title>My Pet Got Lost - Report a Lost Pet</title>
</head>

<body>
<h2>My Pet Got Lost - Report a Lost Pet</h2>
<?php 
    $name = $_POST ['fName']. ' '. $_POST['lName'];
    $when = $_POST ['when'];
    $how_long = $_POST ['howLong'];
    $id_tag = $_POST['idTag'];
    $pet_description = $_POST['petDescription'];
    $pet_name = $_POST['petName'];
    $max_seen = $_POST['maxSeen'];
    $email = $_POST['email'];
    $other_info = $_POST['otherInfo'];
        $to = 'manveetkaur0007@gmail.com';
        $subject = "My Pet Got Lost - Report a Lost Pet";
        $msg = "My name is $name.\n" .
        "My pet, $pet_name, was lost $when and was gone for $how_long.\n" .
        "Pet ID tag: $id_tag\n".
        "Your pet's name: $pet_name\n" .
        "Max seen: $max_seen\n" .
        "Other information : $other_info";
    mail($to, $subject, $msg, 'From:' . $email);

    echo 'Thanks for submitting the form.<br/>';
    echo 'Your pet was lost ' . $when;
    echo ' and has been gone for ' . $how_long . '<br/>';
    echo 'Pet ID tag: ' . $id_tag . '<br/>';
    echo 'Describe your pet: ' . $pet_description . '<br/>';
    echo 'Your pet\'s name: ' . $pet_name . '<br/>';
    echo 'Have you seen Max? ' . $max_seen . '<br/>';
    echo 'Other information: '.  $other_info . '<br/>';
    echo 'Your name is ' . $name . ' ';
    echo 'Your email address is ' . $email;
?>
</body>
</html>