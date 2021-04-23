<? require($_SERVER['DOCUMENT_ROOT'] . '/local/include/login.php'); ?>
<?php

const DATA_TABLE_2 = [
    ['code' => '170400', 'flags' => ['1', '1', '0'], 'name' => 'Возбудители клещевых инфекций: возбудители клещевого энцефалита (ВКЭ); иксодовых клещевых боррелиозов (ИКБ); гранулоцитарного анаплазмоза человека (ГАЧ); моноцитарного эрлихиоза человека (МЭЧ); клещевых пятнистых лихорадок, определение ДНК/РНК в клеще',],
];
const DATA_TABLE_3 = [
    ['code' => '042702', 'flags' => ['1', '1', '0'], 'name' => 'Вирус клещевого энцефалита, полуколичественное определение антител класса IgM',],
    ['code' => '042701', 'flags' => ['0', '0', '1'], 'name' => 'Вирус клещевого энцефалита, количественное определение антител класса IgG',],
    ['code' => '044101', 'flags' => ['1', '1', '1'], 'name' => 'Anti-Borrelia IgM, количественное определение антител класса IgM к антигенам Borrelia burgdorferi sensu lato',],
    ['code' => '044102', 'flags' => ['1', '1', '0'], 'name' => 'Anti-Borrelia IgG, количественное определение антител класса IgG к антигенам Borrelia burgdorferi sensu lato',],
    ['code' => '300049', 'flags' => ['1', '1', '0'], 'name' => 'Серологическая диагностика боррелиоза',],
];

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Сезон клещей: Как защититься</title>
    <meta name="description"
          content="Сезон клещей: Как защититься"/>
    <link rel="stylesheet" href="styles/main.min.css?v<?= crc32(time()); ?>"/>
    <link rel="stylesheet" href="styles/style.css?v<?= crc32(time()); ?>"/>
    <link rel="stylesheet" href="styles/modal.css">
    <script type="text/javascript" src="/local/widget/config.js"></script>
    <script type="text/javascript" src="js/common.js"></script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-NSTG586');</script>
        <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSTG586"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="fixedHeader">
    <div class="uk-container">
        <div class="uk-flex uk-flex-between uk-flex-middle@m uk-flex-middle@l">
            <div style="margin-top: 5px">
                <a href="/" class="header_fix_logo">
                    <img src="img/pic/logo/cmd-logo-fix.png" alt="">
                </a>
            </div>

            <ul class="header__menu uk-flex uk-flex-around uk-width-1-2">
                <li>
                    <a href="#treatment" uk-scroll>Важно знать</a>
                </li>
                <li>
                    <a href="#mifs" uk-scroll>Мифы</a>
                </li>
                <li>
                    <a href="#zashita" uk-scroll>Как защититься</a>
                </li>
                <li>
                    <a href="#table1" uk-scroll>Исследования</a>
                </li>
                <li>
                    <a href="#geo" uk-scroll>Где сдать</a>
                </li>
            </ul>

            <div>
                <a class="header__contact" href="tel:88007077881">8 800 707 7881</a>

            </div>
            <div id="basket-place-landing-fix" class="basket" style="color: #777 !important"></div>

        </div>

    </div>
</div>
<header class="header">
    <div class="uk-container">
        <div class="header__top uk-flex uk-flex-between uk-flex-middle@m uk-flex-middle@l">
            <div>
                <a href="/" class="header__logo">
                    <img src="img/pic/logo/cmd-logo.svg" width="245" height="42" alt="">
                </a>
            </div>
            <button type="button" class="country popup-open">Санкт-Петербург</button>
            <ul class="header__menu uk-flex uk-flex-around">
                <li class="menu__item">
                    <a href="#treatment" uk-scroll>Вакцинация</a>
                </li>
                <li  class="menu__item">
                    <a href="#table1" uk-scroll>Исследования</a>
                </li>
                <li class="menu__item">
                    <a href="#geo" uk-scroll>Где сдать</a>
                </li>
            </ul>

            <div>
                <a class="header__contact" href="tel:88007077881">8 800 707 7881</a>

            </div>
            <div id="basket-place-landing" class="basket"></div>
            <!-- <div class="btn-position-header">
                <span class="cart-number">0</span>
                <button class="btn cart-btn" type="button"></button>
            </div> -->

        </div>


        <span class="header__bottom uk-flex uk-flex-column">
        <h1 style="line-height: 100%"><span>Сезон клещей: </span> <br>Как&nbsp;защититься</h1>
        <p class="headerText">Наступил сезон активности клещей, а значит
              <br>пора вооружиться знаниями для защиты от них!
            <br><br><b>Узнайте, как защитить себя</b></p>

          <a href="#treatment" class="ringArrowDown" uk-scroll style="display:none"><span>&nbsp;</span> Узнайте подробности</a>
    </div>

