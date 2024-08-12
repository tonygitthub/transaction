
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php"  method="post">
        <div style="color: purple;">Enter Beneficiary Information</div>
        <br>
        <input type="text" name="firstname"  placeholder="first name"> <br>
        <br>
        <input type="text" name="lastname"  placeholder="receiver last name"> <br>
        <br>
        <input type="text" name="account_number"  placeholder="account number"> <br>
        <br>
        <input type="text" name="bank_name" placeholder="bank name"><br>
       <br> 
        <!-- <label for="">Slect Bank</label>
        <select name="bankname" id="">
            <option value="bankname" name="UBA">select option</option>
            <option value="bankname" name="UBA">UBA</option>
            <option value="bankname" name="UBA">GT-B</option>
            <option value="bankname" name="UBA">ZENIT Bank</option>
            <option value="bankname" name="UBA">First Bank</option>
            <option value="bankname" name="UBA">Sky Bank</option>
            <option value="bankname" name="UBA">Opay Bank</option>
            <option value="bankname" name="UBA">Palmpay Bank</option>
            <option value="bankname" name="UBA">Access Bank</option>
        </select> <br> -->
        <br>
        <label for="">$</label>
        <input type="number" name="amount" placeholder="0.0000"> <br>
        <br>
        <input type="submit" name="transfer" value="transfer">

    </form>
       <hr>
    <?php

        $balance = 2000;
        
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        //$banks = $_POST["bankname"];
        $amount = $_POST["amount"];
        $accountNumber = $_POST["account_number"];
        $bank = $_POST["bank_name"];

        //$bankk = array ("UBA" => "UBA",
                        // "GT-B" => "UBA",
                        // "ZENIT Bank" => "UBA",
                        // "First Bank" => "UBA",
                        // "Sky Bank" => "UBA",
                        // "Opay Bank" => "UBA",
                        // "Palmpay Bank" => "UBA",
                        // "Access Bank" => "UBA",);
        
        //$bankk = $bankk[$_POST["UBA"]];
        $transfer = $amount;
        $newbalance = $balance - $transfer;

        if($transfer > $balance ){
            echo "Your transfer of \${$amount} has been declined. ERRO: 404. <h4>DECLINED.</h4>
                    Reasons:<br>
                  You account balance is \${$balance} USD, <br>
                  You cannot transfer above your acount balance..";
        }
        elseif($transfer <= 0){
            echo "Invide Transfer Amount. <br>
                  Please enter a valid amount greater than 0 .";
        }
        else{
        
        echo "TRANSFER SUCCESSFUL---> <br>";
            echo "<br>";

        echo "hi , You have succesfully transfered \${$transfer} USD to {$lastname} {$firstname}. <br>";
            echo "<br>";

        echo "
            TRANSACTION DETAILS: <br>
            Name: {$lastname} {$firstname} <br>
            Account Number: {$accountNumber} <br>
            Bank: $bank <br>
            Amount: \${$amount} <br>
            Status: Transfer Successful <br>";
            echo "<br>";

        echo "YOUR NEW ACCOUNT BALANCE: <br>
              Previous Balance: \${$balance}  <br> 
              Transfered Amount: \${$amount} <br>
              New Balance: \${$newbalance} USD";
       
        }
    ?>
</body>
</html>