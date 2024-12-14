<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reproductor de radio online para nuestra emisora en Jalisco, disfruta de música regional, noticias y entretenimiento las 24 horas.">
    <meta name="keywords" content="radio online, radio en Jalisco, música regional mexicana, radio en vivo Jalisco, emisora de radio Jalisco, radio regional, radio mexicana, noticias Jalisco, música banda, música norteña, radio 24 horas, radio en línea gratis">
    <title>Radio 1313</title>

    <!-- Favicon -->
    <link rel="icon" href="f.jpg" type="image/jpg">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://toursgdl.com/wp-content/uploads/2019/06/a-close-up-of-a-yellow-building-description-autom.jpeg.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
        }

        header img {
            max-width: 100px;
            margin-right: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        header img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #fff;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        header p {
            font-size: 1.2rem;
            margin: 5px 0;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
            width: 100%;
        }

        .player-container {
            background: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            flex: 1 1 300px;
            max-width: 600px;
            min-height: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .player-container iframe {
            width: 100%;
            max-height: 350px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .player-container iframe:hover {
            transform: scale(1.02);
        }

        .facebook-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            text-align: center;
            flex: 1 1 300px;
            max-width: 600px;
            min-height: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease-in-out;
        }

        .facebook-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }

        .facebook-container .elementor-facebook-widget {
            border-radius: 10px;
        }

        footer {
            position: relative;
            bottom: 10px;
            font-size: 0.8rem;
            text-align: center;
            margin-top: 20px;
        }

        .news-section {
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin-top: 30px;
            width: 80%;
            max-width: 800px;
            text-align: center;
        }

        .news-section h2 {
            color: #ff6347; /* Color personalizado */
        }

        .news-item {
            background: #fff;
            margin: 15px 0;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .news-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .news-item h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #000;
        }

        .news-item p {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #000;
        }

        .news-item a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                align-items: center;
            }

            .facebook-container,
            .player-container {
                max-width: 100%;
            }

            .facebook-container iframe {
                width: 100%;
                height: auto;
            }

            .news-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="f.jpg" alt="Logo de Radio 1313">
        <div>
            <h1>¡Bienvenidos a Radio 1313!</h1>
            <p>La mejor música regional mexicana y entretenimiento las 24 horas</p>
        </div>
    </header>

    <div class="content-container">
        <div class="player-container">
            <iframe src="https://zeno.fm/player/radio-1313?autoplay=true" width="100%" height="250" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="facebook-container">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fp%2FRadio-1313com-100064153057274%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
           </div>
    </div>

    <footer>
        &copy; 2024 Radio 1313. Todos los derechos reservados.
    </footer>
</body>
</html>

