<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>New Electro Tech Engineering Services</title>

        <!-- css links -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">



        <!-- bootstrap CDN for popper.js and jquery.js -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


        <!-- owl carousel js-->
        <script src="assets/js/owl.carousel.min.js"></script>


        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!-- font awesome icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        <div class="main-wrapper">
            <header>
                <?php include 'inc\header.php' ?>
            </header>

            <?php include 'inc\slider.php' ?>

            <main>
                <?php include 'inc\about.php' ?>
                <?php include 'inc\services.php' ?>
                <?php include 'inc\team.php' ?>
                <?php include 'inc\products.php' ?>
                <?php include 'inc\experience.php' ?>
                <?php include 'inc\clients.php' ?>
                <?php include 'inc\map.php' ?>
                
            </main>

            <footer>
                 <?php include 'inc\footer.php' ?>
                 <?php include 'inc\post-footer.php'?>
            </footer>
        </div>
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true
            });


        </script>


    </body>

</html>