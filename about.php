<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant | About Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #ffffff;
      color: #222;
    }

    /* Header */
    header {
      width: 100%;
      position: fixed;
      top: 0;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      padding: 18px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
      border-bottom: 1px solid #eee;
    }

    header h1 {
      font-size: 28px;
      font-weight: 700;
      color: #e63946;
    }

    nav a {
      margin-left: 25px;
      text-decoration: none;
      font-size: 17px;
      color: #333;
      transition: 0.3s;
    }
    nav a:hover {
      color: #e63946;
    }

    /* MAIN ABOUT SECTION */
    .about {
      margin-top: 120px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      padding: 60px 60px;
      align-items: center;
    }

    .about img {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .about-text h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 15px;
      color: #222;
    }

    .about-text p {
      font-size: 17px;
      line-height: 1.8;
      margin-bottom: 18px;
      color: #444;
    }

    .highlight-box {
      margin-top: 25px;
      padding: 20px;
      background: #fff8f8;
      border-left: 5px solid #e63946;
      border-radius: 10px;
      font-size: 16px;
      line-height: 1.6;
    }

    /* TEAM SECTION */
    .team {
      padding: 70px 60px;
      text-align: center;
      background: #fafafa;
    }

    .team h3 {
      font-size: 34px;
      font-weight: 600;
      margin-bottom: 40px;
    }

    .team-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .team-card {
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      text-align: center;
      transition: 0.3s;
    }

    .team-card:hover {
      transform: translateY(-10px);
    }

    .team-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #e63946;
    }

    .team-card h4 {
      font-size: 20px;
      margin-bottom: 5px;
    }

    .team-card p {
      font-size: 15px;
      color: #666;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .about {
        padding: 40px 25px;
      }
      header {
        padding: 15px 20px;
      }
      .about-text h2 {
        font-size: 32px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>FoodZone</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="about">
    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=900&q=80" alt="Restaurant">

    <div class="about-text">
      <h2>About Our Restaurant</h2>

      <p>Welcome to <strong>FoodZone</strong>, where we serve delicious food prepared with fresh ingredients and authentic recipes. Our goal is to give you the best dining experience with a warm atmosphere and exceptional service.</p>

      <p>We started our journey in 2015 with a passion to create a place where people can enjoy food that feels like home but tastes premium. Our chefs bring years of experience to craft the perfect flavor in every dish.</p>

      <div class="highlight-box">
        "Good food brings people together. We believe in serving love on every plate."
      </div>

    </div>
  </section>

  <section class="team">
    <h3>Meet Our Expert Chefs</h3>

    <div class="team-cards">

      <div class="team-card">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=60" alt="Chef 1">
        <h4>Chef Antonio</h4>
        <p>Head Chef • Italian Cuisine Specialist</p>
      </div>

      <div class="team-card">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=600&q=60" alt="Chef 2">
        <h4>Chef Sarah</h4>
        <p>Dessert Expert • Pastry Master</p>
      </div>

      <div class="team-card">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=600&q=60" alt="Chef 3">
        <h4>Chef Daniel</h4>
        <p>Grill Master • BBQ Specialist</p>
      </div>

    </div>
  </section>

</body>
</html>