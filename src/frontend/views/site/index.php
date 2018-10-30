<?php

use frontend\models\File;

$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.7/tiny-slider.css');
$this->registerCssFile(File::getNameWithCreatedTime('/css/main.css'));

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.7/min/tiny-slider.js', ['position' => yii\web\View::POS_END]);
$this->registerJsFile(File::getNameWithCreatedTime('/js/main.js'));

?>

<main class="el-main">
    <div class="main">
        <div class="main-banner">
            <section class="el-container is-vertical">
                <div class="main-title">
                    Leading by example
                    <span class="carousel-indicators" id="carousel-indicators">
                        <span class="carousel-indicator is-active"></span>
                        <span class="carousel-indicator"></span>
                        <span class="carousel-indicator"></span>
                    </span>
                </div>
                <div class="main-carousel" id="main-carousel">
                    <div class="carousel__item">
                        <div class="slide-item">
                            <div class="slide-item__part">
                                <div class="slide-item__ico slide-item__ico_active-procedures"></div>
                                <div class="slide-item__number">933</div>
                            </div>
                            <div class="slide-item__text">
                                <div>Active</div>
                                Procedures
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="slide-item__part">
                                <div class="slide-item__ico slide-item__ico_concluded-contracts"></div>
                                <div class="slide-item__number">2’470</div>
                            </div>
                            <div class="slide-item__text">
                                <div>Concluded</div>
                                Contracts
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="slide-item">
                            <div class="slide-item__part">
                                <div class="slide-item__ico slide-item__ico_contracting-entities"></div>
                                <div class="slide-item__number">817</div>
                            </div>
                            <div class="slide-item__text">
                                <div>Contracting</div>
                                Entities
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="slide-item__part">
                                <div class="slide-item__ico slide-item__ico_economic-operators"></div>
                                <div class="slide-item__number">1’860</div>
                            </div>
                            <div class="slide-item__text">
                                <div>Economic</div>
                                Operators
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="slide-item">
                            <div class="slide-item__part">
                                <div class="slide-item__ico slide-item__ico_total-savings"></div>
                                <div class="slide-item__number">12’150’000</div>
                            </div>
                            <div class="slide-item__text">
                                <div>Total</div>
                                savings
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/join-mtender" class="main__join-button">Join</a>
            </section>
        </div>
        <section class="el-container is-vertical">
            <div class="main-news">
                <div class="main-news__title">
                    News
                </div>
                <div class="main-news__cards-wp">
                    <div class="main-news__card"><img src="/img/news_1.jpg" alt="news1" class="main-news__img">
                        <div class="main-news__text">
                            New types of electronic tendering procedures are becoming available on the MTender, to suit
                            different types of contracts and serve different public and commercial buyers, including
                            state-owned enterprises. The Ministry of Finance of Moldova is first introducing electronic
                            public procurement procedures of open tender, request for quotation, and negotiated
                            procedure without publication of contract notice.
                        </div>
                    </div>
                    <div class="main-news__card"><img src="/img/news2.jpg" alt="news2" class="main-news__img">
                        <div class="main-news__text">
                            On 22-26 October 2018, the Ministry of Finance of Moldova and the Speaker of the Parliament
                            of Moldova are hosting the WTO Regional Seminar for GPA Parties and Observer Governments
                            from Central Europe, Western Balkans, Caucasus and Central Asia, including a session on
                            digital public procurement in Moldova. Register to attend the UNDP Open Government and
                            Public Spending session on 22 October.
                        </div>
                    </div>
                    <div class="main-news__card"><img src="/img/news3.jpg" alt="news3" class="main-news__img">
                        <div class="main-news__text">
                            On 22-26 October 2018, the Ministry of Finance of Moldova and the Speaker of the Parliament
                            of Moldova are hosting the WTO Regional Seminar for GPA Parties and Observer Governments
                            from Central Europe, Western Balkans, Caucasus and Central Asia, including a session on
                            digital public procurement in Moldova. Register to attend the UNDP Open Government and
                            Public Spending session on 22 October.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main-about">
            <section class="el-container is-vertical">
                <div class="main-about__title">
                    What is MTender
                </div>
                <div class="main-about__text">
                    The Ministry of Finance of the Republic of Moldova is leading a transition to digital public
                    procurement to ensure more transparent and efficient spending of the state budget of the Republic of
                    Moldova. New digital government service – MTender - will support public procurement from planning
                    the purchase to payment for public contracts. It will shorten time for tendering for public bodies
                    and waiting time for payment for suppliers and contractors.
                </div>
                <div class="main-about__cards-wp">
                    <div class="main-about__card">
                        <img src="/img/main-ico1.png" alt="main ico 1" class="main-about__img">
                        <div class="main-about__card-text">
                            With MTender digital service, all public tenders are accessible online and every procurement
                            decision transparently published online in real time. Citizens can watch government
                            procurement decisions and how taxpayers money are spent on public services.
                        </div>
                    </div>
                    <div class="main-about__card">
                        <img src="/img/main-ico2.png" alt="main ico 2" class="main-about__img">
                        <div class="main-about__card-text">
                            On account of online and easy to participate tenders, the new fully digital procurement
                            service will offer better access to opportunities in public procurement for business
                            community, in particular local small and medium-sized enterprises.
                        </div>
                    </div>
                    <div class="main-about__card">
                        <img src="/img/main-ico3.png" alt="main ico 3" class="main-about__img">
                        <div class="main-about__card-text">
                            For public bodies, new digital service will also bring improved planning of spending,
                            quicker purchases and better-quality as a result of ‘zero paper’ electronic bidding
                            procedures.
                        </div>
                    </div>
                </div>
                <hr class="main-about__line">
                <div class="main-about__sub-title">
                    The MTender is a multi-platform networking digital procurement service it, comprise a
                    government-operated web portal and the Open Data central database unit and is networking with
                    several commercial electronic platforms certified to support electronic tendering procedures for
                    public sector and commercial clients.
                </div>
                <div class="main-about__sub-text">
                    The MTender networking electronic procurement platform is a commercial electronic platform,
                    authorised and certified for networking with the MTender and providing digital electronic tendering
                    services to public sector clients as well as commercial buyers. Each MTender networking platform is
                    providing a help desk service to buyers and economic operators registered on this platform to access
                    digital services of the MTender.
                </div>
                <div class="main-about__partners">
                    <div class="main-about__partners_title">
                        Presently the MTender is networking with the following platforms:
                    </div>
                    <div class="main-about__partners_links">
                        <a href="https://yptender.md/" target="_blank">
                            <img src="/img/yptender.png" alt="yptender">
                        </a>
                        <a href="https://e-licitatie.md/" target="_blank">
                            <img src="/img/e-lici.png" alt="e-lici">
                        </a>
                        <a href="https://achizitii.md/" target="_blank">
                            <img src="/img/achizitii.md.png" alt="achizitii">
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>