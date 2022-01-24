<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Reservation</title>
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

  <style>
  body {
    /* background: #f2f2f2; */
    background-image: url(https://wallpapercave.com/wp/wp1846069.jpg);
    font-family: 'proxima-nova-soft', sans-serif;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .post-module {
    position: relative;
    z-index: 1;
    display: block;
    background: #ffffff;
    min-width: 270px;
    height: 470px;
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
    -webkit-transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    transition: all 0.3s linear 0s;
    border-radius: 5px;
  }
  .post-module:hover,
  .hover {
    -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  }
  .post-module:hover .thumbnail img,
  .hover .thumbnail img {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1);
    opacity: .6;
  }
  .post-module .thumbnail {
    background: #000000;
    height: 400px;
    overflow: hidden;
  }

  .post-module .thumbnail img {
    display: block;
    width: 120%;
    -webkit-transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    transition: all 0.3s linear 0s;
  }
  .post-module .post-content {
    position: absolute;
    bottom: 0;
    background: #ffffff;
    width: 100%;
    padding: 30px;
    -webkti-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    border-radius: 5px;
  }
  .post-module .post-content .category {
    position: absolute;
    top: -34px;
    left: 0;
    background: #4dc193;
    padding: 10px 15px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .post-module .post-content .title {
    margin: 0;
    padding: 0 0 10px;
    color: #333333;
    font-size: 26px;
    font-weight: 700;
  }
  .post-module .post-content .sub_title {
    margin: 0;
    padding: 0 0 20px;
    color: #e74c3c;
    font-size: 20px;
    font-weight: 400;
  }
  .post-module .post-content .description {
    display: none;
    color: #666666;
    font-size: 14px;
    line-height: 1.8em;
  }
  .post-module .post-content .post-meta {
    margin: 30px 0 0;
    color: #999999;
  }

  .post-module .post-content .post-meta a {
    color: #999999;
    text-decoration: none;
  }

  .container {
    max-width: 800px;
    min-width: 640px;
    margin: 0 auto;
    border-radius: 5px;
  }
  .container:before,
  .container:after {
    content: '';
    display: block;
    clear: both;
  }
  .container .column {
    width: 50%;
    padding: 0 25px;
    -webkti-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
  }
  .container .column .demo-title {
    margin: 0 0 15px;
    color: #666666;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
  }
  .container .info {
    width: 300px;
    margin: 50px auto;
    text-align: center;
  }
  .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 24px;
    font-weight: bold;
    color: #333333;
  }
  .container .info span {
    color: #666666;
    font-size: 12px;
  }
  .container .info span a {
    color: #000000;
    text-decoration: none;
  }
  .container .info span .fa {
    color: #e74c3c;
  }

  </style>
  <script>
    $(window).load(function() {
      $('.post-module').hover(function() {
        $(this).find('.description').stop().animate({
          height: "toggle",
          opacity: "toggle"
        }, 300);
      });
    });
  </script>


</head>
<body>
  <div class="container">
      <div class="info">
          <h1>Contact Us </h1>
      <!-- Normal Demo-->
        <div class="column">
          <!-- Post-->
          <div class="post-module">
              <!-- Thumbnail-->
              <!-- <div class="thumbnail">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
              </div> -->
              <!-- Post Content-->
              <div class="post-content">
                  <div class="category">Hotel Contact Details</div>
                  <h1 class="title">Hotel Name</h1>
                  <p class="address">Address</p>
                  <p class="phone">Phone Number</p>
              </div>
          </div>
        </div>
      
      
      </div>
  </div>

</body>
</html>