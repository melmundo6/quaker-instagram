<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Instagram</title>
    <style>
        @font-face {
            font-family: 'poppins';
            src: url({{asset('fonts/Poppins-SemiBold.ttf')}});
        }
        body, figure{
            margin-top: 0px;
            margin-left: 0px;
            font-family: 'poppins';
        }

        .text-container {
            width: 590px;
            height: 415px;
            position: absolute;
            top: 80px;
            left: 50px;
            overflow: hidden;
        }

        .container{
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

        /* 640x387 */
        .text-container-640x387 {
            width: 256px;
            height: 220px;
            position: absolute;
            top: 65px;
            left: 32px;
            overflow: hidden;
            color: white;
        }

        .img-640x387 {
            position: absolute;
            top: 46px;
            left: 340px;
            object-fit: cover;
            width: 224px;
            height: 226px;
        }

        .text-640x387{
            font-size: 25px;
            color: white;
            line-height: 0.94;
        }

        /* 768x304 */
        .text-container-768x304 {
            width: 350px;
            height: 170px;
            position: absolute;
            top: 48px;
            left: 32px;
            overflow: hidden;
            color: white;
        }

        .img-768x304 {
            position: absolute;
            top: 40px;
            left: 449px;
            object-fit: cover;
            width: 187px;
            height: 192px;
        }

        .text-768x304{
            font-size: 25px;
            color: white;
            line-height: 0.94;
        }

        /* 768x448 */
        .text-container-768x448 {
            width: 300px;
            height: 275px;
            position: absolute;
            top: 65px;
            left: 32px;
            overflow: hidden;
            color: white;
        }

        .img-768x448 {
            position: absolute;
            top: 55px;
            left: 412px;
            object-fit: cover;
            width: 258px;
            height: 258px;
        }

        .text-768x448{
            font-size: 34px;
            color: white;
            line-height: 0.94;
        }

        /* 816x336 */
        .text-container-816x336 {
            width: 340px;
            height: 196px;
            position: absolute;
            top: 50px;
            left: 32px;
            overflow: hidden;
            color: white;
        }

        .img-816x336 {
            position: absolute;
            top: 38px;
            left: 469px;
            object-fit: cover;
            width: 210px;
            height: 215px;
        }

        .text-816x336 {
            font-size: 34px;
            color: white;
            line-height: 0.94;
        }

        /* 1088x448 */
        .text-container-1088x448 {
            width: 450px;
            height: 278px;
            position: absolute;
            top: 65px;
            left: 32px;
            overflow: hidden;
            color: white;
        }

        .img-1088x448 {
            position: absolute;
            top: 61px;
            left: 631px;
            object-fit: cover;
            width: 281px;
            height: 280px;
        }

        .text-1088x448 {
            font-size: 34px;
            color: white;
            line-height: 0.94;
        }

        /* 1320x720 */
        .text-container-1320x720 {
            width: 500px;
            height: 505px;
            position: absolute;
            top: 35px;
            left: 48px;
            overflow: hidden;
            color: white;
        }

        .img-1320x720 {
            position: absolute;
            top: 76px;
            left: 637px;
            object-fit: cover;
            width: 435px;
            height: 435px;
        }

        .text-1320x720 {
            font-size: 60px;
            color: white;
            line-height: 0.94;
        }

        .rotate {
            -webkit-transform: rotate(-12.5deg);
            -moz-transform: rotate(-12.5deg);
            -o-transform: rotate(-12.5deg);
            -ms-transform: rotate(-12.5deg);
        }
    </style>
</head>
<body>
<div class="container">
    <figure>
        <img src="{{asset('img/' . $size . '.jpg')}}" alt="Image instagram" width="{{$width}}" height="{{$height}}"/>
        <img class="img-{{$size}} rotate" src="{{asset('img/' . $image['url'])}}" alt="Image instagram"/>
        <div class="text-container-{{$size}}">
            <figcaption class="text-{{$size}}">{{$image['phrase']}}</figcaption>
{{--            <figcaption class="text-{{$size}}">--}}
{{--                Estamos construyendo canchas al rededor del mundo reciclando empaques vacíos. Estamos construyendo canchas al rededor del mundo reciclando--}}
{{--            </figcaption>--}}
        </div>
    </figure>
</div>
</body>
</html>
