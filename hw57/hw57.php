<?php     
$presidents=[
    [
    "Donald J Trump",
    "2017"
    ],
    [
    "Barack H Obama",
    "2009-2016"
    ],
    [
    "George W Bush",
    "2001-2007"
    ]
];
print_r($presidents);
?>
echo "<br/>";
<?php     
$presidents=[
       "Trump"=>[
                "name"=> "Donald J Trump",
                "years"=> "2017"
                ],
       "Obama"=>[
                "name"=> "Barack H Obama",
                "years"=> "2009-2016"
                ],
        "Bush"=>[
                "name"=> "George W Bush",
                "years"=> "2001-2007"
                ]
];
print_r($presidents);
?>