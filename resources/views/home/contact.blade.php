<!DOCTYPE html>
<html>

<head>
 
 @include('home.head')

</head>

<body style="background-color: rgba(255,229,180,0.2);">
	<div class="hero_area">

	@include('home.header')

	</div>

<br><br>
  <div class="text-center pt-4 pb-3" style="background-color: rgba(255,220,176,1);">
    <h3 style="color: #EF0107;" class="display-4">CONTACT US</h3>
  </div>
  <br><br>
  <div class="text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4261.310861101398!2d3.4599001772078823!3d6.4610391819079735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf58be73d8187%3A0x520d9b7a6e31743d!2sThe%20Merlin!5e0!3m2!1sen!2sng!4v1693295783072!5m2!1sen!2sng" width="90%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <br>

  <section class="services text-center section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-map-marker fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Visit us</h5>
                <a href="https://goo.gl/maps/s32CtDewfi6XHkeD8" class="text-decoration-none text-secondary stretched-link">1028-1038, Olukayero Road, Gim City, Nigeria</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-envelope fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Our email</h5>
                <p class="text-secondary">send us an email @ <a href="mailto: support@gimauto.com" class="text-decoration-none text-secondary stretched-link">support@gimstore.com</a></p>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-phone fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Telephone</h5>
                <p class="text-secondary">call us on <a href="tel:08012345678" class="text-decoration-none text-secondary stretched-link">+2348109473318</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-facebook fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Facebook</h5>
                <p class="text-secondary">chat with us @ <a href="#" class="text-decoration-none text-secondary stretched-link">GimStore</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-instagram fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Instagram</h5>
                <p class="text-secondary">on ig <a href="#" class="text-decoration-none text-secondary stretched-link">@gimstore</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 ">
          <div class="card p-3 justify-content-center">
            <div class="box-icon-left items">
              <span class="icon text-primary"><i class="fa fa fa-twitter fa-2x"></i></span>
              <div class="cont">
                <h5 class="mt-2">Twitter</h5>
                <p class="text-secondary">send us a tweet <a href="#" class="text-decoration-none text-secondary stretched-link">@gimstore</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>

  <div>
    <section class="bg-white p-4">
      <div class="row">
        <div class="col">
          <h6 style="color: rgba(85,107,47, 1.0);">GET IN TOUCH</h6>
          <h4 class="display-6">Leave A Message</h4>
          <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare dolor ut fermentum aliquet. Donec ut condimentum urna. Ut a arcu ultricies, tempus quam id, ullamcorper risus.</p>
        </div>
        <div class="col-md-8">
          <form role="form">
            <div class="form-group">
              <div class="colums">
                <div class="ntem">
                  <label for="usrname">Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter username">
                </div>
                <div class="ntem">
                  <label for="sbj">Subject</label>
                  <input type="text" class="form-control" id="sbj"  placeholder="Enter subject">
                </div>
              </div>
            </div>
            <div class="form-group pb-2">
              <label class="form-label" for="msg">Message</label>
              <textarea class="form-control" id="msg" placeholder="Message..." rows="5"></textarea>
            </div>
              <button type="submit" class="sunt form-control btn btn-primary btn-block"><b>Submit</b></button>
          </form>
        </div>
      </div>
    </section>
  </div>

  <br><br><br>

	@include('home.footer')

</body>

</html>
