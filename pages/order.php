<?php
$id = $_GET['id'];
?>

<header>
  <?php
  require_once './pages/layout/header.php'
  ?>
</header>
<main>
  <section class="first-section">
    <h3>Checkout Order</h3>
  </section>
  <section class="col-1">
    <article>
      <form id="orderForm" style="width: 600px; margin: 0 auto;">
        <label for="id">Plan ID#</label>
        <input type="text" id="id" name="id" value="<?= $id ?>" readonly />

        <label for="details">Plan Details</label>
        <textarea id="details" name="details" style="height: 170px" required readonly>
        <?php
        switch ($_GET['id']) {
          case '1':
            echo "$ 9.99\n- Free 5 pages\n- Free 1 Contact Form\n- Hero Image\n- Free 1 Animation\n- Gallery with maximum 6 items\n- No Login/Registration System\n- Charges per extra pages: $10\n- Renew Fee (Yearly): $9.99";
            break;
          case '2':
            echo "$ 24.99\n- Free 5 pages\n- Free 1 Contact Form\n- Hero Image / Carousel (Free 4 Slides)\n- Free 3 Animation\n- Gallery with maximum 9 items\n- Login/Registration System Included\n- Charges per extra pages: $10\n- Renew Fee (Yearly): $9.99";
            break;
          case '3':
            echo "$ 49.99\n- Unlimited pages\n- Free 3 Contact Form\n- Hero Image / Carousel (Unlimited Slide)\n- Free 5 Animation\n- Unlimited Gallery Items\n- Login/Registration System Included\n- Charges per extra pages: $10\n- Renew Fee (Yearly): $9.99";
            break;
          default:
            header('Location: /404');
            break;
        }
        ?>
        </textarea>

        <label for="fullname" class="required">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required />

        <label for="email" class="required">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your Email Address" required />

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" placeholder="Your Phone Number" />

        <label for="note">Any Additional Requirement(s)?</label>
        <textarea id="note" name="note" placeholder="Write something.." style="height: 170px"></textarea>

        <input type="submit" value="Send Order" />
      </form>
    </article>
    <article>&nbsp;</article>
  </section>
</main>
<footer>
  <?php
  require_once './pages/layout/footer.php'
  ?>
</footer>