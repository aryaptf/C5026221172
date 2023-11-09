<html>
<head>
    <link rel="stylesheet" href="stylemateri2.css">
    <style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: blueviolet
    }
    p, div {
        text-align: center;
    }

    .hanan {
        font-size: 50px;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
    }

    .pudi {
        text-decoration: underline;
        color: white;
    }
    </style>
</head>

<body>
    <h1>Chapter 2</h1>
    <br>

    <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
    Hallo <b style="
    color:#DFFF00;
    text-decoration: underline;
    text-shadow: 1px 1px 5px rgb(0, 0, 0);
    font-size: 50px;">
    apa</b> kabar?
    <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman -->
    <div class="pudi hanan">Hallo apa kabar?</div>
    <!-- External File, digunakan untuk global 1 situs -->
    <span class="jeje">Hallo apa kabar?</span>
    <p>Hallo apa kabar?</p>
</body>
</html>
</html>
