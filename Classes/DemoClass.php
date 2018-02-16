<?php
require_once ("DBConfig.php");

class DemoClass extends DBConfig
{
	public function login($username,$password)
	{
		$Sql = "select UserID,FirstName,Username from UserDetails where Username = '$username' and Password = BINARY '$password'";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
	public function signUp($FName,$LName,$username,$password)
	{
		$Sql = "INSERT INTO userdetails (UserID, FirstName, LastName, Username, Password) VALUES (NULL, '$FName', '$LName', '$username', '$password');";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}

	public function getDetailsByEmpID($EmpID)
	{
		$Sql = "SELECT Name,Contact,Email from empdetails where EmpID = '$EmpID'";
		$result = mysqli_query($this->Conn,$Sql);
		$row = mysqli_fetch_array($result);
		return $row;
	}
	public function signUpCheck($username)
	{
		$sql = "SELECT Username from UserDetails where Username='$username'";

		$result = mysqli_query($this->Conn,$sql);
		if(mysqli_num_rows($result)>=1)
		{
			return 0;
		}
		else
		{

			return 1;
		}
	}
	public function addEmpDetails($EmpName,$EmpContact,$EmpEmail,$UserID,$Status)
	{
		$Sql = "INSERT INTO empdetails (EmpID, Name, Contact, Email, UserID, Status) VALUES (NULL, '$EmpName', '$EmpContact', '$EmpEmail', '$UserID', '$Status')";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
	public function editEmpDetails($EmpName,$EmpContact,$EmpEmail,$EmpID)
	{
		$Sql = "UPDATE empdetails SET Name = '$EmpName', Contact = '$EmpContact', Email = '$EmpEmail' WHERE empdetails.EmpID = $EmpID";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
	public function getEnableEmpDetails($UserID)
	{
		$Sql = "SELECT * from empdetails where UserID = '$UserID' and Status = 1";
		$result = mysqli_query($this->Conn,$Sql);
		$ar = array();
		while ($row = mysqli_fetch_array($result)) {
			$ar[] = $row;
		}
		return $ar;
	}
	public function getDisableEmpDetails($UserID)
	{
		$Sql = "SELECT * from empdetails where UserID = '$UserID' and Status = 0";
		$result = mysqli_query($this->Conn,$Sql);
		$ar = array();
		while ($row = mysqli_fetch_array($result)) {
			$ar[] = $row;
		}
		return $ar;
	}
	public function delEmp($EmpID)
	{
		$Sql = "DELETE FROM empdetails WHERE empdetails.EmpID = $EmpID";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
	public function disEmp($EmpID)
	{
		$Sql = "UPDATE empdetails SET Status = '0' WHERE empdetails.EmpID = $EmpID";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
	public function enaEmp($EmpID)
	{
		$Sql = "UPDATE empdetails SET Status = '1' WHERE empdetails.EmpID = $EmpID";
		$result = mysqli_query($this->Conn,$Sql);
		return $result;
	}
}
?>