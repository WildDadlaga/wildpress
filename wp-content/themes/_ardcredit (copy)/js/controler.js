// revolutions per second
      var angularSpeed = 0.006;
      var lastTime = 0;

      // this function is executed on each animation frame
      function animate(){
          // update
          var time = (new Date()).getTime();
          var timeDiff = time - lastTime;
          var angleChange = angularSpeed * timeDiff * 2 * Math.PI / 1000;
          sphere.rotation.y += angleChange;
          lastTime = time;
          
          // render
          renderer.render(scene, camera);
          
          // request new frame
          requestAnimationFrame(function(){
        animate();
          });
      }

      // renderer
      //var renderer = new THREE.WebGLRenderer();
      var height = document.getElementById("bg").clientHeight;
      var width = document.getElementById("bg").clientWidth;
      var renderer = new THREE.CanvasRenderer();
      renderer.setSize(width, height);
      document.getElementById("bg").appendChild(renderer.domElement);

      $(window).resize(function() {
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
      });

      // camera
      var camera = new THREE.PerspectiveCamera(2, width / height, 1, 2000);
      camera.position.x = -10;
      camera.position.y = 20;
      camera.position.z = 900;
      camera.rotation.z = Math.PI + 0.5;

      // scene
      var scene = new THREE.Scene();

      // sphere
      var sphere = new THREE.Mesh(new THREE.SphereGeometry(30, 40, 26), new THREE.MeshBasicMaterial({
          wireframe: true,
          color: 0xeeeeee,
          transparent: true
      }));

      sphere.rotation.x = Math.PI - 0.3;
      scene.add(sphere);

      // start animation
      animate();

$(function(){
  var contentSwiper=$('#slider .swiper-container').swiper({
    pagination: '.sw-pagination',
    loop: true,
    speed: 1000,
    autoplay: 6000
  })
  //header slide next prev
  $('.s-left').on('click', function(e){
      e.preventDefault()
      contentSwiper.swipePrev()
  })
  $('.s-right').on('click', function(e){
    e.preventDefault()
    contentSwiper.swipeNext()
  })
})

//logos swiper
var mySwiper1 = new Swiper('#company-logos .swiper-container',{
  pagination: '.pagination',
  loop: true,
  autoplay: 4000,
  speed: 800,
  slidesPerView: 6,
  paginationClickable: true
})
$('.l-left').on('click', function(e){
    e.preventDefault()
    mySwiper1.swipePrev()
})
$('.l-right').on('click', function(e){
  e.preventDefault()
  mySwiper1.swipeNext()
})

$(window).scroll(function () {
  var offset = $(".sub-btn").offset();

  if ($(window).scrollTop() >= offset.top) {
    $(".sub-btn").addClass("fixed");
  }
  else {
    $(".sub-btn").removeClass("fixed");
  }
});
$("#header .fa-bars").click(function(e){
  e.preventDefault()
  if($(this).hasClass("active")) {
    $("#header .navmain").removeClass("active");
    $(this).removeClass("active");
    $(".black-bg").fadeOut();
  } else {
    $("#header .navmain").addClass("active")
    $(this).addClass("active");
    $(".black-bg").fadeIn();
  }
});
$("#header .fa-bars.active, .black-bg").click(function(){
  $("#header .navmain").removeClass("active");
  $('#header .fa-bars.active').removeClass("active");
  $(".black-bg").fadeOut();
})

//home news list
var $container = $('.news-list.news-list1');
$container.masonry({
  itemSelector: '.news-list.news-list1 li'
});
