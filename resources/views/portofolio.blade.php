<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Uqi</title>
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    @vite('resources/css/app.css')
</head>

<body style="background-color: #5d3a19">
    <section class="w-full flex justify-center pt-10">
        <div class="container w-full">
            <div class="flex flex-row gap-5">
                <div class="flex flex-col justify-center sidebar"
                    style="width:40%; background-color: #543110; border-radius:20px">
                    <div class="flex flex-col text-center justify-center p-10 gap-5" style="">
                        <div class="photo avatar">
                            <img src="{{ asset('img/Photo Profile.png') }}" alt="Photo Profile">
                        </div>
                        <span>Muhammad Faruqi Rabbani</span>
                    </div>
                    <div class="flex flex-col p-5 gap-3">
                        <div class="flex flex-row gap-5">
                            <div class="logo p-2 border" style="border-radius: 100%">
                                <a href="https://www.flaticon.com/free-icons/email" title="email icons">
                                    <img src="{{ asset('img/mail.png') }}" style="width: 30px;height: 30px"
                                        alt="Logo Email">
                                </a>
                            </div>
                            <div class="flex flex-col">
                                <label for="email">Email</label>
                                <span>faruqirabbani3@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="logo p-2 border" style="border-radius: 100%">
                                <a href="https://www.flaticon.com/free-icons/phone" title="phone icons">
                                    <img src="{{ asset('img/Phone.png') }}" style="width: 30px;height: 30px;"
                                        alt="Logo Handphone">
                                </a>
                            </div>
                            <div class="flex flex-col">
                                <label for="">Phone</label>
                                <span>+6285794831601</span>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="logo p-2 border" style="border-radius: 100%">
                                <a href="https://www.flaticon.com/free-icons/location-pin" title="location pin icons">
                                    <img src="{{ asset('img/location-pin.png') }}" style="width: 30px;height: 30px"
                                        alt="Logo Location">
                                </a>
                            </div>
                            <div class="flex flex-col">
                                <label for="">Location</label>
                                <span>Indonesia, Malang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full" style="background-color: #543110; border-radius: 20px">
                    <div class="flex flex-row" style="justify-content: space-between">
                        <span class="flex text-center justify-center">About Me</span>
                        <ul class="flex flex-row gap-10 p-5 navbar">
                            <li class="nav">
                                <a href="">Home</a>
                            </li>
                            <li class="nav">
                                <a href="">About</a>
                            </li>
                            <li class="nav">
                                <a href="">Contact</a>
                            </li>
                            <li class="nav">
                                <a href="">Project</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container mt-10 p-10" style="background-color: #331c07">
                        <div class="container p-10" style="background-color: #65451F">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus beatae sapiente voluptates
                                odit dolor placeat atque est nesciunt quam veritatis error veniam repellendus, qui,
                                suscipit consectetur. Tenetur tempore consectetur facere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
