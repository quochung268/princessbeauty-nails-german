<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Termin buchen – Princess Beauty & Nail</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts/main.js" defer></script>
    <style>
      /* Booking Form Styles */
      .booking {
        background: #fff;
        padding: 4rem 0;
      }
      .booking-form {
        max-width: 600px;
        margin: 0 auto;
        background: #fdf5f8;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }
      .booking-form .form-group {
        margin-bottom: 1.5rem;
      }
      .booking-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #e91e63;
      }
      .booking-form input,
      .booking-form select,
      .booking-form textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
      }
      .booking-form input:focus,
      .booking-form select:focus,
      .booking-form textarea:focus {
        outline: none;
        border-color: #e91e63;
        box-shadow: 0 0 0 2px rgba(233, 30, 99, 0.2);
      }
      .booking-form .btn {
        width: 100%;
        text-align: center;
        padding: 1rem;
        font-size: 1.1rem;
        margin-top: 1rem;
      }
    </style>
  </head>
  <body>
    <!-- Header & Navigation -->
    <header>
      <div class="container">
        <div class="logo">
          <a href="index.html#home">
            <img src="images/logo.png" alt="Princess Beauty & Nail Logo" />
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="index.html#home">Startseite</a></li>
            <li><a href="index.html#services">Leistungen</a></li>
            <li><a href="index.html#pricing">Preise</a></li>
            <li><a href="index.html#gallery">Galerie</a></li>
            <li><a href="index.html#about">Über uns</a></li>
            <li><a href="index.html#contact">Kontakt</a></li>
            <li><a href="#booking" class="active">Buchen</a></li>
          </ul>
        </nav>
        <button class="menu-toggle">☰</button>
      </div>
    </header>

    <!-- Booking Form Section -->
    <section id="booking" class="booking hidden">
      <div class="container">
        <h2>Termin buchen</h2>
        <form action="process_booking.php" method="POST" class="booking-form">
          <div class="form-group">
            <label for="name">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Ihr Name"
              required
            />
          </div>
          <div class="form-group">
            <label for="phone">Telefonnummer</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="Ihre Telefonnummer"
              pattern="[0-9]*"
              inputmode="numeric"
              required
            />
          </div>
          <div class="form-group">
            <label for="service">Leistung auswählen</label>
            <select id="service" name="service" required>
              <option value="">-- Bitte wählen --</option>
              <option value="manikuere">Maniküre & Pflege</option>
              <option value="shellac">Shellac</option>
              <option value="pedikuere">Pediküre</option>
              <option value="uvgel">UV-Gel & Powder Gel</option>
              <option value="wimpern">Wimpernverlängerung</option>
              <option value="waxing">Waxing</option>
              <option value="massage">Massage</option>
              <option value="gesichtsbehandlung">Gesichtsbehandlung</option>
            </select>
          </div>
          <div class="form-group">
            <label for="date">Datum & Uhrzeit</label>
            <input type="datetime-local" id="date" name="date" required />
          </div>
          <div class="form-group">
            <label for="note">Zusätzliche Wünsche</label>
            <textarea
              id="note"
              name="note"
              rows="4"
              placeholder="z.B. Farbwahl, Rabatt-Code, etc."
            ></textarea>
          </div>
          <button type="submit" class="btn">Termin anfragen</button>
        </form>
      </div>
    </section>

    <!-- Scroll to top button -->
    <!-- Wird durch scripts/main.js automatisch hinzugefügt -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2025 Princess Beauty & Nail. Alle Rechte vorbehalten.</p>
        <ul class="social">
          <li>
            <a
              href="https://www.facebook.com/people/Hoa-H%E1%BB%93ng-V%C3%A0ng/pfbid02rLRypLSXDnKbYdAyeyagECLFBuNnB8C1XwALZh7wYwbz4mqZgq9HUgYSMiCkxsuDl/"
              target="_blank"
              rel="noopener noreferrer"
              >Facebook</a
            >
          </li>
          <li>
            <a
              href="https://www.instagram.com/princess.nailsberlin/"
              target="_blank"
              rel="noopener noreferrer"
              >Instagram</a
            >
          </li>
          <li>
            <a
              href="https://www.tiktok.com/@prinzessbeauty_nail?_r=1&_d=secCgYIASAHKAESPgo8%2FiEd7ndoxdA7ehRCs%2B%2BC30kPPuOm%2B1ocPzTtaoLGC0WSpKsNVCqmlFNaO6Biaef9thE58xubc0P81DHGGgA%3D&_svg=1&checksum=6bd3192c1a14a00e8c77a6bb33a141abb296e135787ef819c819d88fb092b981&sec_uid=MS4wLjABAAAA2clf7_Jm-JgZ0EouhdYwpvqbetXUS8sIMall7sG7POwV3Flj1KZePjOqhmYdlby5&sec_user_id=MS4wLjABAAAAGrR5OrJ4au7OkfHKe9JDGgEVuqWihOGogWwQokTtSompY-ihHKrSfrYbjtvv2qMD&share_app_id=1180&share_author_id=6851283700992050181&share_link_id=751E568A-6027-424F-B89B-CAC374EB897D&sharer_language=vi&social_share_type=5&source=h5_t&timestamp=1747636312&tt_from=copy&u_code=dl5m6756726ml2&ug_btm=b7200%2Cb5836&user_id=7018366623333680155&utm_campaign=client_share&utm_medium=ios&utm_source=copy"
              target="_blank"
              rel="noopener noreferrer"
              >TikTok</a
            >
          </li>
        </ul>
      </div>
    </footer>
  </body>
</html>
