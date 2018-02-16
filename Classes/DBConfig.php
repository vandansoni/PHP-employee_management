<?php 
	Class DBConfig
	{
		private $Server="localhost";
		private $DBUser="root";
		private $DBPassword="";
		private $Database="employee_db";
		public $Conn="";
		
		public function __construct()
		{
			try
			{
				$this->Conn=mysqli_connect($this->Server, $this->DBUser,$this->DBPassword,$this->Database) or die('Cannot connect to the database because: '.mysqli_connect_error());
				if(!mysqli_select_db($this->Conn,$this->Database))
				{
					die('Can not connecto to the Database'.mysqli_error($this->Conn));
				}
			}
			catch(Exception $ex)
			{
				echo $ex->message.mysqli_connect_error();
			}
		}
		
	}
?>
