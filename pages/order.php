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

        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="<?= ($id == 1) ? '$ 9.99' : (($id == 2) ? '$ 24.99' : '$ 49.99') ?>" readonly />

        <label for="details" hidden>Plan Details</label>
        <input type="hidden" id="details" name="details" style="height: 170px" value="<?php
                                                                                      switch ($_GET['id']) {
                                                                                        case '1':
                                                                                          echo "$ 9.99<br/>- Free 5 pages<br/>- Free 1 Contact Form<br/>- Hero Image<br/>- Free 1 Animation<br/>- Gallery with maximum 6 items<br/>- No Login/Registration System<br/>- Charges per extra pages: $10<br/>- Renew Fee (Yearly): $9.99";
                                                                                          break;
                                                                                        case '2':
                                                                                          echo "$ 24.99<br/>- Free 5 pages<br/>- Free 1 Contact Form<br/>- Hero Image / Carousel (Free 4 Slides)<br/>- Free 3 Animation<br/>- Gallery with maximum 9 items<br/>- Login/Registration System Included<br/>- Charges per extra pages: $10<br/>- Renew Fee (Yearly): $9.99";
                                                                                          break;
                                                                                        case '3':
                                                                                          echo "$ 49.99<br/>- Unlimited pages<br/>- Free 3 Contact Form<br/>- Hero Image / Carousel (Unlimited Slide)<br/>- Free 5 Animation<br/>- Unlimited Gallery Items<br/>- Login/Registration System Included<br/>- Charges per extra pages: $10<br/>- Renew Fee (Yearly): $9.99";
                                                                                          break;
                                                                                        default:
                                                                                          header('Location: /404');
                                                                                          break;
                                                                                      }
                                                                                      ?>">

        <label for="fullname" class="required">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required />

        <label for="email" class="required">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your Email Address" required />

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" placeholder="Your Phone Number" />


        <label for="note">Any Additional Requirement(s)?</label>
        <textarea id="note" name="note" placeholder="Write something.." style="height: 170px"></textarea>
        <p class="tip-text">* Price can be vary for additional requirements.</p>

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