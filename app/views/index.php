<?php
$title = "Category";
ob_start();
?>

<section class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.php?action=index" class="logo"><strong>SITE </strong>wiki</a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content flex-items-center m-20 ">
                        <header>
                            <h1>Hi, I m WIKI<br />
                                Hafssa</h1>

                        </header>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque cupiditate maxime, nisi
                            eveniet excepturi et libero hic perspiciatis at repellat?</p>
                        <ul class="actions">
                            <li><a href="#" class="button big">Learn More</a></li>
                        </ul>
                    </div>
                    <span class="image object">
                        <img src="../app/images/OIP__1_-removebg-preview.png" alt="00" />
                    </span>
                </section>

                <!-- Section -->
                <section>
                    <header class="major d-flex justify-content-between align-middle">
                        <h2>Derniers Wikis</h2>
                        <input  onkeyup="search(this.value)" type="text" class="w-25 h-25 bg-dark">
                    </header>
                    <div id="features" class="features">
                        <?php foreach ($latestWikis  as $wiki) { ?>
                            <article>
                                <span class="icon fa-gem"></span>
                                <div class="content">
                                    <h3><a href="index.php?action=wiki&id=<?php echo $wiki['wiki_id']; ?>">
                                            <?php echo $wiki['title']; ?>
                                        </a></h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                        facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                </div>
                            </article>

                        <?php } ?>
                    </div>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Dernières Catégories</h2>

                    </header>
                    <div class="posts">
                        <?php foreach ($latestCategories as $catego) { ?>
                            <article>
                                <a href="#" class="image"><img src="../app/images/one.jpg" alt="" /></a>
                                <h3>
                                    <?php echo $catego['name']; ?>
                                </h3>
                                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                    facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                <ul class="actions">
                                    <li><a href="index.php?action=category&id=<?php echo $catego['category_id']; ?>"
                                            class="button">More</a></li>
                                </ul>
                            </article>
                        <?php } ?>


                    </div>
                </section>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">

                    <div id="header">
                        <button><a href="index.php?action=login">Login</a></button>
                        <button><a href="index.php?action=register">sign-up</a></button>
                    </div>
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="index.php?action=index">Homepage</a></li>
                        <li><a href="../app/views/wiki/addwiki.php">Liste Wikis</a></li>
                        <li><a href="index.php?action=dashboard">statistique </a></li>
                        <li>
                            <span class="opener">Gategory</span>
                            <ul>
                                <li><a href="#">Ajouter</a></li>
                                <li><a href="#">Modification</a></li>
                                <li><a href="#">supprimer</a></li>
                                <li><a href="#">afficher</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Ante interdum</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="../app/images/image.jpg" alt="" /></a>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                        </article>
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Contact</h2>
                    </header>
                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem
                        ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat
                        tempus aliquam.</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">youcode@gmail.com</a></li>
                        <li class="icon solid fa-phone">(000) 000-0000</li>
                        <li class="icon solid fa-home">1234 youcode<br />
                            Asafi, TN 00000-0000</li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; 2024-2025 HAFSSA HAJOU</p>
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="../app/assets/js/jquery.min.js"></script>
    <script src="../app/assets/js/browser.min.js"></script>
    <script src="../app/assets/js/breakpoints.min.js"></script>
    <script src="../app/assets/js/util.js"></script>
    <script src="../app/assets/js/main.js"></script>
    <script src="../app/assets/js/search.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</section>
<?php $content = ob_get_clean(); ?>
<?php include 'layout/layout.php'; ?>