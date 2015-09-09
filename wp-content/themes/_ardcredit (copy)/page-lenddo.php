<?php
/*
Template Name: Lenddo Application
*/
?>

<?php get_header(); ?>
    <div id="home-news">
      <div class="container online-send text-center">
<?php if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			<h2><?php the_title(); ?></h2>
		<?php }
	}?>
	    <p class="text">
          Та манай компаний онлайн зээлийн ѳргѳдлийг үнэн зѳв бѳглѳснѳѳр бид танитай эргэн холбогдож зээл авах боломжтой боломжгүйг тань цаг алдалгүй хэлэх болно баярлалаа.
        </p>
        <form action="" class="form">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="middlename" class="col-sm-4 control-label">Овог</label>
                <div class="col-sm-8">
                  <input type="text" id="middlename" class="form-control" id="inputEmail3" placeholder="Овог">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lastname" class="col-sm-4 control-label">Эцгийн/эхийн нэр</label>
                <div class="col-sm-8">
                  <input type="text" id="lastname" class="form-control" placeholder="Эцгийн/эхийн нэр">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="firstname" class="col-sm-4 control-label">Нэр</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="firstname" placeholder="Нэр">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="birthdate" class="col-sm-4 control-label">Төрсөн өдөр</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="birthdate" placeholder="Төрсөн өдөр">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">И-мэйл хаяг</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="И-мэйл хаяг">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="employer" class="col-sm-4 control-label">Компани</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="employer" placeholder="Компани">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="mobilephone" class="col-sm-4 control-label">Утас</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="mobilephone" placeholder="Утас">
                </div>
              </div>
            </div>
          </div>
          <p class="bg-danger">
            Та буруу бѳглѳсѳн байна дээрх улаанаар тодруулсан хэсгийг дахин бѳглѳнѳ үү!
          </p>
          <hr>
          <div class="btn-lg" id="lenddo_verify"></div>
        </form>
      </div>
    </div>
<script async type="text/javascript">
var LenddoVerifyConfig = {
  scriptId: '55bb706faa961277ad1acc2d',
  clientId: Date.now() + parseInt( Math.random() * 1000 ),
  action: 'redirect', // Valid options for this field are 'redirect' or 'popup'
  verificationFields: {
    /* sample verification field values */
    firstname: function(){
      return $("#firstname").val()
    },
    middlename: function(){
      return $("#middlename").val()
    },
    lastname: function(){
      return $("#lastname").val()
    },
    birthdate: function(){
      return $("#birthdate").val()
    },
    email: function(){
      return $("#email").val()
    },
    employer: function(){
      return $("#employer").val()
    },
    mobilephone: function(){
      return $("#mobilephone").val()
    }
  },
  onSubmit: function(cb) {
    var errors = false;
    if (errors === false) {
      cb();
    }
  }
};

(function() {
  var la = document.createElement('script');
  la.type = 'text/javascript';
  la.async = true;
  la.src = 'https://authorize.lenddo.com/verify.js?v=' + Date.now();
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(la, s);
})();</script>
<?php get_footer(); ?>
