<?php
	if (count($_POST)) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
	
		$request = $bdd->connection->prepare("INSERT INTO contact (name, lastname, email, message) 
		VALUES (:name, :lastname, :email, :message);");
        $request->bindValue(':name', $_POST["name"]);
        $request->bindValue(':lastname', $_POST["lastname"]);
        $request->bindValue(':email', $_POST["email"]);
        $request->bindValue(':message', $_POST["message"]);
		$request->execute();

		$EmailTo = "idrissmoustaghfir@yahoo.fr"; // change with your email
		$Subject = "Portfolio CV/Resume";
		 
		// prepare email body text
		
		$Body = "Name: ";
		$Body .= $name;
		$Body .= "\n"; 
		 
		$Body .= "Email: ";
		$Body .= $email;
		$Body .= "\n";
		 
		$Body .= "Message: ";
		$Body .= $message;
		$Body .= "\n";
		 
		
		// send email
		@$success = mail($EmailTo, $Subject, $Body, "From:".$email);
	}
?>