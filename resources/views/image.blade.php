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
        .img-640x387 {
            position: absolute;
            top: 46px;
            left: 340px;
            object-fit: cover;
            width: 224px;
            height: 226px;
        }

        /* 768x304 */

        .img-768x304 {
            position: absolute;
            top: 40px;
            left: 449px;
            object-fit: cover;
            width: 187px;
            height: 192px;
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

        /* 816x336 */

        .img-816x336 {
            position: absolute;
            top: 38px;
            left: 469px;
            object-fit: cover;
            width: 210px;
            height: 215px;
        }

        /* 1088x448 */

        .img-1088x448 {
            position: absolute;
            top: 61px;
            left: 631px;
            object-fit: cover;
            width: 281px;
            height: 280px;
        }

        /* 1320x720 */

        .img-1320x720 {
            position: absolute;
            top: 76px;
            left: 637px;
            object-fit: cover;
            width: 435px;
            height: 435px;
        }

        /* 800x420 */

        .img-800x420 {
            position: absolute;
            top: 50px;
            left: 387px;
            object-fit: cover;
            width: 251px;
            height: 255px;
        }

        /* 1920x1080 */

        .img-1920x1080 {
            position: absolute;
            top: 119px;
            left: 925px;
            object-fit: cover;
            width: 648px;
            height: 651px;
        }

        /* 3840x2160 */

        .img-3840x2160 {
            position: absolute;
            top: 243px;
            left: 1874px;
            object-fit: cover;
            width: 1271px;
            height: 1283px;
        }

        /* 320x1218 */
        .img-320x1218 {
            position: absolute;
            top: 281px;
            left: 31px;
            object-fit: cover;
            width: 248px;
            height: 246px;
        }

        /* 576x1080 */
        .img-576x1080 {
            position: absolute;
            top: 163px;
            left: 99px;
            object-fit: cover;
            width: 342px;
            height: 338px;
        }


        /* 385x1218 */
        .img-385x1218 {
            position: absolute;
            top: 269px;
            left: 52px;
            object-fit: cover;
            width: 266px;
            height: 265px;
        }

        /* 576x448 */
        .img-576x448 {
            position: absolute;
            top: 63px;
            left: 304px;
            object-fit: cover;
            width: 220px;
            height: 219px;
        }

        /* 624x468 */
        .img-624x468 {
            position: absolute;
            top: 199px;
            left: 215px;
            object-fit: cover;
            width: 164px;
            height: 165px;
        }

        /* 2160x3840 */
        .img-2160x3840 {
            position: absolute;
            top: 603px;
            left: 485px;
            object-fit: cover;
            width: 1170px;
            height: 1171px;
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
    </figure>
</div>
</body>
</html>
