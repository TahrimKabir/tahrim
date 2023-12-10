<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link rel="stylesheet" href="sass/reset.css">
        <link rel="stylesheet" href="sass/welcome.css">
    </head>
    <body>
        <div class="conatiner-fluid main">
            <div class="top">
                <p class="mb-0 display-6 text-center text-wrap">Start Time:
                    6:10pm - End Time: 7:00pm</p>
            </div>
            <div class="row body ">
                <div class="sidebar col-md-2 bg-info">
                    <div class="photo " >
                        png
                        <img src alt class="img-fluid">
                    </div>
                    <div class="about-me " >
                        <p class="mb-0 text-wrap">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Quod quis quibusdam perferendis sed nisi
                            dolorum beatae, culpa eaque pariatur non reiciendis
                            libero ipsam totam saepe suscipit asperiores sit
                            voluptate aut!
                        </p>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row ">
                        @foreach($post as $p)
                        <div class="col-md-3 card m-1">
                            <div class="card-header">
                                <h4 class="mb-0">{{$p->title}}</h4>
                            </div>
                            <div class="card-body">
                               <img src="{{asset('image/'.$p->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="card-footer">
                                <p class="mb-0 text-wrap">
                                    {{$p->description}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                       

                        <div class="col-md-12 bottom bg-danger">
                            hi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>