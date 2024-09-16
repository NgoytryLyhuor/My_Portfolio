<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Lato:wght@100;300;400;700&family=Moulpali&family=Poppins:wght@300;400;500;600&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 p-0">
        <h1 class="text-center text-decoration-underline">Massage</h1>
        <div class="container-fluid mt-5">
            <div class="row">

                @foreach ($allData as $item)
                    <div class="col-lg-4">
                        <div class="card text-white-50">
                            <div class="card-body">
                                <h5 class="mb-3 text-white">{{ $item->name }}</h5>
                                <h6 class="text-white">{{ $item->email }}</h6>
                                <p class="card-text">{{ $item->comment }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        <a href="/">
            <h4 class="text-center">Back to Wabsite</h4>
        </a>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        var num = $(".card").length;
        var bgColor = ["bg-danger","bg-primary",'bg-secondary','bg-warning','bg-info','bg-dark'];
        var i = 0;
        for(i=0 ; i<num ; i++){
            if(i==6){
                i=0;
            }
            $(".card:eq("+i+")").addClass(""+bgColor[i]+"")
        }
    })

</script>