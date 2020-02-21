<?php
    require_once 'load.php';
        $infoTable = 'tbl_info';
        $getInfo = getAll($infoTable);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/wvm1igw.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Document</title>
</head>
<body>
    <?php include("templates/header.php");?>
    <main id="app">
    <section id="hero">
        <object data="public/images/RHAC.svg" type="image/svg+xml"></object>
        <div id="heroCon">
            <div id="heroImg"><img src="public/images/hero.png"></div>
            <h2>no shame.</h2>
        </div>
    </section>
    <section id="aboutSection">
    <div>
        <div id="aboutText">
      <h3>{{ about.title }}</h3>
      <p>{{ about.para }}</p>
      <p>{{ about.para2 }}</p>
      <a href="">Learn More</a>
  </div>
  <div id="aboutImg">
      <img v-bind:src="about.img" alt="">
  </div>
</div>
</div>
    </section>
    <section id="help">
    <?php while($row = $getInfo->fetch(PDO::FETCH_ASSOC)):?>
        <div class="infoObject">
        <ul>
            <li><h2><?php echo $row['title']; ?></h2></li>
            <li><p><?php echo $row['description']; ?></p></li>
            <li><p><?php echo $row['description2']; ?></p></li>
            <li><p><?php echo $row['description3']; ?></p></li>
            <li><p><?php echo $row['description4']; ?></p></li>
            <li><p><?php echo $row['description5']; ?></p></li>
            <li><p><?php echo $row['description6']; ?></p></li>
            <li><p><?php echo $row['description7']; ?></p></li>
            <li><a href="<?php echo $row['btnLink']; ?>"><?php echo $row['btnName']; ?></a></li>
        </div>
    <?php endwhile;?>
    </section>
    <section id="action">
    <h2 class="hidden">Call for Action Section</h2>
      <card id="card" v-for="(action, index) in actionContent"
      :paragraph="action.paragraph"
      :key="index">
</card>
        <!-- <div>
            <img src="" alt="Icon 1">
            <p>Paragraph</p>
            <button>Action Btn 1</button>
        </div> -->
    </section>
    <section id="partners">
    <h2>Our Partners</h2>
        <div id="partnerCon">
            <ul>
                <li v-for="partner in partners"><a href=""><img v-bind:src="partner.img" alt="partner logo"></a></li>
            </ul>
        </div>
    </section>
</main>
    <?php include("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>