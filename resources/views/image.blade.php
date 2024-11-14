<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Instagram</title>
    <style>
        body, figure {
            margin-top: 0px;
            margin-left: 0px;
        }

        .container {
            position: relative;
        }

        .img {
            position: absolute;
            top: 86px;
            left: 711px;
            object-fit: cover;
            width: 461px;
            height: 418px;
        }

        /* 432x336 */
        .img-432x336 {
            position: absolute;
            top: 67px;
            left: 35px;
            object-fit: cover;
            width: 162px;
            height: 160px;
        }

        /* 576x1296 */

        .img-576x1296 {
            position: absolute;
            top: 613px;
            left: 100px;
            object-fit: cover;
            width: 374px;
            height: 367px;
        }

        /* 768x448 */

        .img-768x448 {
            position: absolute;
            top: 55px;
            left: 412px;
            object-fit: cover;
            width: 258px;
            height: 258px;
        }

        /* 624x468 */

        .img-624x468 {
            position: absolute;
            top: 177px;
            left: 121px;
            object-fit: cover;
            width: 193px;
            height: 188px;
        }

        /* 750x450 */

        .img-750x450 {
            position: absolute;
            top: 72px;
            left: 68px;
            object-fit: cover;
            width: 254px;
            height: 247px;
        }

        /* 800x420 */

        .img-800x420 {
            position: absolute;
            top: 45px;
            left: 54px;
            object-fit: cover;
            width: 268px;
            height: 263px;
        }
        
        .img-816x336 {
            position: absolute;
            top: 43px;
            left: 233px;
            object-fit: cover;
            width: 211px;
            height: 207px;
        }

        .img-1088x448 {
            position: absolute;
            top: 57px;
            left: 313px;
            object-fit: cover;
            width: 283px;
            height: 278px;
        }

        .img-1320x720 {
            position: absolute;
            top: 71px;
            left: 100px;
            object-fit: cover;
            width: 469px;
            height: 460px;
        }

        .img-1440x960 {
            position: absolute;
            top: 151px;
            left: 112px;
            object-fit: cover;
            width: 525px;
            height: 516px;
        }

        .img-1500x450 {
            position: absolute;
            top: 45px;
            left: 499px;
            object-fit: cover;
            width: 306px;
            height: 300px;
        }
        .img-1920x1080{
            position: absolute;
            top: 112px;
            left: 154px;
            object-fit: cover;
            width: 695px;
            height: 680px;
        }

    </style>
</head>
<body>
<div class="container">
    <figure>
        <img src="{{asset('img/' . $size . '.jpg')}}" alt="Image instagram" width="{{$width}}" height="{{$height}}"/>
        <img class="img-{{$size}}" src="{{asset('img/' . $image['url'])}}" alt="Image instagram"/>
    </figure>
</div>
</body>
</html>