</header>
<main>

    <div id="treatment" class="treatment">
        <h2 class="title">Статистика за сезон 2019&nbsp;г.&nbsp;в&nbsp;России</h2>
        <div class="uk-container" style="padding-top: 40px">
            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">
                    <div class="inline3">
                        <div class="container">
                            <div class="statistic">
                                <h2>450 000</h2>
                                <p>клещей сдано на анализ <br> в медицинские учреждения*</p>
                            </div>
                            <div class="statistic">
                                <h2>16 250</h2>
                                <p>человек обратились с жалобами <br> на укусы клещей</p>
                            </div>
                            <div class="statistic">
                                <h2>329</h2>
                                <p>случаев инфицирования клещевыми инфекциями было&nbsp;выявлено</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="comment">* По данным Роспотребнадзора</p>
    </div>

    <div id="factors" class="factors">
        <h2 class="title">Чем опасны клещи для человека?</h2>
        <h3 class="subtitle" style="font-weight: bold">Клещи являются переносчиками возбудителей опасных инфекций.</h3>
        <div class="uk-container">
            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">
                    <div class="inline2">
                        <div>
                            <div><h2 class="klesh">Болезнь Лайма<br> или клещевой боррелиоз</h2>
                                <p>Возбудителями болезни Лайма являются боррелии группы Borrelia burgdorferi sensu lato. В момент укуса со слюной клеща
                                    боррелии проникают в организм человека. Первые симптомы проявляются через 2-30 дней,
                                    в среднем через две недели. На коже, в месте присасывания клеща, образуется
                                    красноватое пятно, с бледным центром, напоминающее кольцо, которое в течение
                                    нескольких дней продолжает увеличиваться – мигрировать. Появляется общее
                                    недомогание, головная боль, боль в мышцах, суставах, повышается температура тела.
                                    Эти симптомы часто принимают за «простуду». Но если своевременно не диагностировать
                                    заболевание и не начать лечение, болезнь может перейти в хроническую форму.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div><h2 class="klesh">Иксодовый клещевой боррелиоз, <br>вызванный Borrelia miyamotoi
                                </h2>
                                <p>Borrelia miyamotoi является причиной  случаев боррелиоза, протекающих  в безэритемной 
                                    форме – на коже не образуется покраснение в месте укуса клеща. Характерно острое начало 
                                    заболевания: повышение температуры до 38-39оС, озноб, головная и мышечная боли. Через 7-10 дней 
                                    после нормализации температуры тела и физического состояния возможен возврат симптомов, в том случае, 
                                    если на первой волне заболевания не проводилось лечение антибиотиками. Возможны осложнения в виде 
                                    пневмонии, поражения сердца, головного мозга и почек.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="inline2">
                         <div>
                            <div><h2 class="klesh">Клещевой <br>вирусный энцефалит
                                </h2>
                                <p>Возбудитель заболевания – вирус клещевого энцефалита, преимущественно поражает
                                    нервную систему. Заражение человека происходит через укус клеща. Симптомы
                                    заболевания появляются через одну-две недели после присасывания клеща, иногда через
                                    30 дней и более. Клещевой вирусный энцефалит начинается с резкого повышения
                                    температуры до 38-40<sup><small>0</small></sup>C, головной боли, болезненности в мышцах шеи, спины, поясницы,
                                    боли в глазных яблоках, усиливающейся при ярком свете. При тяжелых формах
                                    развивается нарушение сознания вплоть до комы, судороги, парезы и параличи.

                                </p>
                            </div>
                        </div>
                     <div>
                            <div><h2 class="klesh">Гранулоцитарный <br>анаплазмоз человека
                                </h2>
                                <p>Возбудителем заболевания является бактерия Anaplasma phagocytophilum. После
                                    присасывания клеща возбудитель со слюной попадает в кожу, затем с током крови
                                    разносится по всему организму. Anaplasma phagocytophilum поражает белые кровяные
                                    клетки – нейтрофилы и вызывает ослабление защитных функций организма человека.
                                    Заболевание проявляется повышением температуры, общим недомоганием, головной болью,
                                    болью в мышцах и суставах. Может развиться гепатит – воспалительное поражение
                                    печени.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="inline2">
                        <div>
                            <div><h2 class="klesh">Моноцитарный <br>эрлихиоз человека
                                </h2>
                                <p>Возбудителями заболевания являются бактерии рода Ehrlichia. Заболевание начинается с
                                    повышения температуры, озноба, головной боли, мышечных и суставных болей. В период
                                    разгара болезнь поражает многие органы, преимущественно печень, селезенку, костный
                                    мозг, лимфатические узлы.

                                </p>
                            </div>
                        </div>

                        <div>
                            <div><h2 class="klesh">Иксодовые клещевые риккетсиозы <br>из группы пятнистых лихорадок
                                </h2>
                                <p>Возбудителями заболеваний является особая группа бактерий – риккетсии. Клинические 
                                    симптомы появляются через 5-10 дней с момента укуса и зависят от вида риккетсий. 
                                    Основные проявления заболевания – повышение температуры, боли в мышцах и суставах, 
                                    головная боль, кожная сыпь.  На коже в месте укуса клеща характерно появление первичного 
                                    аффекта – участка кожи черного цвета.
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>


    <div id="areal" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 80px">Где обитают клещи?</h2>
            <h3 class="subtitle" style="color:black">Клещи распространены повсеместно. Но для диагностики инфекции
                важно, где территориально произошел укус клеща. Так, вероятность заразиться боррелиозом очень высока во
                всех регионах России. А клещевой энцефалит встречается не везде, в некоторых районах он особенно
                распространен – такие территории называются эндемичными по клещевому энцефалиту.
            </h3>
            <h3 class="subtitle" style="color:black; font-weight: bold; margin-bottom: 20px;">Карта районов эндемичных
                по клещевому энцефалиту
            </h3>
            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">
                    <img src="img/pic/map.png" style="float:right; margin-bottom: 80px">
                    <div class="inline2">
                        <div>
                            <div>
                                <p>
                                    <span style="font-size: 20px; font-weight: bold">Когда в России сезон клещей?</span><br><br>
                                    Сезон активности клещей начинается ранней весной при температуре +5+7<sup><small>0</small></sup>C и
                                    заканчивается поздней осенью с наступлением заморозков.<br><br>
                                    Пик заболеваемости клещевыми инфекциями приходится на весенне-летний период.
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="img/pic/season_graf.png" style="float:right">
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <div id="vaccination" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 80px">Вакцинация против клещевого энцефалита</h2>
            <h3 class="subtitle" style="color:black">Среди всех инфекций, предаваемых иксодовыми клещами, вакцинация проводится только против клещевого вирусного энцефалита по&nbsp;эпидемическим показаниям: лицам, которые  проживают или путешествуют в&nbsp;эндемичном по&nbsp;КВЭ регионе. Вакцинация показана и&nbsp;взрослым, и&nbsp;детям. Для детей разработаны специальные детские вакцины против клещевого вирусного энцефалита.
            </h3>
            <div class="vaccination-position">
                <div class="mobile">
                    <p class="vaccination-btn-description">
                        В&nbsp;клиниках CMD проводится вакцинация против клещевого энцефалита для взрослых и&nbsp;детей.
                    </p>
                    <button class="vaccination-btn" target type="button" onclick="openNewWin('https://www.cmd-online.ru/meditsinskie-uslugi/vrachi/?time=Любая+дата&set_filter=y&arrDoctorList_62=4283388740')">
                        Записаться на вакцинацию
                    </button>
                    <p class="vaccination-btn-description">
                        Перед вакцинацией вы можете проконсультироваться с&nbsp;врачом-инфекционистом.
                    </p>
                    <button class="vaccination-btn" target type="button" onclick="openNewWin('https://www.cmd-online.ru/meditsinskie-uslugi/vrachi/?time=Любая+дата&set_filter=y&arrDoctorList_62=4283388740')">
                        Записаться на приём
                    </button>
                </div>
                <div class="vaccination-text-position">
                    <p class="vaccination-text">При первичной иммунизации необходимо двукратное введение вакцины.</p>
                    <ol class="vaccination-list">
                        <li class="vaccination-list-item">
                            Первую вакцину рекомендовано делать <span class="text-decoration">в&nbsp;конце осени</span>, вторую&nbsp;–&nbsp;<span class="text-decoration">через 1-3 месяца</span>. При таком режиме введения, организм сможет подготовиться к&nbsp;весенне-летнему сезону, когда клещи будут максимально активны.
                        </li>
                        <li class="vaccination-list-item">
                            Существует экстренная схема вакцинации, при которой сроки между введением препарата сокращаются <span class="text-decoration">до&nbsp;14&nbsp;дней</span>.
                        </li>
                        <li class="vaccination-list-item">
                            Ревакцинация проводится <span class="text-decoration">через 12&nbsp;месяцев</span> после второй вакцины.
                        </li>
                        <li class="vaccination-list-item">
                            Далее выполняется ревакцинация <span class="text-decoration">каждые 3&nbsp;года</span>.
                        </li>
                    </ol>
                    <p class="vaccination-btn-description">
                        В&nbsp;клиниках CMD проводится вакцинация против клещевого энцефалита для взрослых и&nbsp;детей.
                    </p>
                    <button class="vaccination-btn" target type="button" onclick="openNewWin('https://www.cmd-online.ru/meditsinskie-uslugi/vrachi/?time=Любая+дата&set_filter=y&arrDoctorList_62=4283388740')">
                        Записаться на вакцинацию
                    </button>
                </div>
                <div class="vaccination-img-position">
                    <div class="img-position">
                        <img class="vaccination-img" src="img/img_02.jpg" alt="">
                    </div>
                    <p class="vaccination-btn-description">
                        Перед вакцинацией вы можете проконсультироваться с&nbsp;врачом-инфекционистом.
                    </p>
                    <button class="vaccination-btn" target type="button" onclick="openNewWin('https://www.cmd-online.ru/meditsinskie-uslugi/vrachi/?time=Любая+дата&set_filter=y&arrDoctorList_62=4283388740')">
                        Записаться на приём
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mifs" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 80px">Мифы о клещах</h2>
            <h3 class="subtitle" style="color:black">Существует большое количество мифов и заблуждений, связанных с
                клещами и инфекциями, которые они переносят.
                <br><br>Пройдите небольшой тест, чтобы проверить свои знания.
            </h3>

            <div id="kleshi-app">
                <div class="content test1">
                    <p class="part">Утверждение 1/3</p>
                    <p class="vorpos">Человек сразу же понимает, что его укусил клещ, так как укус очень
                        болезненный.</p>
                    <div class="q">
                        <p class="vybor">Выберите правильный вариант ответа.</p>
                        <div style="margin-top:24px" class="clearfix">
                            <div class="fastButton blueButton">Это правда</div>
                            <div class="fastButton redButton btn2">Это миф</div>
                        </div>
                    </div>
                    <div class="a" style="display: none">
                        <p class="vorpos" style="color:#f8485e; margin-top: 32px">Это миф</p>
                        <div class="comment" style="margin-top:24px">
                            Часто укус клеща остается незамеченным. В слюне клеща содержатся анестезирующие вещества, которые обезболивают место укуса.
                        </div>
                        <div class="nextTest">Следующее утверждение</div>
                    </div>
                </div>
                <div class="content test2" style="display:none">
                    <p class="part">Утверждение 2/3</p>
                    <p class="vorpos">В сезон активности клещей нужно быть особенно внимательными при прогулках вблизи деревьев, так как клещи прыгают на человека или животного с высоты.</p>
                    <div class="q">
                        <p class="vybor">Выберите правильный вариант ответа.</p>
                        <div style="margin-top:24px" class="clearfix">
                            <div class="fastButton blueButton">Это правда</div>
                            <div class="fastButton redButton btn2">Это миф</div>
                        </div>
                    </div>
                    <div class="a" style="display: none">
                        <p class="vorpos" style="color:#f8485e; margin-top: 32px">Это миф</p>
                        <div class="comment" style="margin-top:24px">
                            Вопреки распространенным мифам клещи не прыгают на свою жертву с кустов и деревьев. Клещи скрываются в траве, цветах, невысоких кустарниках и цепляются за одежду человека.
                        </div>
                        <div class="nextTest">Следующее утверждение</div>
                    </div>
                </div>
                <div class="content test3" style="display:none">
                    <p class="part">Утверждение 3/3</p>
                    <p class="vorpos">Чтобы безопасно извлечь клеща, нужно намазать его маслом или жирным кремом.</p>
                    <div class="q">
                        <p class="vybor">Выберите правильный вариант ответа.</p>
                        <div style="margin-top:24px" class="clearfix">
                            <div class="fastButton blueButton">Это правда</div>
                            <div class="fastButton redButton btn2">Это миф</div>
                        </div>
                    </div>
                    <div class="a" style="display: none">
                        <p class="vorpos" style="color:#f8485e; margin-top: 32px">Это миф</p>
                        <div class="comment" style="margin-top:24px">
                            На клеща нельзя наносить масло, кремы и едкие жидкости, так как это повышает возможный риск передачи инфекции.
                        </div>
                        <div class="nextTest">Начать заново</div>
                    </div>
                </div>
            </div>

            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">
                    <div class="inline2">
                        <div>

                        </div>
                        <div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <div id="zashita" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 80px">Как защитить себя от клещей?</h2>
            <h3 class="subtitle" style="color:black">Важно помнить, что клещи могут обитать не только в лесах, но и в
                парковых зонах в пределах города.
                Поэтому важно соблюдать основные правила защиты от клещей.
            </h3>

            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">
                    <div class="inline2">
                        <div>
                            <ul>
                                <li>Голову закройте головным убором или капюшоном.</li>
                                <li>Наденьте рубашку с длинными рукавами, манжетами и воротником. Рубашку заправьте в
                                    брюки.
                                </li>
                                <li>Брюки заправьте в сапоги или другую обувь.</li>
                                <li>Выбирайте обувь, которая полностью закрывает тыл стопы и лодыжки.</li>
                                <li>На одежде из светлой и однотонной ткани проще заметить клеща.</li>
                                <li>Используйте специальные средства защиты – репелленты и акарицидные препараты.</li>
                                <li>Каждые 15-20 минут осматривайте себя и спутников: одежду, открытые участки тела,
                                    волосистую часть головы.
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img src="img/pic/img_01.jpg" class="kak_zashitit_img">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="clearfix" style="height: 40px"></div>
    </div>


    <div id="ctodelat" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 60px">Что делать, если вы обнаружили на себе клеща?</h2>
            <h3 class="subtitle" style="color:black">Удалите его как можно быстрее! Обратитесь в травмотологический
                пункт или действуйте самостоятельно.
            </h3>

            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">

                    <div class="inline3 inline3a" style="float: right">
                        <div class="containerHorizontal">
                            <div class="iconHolder factor_1"><span></span>
                                Не используйте масло, крем, вазелин, лак для ногтей и другие жидкости для обработки
                                присосавшегося клеща.
                            </div>
                            <div class="iconHolder factor_2"><span></span>
                                <p>Для удаления клеща нужно использовать ручку-лассо, клещ-отвертку или прочную нить. Не
                                    трогайте клеща голыми руками.</p>
                            </div>
                            <div class="iconHolder factor_3"><span></span>
                                <p>Аккуратно удалите клеща, вращая его вокруг своей оси. Если вы используете крепкую
                                    нить, завяжите её вокруг хоботка клеща. Старайтесь не раздавить клеща и не оторвать
                                    головку от туловища.</p>
                            </div>
                            <div class="iconHolder factor_4"><span></span>
                                <p>После удаления обработайте рану антисептиком (например, раствором йода 5%).</p>
                            </div>
                            <div class="iconHolder factor_5"><span></span>
                                <p>Поместите клеща в прозрачную, плотно закрывающуюся емкость. В одной емкости должно
                                    быть не более 5 особей. Нельзя помещать в одну емкость клещей, снятых с нескольких
                                    человек.</p>
                            </div>
                            <div class="iconHolder factor_6"><span></span>
                                <p>Как можно быстрее доставьте клеща для исследования в медицинский офис CMD.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix" style="height: 80px"></div>
    </div>


    <div id="table1" class="bottomBordered">
        <div class="uk-container">
            <h2 class="title" style="margin-top: 80px">На какое исследование нужно сдавать клеща?</h2>
            <h3 class="subtitle" style="color:black">Желательно сохранить клеща для проведения исследования в
                максимально неповрежденном состоянии. Оптимально исследовать клеща в первые 24 часа с момента снятия,
                хранить при температуре +4 +8<sup><small>0</small></sup>С.
            </h3>

            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">

                    <div>

                        <div class="only-mobile">
                            <? foreach (DATA_TABLE_2 as $item) : ?>
                                <div>
                                    <div class="td td1" style="width: 90%; float: left">
                                        <p style="font-size: 16px; font-weight: bold;"><?= $item['name'] ?></p>

                                    </div>

                                    <p style="float: left; font-size:16px; margin: 8px 0 0 0; color: #999">Код: <span
                                                style="color: #00a9e0"><?= $item['code'] ?></span></p>
                                    <input class="uk-hidden" type="radio" id="q1-1" name="q1">
                                    <label class="btn btn--dark uk-margin-medium-right" for="q1-1"
                                           style="width: 30%; float: right; min-width: 125px; cursor: pointer; margin-bottom: 16px; margin-right: 0px !important;"
                                           uk-toggle="target: .test1; cls: answer-false answered"
                                           onclick="clickOrder(this, '<?= $item['code'] ?>', false)"><p
                                                style="line-height: 16px; font-size: 16px; font-weight: normal; padding:10px">
                                            Заказать</p></label>

                                    <div class="clearfix" style="border-bottom: 1px solid #ddd; margin: 10px"></div>

                                </div>
                            <? endforeach; ?>
                        </div>

                        <div class=" no-mobile">
                            <div class="table-row analiz2">
                                <div>
                                    <div class="th td2">Исследование</div>
                                    <div class="th td1" style="color: #000">Код</div>
                                    <div class="th td5"></div>
                                </div>
                                <? foreach (DATA_TABLE_2 as $item) : ?>
                                    <div>
                                        <div class="td td2w"><?= $item['name'] ?></div>
                                        <div class="td td1"><?= $item['code'] ?></div>
                                        <div class="td td3"><input class="uk-hidden" type="radio" id="q1-1" name="q1">
                                            <label class="btn btn--dark uk-margin-medium-right" for="q1-1"
                                                   style="width: 100%; min-width: 125px; cursor: pointer"
                                                   uk-toggle="target: .test1; cls: answer-false answered"
                                                   onclick="clickOrder(this, '<?= $item['code'] ?>', false)"><p
                                                        style="line-height: 38px">Заказать</p></label>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="uk-container">
            <h2 class="title26" style="margin-top: 80px">Что делать, если не удалось сдать клеща на анализ?</h2>
            <h3 class="subtitle" style="color:black">Обратитесь к врачу для назначения обследования. Установить диагноз
                помогут лабораторные исследования.
            </h3>

            <div class="treatment__wrapper uk-flex uk-flex-column@s">
                <div class="treatment__texts uk-margin-large-right@l uk-margin-medium-bottom@s">

                    <div>

                        <div class="only-mobile">
                            <? foreach (DATA_TABLE_3 as $item) : ?>
                                <div>
                                    <div class="td td1" style="width: 90%; float: left">
                                        <p style="font-size: 16px; font-weight: bold;"><?= $item['name'] ?></p>

                                    </div>

                                    <p style="float: left; font-size:16px; margin: 8px 0 0 0; color: #999">Код: <span
                                                style="color: #00a9e0"><?= $item['code'] ?></span></p>
                                    <input class="uk-hidden" type="radio" id="q1-1" name="q1">
                                    <label class="btn btn--dark uk-margin-medium-right" for="q1-1"
                                           style="width: 30%; float: right; min-width: 125px; cursor: pointer; margin-bottom: 16px; margin-right: 0px !important;"
                                           uk-toggle="target: .test1; cls: answer-false answered"
                                           onclick="clickOrder(this, '<?= $item['code'] ?>', false)"><p
                                                style="line-height: 16px; font-size: 16px; font-weight: normal; padding:10px">
                                            Заказать</p></label>

                                    <div class="clearfix" style="border-bottom: 1px solid #ddd; margin: 10px"></div>

                                </div>
                            <? endforeach; ?>
                        </div>

                        <div class=" no-mobile">
                            <div class="table-row analiz2">
                                <div>
                                    <div class="th td2">Исследование</div>
                                    <div class="th td1" style="color: #000">Код</div>
                                    <div class="th td5"></div>
                                </div>
                                <? foreach (DATA_TABLE_3 as $item) : ?>
                                    <div>
                                        <div class="td td2w"><?= $item['name'] ?></div>
                                        <div class="td td1"><?= $item['code'] ?></div>
                                        <div class="td td3"><input class="uk-hidden" type="radio" id="q1-1" name="q1">
                                            <label class="btn btn--dark uk-margin-medium-right" for="q1-1"
                                                   style="width: 100%; min-width: 125px; cursor: pointer"
                                                   uk-toggle="target: .test1; cls: answer-false answered"
                                                   onclick="clickOrder(this, '<?= $item['code'] ?>', false)"><p
                                                        style="line-height: 38px">Заказать</p></label>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <h3 class="subtitle" style="margin-top:40px"><strong>ВАЖНО!</strong> <span style="color:black">На ранних стадиях инфицирования специфические иммуноглобулины могут отсутствовать в сыворотке крови пациента. Возможно, потребуется повторное исследование с интервалом в 10-14 дней.</span>
        </div>

        <div class="clearfix" style="height: 80px"></div>
    </div>


    <div id="prevention1" class="prevention">
        <div id="geo" class="geo">
            <div class="uk-container">
                <h2 class="title">Где пройти обследование</h2>
                <? include $_SERVER["DOCUMENT_ROOT"] . '/local/include/insert_maps_offices.php'; ?>
            </div>
        </div>
    </div>

