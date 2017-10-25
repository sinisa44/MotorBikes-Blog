<?php
require '../../config.php';

$users = new Korisnici();

$allusers = $users->prikazi();


      $data = '	<table class="table table-striped" >
            				<thead>
            					<tr>
            						<th>Username</th>
            						<th>Email</th>
                        <th>Role</th>
            						<th>ID</th>
            						<th>***</th>
            				 </tr>
                     </thead>';
        foreach ( $allusers as $user ) {
        $data .=  '
                <tr>
                    <td>' .$user->korisnickoIme.'</td>
                    <td>' .$user->email.'</td>
                    <td>' .$user->role.'</td>
                    <td>' .$user->id. '</td>
                    <td><button class="btn btn-xs btn-danger" onclick="deleteUser('.$user->id.')">Delete</button></td>
                </tr>';
                }
        $data .= '</table>';

        echo $data;

if (isset($_POST['btn'])) {
  $reg = new Korisnici();
  $reg->registruj($_POST['username'],$_POST['email'],$_POST['password'],$_POST['password2'],$_POST['btn'],$_POST['role']);
}
if(isset($_POST['id'])){
  Korisnici::obrisi($_POST['id']);
}

 ?>
