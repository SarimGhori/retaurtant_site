<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant | Menu</title>
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

    /* MENU SECTION */
    .menu {
      margin-top: 120px;
      padding: 60px 60px;
    }

    .menu h2 {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      margin-bottom: 50px;
      color: #222;
    }

    .menu-category {
      margin-bottom: 60px;
    }

    .menu-category h3 {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 20px;
      border-left: 5px solid #e63946;
      padding-left: 15px;
    }

    .menu-items {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .menu-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.07);
      overflow: hidden;
      transition: 0.3s;
    }

    .menu-card:hover {
      transform: translateY(-10px);
    }

    .menu-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .menu-info {
      padding: 20px;
    }

    .menu-info h4 {
      font-size: 20px;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .menu-info p {
      font-size: 15px;
      color: #666;
      margin-bottom: 10px;
    }

    .price {
      font-size: 18px;
      color: #e63946;
      font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .menu {
        padding: 40px 25px;
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

<section class="menu">
  <h2>Our Menu</h2>

  <!-- PIZZA CATEGORY -->
  <div class="menu-category">
    <h3>Pizza</h3>
    <div class="menu-items">

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1601924582971-df2f080a4c5d?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Margherita Pizza</h4>
          <p>Fresh mozzarella, basil & tomato sauce.</p>
          <span class="price">Rs 1200</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1601924638867-3ec4e293a433?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Chicken Tikka Pizza</h4>
          <p>Spicy chicken tikka chunks with cheese.</p>
          <span class="price">Rs 1500</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1548365328-5473d2b51fc6?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>BBQ Pizza</h4>
          <p>Smoky BBQ chicken and melted cheese.</p>
          <span class="price">Rs 1600</span>
        </div>
      </div>

    </div>
  </div>


  <!-- BURGERS CATEGORY -->
  <div class="menu-category">
    <h3>Burgers</h3>
    <div class="menu-items">

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Classic Beef Burger</h4>
          <p>Juicy beef patty with fresh veggies.</p>
          <span class="price">Rs 900</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Chicken Zinger Burger</h4>
          <p>Crispy zinger fillet with mayo & lettuce.</p>
          <span class="price">Rs 750</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13065?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Double Cheese Burger</h4>
          <p>Loaded with double beef patties & cheese.</p>
          <span class="price">Rs 1100</span>
        </div>
      </div>

    </div>
  </div>


  <!-- DRINKS CATEGORY -->
  <div class="menu-category">
    <h3>Drinks</h3>
    <div class="menu-items">

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1571689936040-a3c8a98a37f3?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Mojito</h4>
          <p>Fresh mint, lemon & soda mix.</p>
          <span class="price">Rs 350</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1593629025085-366d6a7f90e3?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Cold Coffee</h4>
          <p>Iced creamy coffee blend.</p>
          <span class="price">Rs 400</span>
        </div>
      </div>

      <div class="menu-card">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=60" />
        <div class="menu-info">
          <h4>Fresh Juice</h4>
          <p>Orange • Apple • Pomegranate</p>
          <span class="price">Rs 300</span>
        </div>
      </div>

    </div>
  </div>

</section>

</body>
</html>