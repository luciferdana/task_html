<?php
    $nama = "Ferdana Al Hakim";
    $email = "ferdana122140012@student.itera.ac.id";
    $telepon = "+6287840593857";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil <?php echo $nama; ?></title>
</head>

<body>
    <header>
        <figure>
            <img src="if-logo.jpeg" alt="Logo Prodi IF" width="100">
        </figure>
        <h1><?php echo $nama; ?> - 122140012 - Pemrograman Web RA</h1>
        <p><strong>Mahasiswa Semester 5 Teknik Informatika</strong> di Institut Teknologi Sumatera (ITERA)</p>
        <p>Bandar Lampung, Lampung, Indonesia</p>
    </header>

    <nav>
        <a href="#tentang">Home</a>
    </nav>

    <hr>

    <main>
        <section id="tentang">
            <h2>About</h2>
            <p>Saya adalah <?php echo $nama; ?>, mahasiswa S1 Teknik Informatika di ITERA. Saya sedang belajar mata kuliah Pemrograman Web.</p>
        </section>

        <hr>
        <section>
            <h2>Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
            </ul>
        </section>
    </main>

    <hr>

    <footer>
        <h2>Footer</h2>
        <p>Contact Me:</p>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>Telepon: <?php echo $telepon; ?></p>
        <p>
            <a href="https://www.facebook.com/profile.php?id=100007527104790">Facebook</a>|
            <a href="https://github.com/luciferdana">Github</a> |
            <a href="https://www.youtube.com/@ferdanaal-hakim627">Youtube</a> |
            <a href="https://open.spotify.com/playlist/2o0mnezaj4ezwDHJoTXwWa?si=e8e3bce1a4a14e04">Spotify Playlist</a>
        </p>
    </footer>
</body>

</html>
