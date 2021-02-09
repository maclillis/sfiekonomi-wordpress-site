<?php /* Template Name: Hem */ ?>

<?php get_header(); ?>
<div class="sfi-main-outer-wrapper">
    <section class="sfi-hero-wrapper">
        <h1 class="sfi-hero-heading"><?php the_field('hero-heading');?></h1>
        <h3 class="sfi-hero-sub-heading"><?php the_field('sub-hero-heading');?></h3>
    </section>

    <section class="sfi-main-content-wrapper">
        <article class="row sfi-main-row">
            <figure class="col-xs-6 sfi-main-col">
                <h1 class="sfi-main-content-heading">Privatekonomi</h1>
                <div class="sfi-content-list-wrapper">
                    <ul class="sfi-content-list row">
                        <div class="sfi-list-col col-xs-6">
                                <li>
                                    <div class="sfi-chapter-bubble chap-1"><p>1</p></div>
                                    <a href="kapitel/budget-och-skatt">
                                        <p>Budget och skatt</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-2"><p>2</p></div>
                                    <a href="kapitel/soka-arbete">
                                        <p>Söka arbete</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-3"><p>3</p></div>
                                    <a href="kapitel/bank-id">
                                        <p>Bank-id</p>
                                    </a>      
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-4"><p>4</p></div>
                                    <a href="kapitel/trygghet-for-alla">
                                        <p>Trygghet för alla</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-5"><p>5</p></div>
                                    <a href="kapitel/pensioner">
                                        <p>Pensioner</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-6"><p>6</p></div>
                                    <a href="kapitel/boende">
                                        <p>Boende</p>
                                    </a>
                                </li>
                        </div>
                        <div class="sfi-list-col col-xs-6">
                                <li>
                                    <div class="sfi-chapter-bubble chap-7"><p>7</p></div>
                                    <a href="kapitel/betala-rakningar">
                                        <p>Betala räkningar</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-8"><p>8</p></div>
                                    <a href="kapitel/betala-i-tid">
                                        <p>Betala i tid</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-9"><p>9</p></div>
                                    <a href="kapitel/avtal-och-kop">
                                        <p>Avtal och köp</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-10"><p>10</p></div>
                                    <a href="kapitel/spara-och-lana">
                                        <p>Spara och låna</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-11"><p>11</p></div>
                                    <a href="kapitel/forsakringar">
                                        <p>Försäkringar</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="sfi-chapter-bubble chap-test"><i class="fas fa-pen"></i></div>
                                    <a href="kapitel/testfragor">
                                        <p>Testfrågor</p>
                                    </a>
                                </li>
                        </div>
                    </ul>
                </div>
            </figure>
            <figure class="col-xs-6 sfi-main-col">
            <h1 class="sfi-main-content-heading"><?php the_field('book-heading');?></h1>
            <div class="sfi-content-book-wrapper row">
                <div class="col-xs-5 sfi-main-col">
                    <img src="<?php the_field('book-thumbnail-img');?>" class="sfi-book-img" alt="Miniatyrbild för bok" />
                </div>
                <div class="col-xs-5 sfi-main-col">
                    <p class="sfi-main-text pdf-text"><?php the_field('book-description');?> <a href="<?php the_field('book-link'); ?>">Läs mer</a></p>
                    <div class="sfi-file-info-wrapper row">
                        <div class="col-xs-4 sfi-main-col">
                            <i class="fa fa-file-pdf"><p>PDF</p></i>
                        </div>
                        <div class="col-xs-7 sfi-file-col">
                            <a href="<?php the_field('handbook-pdf');?>" download>Ladda ner</a>
                        </div>
                    </div>
                </div>
            </div>
            </figure>
        </article>
        <article class="row sfi-main-row last-row">
            <figure class="col-xs-6 sfi-main-col">
                    <h1 class="sfi-main-content-heading"><?php the_field('puff-heading');?></h1>
                    <div class="sfi-main-content-paragraph">
                        <p class="sfi-main-text"><?php the_field('puff-text');?></p>
                            <div class="sfi-main-content-readmore"><a href="<?php the_field('puff-link');?>">Klicka här för att komma till lärarrummet</a> <i class="fas fa-chevron-right"></i></div>
                    </div>
            </figure>
            <figure class="col-xs-6 sfi-main-col">
                <div class="sfi-main-content-side-image">
                    <a href="<?php the_field('puff-link');?>">
                        <img src="<?php the_field('puff-img');?>" class="puff-img" alt="Miniatyrbild för puff" />
                    </a>
                </div>
            </figure>
        </article>
    </section>
</div>

<?php get_footer(); ?>