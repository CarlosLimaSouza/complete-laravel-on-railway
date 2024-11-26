<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Carlos</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
    font-family: 'roboto', sans-serif;
    line-height: 1.6;
    color: #0a111c;
    background: #f7f8fa;
    display:flex;
    flex-direction: column;
    align-items: center;
    background: linear-gradient(to bottom, #e5eceb, #e4ebea);
    }

    header {
    color: #0a111c;
    padding: 45px 0;
    width:100%;
    }
    

    header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    }

    header h1 {
    font-size: 1.3rem;
    }

    nav ul {
    list-style: none;
    display: flex;
    }

    nav ul li {
    margin-left: 20px;
    }

    nav ul li a {
    color: #0a111c;
    text-decoration: none;
    font-weight: bold;
    }

    .hero {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius:15px;
    flex-wrap: wrap;
    padding: 0px 20px;
    max-width: 1200px;
    display:flex;
    flex-direction: column;
    background: linear-gradient(to bottom, #ffffff, #f1f1f1);
    box-shadow: 0px 10px 15px 10px rgba(0, 0, 0, 0.2);
    }

    .profile-image img {
    /* border-radius: 50%; */
    width: auto;
    height: 700px;
    object-fit: cover;
    /* margin-bottom: 20px; */
    }

    .hero-content {
    max-width: 600px;
    text-align: center;
    }

    .hero-content h2 {
    font-size: 2.4rem;
    margin-bottom: 20px;
    }

    .hero-content p {
    font-size: 1rem;
    color: #555;
    }

    .info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 40px 20px;
    max-width: 1200px;
    margin: auto;
    }

    .info-block {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    }

    footer {
    text-align: center;
    background: #0a111c;
    color: white;
    padding: 10px;
    width:100%;
    }

</style>

<body>
  <header>
    <div class="container">
      <h1>Carlos Lima de Souza</h1>
      <nav>
        <ul>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="profile-image">
        <img src="{{ asset('images/foto.png') }}" alt="Profile Image">
      </div>
      <!-- <div class="hero-content">
        <h2>Bem-vindo(a) ao meu portfólio!</h2>
        <p>Sou desenvolvedor apaixonado por tecnologia e inovação. Explore meus projetos e saiba mais sobre mim.</p>
      </div> -->
    </section>
    <section class="info">
      <div class="info-block">
        <h3>Sobre Mim</h3>
        <p>Informações sobre minha experiência e habilidades.</p>
      </div>
      <div class="info-block">
        <h3>Projetos</h3>
        <p>Veja os principais projetos que desenvolvi.</p>
      </div>
      <div class="info-block">
        <h3>Contato</h3>
        <p>Entre em contato para parcerias ou oportunidades.</p>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 - Carlos Lima de Souza - Full stack developer </p>
  </footer>
</body>
</html>