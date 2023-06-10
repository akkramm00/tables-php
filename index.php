<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
$usernames = ['John', 'Sarah', 'Simon', 'Samantha'];

print_r($usernames);
echo  "<br>";
var_dump($usernames);
$usernames[4] = 'houss';
echo  "<br>";
var_dump($usernames);
echo  "<br>";
print_r($usernames);
echo  "<br>";
echo "Bonjour ". $usernames [3]. " dans votre espace personnel !". "<br>";
$usernames[] = "el-yaacoubi";
var_dump($usernames);
echo  "<br>";
// les tableaux associatifs :
$user = [
  'username' => 'John',
  'email' => 'john@emailcom',
  'age'=> 24
];
var_dump($user);
echo"<br>";
echo $user['username'];
echo"<br>";
//Pour ajouter une valeur avec cle au tableau ,il faut spécifier les deux :
 $user['height'] = 180;
var_dump($user);
echo"<br><br><br>";
// L es tableaux multidimentionnels:

$utilisateurs =[
  ["lastname" => "Martin", 'firstname'=>'Jean' ],
  ["lastname" => "Doe", 'firstname'=>'Jane' ],
  ["lastname" => "Dupont", 'firstname'=>'Marc']
];

$utilisateurs[]=["Lastname" => "Durant", 'firstname'=>'Clara' ];

var_dump($utilisateurs);
//Pour afficher par exemple le premier utilisateur Martin Jean :
echo "<br>";
var_dump($utilisateurs[0]); 
echo "<br>";
print_r($utilisateurs[1]);// Afficher le 2eme utilisateurs:
echo "<br>";







?> 

  
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>