<?php
$arr=[
    ["title"=>"Google",
      "url" =>"http://google.com",
     
      "keywords"=>[
          "google","gmail","Google"
        ],
      "discription"=>"google search",

    ],
    ["title"=>"yahoo",
    "url" =>"http://yahoo.com",
    "keywords"=>[
        "yahoo"
    ],
    "discription"=>"yahoo search",

    ],
    ["title"=>"Gmail",
    "url" =>"http://gmail.com",
    "keywords"=>[
        "Google","gmail","google"
    ],
    "discription"=>"gmail search",

    ],
   ["title"=>"yandex",
    "url" =>"http://yandex.com",
     "keywords"=>[
    "yandex","gmail","google"
    ],
    "discription"=>"yandex search",

    ],
   
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search E</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <img src="img/logo.png" alt="" class="mt-5 text-center">
                <form action="" method="get">
                  <div class="input-group mt-5">
                      <input type="text" name="q" class="form-control" placeholder="search.." aria-label="Recipient's username" aria-describedby="button-addon2">
                       <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>  
                </form>
                <?php
                if(isset($_GET['q'])){
                    $result=[];
                    $res=array_column($arr,'keywords');
                    foreach($res as $key=> $array){
                        if(in_array($_GET['q'],$array)){
                            $result=$arr[$key];
                            echo'
                            <div class="card text-start mb-2">
                            <div class="card-body">
                            <a herf="'.$result['url'].'">'.$result['title'].'</a> <br>
                            '.$result['url'].'
                            '.$result['discription'].'
                            </div>
                            </div>';
                        }
                    }
                }
?>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>