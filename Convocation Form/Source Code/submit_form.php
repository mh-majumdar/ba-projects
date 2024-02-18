<?php
// Get form data
$Name = $_POST['Name'];
$FatherName = $_POST['FatherName'];
$MotherName = $_POST['MotherName'];
$Birthdate = $_POST['Birthdate'];
$AdmissionSession = $_POST['AdmissionSession'];
$RegistrationID = $_POST['RegistrationID'];
$Batch = $_POST['Batch'];
$Address = $_POST['Address'];
$MobileNo = $_POST['MobileNo'];
$Email = $_POST['Email'];
$Amount = $_POST['Amount'];
$BankName = $_POST['BankName'];
$TransactionID = $_POST['TransactionID'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'cform');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into database
$stmt = $conn->prepare("INSERT INTO ctable (Name, FatherName, MotherName, Birthdate, AdmissionSession, RegistrationID, Batch, Address, MobileNo, Email, Amount, BankName, TransactionID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters to the statement
$stmt->bind_param("sssssssssssss", $Name, $FatherName, $MotherName, $Birthdate, $AdmissionSession, $RegistrationID, $Batch, $Address, $MobileNo, $Email, $Amount, $BankName, $TransactionID);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    if ($conn->errno == 1062) { // Error number for duplicate entry
        echo "Sorry, a record with the same primary key already exists. Please try again with different data.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
