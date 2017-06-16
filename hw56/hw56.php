<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Document</title>
    <head>
    <style>
    </style>
    </head>
    <body>
     <?php
    $Name1 =  "Donald J Trump";
    $year1 = "2017";
     $Name2 =  "Barak H Obama";
    $year2 = "2008";
     $Name3 =  "George W Bush";
    $year3 = "2000";
     ?>
    
       
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
                                <td> <?= $Name1;?> </td>
                                <td> <?=$year1;?> </td>
                            </tr>
                            <tr>
                                <td> <?= $Name2;?></td>
                                <td> <?= $year2;?></td>
                            </tr>
                            <tr>
                                <td> <?= $Name3;?></td>
                                <td> <?= $year3;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
    </body>
    </html>