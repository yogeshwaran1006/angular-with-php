<?php


include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$first_name = '';
$dob = '';
$salary = '';
$joiningdate = '';
$relievingdate = '';
$contact = '';
$status = '';


if($form_data->action == 'fetch_single_data')
{
	$query = "SELECT * FROM employee_list  WHERE id='".$form_data->id."'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output['first_name'] = $row['first_name'];
		$output['dob'] = $row['dob'];
		$output['salary'] = $row['salary'];
		$output['joiningdate'] = $row['joiningdate'];
		$output['relievingdate'] = $row['relievingdate'];
		$output['contact'] = $row['contact'];
		$output['status'] = $row['status'];

	}
}
elseif($form_data->action == "Delete")
{
	$query = "
	DELETE FROM employee_list  WHERE id='".$form_data->id."'
	";
	$statement = $connect->prepare($query);
	if($statement->execute())
	{
		$output['message'] = 'Data Deleted';
	}
}
else
{
	if(empty($form_data->first_name))
	{
		$error[] = 'First Name is Required';
	}
	else
	{
		$first_name = $form_data->first_name;
	}
if(empty($form_data->dob))
	{
		$error[] = 'Dob is Required';
	}
	else
	{
		$dob = $form_data->dob;
	}
	if(empty($form_data->salary))
	{
		$error[] = 'salary is Required';
	}
	else
	{
		$salary = $form_data->salary;
	}
if(empty($form_data->joiningdate))
	{
		$error[] = 'Joiningdate is Required';
	}
	else
	{
		$joiningdate = $form_data->joiningdate;
	}
if(empty($form_data->relievingdate))
	{
		$error[] = 'Relievingdate is Required';
	}
	else
	{
		$relievingdate = $form_data->relievingdate;

	}
	if(empty($form_data->contact))
	{
		$error[] = 'Contact is Required';
	}
	else
	{
		$contact = $form_data->contact;
	}

	if(empty($form_data->status))
	{
		$error[] = 'Status is Required';
	}
	else
	{
		$status = $form_data->status;
	}


	if(empty($error))
	{
		if($form_data->action == 'Submit')
		{
			$data = array(
				':first_name'		=>	$first_name,
				':dob'				=>	$dob,
				':salary'			=>	$salary,
				':joiningdate'		=>	$joiningdate,
				':relievingdate'	=>	$relievingdate,
				':contact'			=>	$contact,
				':status'			=>	$status,

			);
			$query = "
			INSERT INTO employee_list  
				(first_name,dob, salary,joiningdate,relievingdate , contact ,status) VALUES 
				(:first_name, :dob, :salary, :joiningdate, :relievingdate, :contact, :status)
			";
			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Employee Added Succesfully';
			}
		}
		if($form_data->action == 'Edit')
		{
			$data = array(
				':first_name'		=>	$first_name,
				':dob'				=>	$dob,
				':salary'			=>	$salary,
				':joiningdate'		=>	$joiningdate,
				':relievingdate'	=>	$relievingdate,
				':contact'			=>	$contact,
				':status'			=>	$status,
				':id'				=>	$form_data->id
			);
			$query = "
			UPDATE employee_list  
			SET first_name = :first_name ,dob = :dob, salary = :salary , 
			joiningdate = :joiningdate, relievingdate = :relievingdate, contact = :contact,
			status = :status
			WHERE id = :id
			";

			$statement = $connect->prepare($query);
			if($statement->execute($data))
			{
				$message = 'Data Edited';
			}
		}
	}
	else
	{
		$validation_error = implode(", ", $error);
	}

	$output = array(
		'error'		=>	$validation_error,
		'message'	=>	$message
	);

}



echo json_encode($output);

?>