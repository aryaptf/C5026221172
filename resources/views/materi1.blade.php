<!DOCTYPE html>
<html>
<head>
    <title>Campus Fair XIV</title>
</head>

<body>
    <h1>CAMPUS FAIR XIV</h1>
    Mari kita belajar membuat web untuk campus fair
    <br>
    <br>

    <h1>Chapter 1</h1>

    <!-- Headings -->
    <h2>Headings</h2>
    Heading makin besar angkanya makin kecil, contoh:
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h3 class="text-merah" id="headline1">Teks berwarna merah</h3>
    <h3 class="text-merah" id="headline2">Teks berwarna merah</h3>
    <h3 class="text-biru" id="headline3">Teks berwarna biru</h3>

    <!-- Hyperlink -->
    <br>
    <h2>Hyperlink</h2>
    <a href="https://instagram.com/campusfair58"> @campusfair58</a>
    <a href="https://instagram.com/campusfair58" target="_blank">@campusfair58</a>
    <a href="https://instagram.com/campusfair58" target="_parent">@campusfair58</a>

    <!-- Images -->
    <br>
    <h2>Images</h2>
    <img src="LOGO CF 14 400px.png" width = "600" height = "600" >

    <!-- Paragraph -->
    <br>
    <h2>Paragraph</h2>
    <p>
        "Pasti kita dalam suasana turut prihatin ya, itu sikap saya pasti. Apakah itu karena perasaan empati, apakah juga karena perasaan ikut prihatin. Nah, saya pasti tidak
        bergembiralah menerima suatu kabar seperti itu karena harapan kita semuanya bisa berjalan sebagaimana yang kita harapkan bersama. Itu pasti sikap NasDem," terang Paloh.
        Baca artikel CNN Indonesia "Poin-poin Respons Surya Paloh soal Jumpa Jokowi & Duet Anies-Cak Imin" selengkapnya di sini:
        https://www.cnnindonesia.com/nasional/20230901083839-617-993287/poin-poin-respons-surya-paloh-soal-jumpa-jokowi-duet-anies-cak-imin.
        Download Apps CNN Indonesia sekarang https://app.cnnindonesia.com/
    </p>

    <br>
    <!-- Text Formating -->
    <p><b>tag b untuk bold (b sama strong sama aja)</b></p>
    <p><i>tag i untuk italic</i></p>
    <p><sub>tag sub untuk subscript</sub></p>

    <!-- How to make a List -->
    <!-- Order list (angka) -->
    <ol>
        <li>a</li>
        <li>b</li>
        <li>c</li>
    </ol>
    <!-- Unorder list -->
    <ul>
        <dt>a</dt>
        <dt>b</dt>
        <dt>c</dt>
    </ul>
    <dl>
        <dt>a</dt>
        <dd>huruf pertama</dd>
        <dt>b</dt>
        <dt>c</dt>
    </dl>

    <!-- Link -->
    <a href="https://linktr.ee/campusfair58">Linktree Campus Fair 58</a>
    <br>
    <br>

    <!-- Table -->
    <table>
        <tr>
            <th>Nama</th>
            <th>NRP</th>
        </tr>
        <tr>
            <td>Arya</td>
            <td>172</td>
        </tr>
    </table>

    <!-- FORM -->
    <h2>FORM Input</h2>
    <form>
        <label for="namalengkap">Nama Lengkap:</label>
        <input type="text" name="namalengkap">
        <br>
        <label for="jeniskelamin">Jenis Kelamin:</label>
        <label for="lakilaki">Laki-laki</label>
        <input type="radio" name="jeniskelamin" value="lakilaki">
        <label for="perempuan">Perempuan</label>
        <input type="radio" name="jeniskelamin" value="perempuan">
        <br>
        <label for="hobi">Hobi:</label>
        <input for="hobi1" type="checkbox" name="hobi" value="badminton">
        <label for="hobi1" name="hobi1">Badminton</label>
        <input for="hobi2" type="checkbox" name="hobi" value="tidur">
        <label for="hobi2" name="hobi2">Tidur</label>
        <input for="hobi3" type="checkbox" name="hobi" value="makan">
        <label for="hobi3" name="hobi3">Makan</label>
        <br>
        <input type="submit" value="submit">
    </form>
    <br>

    <!-- div -->
    untuk mengelompokkan class
    <div class="asik">
        Halo semua <span>apa kabar?</span>
    </div>
    <br>

    <!-- span -->
    biasanya cuma buat paragraf
    <br>

    <!-- Embed HTML -->
    <iframe src="https://codingstudio.id/member-area/" frameborder="0"></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/mL9vnNW2h0Q?si=4F6WmHTkBY0DQG-a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.558344662024!2d112.80302927579338!3d-7.290984071665507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb532b6efcaf%3A0xfacb9d244d4ddb84!2sKos%20D-7%20Bu%20Wahid!5e0!3m2!1sid!2sid!4v1695564410940!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <video controls width="250" height="200" muted>
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm" />
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4" />

        Sorry, your browser doesn't support embedded video.
    </video>
    <audio controls src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3">
        <a href="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3"> Download audio </a>
    </audio>

    <h2>Horizontal Row</h2>
    <hr>
    Author : Arya Putra
</body>
</html>
