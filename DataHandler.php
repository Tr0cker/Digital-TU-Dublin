<?php





function insert_history($user_id, $user_location, $user_experience){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO user_history (user_id, user_location, user_experience) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $user_id, $user_location, $user_experience);

  // set parameters and execute
  $user_id = $user_id;
  $user_location = $user_location;
  $user_experience = $user_experience;
  $stmt->execute();
  //echo "New record created successfully";

  $stmt->close();
  $conn->close();  
}





function print_history($user_id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // prepare and bind
  $stmt = $conn->prepare("SELECT user_id, user_location, user_experience, user_date FROM user_history Where user_id = ?");
  $stmt->bind_param("s", $user_id);

  // set parameters and execute
  $user_id = $user_id;
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .  "Your Adventure History: ". "</b>" . "</p>" . "<br>";
    while($row = $result->fetch_assoc()) {
      echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .  "user_id: " . $row["user_id"]. "  user_location: " . $row["user_location"]. "  user_experience: " . $row["user_experience"]. "  user_date: " . $row["user_date"].  "</b>" . "</p>". "<br>";
    }
  } else {
    echo "0 results";
  }

  $stmt->close();
  $conn->close();  
}





function check_the_largest_id(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT MAX(user_id) AS LargestNumber FROM user";
  $result = $conn->query($sql);
  $my_info = null;
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "LargestNumber: " . $row["LargestNumber"]. "<br>";
      //$my_info = "LargestNumber: " . $row["LargestNumber"]. "<br>";
      $my_info = $row["LargestNumber"];
    }
  } else {
    $my_info = "0";
  }
  return $my_info;
  //$conn->close(); 
}





function insert_user($user_id){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO user (user_id) VALUES (?)");
  $stmt->bind_param("s", $user_id);

  // set parameters and execute
  $user_id = (string)$user_id;
  $stmt->execute();
  //echo "New record created successfully";

  $stmt->close();
  $conn->close();  
}





function print_popular_site(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT user_location, count(user_location) AS location_number FROM user_history GROUP BY user_location ORDER BY count(*) DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .  "Popular site ranking: ". "</b>" .  "</p>" . "<br>";
    while($row = $result->fetch_assoc()) {
      echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .   "user_location: " . $row["user_location"]. " - Number of visit: " . $row["location_number"]. "</b>" . "</p>" . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
}





function print_popular_experience(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tu_dublin";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT user_experience, count(user_experience) AS experience_number FROM user_history GROUP BY user_experience ORDER BY count(*) DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .  "Popular experience ranking: ". "</b>" . "</p>" . "<br>";
    while($row = $result->fetch_assoc()) {
      echo "<p style='color: #FF7C25;' align='center'>" . "<b>" .   "user_experience: " . $row["user_experience"]. " - Number of visit: " . $row["experience_number"]. "</b>" . "</p>". "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
}





//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "tu_dublin";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}

//$sql = "INSERT INTO user_history (user_id, user_location, user_experience) VALUES ('test_user', 'test_location', 'test_experience')";

//if ($conn->multi_query($sql) === TRUE) {
  //echo "New records created successfully";
//} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();

?>