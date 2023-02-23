<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" />
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
    <title>DC COMICS |</title>
</head>

<body>
    @include('includes.header')
    <main>
        <div class="container row c">
            <h1>Welcome To All New Superheroes!</h1>
            <img src="../img/pngegg.png" alt="">
        </div>
    </main>

    <footer>

        <!------------------------------>
        <div id="footer-nav" class="bg-blue mt">
            <div class="container">
                <div class="row-b">
                    @foreach ($cards as $card)
                    <div class="col row">
                        <img src="../img/{{$card['img']}}" alt="">
                        <h5>{{ $card['text'] }}</h5>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        <!---------------------------------------------------------->
        <div class="container">
            <div class="f-main">
                <div class="more-info">
                    <div>
                        <h3>DC COMICS</h3>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a> </li>
                            <li><a href="#">Movies</a> </li>
                            <li><a href="#">TV</a> </li>
                            <li><a href="#">Games</a> </li>
                            <li><a href="#">Videos</a> </li>
                            <li><a href="#">News</a> </li>
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a> </li>

                        </ul>
                    </div>
                    <div>
                        <h3>DC</h3>
                        <ul>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy (New)</a> </li>
                            <li><a href="#">Ad Choice</a> </li>
                            <li><a href="#">Advertising</a> </li>
                            <li><a href="#">Jobs</a> </li>
                            <li><a href="#">Subscriptions</a> </li>
                            <li><a href="#">Talent Workshops</a> </li>
                            <li><a href="#">CSPC Certificates</a> </li>
                            <li><a href="#">Ratings</a> </li>
                            <li><a href="#">Shop Help</a> </li>
                            <li><a href="#">Contact Us</a> </li>
                        </ul>
                    </div>
                    <div>
                        <h3>SITES</h3>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a> </li>
                            <li><a href="#">DC Kids</a> </li>
                            <li><a href="#">DC Universe</a> </li>
                            <li><a href="#">DC Power Visa</a> </li>
                        </ul>
                    </div>

                </div>
                <div class="f-logo">
                    <img src="../img/dc-logo-bg.png" alt="dc-logo">
                </div>
            </div>
        </div>
        <!---------------------------------------->
        <!-- <div class="f-b-bg">
            <div class="container">
                <div class="f-b">
                    <div>
                        <button>
                            <h3>SIGN-UP NOW!</h3>
                        </button>
                    </div>
                    <nav>

                        <ul>
                            <h3>FOLLOW US</h3>
                            <li v-for="(social) in socials"><a href="#"><img :src="buildImgUrl(social.img)" :alt="social.text"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->
    </footer>
</body>

</html>