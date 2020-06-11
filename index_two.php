<?php
include "./vendor/autoload.php";

class Demo
{
    public $hola_arr = [];
    public $grades = [
        0 => [
            'company_fund' => 0,
        ],
        1 => [
            'emp' => [
                1 => [
                    'name' => 'Rakib',
                    'rank' => 'A',
                    'address' => 'Halishahor',
                    'mobile' => '0192314496',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A1111',
                        'account_number' => 'Ac1111',
                        'current_balance' => '500',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
        2 => [
            'emp' => [
                1 => [
                    'name' => 'Abir',
                    'rank' => 'B',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '200',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
        3 => [
            'emp' => [
                1 => [
                    'name' => 'Abir khan',
                    'rank' => 'C',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
                2 => [
                    'name' => 'iman',
                    'rank' => 'C',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
        4 => [
            'emp' => [
                1 => [
                    'name' => 'Toky',
                    'rank' => 'D',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
                2 => [
                    'name' => 'SHamim',
                    'rank' => 'D',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
        5 => [
            'emp' => [
                1 => [
                    'name' => 'Omar',
                    'rank' => 'E',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
                2 => [
                    'name' => 'Hasib',
                    'rank' => 'E',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
        6 => [
            'emp' => [
                1 => [
                    'name' => 'Sakil',
                    'rank' => 'F',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '415',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
                2 => [
                    'name' => 'Rafi',
                    'rank' => 'F',
                    'address' => 'Halishahor',
                    'mobile' => '0192314497',
                    'bank_account' => [
                        'account_type' => 'current',
                        'account_name' => 'A22221',
                        'account_number' => 'Ac2221',
                        'current_balance' => '400',
                        'your_salary' => '0',
                        'bank' => 'uttora',
                        'branch_name' => 'Halishahor',
                    ],
                ],
            ],
        ],
    ];

    public function setBasicnCfund($basic, $company_fund)
    {
        if (((int) ($basic) != 0) && ((int) ($company_fund) != 0)) {
            for ($i = count($this->grades) - 1; $i >= 0; $i--) {
                // echo $this->grades['company_fund'];
                if (isset($this->grades[$i]['company_fund'])) {
                    $this->grades[$i]['company_fund'] = $company_fund;
                    continue;
                } else {
                    // echo $i;
                    $newArr = ['basic' => $basic];
                    array_push($this->grades[$i], $newArr);
                    $basic = $basic + 500;
                }
            }
        }
    }
    public function setSalary()
    {
        foreach ($this->grades as $key => $value) {
            if (is_array($value) && isset($value['company_fund'])) {
                $fund = $value['company_fund'];
            }
            if (isset($value[0]) && is_array($value[0])) {
                $basic = $value[0]['basic'];
            }
            if (isset($value['emp']) && is_array($value['emp'])) {
                foreach ($value['emp'] as $emp => $emp_value) {
                    if (isset($emp_value['bank_account']) && is_array($emp_value['bank_account'])) {
                        if (isset($emp_value['bank_account']['current_balance'])) {
                            $current_balance = $emp_value['bank_account']['current_balance'];
                        }
                        $house_rent = $basic * (20 / 100);
                        $medical_allowance = $basic * (15 / 100);
                        $total_salary = $basic + $house_rent + $medical_allowance;
                        if ($fund < $total_salary) {
                            $fund = $fund + 50000;
                            $this->grades[$key]['emp'][$emp]["bank_account"]['current_balance'] = $current_balance + $total_salary;
                            $this->grades[$key]['emp'][$emp]["bank_account"]['your_salary'] = $total_salary;
                        } else {
                            $this->grades[$key]['emp'][$emp]["bank_account"]['current_balance'] = $current_balance + $total_salary;
                            $this->grades[$key]['emp'][$emp]["bank_account"]['your_salary'] = $total_salary;
                        }
                        $fund = $fund - $total_salary;
                    }
                }
            }
        }

        file_put_contents('final.json', json_encode($this->grades));
    }
}

if (isset($_GET['fund'])) {
    $fund = $_GET['fund'];
    $basic = $_GET['basic'];
    $obj = new Demo();
    $obj->setBasicnCfund($basic, $fund);
    $obj->setSalary();
    echo "DONE<br>";
    echo "input Company Fund : " . $fund . '<br>';
    echo "lowest basic : " . $basic . '<br>';
    echo '<a href="index.php">go home</a>';
} else {
    $obj = new Demo();
    $obj->setBasicnCfund("demo", "demo");
    $obj->setSalary();
}
?>
<form action="" method="GET">
    <input type="number" placeholder="enter company fund" name="fund" />
    <input type="number" placeholder="enter basic" name="basic" />
    <input type="submit" />
</form>