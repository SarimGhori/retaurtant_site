<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant | Contact Us</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Poppins", sans-serif; }
    body { background: #ffffff; color: #222; }

    header {
      width: 100%; position: fixed; top: 0;
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(10px);
      padding: 18px 50px;
      display: flex; justify-content: space-between; align-items: center;
      border-bottom: 1px solid #eee; z-index: 1000;
    }
    header h1 { font-size: 28px; font-weight: 700; color: #e63946; }
    nav a { margin-left: 25px; text-decoration: none; font-size: 17px; color: #333; transition: .3s; }
    nav a:hover { color: #e63946; }

    .contact {
      margin-top: 120px; padding: 70px 50px;
      display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
      gap: 40px; align-items: center;
    }

    .contact-info h2 { font-size: 36px; margin-bottom: 15px; }
    .contact-info p { font-size: 17px; color: #555; margin-bottom: 15px; line-height: 1.7; }
    .info-box { margin-top: 25px; }
    .info-box div { margin-bottom: 12px; font-size: 16px; }

    .form-box {
      background: #fafafa; padding: 35px;
      border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    .form-box h3 { font-size: 28px; margin-bottom: 20px; }

    .form-box input, .form-box textarea {
      width: 100%; padding: 12px 15px;
      margin-bottom: 18px; border: 1px solid #ddd;
      border-radius: 10px; font-size: 16px;
    }

    .form-box button {
      width: 100%; padding: 14px;
      background: #e63946; color: white;
      border: none; border-radius: 10px;
      font-size: 18px; font-weight: 600;
      cursor: pointer; transition: .3s;
    }
    .form-box button:hover { background: #b92d38; }

    @media (max-width: 768px) {
      .contact { padding: 40px 25px; }
      .contact-info h2 { font-size: 30px; }
    }
  </style>
</head>
<body>
  
<form action="backend/save_contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone">
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Send Message</button>
</form>


<header>
  <h1>FoodZone</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="about.php">About</a>
    <a href="reservation.php">Reservation</a>
  </nav>
</header>

<section class="contact">

  <div class="contact-info">
    <h2>Contact Us</h2>
    <p>We’re always here to help! Feel free to reach out for questions, feedback, or table inquiries.</p>

    <div class="info-box">
      <div><strong>📍 Address:</strong> 123 Food Street, Karachi</div>
      <div><strong>📞 Phone:</strong> +92 300 1234567</div>
      <div><strong>📧 Email:</strong> info@foodzone.com</div>
      <div><strong>🕒 Hours:</strong> Mon–Sun • 11:00 AM – 11:00 PM</div>
    </div>
  </div>

  <div class="form-box">
    <h3>Send us a Message</h3>
    <form action="backend/save_contact.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="text" name="phone" placeholder="Phone Number" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

</section>

</body>
</html>