</main>


<footer class="footer">
    <div class="uk-container">
        <div class="footer__container uk-flex uk-flex-column-reverse@s uk-flex-between uk-flex-middle">
            <span>© <?= date("Y"); ?> ФБУН Центральный НИИ Эпидемиологии Роспотребнадзора</span>
            <ul class="footer__socials uk-flex">
                <li>
                    <a href="https://www.facebook.com/cmd.online.social" target="_blank">
                        <img src="img/pic/logo/facebook-logo.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/cmd.online" target="_blank">
                        <img src="img/pic/logo/vk-logo.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://ok.ru/cmdonline" target="_blank">
                        <img src="img/pic/logo/ok-logo.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/cmd_lab/" target="_blank">
                        <img src="img/pic/logo/instagram-logo.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCJLzXIczpWCx7Gelbmc3sAw" target="_blank">
                        <img src="img/pic/logo/youtube-logo.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="js/scripts.min.js"></script>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<script src="js/scripts.min.js?v3"></script>

<style>
    .chisel-front {
        position: fixed;
        background: rgba(248, 248, 248, 0.96);
        text-transform: uppercase;
        text-align: center;
        font-size: 20px;
        font-size: 1.54vw;
        z-index: 3;
        bottom: 0;
        color: #d2d2d2;
        width: 100%;
        line-height: 1;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.03);
        transform: scaleY(1.5);
        transform-origin: bottom;
    }

    .table-row {
        display: table;
        width: 100%;
        height: 100%;
    }

    .table-row > div {
        display: table-row;
    }

    .table-row > div > div {
        display: table-cell;
        vertical-align: middle;
        font-weight: bold;
        font-size: 16px;
    }

