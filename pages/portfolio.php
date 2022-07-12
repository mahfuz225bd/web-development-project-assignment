<?php
$id = $_GET['id'];
function show_portfilio($id, $title, $thumbnail, $description, $link)
{
  echo '<table style="width: 500px;">
  <tr>
    <td style="width: 119px;">ID#</td>
    <td>' . $id . '</td>
  </tr>
  <tr>
    <td></td>
    <td><img src="' . $thumbnail . '" alt="' . $title . '" style="width: 100%" /></td>
  </tr>
  <tr>
    <td>Project Title</td>
    <td>' . $title . '</td>
  </tr>
  <tr>
    <td>Description</td>
    <td>' . $description . '</td>
  </tr>
  <tr>
    <td></td>
    <td><a class="visit" href="' . $link . '" target="_blank" rel="noopener noreferrer">Visit Link</a></td>
  </tr>
</table>';
}
?>
<header>
  <?php
  require_once './pages/layout/header.php'
  ?>
</header>
<main>
  <section class="first-section">
    <h3>&nbsp;</h3>
  </section>
  <section class="col-1">
    <article style="display:flex; justify-content:center;">
      <?php
      $dummyDescription = "Lorem ipsum dolor sit amet consectetur adipisicing elit. In labore rerum, cupiditate repellendus voluptatibus possimus quos sequi nemo molestias similique voluptates minus, aut fugiat molestiae soluta, cum vel nihil debitis commodi velit ducimus doloremque! Nesciunt, fugiat quis tenetur ullam itaque architecto laborum doloribus laboriosam, facere sint minima velit quam repellendus?";
      switch ($id) {
        case '1':
          show_portfilio('1', "Vaaz Interior", './assets/img/portfolio/1.jpg', $dummyDescription, 'https://example.com');
          break;
        case '2':
          show_portfilio('2', "Expert IT Limited", './assets/img/portfolio/2.jpg', $dummyDescription, 'https://example.com');
          break;
        case '3':
          show_portfilio('3', "Akib Automobile", './assets/img/portfolio/3.jpg', $dummyDescription, 'https://example.com');
          break;
        case '4':
          show_portfilio('4', "Pizzeria Restaurant", './assets/img/portfolio/4.jpg', $dummyDescription, 'https://example.com');
          break;
        case '5':
          show_portfilio('5', "Interior Design Company", './assets/img/portfolio/5.jpg', $dummyDescription, 'https://example.com');
          break;
        case '6':
          show_portfilio('6', "Mart Fury Online Fruit Shop", './assets/img/portfolio/6.jpg', $dummyDescription, 'https://example.com');
          break;
        case '7':
          show_portfilio('7', "shopp.my Online Dress Shop", './assets/img/portfolio/7.jpg', $dummyDescription, 'https://example.com');
          break;
        case '8':
          show_portfilio('8', "News Fresh e-Newspaper", './assets/img/portfolio/8.jpg', $dummyDescription, 'https://example.com');
          break;
        default:
          header('Location: /404');
          break;
      }
      ?>
    </article>

  </section>
</main>
<footer>
  <?php
  require_once './pages/layout/footer.php'
  ?>
</footer>