<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant | Home</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #fff;
      color: #222;
    }

    /* HEADER */
    header {
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(8px);
      padding: 18px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
      border-bottom: 1px solid #eee;
    }
    header h1 {
      color: #e63946;
      font-size: 30px;
      font-weight: 700;
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

    /* HERO SECTION */
    .hero {
      height: 100vh;
      background: url('https://images.unsplash.com/photo-1551782450-17144c3fa9e0?auto=format&fit=crop&w=1400&q=80') center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
      position: relative;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 10;
      color: #fff;
    }

    .hero h2 {
      font-size: 65px;
      line-height: 1.2;
      font-weight: 700;
      text-shadow: 0 5px 25px rgba(0,0,0,0.5);
    }

    .hero p {
      margin-top: 15px;
      font-size: 20px;
      opacity: 0.9;
    }

    .btn {
      display: inline-block;
      margin-top: 30px;
      padding: 14px 35px;
      font-size: 18px;
      color: #fff;
      background: #e63946;
      border-radius: 30px;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn:hover {
      background: #c72d3a;
    }

    /* FEATURED DISHES */
    .featured {
      padding: 90px 60px;
      text-align: center;
      background: #fafafa;
    }
    .featured h3 {
      font-size: 34px;
      font-weight: 600;
    }

    .cards {
      margin-top: 50px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 25px rgba(0,0,0,0.08);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .card h4 {
      padding: 18px;
      font-size: 22px;
      font-weight: 500;
      color: #222;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      header {
        padding: 15px 20px;
      }
      .hero h2 {
        font-size: 40px;
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

  <section class="hero">
    <div class="hero-content">
      <h2>Premium Taste, Fresh Ingredients</h2>
      <p>Discover the art of fine dining with delicious meals crafted to perfection.</p>
      <a href="menu.php" class="btn">Explore Menu</a>
    </div>
  </section>

  <section class="featured">
    <h3>Our Signature Dishes</h3>
    <div class="cards">

      <div class="card">
        <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13065?auto=format&fit=crop&w=800&q=60" alt="Dish 1">
        <h4>Cheese Loaded Pizza</h4>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=60" alt="Dish 2">
        <h4>Italian Pasta Bowl</h4>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1604908177095-497a0c02dd68?auto=format&fit=crop&w=800&q=60" alt="Dish 3">
        <h4>Grilled Chicken Steak</h4>
      </div>

    </div>
  </section>

</body>
</html>