<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?= base_url() ?>aset/img/logo.png" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/aset/css/contact.css" />

    <title>Christiano - Portfolio</title>
  </head>
  <body class="bg-light">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div> 
                            <div id="form-message-success" class="mb-4">
                            Your message was sent, thank you!
                            </div>
                            <?= \Config\Services::validation()->listErrors(); ?>
                                    <form method="POST" id="contactForm" name="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4">Contact us</h3>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Email:</span> <a href="mailto:christianoanugerah@gmail.com">christianoanugerah@gmail.com</a></p>
                              </div>
                          </div>
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="<?= base_url() ?>/aset/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/aset/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/aset/js/popper.js"></script>
    <script src="<?= base_url() ?>/aset/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/aset/js/contact.js"></script>
  </body>
</html>
