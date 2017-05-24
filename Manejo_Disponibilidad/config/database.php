<?php 
try {
		$con = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
		$con->exec('set names utf8');
			
	} catch (PDOException $e) {
		echo $e->getMessage();		
	}

function login($con,$usuario,$password){
	try {
		
		$sql="SELECT * FROM manejo_dist WHERE user=:usuario and
								password=:password LIMIT 1";

								$stm = $con->prepare($sql);
								$stm->bindparam(':usuario',$usuario);
								$stm->bindparam(':password', $password);
								$stm->execute();
								
									if($stm->rowCount() >0){
									
									$urow = $stm->fetch(PDO::FETCH_ASSOC);
									$_SESSION['uuser'] = $urow['user'];
									$_SESSION['upassword'] = $urow['password'];
															

									// $rows = $stm ->fetchAll();
									// var_dump($rows);
									return true;
								}else{
									return false;
								}

	} catch (Exception $e) {
		echo $e;
	}
	 
}