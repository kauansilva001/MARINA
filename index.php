<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="IMAGES-ICONS/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="STYLES/style.css">
    <title>MARINA - HOME</title>
</head>

<body>

    <header class="cabeçalho-index">
        <h1 class="h1-index">MARINA DIAMANDIS</h1>
        <nav>
            <a class="text-decoration-none active" href="#">HOME</a>
            <a class="text-decoration-none" href="carreira.php">CARREIRA</a>
            <a class="text-decoration-none" href="contatos.php">CONTATOS</a>
        </nav>
    </header>

    <main class="principal-index">

        <section>
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="IMAGES-ICONS/BANNER (1).png" alt="Banner da cantora Marina" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES-ICONS/BANNER (2).png" alt="Banner da cantora Marina" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES-ICONS/BANNER (3).png" alt="Banner da cantora Marina" style="width:100%">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        <section class="segunda-sessao">
            <h2 class="subtitulo-index">PLATAFORMA DE STREAMING</h2>
            <iframe style="border-radius:12px" class="mb-3"
                src="https://open.spotify.com/embed/artist/6CwfuxIqcltXDGjfZsMd9A?utm_source=generator&theme=0"
                width="100%" height="152" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy">
            </iframe>
        </section>
    </main>

    <footer class="mt-5 mb-15 border-top d-flex justify-content-center">
        <p class="mt-3">&copy; ETEC JUSCELINO KUBITSCHEK DE OLIVEIRA</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>