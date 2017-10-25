<?php
Class Content extends Request {

	public function getAll(){
		$query = Connection::getInstance()->conn->query("SELECT * FROM motori");

		$content = array();
		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$content[] =$obj;
		}
		return $content;
	}

	public static function getRandom(){

		$query = Connection::getInstance()->conn->query('SELECT * FROM motori ORDER BY RAND() LIMIT 5');

		$randomCntnt = array();
		while($rndmObj = $query->fetch(PDO::FETCH_OBJ)){
			$randomCntnt[] =$rndmObj;
		}
		return $randomCntnt;
	}
	public function getContent(){

		if(isset($this->get['cat']) && !isset($this->get['catid'])){
			$category = $this->get['cat'];
		}else{
			$category = 'racing';
		}

		$query = Connection::getInstance()->conn->query("SELECT * FROM motori WHERE kategorija='{$category}'");

		$content = array();
		while($cntnobj = $query->fetch(PDO::FETCH_OBJ)){
			$content[] = $cntnobj;
		}
		return $content;

	}
	public function getSingle(){

		if(isset($this->get['catid'])){
			$single = $this->get['catid'];

		$query = Connection::getInstance()->conn->query("SELECT * FROM motori WHERE id='{$single}'");
			//print_r($query);
		$single = $query->fetch(PDO::FETCH_OBJ);
			return $single;
		}

	}
	public function addNewPost($title,$fulltext,$category,$slug,$slika){



			$query = Connection::getInstance()->conn->prepare("INSERT INTO motori (naziv, text, kategorija,slika, podnaslov) VALUES (:naziv,:text,:kategorija,:slika,:podnaslov)");

			$query->bindParam(':naziv',$title);
			$query->bindParam(':text',$fulltext);
			$query->bindParam(':kategorija',$category);
			$query->bindParam(':slika',$slika);
			$query->bindParam(':podnaslov',$slug);
			$query->execute();

			Message::setMessage('success','Post successfully added');



			//header("Location:".GET_PAGE."admin");

	}
	public static function delete($id){

				$query = Connection::getInstance()->conn->query( "DELETE FROM motori WHERE id='{$id}'" );
				Message::setMessage('success','Post successfully deleted');
			}

	public static function getDetails($id){

		$query = Connection::getInstance()->conn->query("SELECT * FROM motori WHERE id= '{$id}'");

		return json_encode($query->fetch(PDO::FETCH_ASSOC));
	}

	public function Update($title,$fulltext,$category,$slug,$slika,$id){

		$query = Connection::getInstance()->conn->prepare("UPDATE motori SET naziv=:naziv,text= :text,kategorija=:kategorija, slika='{$slika}',podnaslov=:podnaslov WHERE id='{$id}'");

		$query->bindParam(':naziv',$title);
		$query->bindParam(':text',$fulltext);
		$query->bindParam(':kategorija',$category);

		$query->bindParam(':podnaslov',$slug);
		$query->execute();
	}
}
