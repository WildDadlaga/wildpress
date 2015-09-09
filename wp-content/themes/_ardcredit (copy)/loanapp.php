<?php
/*
Template Name: Application Form
*/
 ?>

<?php get_header(); ?>
    <div id="home-news">
      <div class="container online-send text-center">
        <h2>
          Онлайн зээлийн ѳргѳдѳл
        </h2>
        <p class="text">
Та энэхүү цахим зээлийн өргөдөлийг үнэн бодит бөглөж хүсэлтээ илгээнэ үү!<br>
Бид таньтай цаг алдалгүй эргэн холбогдох болно баярлалаа.
        </p>
        <div class="check">
          <a href="/хувь-хүнээр-зээлийн-хүсэлт-илгээх">
            <i class="fa fa-user"></i><br>Хувь хүн
          </a>
          <a href="/байгууллагаар-зээлийн-хүсэлт-илгээх">
            <i class="fa fa-university"></i><br>Байгууллага
          </a>
          <?php $admin = is_admin(); ?>
          <?php echo $admin; ?>
          <?php if( is_super_admin() ): ?>
            <a href="/lenddo">
              <i class="fa fa-money"></i><br>LENDDO
            </a>
          <?php endif; ?>  
          <p class="text">
            Та хувь хүнээр эсхүл албан байгууллагын
            нэр дээр зээл авах боломжтой.
          </p>
        </div>
      </div>
</div>      
<?php get_footer(); ?>
