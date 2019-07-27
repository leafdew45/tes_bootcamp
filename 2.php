
<?php	
function cekEmail($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    for ($sc = 0; $sc < strlen($email); $sc++) {
        if (ord($email[$sc]) >= ord('A') &&
          ord($email[$sc]) <= ord('Z')) {
      return "invalid";
         }
         }
      return "valid";
    
  } 
  else 
  {
    echo "invalid";
  }
}

function cekPassword($password){

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);


if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    echo 'invalid';
}else{
    echo 'valid';
}

}

function cekUsername($username){

$lowercase = preg_match('@[a-z]@', $username);
if(!$lowercase || strlen($username) < 8) {

    echo 'invalid';
}else{
    echo 'valid';
}

}

echo cekEmail("kukuruyuk@gmail.com")."<br>";
echo cekEmail("Kukuruyuk@Gmail.com")."<br>";
echo cekEmail("kuk.uruyuk@gmail")."<br>";
echo cekPassword("jakartA7")."<br>";
echo cekPassword("jakarta7")."<br>";
echo cekUsername("vladimi")."<br>";
echo cekUsername("vladimir")."<br>";


?>
