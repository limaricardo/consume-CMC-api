<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $result->name ?> - <?php echo number_format((float)$result->quote->USD->price, 2, '.', '') ?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Max supply <b class="text-right"><?php echo $result->max_supply ?></b></li>
                            <li class="list-group-item">Circulating supply <b class="text-right"><?php echo $result->circulating_supply ?></b></li>
                            <li class="list-group-item">Total supply <b class="text-right"><?php echo $result->total_supply ?></b></li>
                            <li class="list-group-item">CMC rank <b class="text-right"><?php echo $result->cmc_rank ?></b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>