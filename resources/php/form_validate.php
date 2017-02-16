<?php
if(isset($_POST["stage"])) {
    switch($_POST["stage"]) {
        default:
            header("location:../../index.php");
            break;
        case 1://intro
            header("location:../../newuser.php");
            break;
        case 2://background info
            validateInput($_POST);
            break;
        case 3://weekly info
            validateInput($_POST);
            break;
        case 4:
            header("location:../../newuser.php");
            break;
    }
}

function validateInput($input) {
    switch($input["stage"]) {
        case 2:
            fill_BI($input);
            break;
        case 3:
            if(!empty($input["party"]) && !empty($input["article_1"]) && !empty($input["article_text_1"])) {
                $array = array($input, $_COOKIE["visitor"]);
                getUserByHash($array); 
            } else {
                echo "Je hebt niet alles ingevuld.";
            }
            break;
    }
}

function fill_BI($input) {
    $databasename = "TheDayAfterDB";
    $servername = "localhost";
    $username = "website";
    $password = "dls2KXETD9HcZFYSryCv";
    
    try {
        $connectionString = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        switch($input["stage"]) {
            default:
                break;
            case 2:
                $query = $connectionString->prepare("INSERT INTO userBackground(userID, birthdate, gender, household, educationID, workID, incomeID, candidateID) VALUES ('', :birthdate, :gender, :household, :education, :worksituation, :income, :party)");
                $query->bindParam(':birthdate', strip_tags($input["birthdate"]));
                $query->bindParam(':gender', strip_tags($input["gender"]));
                $query->bindParam(':household', strip_tags($input["household"]));
                $query->bindParam(':education', strip_tags($input["education"]));
                $query->bindParam(':worksituation', strip_tags($input["worksituation"]));
                $query->bindParam(':income', strip_tags($input["income"]));
                $query->bindParam(':party', strip_tags($input["party"]));
                $query->execute();
                
				$userID = $connectionString->lastInsertId();
				
                foreach($input["news_source"] as $channel) {
                    $query_2 = $connectionString->prepare("INSERT INTO userChannel(userID, channelID) VALUES ($userID, '".strip_tags($channel)."')");
                    
					$query_2->execute();
                }
                
                createHash($userID);
                break;
            case 3:
                $query = $connectionString->prepare("UPDATE userBackground SET userHash=:hash WHERE userid =:userid");
                $query->bindParam(':hash', strip_tags($input["hash"]));
                $query->bindParam(':userid', strip_tags($input["userid"]));
                $query->execute();
                header("location:../../weeklyform.php?id=".$input["hash"]."");+
                setcookie("visitor",$input["hash"],time() + (3600*24*7*13), "/");
                break;
        }
        
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function createHash($id) {
    $input = array("stage" => 3, "userid" => $id, "hash" => crypt($id, "ICT-Academie".time()));
    fill_BI($input);
}


function getUserByHash($input) {
    $databasename = "TheDayAfterDB";
    $servername = "localhost";
    $username = "website";
    $password = "dls2KXETD9HcZFYSryCv";
    try {
        $connectionString = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query_userID = $connectionString->prepare("SELECT userID FROM userBackground WHERE userHash = '".$input[1]."'");
        $query_userID->execute();
        $row_userID = $query_userID->fetchAll();
        $query_periodID = $connectionString->prepare("SELECT MAX(periodID) FROM weeklyAnswer WHERE userID = '".$row_userID[0]["userID"]."'");
        $query_periodID ->execute();
        $row_periodID = $query_periodID->fetchAll();
        print_r($row_periodID);
        if(count($row_userID[0]["userID"]) > 0) {//bestaat de hash in de database
            if($row_periodID[0]["MAX(periodID)"] >= 0 && $row_periodID[0]["MAX(periodID)"] < 4) {//is de periode 1 of groter
                $periodID = ($row_periodID[0]["MAX(periodID)"] + 1 );
                $query = $connectionString->prepare("INSERT INTO weeklyAnswer (userID, periodID	, candidateID, source1, article1, source2, article2, source3, article3) VALUES('".$row_userID[0]["userID"]."', '".$periodID."', :party, :article_1, :article_text_1, :article_2, :article_text_2, :article_3, :article_text_3)");
                $query->bindParam(':party', strip_tags($input[0]["party"]));
                $query->bindParam(':article_1', strip_tags($input[0]["article_1"]));
                $query->bindParam(':article_text_1', strip_tags($input[0]["article_text_1"]));
                $query->bindParam(':article_2', strip_tags($input[0]["article_2"]));
                $query->bindParam(':article_text_2', strip_tags($input[0]["article_text_2"]));
                $query->bindParam(':article_3', strip_tags($input[0]["article_3"]));
                $query->bindParam(':article_text_3', strip_tags($input[0]["article_text_3"]));
                $query->execute();
				
				if($row_periodID[0]["MAX(periodID)"] == 3){
					header("location:../../max.php");
				}
				elseif($row_periodID[0]["MAX(periodID)"] >= 0 && $row_periodID[0]["MAX(periodID)"] < 3){
					header("location:../../end.php");
				}
                
            } 
			else {
                header("location:../../max.php");
            }
        } else {
            header("location:../../index.php");
        }
    }
    catch(PDOException $e) {
		echo $e->getMessage();
    }
}

?>