</style>
<br>
<div class="chisel-front">
    <div class="table-row">
        <div>
            <div>
                О возможных противопоказаниях необходимо проконсультироваться со специалистом
            </div>
        </div>
    </div>
</div>

<div class="fancybox-stage popup-fade">
    <div class="fancybox-slide fancybox-slide--html">
            <div class="popup">
                <button class="popup-close"></button>
                <div class="modal__caption-position">
                    <h4 class="modal__caption">Ваш город</h4>
                </div>
                <form class="search-modal">
                    <input class="input-modal" type="text">
                    <button class="btn input-btn" type="submit"></button>
                </form>
                <div class="city-list">
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">А</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Алексин</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ангарск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Архангельск</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Б</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Баксан</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Балашиха</span>                                                </span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Боброво</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Брянск</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">В</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Видное</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Владикавказ</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Волгодонск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Воскресенск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Вязьма</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Д</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Дзержинский</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Дмитров</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Долгопрудный</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Домодедово</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Дрожжино</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Е</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ессентуки</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ессентукская</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Ж</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Жуковский</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">З</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Звенигород</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">И</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ивантеевка</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Истра</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">К</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Калуга</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Кашира</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Керчь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Киржач</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Клин</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Коломна</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Королёв</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Котельники</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Красково</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Красногорск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Краснознаменск</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Л</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Лобня</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Лопатино</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Луховицы</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Люберцы</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">М</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Малино</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Махачкала</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Мисайлово</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Москва</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Мурманск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Мытищи</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Н</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Назрань</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Нальчик</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Наро-Фоминск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Нахабино</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Невинномысск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Нижневартовск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Новомосковск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Новый Уренгой</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ногинск</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">О</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Одинцово</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Омск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Орел</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Оренбург</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Орск</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">П</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Печора</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Подольск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Путилково</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Пушкино</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Р</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Раменское</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Реутов</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Рязань</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">С</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Санкт-Петербург</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Саранск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Саратов</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Свердловский</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Севастополь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Сергиев Посад</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Серпухов</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Симферополь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Смоленск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Солнечногорск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ставрополь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Старая Купавна</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ступино</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Т</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Тверь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Терек</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Тула</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">У</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Углич</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Удельная</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Улан-Удэ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Ф</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Фрязино</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Х</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Хасавюрт</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Химки</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Ч</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Черноголовка</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Черноморское</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Чехов</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Щ</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Щелково</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Э</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Электросталь</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Электроугли</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="city-list__item">
                        <div class="city-list__item-wrap">
                            <div class="city-picker__item-letter">Я</div>
                            <ul class="list-reset city-picker__item-list">
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Якутск</span>
                                </li>
                                <li>
                                    <span class="city-picker__item-val" tabindex="0">Ялта</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>		
    </div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script src="js/scripts.min.js"></script>
<? require($_SERVER['DOCUMENT_ROOT'] . '/local/include/widgets.php'); ?>
<script type="text/javascript" src="/local/widget/basketService.js?<?= time(); ?>"></script>
<script type="text/javascript" src="/local/widget/basketinfolandingblue/basketinfolanding.js"></script>

</body>
</html>