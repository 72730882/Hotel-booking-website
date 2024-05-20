<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addis Hotel - contact</title>
    <link rel="stylesheet" href="assets/common.css">
    <?php require('inc/links.php'); ?>


</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">contact us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Odit molestiae quod repudiandae <br> similique dolores ipsa repellendus ullam fuga iure velit.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white ronded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126115.11523351159!2d38.7781448!3d8.96317685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b6b037a24d49!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2sus!4v1715893357712!5m2!1sen!2sus" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5> Address</h5>
                    <a href="https://maps.app.goo.gl/8w55vsnBmkZYVK647" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt"></i> megenaga,Addis Ababa,Ethiopia</a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +111 2222 333 3444" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+111 2222 333 3444</a><br>
                    <a href="tel: +111 2222 333 3444" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+111 2222 333 3444</a>
                    <h5 class="mt-4"> Email</h5>
                    <a href="addis: addisstay@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i>
                        addisstay@gmail.com</a>
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="d-inline-block text-dark fs-5 "><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 md-6 mb-5 px-4">
                <div class="bg-white ronded shadow p-4">
                    <form>
                        <h5>send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-black bg-custom mt-3">SEND</button>
                    </form>

                </div>
            </div>


        </div>
    </div>


    <?php require('inc/footer.php') ?>

</body>

</html>