<?php

class Korisnici extends Request
{


	public function registruj($korisnickoIme,$email,$sifra,$sifra2,$btn,$role=null)
    {

            if(isset($btn)){

								if(empty($role)){
										$role = "user";
								}

                if($sifra == $sifra2 && $sifra != "" && $korisnickoIme != "" ){
	                    $sifra = md5($sifra);
	                    $ins = Connection::getInstance()->conn->prepare('INSERT INTO korisnici (korisnickoIme,sifra,email,role) VALUES(:korisnickoIme,:sifra,:email,:role)');
	                    $ins->bindParam(':korisnickoIme',$korisnickoIme);
	                    $ins->bindParam(':sifra',$sifra);
	                    $ins->bindParam(':email',$email);
											$ins->bindParam(':role',$role);
	                    $ins->execute();
										}
									}
    }

    public function Prijavi()
    {
        if(isset($this->post['prijavi'])){
            if(!empty($this->post['KorisnickoIme']) && !empty($this->post['lozinka']))
            {
                $korisnik  = $this->post['KorisnickoIme'];
                $sifra = md5($this->post['lozinka']);

            $query = Connection::getInstance()->conn->query("SELECT * FROM korisnici WHERE korisnickoIme = '{$korisnik}' and sifra = '{$sifra}'");

            $korisnik = $query->fetch(PDO::FETCH_ASSOC);

                if($korisnik){
                    $_SESSION['user_logged_in']=true;
                    $_SESSION['korisnik'] = array(
                        'id'  => $korisnik['id'],
                        'ime' => $korisnik['korisnickoIme'],
												'role'=> $korisnik['role']
                    );
                   header("Location:".GET_PAGE."home");
                }else{
                   Message::setMessage('error','There is an error in login, please try again');
                }
            }
        }
    }
    public function prikazi(){
    	$query = Connection::getInstance()->conn->query("SELECT * FROM korisnici");

    	$korisnici = array();
	    while($obj = $query->fetch(PDO::FETCH_OBJ)){
	    	$korisnici[] = $obj;
	    }
	    return $korisnici;
    }
    public static function obrisi($id){

    	if(isset($id)){

    		$query = Connection::getInstance()->conn->query("DELETE FROM korisnici WHERE id='{$id}'");
				}
            //Message::setMessage('success','User deleted');

    		///header("Location:".GET_PAGE."admin");


    }

    public  function Logout(){

        if(isset($this->get['uid'])){
         unset ($_SESSION['korisnik']);

         $_SESSION['user_logged_in']=false;
         session_destroy();
         header("Location:".GET_PAGE."home");
        }
    }
}
