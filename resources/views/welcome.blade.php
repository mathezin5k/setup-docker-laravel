<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zé Mania</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .icons{
                text-align: right;
                font-size: 20px
            }
            html{
                font-size: 62.5%;
            }
            body{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                overflow-x: hidden;
                background-color: lightcoral;
            }
            header{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
                z-index: 1000;
                background-color: rgb(184, 19, 184)
            }

            header .logo {
            font-size: 2.3rem;
            color: #fff;
            font-weight: bolder;
        }

        header .navbar {
            display: flex;
        }

        header .navbar a {
            font-size: 1.8rem;
            margin: 0 1.5rem;
            color: #fff;
            text-decoration: none;
            transition: color 0.2s linear;
        }

        header .navbar a:hover {
            color: yellow;
        }

        header .icons .bnt {
            background-color: yellow;
            color: #000;
            padding: 0.9rem 3.5rem;
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: 3rem;
        }

        header .icons .bnt:hover {
            background-color: rgb(177, 177, 19);
        }

        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .background-image {
            background-image:url('{{ asset('storage/imagens/foto5')}}')
            background-size: cover;
            background-position: center;
            height: 100%;
        }

        .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .text h1 {
            font-size: 5rem;
            margin-bottom: 1rem;
            font-style: italic;
        }

        .text p {
            font-size: 2.5rem;
        }
        </style>
    </head>
    <body>
            <header>
                <div class="logo">Zé Mania<span>.</span></div>
                <nav class="navbar">
                    <a href="{{ route('cardapio.index') }}">menu</a>
                    <a href="">reserva</a>
                    <a href="{{ route('availability.index') }}">agenda</a>
                </nav>
                <div class="icons">
                    <div class="icons">
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" >Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div>
            </header>
            <section class="hero">
                <div class="background-image"></div>
                <div class="text">
                    <h1>Bem Vindo ao <br> Zé Mania</h1>
                    <p>O seu dia especial tem que ser em um lugar especial também! Venha comemorar conosco!</p>
                </div>
            </section>
    </body>
</html>
