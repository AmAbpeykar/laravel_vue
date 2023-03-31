
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}">

</head>
<body style="{{ __('direction:rtl;') }}" >





<header class="w-full h-[565px] bg-gray-900 pt-10 px-2">

    <div class="w-full pt-[3%] text-center">
        <div id="image" class="flex align-content-center m-auto p-1  rounded-full w-[240px] h-[240px] ">

            <img src="{{ asset('images/bolg.jpg') }}" class=" rounded-full w-[160px] h-[160px] m-auto p-0 hover:border hover:border-[10px] hover:border-gray-900 hover:w-[190px] hover:h-[190px] duration-500 border border-2 border-gray-100" alt="">

        </div>
        <div class="mt-4">
            <h2 class="text-white font-bold text-3xl "> {{ __('محمد امین آب پیکر') }}</h2>
            <h2 class="text-white 	 text-2xl mt-3">Full Stack Developer</h2>
            <div class="m-auto w-3/12 flex justify-between mt-4 text-white">
                <a id="exm" class=" cursor-pointer border border-2 border-gray-800 p-2 w-[150px] bg-gray-50 text-gray-800 font-bold rounded-tl-xl rounded-br-xl hover:bg-gray-900 hover:border hover:border-2 hover:border-gray-50 hover:text-gray-50 hover:rounded-xl duration-500">{{ __('نمونه کار') }}</a>
                <a id="skills" class=" cursor-pointer border border-2 border-gray-800 p-2 w-[150px] bg-gray-50 text-gray-800 font-bold rounded-tr-xl rounded-bl-xl hover:bg-gray-900 hover:border hover:border-2 hover:border-gray-50 hover:text-gray-50 hover:rounded-xl duration-500">{{ __('مهارت ها') }}</a>
            </div>
        </div>
    </div>

    <div class="w-2/12 m-auto flex justify-evenly text-white mt-16">
        <a id="telegram-icon" href="https://t.me/mim780" target="_blank"
             class="w-[55px] h-[55px] bg-gray-900 flex justify-center items-center rounded-full border border-2 border-gray-50 cursor-pointer hover:bg-gray-50 hover:border-gray-900 hover:text-gray-900 text-3xl  duration-500 flex ">
            <i class="fab fa-instagram text-3xl "></i>

        </a>
        <a id="telegram-icon" href="https://instagram.com/amin.abpeykar" target="_blank"
              class="w-[55px] h-[55px] bg-gray-900 flex justify-center items-center rounded-full border border-2 border-gray-50 cursor-pointer hover:bg-gray-50 hover:border-gray-900 hover:text-gray-900 text-3xl   duration-500 flex ">
            <i class="fab fa-telegram-plane m-1 "></i>
        </a>
    </div>
</header>



    <div class="container w-11/12 mt-10 bg-gray-100 rounded-xl m-auto skills" >
        <div class="w-full text-center">
            <h1 class="font-bold mt-10 text-3xl mb-10">مهارت ها</h1>
        </div>
        <div id="app" class="grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">

           <html5></html5>
            <css3></css3>
            <js></js>
            <php></php>
            <tailwind></tailwind>
            <bootstrp></bootstrp>
            <laravel></laravel>
            <vue></vue>
            <jquery></jquery>
            <mysql></mysql>
            <github></github>
            <adobe></adobe>
        </div>

    </div>


<section id="" class="service exm section w-[95%] my-10  m-auto">

        <h4 class="w-full text-center font-bold text-xl hover:cursor-pointer mt-[10px]"> نمونه کار طراحی لوگو</h4>
        <div class="row flex w-full grid md:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 grid-cols-1 w-[85%] m-auto gap-10">
            <div class="col s12 m6 l4">
                <div class="service-item h-[400px] w-[400px] flex items-center ">
                    <img src="{{asset('images/CrocodileTradeWhite.png')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Crocodile Trade</p>
                        </span>
                </div>
            </div>


            <div class="col s12 m6 l4">
                <div class="service-item flex items-center ">
                    <img src="{{asset('images/skyEnglish11.jpg')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Sky</p>
                        </span>
                </div>
            </div>


            <div class="col s12 m6 l4">
                <div class="service-item flex items-center ">
                    <img src="{{asset('images/vionaGold.png')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Viona</p>
                        </span>
                </div>
            </div>


            <div class="col s12 m6 l4">
                <div class="service-item flex items-center ">
                    <img src="{{asset('images/digihex.png')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Digihex</p>
                        </span>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="service-item flex items-center ">
                    <img src="{{asset('images/IMG_20230312_231811_041.jpg')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Lotus</p>
                        </span>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="service-item flex items-center ">
                    <img src="{{asset('images/IMG_20230312_231544_448.jpg')}}" class="w-[80%] h-[80%] m-auto" alt="">
                    <span>
                            <p> Peida</p>
                        </span>
                </div>
            </div>


        </div>

</section>



<footer  class="bg-slate-900  w-[100%] p-5">
    <p class="text-xl w-full text-center text-gray-50">طراحی شده با



        <svg class="svg-inline--fa fa-code fa-w-20 w-[26px] inline text-blue-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z"></path></svg>
        و
        <svg class="svg-inline--fa fa-heart fa-w-16 w-[26px] inline text-red-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>



    </p>

    <p class="text-white w-full text-center mt-4">تمامی حقوق مادی و معنوی این سایت محفوظ است</p>
</footer>


@vite('resources/js/app.js')
<script src="{{asset('js/font-awesome.js')}}"></script>
<script src="{{asset('js/fullpage.min.js')}}"></script>
<script>
    import ExampleComponent from "../js/components/html5";
    export default {
        components: {ExampleComponent}
    }
</script>
<script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script>
    $("#skills").click(function() {
        $('html,body').animate({
                scrollTop: $(".skills").offset().top},
            'slow');
    });
</script>

<script>
    $("#exm").click(function() {
        $('html,body').animate({
                scrollTop: $(".exm").offset().top},
            'slow');
    });
</script>
</body>
</html>

