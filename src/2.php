
<?php

// Get the user input from the form
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Validate the input
if (empty($name) || empty($age) || empty($gender)) {
    echo "Error: Please fill in all the fields.";
} else {
    // Process the form data and store it in the database
    $stmt = $conn->prepare("INSERT INTO students (name, age, gender) VALUES (:name, :age, :gender)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':gender', $gender);
    $stmt->execute();

    // Display a success message
    echo "Your data has been saved successfully.";
}

?>