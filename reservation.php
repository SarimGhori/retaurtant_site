<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant | Reservation</title>
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

    /* Reservation Section */
    .reservation {
      margin-top: 120px;
      padding: 60px 50px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
      gap: 40px;
      align-items: center;
    }

    .reservation img {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .form-box {
      background: #fafafa;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }

    .form-box h2 {
      font-size: 32px;
      margin-bottom: 15px;
    }

    .form-box p {
      font-size: 16px;
      margin-bottom: 25px;
      color: #555;
    }

    .form-box input,
    .form-box select,
    .form-box textarea {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 18px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 16px;
    }

    .form-box button {
      width: 100%;
      padding: 14px;
      font-size: 18px;
      font-weight: 600;
      color: white;
      background: #e63946;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .form-box button:hover {
      background: #b92d38;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .reservation {
        padding: 40px 25px;
      }
      .form-box h2 {
        font-size: 28px;
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

  <section class="reservation">

    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=1000&q=80" alt="reservation image" />

    <div class="form-box">
      <h2>Table Reservation</h2>
      <p>Fill out the form below to reserve your table. Our team will confirm your booking shortly.</p>

      <form action="reserve.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="text" name="phone" placeholder="Phone Number" required />

        <label>Date</label>
        <input type="date" name="date" required />

        <label>Time</label>
        <input type="time" name="time" required />

        <label>Number of Guests</label>
        <select name="guests" required>
          <option value="1">1 Person</option>
          <option value="2">2 People</option>
          <option value="3">3 People</option>
          <option value="4">4 People</option>
          <option value="5">5 People</option>
          <option value="6+">6+ People</option>
        </select>

        <textarea name="message" rows="4" placeholder="Special Request (optional)"></textarea>

        <button type="submit">Reserve Now</button>
      </form>
    </div>

  </section>

</body>
</html>