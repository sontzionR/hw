<?php     
$presidents1=[
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
print_r($presidents1);
?>
echo "<br/>";
<?php     
$presidents2=[
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
print_r($presidents2);
echo "<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">-->
      <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <title>Document</title>
    <head>
    <style>
    </style>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <caption>
                            <h3>U.S. PRESIDENTS</h3>
                        </caption>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <?=$presidents2["Trump"]["name"];?> </td>
                                <td> <?=$presidents2["Trump"]["years"];?> </td>
                            </tr>
                            <tr>
                                <td> <?= $presidents2["Obama"]["name"];?></td>
                                <td> <?= $presidents2["Obama"]["years"];?></td>
                            </tr>
                            <tr>
                                <td> <?= $presidents2["Bush"]["name"];?></td>
                                <td> <?= $presidents2["Bush"]["years"];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
            
        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <caption>
                            <h3>U.S. PRESIDENTS</h3>
                        </caption>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($presidents2 as $president){
                                echo"<tr>";
                                foreach($president as $info){
                                       echo "<td>".$info."</td>";
                            }
                            echo"</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
    </html>