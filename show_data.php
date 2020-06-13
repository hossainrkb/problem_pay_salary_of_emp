<?php
$content = file_get_contents('final.json');
$data = json_decode($content, true);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <td><b>name</b></td>
            <td><b>rank</b></td>
            <td><b>Account Money</b></td>
            <td><b>Your Salary</b></td>
            <td><b>Basic</b></td>
        </tr>
        <?php
        $total_salary = 0;
        foreach ($data as $keys => $valueBasic) {
            if (isset($data[$keys]['emp'])) {
                foreach ($data[$keys]['emp'] as $key1 => $value) {
        ?>
                    <tr>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['rank'] ?></td>
                        <?php
                        $current_acc_money = 0;
                        $salary = 0;
                        if (gettype($value['bank_account']) == "array") {
                            foreach ($value['bank_account'] as $key => $bank_details) {
                        ?>
                                <?php $current_acc_money = $value['bank_account']['current_balance'] ?>
                                <?php
                                $salary = $value['bank_account']['your_salary'];

                                ?>
                        <?php
                            }
                        }
                        $total_salary = $total_salary + $salary;

                        ?>
                        <td><?php echo $current_acc_money ?></td>
                        <td><?php echo $salary ?></td>
                        <?php
                        if (isset($data[$keys][0]['basic'])) {
                        ?>
                            <td><?php echo $data[$keys][0]['basic'] ?></td>
                        <?php
                        } else {
                        ?>
                            <td>not set</td>
                        <?php
                        }
                        ?>
                    </tr>
        <?php
                }
            } else {
                continue;
            }
        }
        ?>

    </table>
    <h3>Current Fund : <?php echo $data[0]['company_fund'] . " BDT" ?></h3>
    <h3>Total Salary Company Given : <?php echo $total_salary . " BDT" ?></h3>
</body>

</html>