<?php
    include_once './db.php';
    include_once './operations.php';


    //Database handle $pdo
    $con = new DBConnector();
    $pdo = $con->connectToDB();

    //creating object of Operations class. 
    $operations = new Operations();


    //Inserting one record into the company table. 
    /*$name = $_POST['name'];
    $website = $_POST['website'];
    echo $operations->saveCompany($pdo,$name,$website);*/

    //Inserting a record into the employee table
    /*$full_name = $_POST['full_name'];
    $age = $_POST['age'];
    $companyId = $_POST['companyId'];
    echo $operations->saveEmployee($pdo,$full_name,$age,$companyId);*/

    //Reading all records from company table 
    /*echo $operations->readCompany($pdo);*/

    //Reading a specific company record from company table
    /*$companyId = $_GET['companyId'];
    echo $operations->searchCompany($pdo,$companyId);*/

    //Inserting Multiple records in company table 
    /*$jsondata = '[
        {
            "name": "Safaricom",
            "website": "Safaricom.co.ke"
        },
        {
            "name": "Centum",
            "website": "Centum.co.ke"
        },
        {
            "name": "Microsoft",
            "website": "microsoft.com"
        }
]';*/
    $jsondata = file_get_contents('php://input');
    echo $operations->saveManyCompany($pdo, json_decode($jsondata));


    //Running a transaction
   /* $company = array('iLab','iLab.co.ke');
    $employee = array('Eric','23','3');
    echo $operations->saveCompanyAndEmployee($pdo,$company,$employee);*/

?>