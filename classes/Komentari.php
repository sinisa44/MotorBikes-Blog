<?php
class Komentari extends Request {

	public function dodaj($komentar,$dugme,$kategorija){

		if(isset($dugme) && !empty($komentar)){



			$query = Connection::getInstance()->conn->prepare("INSERT INTO komentari (komentar, kategorija, korisnik) VALUES (:komentar, :kategorija, :korisnik)");

			$query->bindParam(':komentar', $komentar);
			$query->bindParam(':kategorija',$kategorija);
			$query->bindParam(':korisnik',$_SESSION['korisnik']['ime']);
			$query->execute();

			//header("Location:".GET_SINGLE.$this->post['hidden']);
		}
	}
	public static function prikazi($kat){

		$query = Connection::getInstance()->conn->query("SELECT * FROM komentari WHERE kategorija = '{$kat}'");

		$komentar = array();

		while($komobj = $query->fetch(PDO::FETCH_OBJ)){
			$komentar[] = $komobj;
		}

		return $komentar;

	}
	public function obrisi($id){

		if(!empty($id)) {
			$query = Connection::getInstance()->conn->query( "DELETE FROM komentari WHERE id='{$id}'" );
		}


	}
	public static function PrikaziSve(){
		$query = Connection::getInstance()->conn->query("SELECT * FROM komentari");

		$komentari = array();
		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$komentari[] = $obj;
		}
		return $komentari;
	}
}
