<?php

include 'conf/conf.cfg.php';

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="<?= BOOTSTRAP_URL ?>/css/bootstrap-combined.min.css"  type="text/css" rel="stylesheet"  media="screen, print, projection" >
        <link href="<?= CSS_BASE_URL ?>/style<?= VERSION ?>.css" rel="stylesheet" type="text/css" media="screen, print, projection"  >
        <title>STMnet</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row-fluid">
                    <div class="span2 center">
                        <img src="img/symbol_stmnet.svg" class="logo" />
                    </div>
                    <div class="span5">
                        <h1 class="top center">
                            <span class="sg1">S</span><span class="sg2">T</span><span class="sg3">M</span><span class="sg4">net</span>
                        </h1>
                        <div class="topbar">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                        <h2 class="top center">
                            Sínodo do Triângulo Mineiro <i>network</i>
                        </h2>
                    </div>
                    <div class="span5">
                        <ul class="top">
                            <li id="m1" class="active">
                                <a href="" title="">
                                    Mapa
                                </a>
                            </li>
                            <li id="m2">
                                <a href="" title="">
                                    Eventos
                                </a>
                            </li>
                            <li id="m3">
                                <a href="" title="">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="content">
            <section class="mapa">
                <div class="container">
                    <div>
                        <div class="map-area map-total"></div>
                        <div class="map-area map-mg"></div>
                        <div class="map-area map-go"></div>
                        <div class="map-area map-mg-z"></div>
                        <div class="map-area map-go-z"></div>
                        <div class="zoom">
                            <div class="">
                                <div class="z1 active"></div>
                            </div>
                            <div class="">
                                <div class="z2"></div>
                            </div>
                            <div class="">
                                <div class="z3"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <ul class="map-list">
                            <li>
                                <div class="first">
                                    Brasil
                                </div>
                            </li>
                        </ul>
                        <ul class="map-list-opts center"></ul>
                        <div class="infos chide">
                            <div class="info-box">
                                <h1 id="ib-ignome" class="center"></h1>
                                <div class="row-fluid ib-metas">
                                    <div class="span2">
                                        <div class="ig-logo center">
                                            <img src="img/logo_ipb.svg" />
                                        </div>
                                    </div>
                                    <div class="span10">
                                        <div class="ig-metas">
                                            <p>
                                                <img src="img/place.svg"> 
                                                <span  id="ib-igplace"></span>
                                            </p>
                                            <p>
                                                <img src="img/phone.svg"> 
                                                <span  id="ib-igphone"></span>
                                            </p>
                                            <p>&nbsp;</p>
                                            <p class="right">
                                                <a id="ib-igsite" href="" title="Site" class="ig-links" target="_blank">
                                                    <img src="img/internet.svg"> 
                                                </a>
                                                <a id="ib-igface" href="" title="Facebook" class="ig-links" target="_blank">
                                                    <img src="img/facebook.svg"> 
                                                </a>
                                                <a id="ib-igtwt" href="" title="Twitter" class="ig-links" target="_blank">
                                                    <img src="img/twitter.svg"> 
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="eventos">
                <hr>
                <div class="container">
                    <div class="events-area">
                        <div class="evento">
                            <div class="row-fluid">
                                <div class="span1 center">
                                    <img src="img/calendar.svg" >
                                </div>
                                <div class="span11">
                                    <h1 class="center">
                                        Evento XXXX
                                    </h1>
                                    <hr>
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <p>
                                                <img src="img/date.svg" class="evt-meta-img" > XX/XX/XX 
                                            </p>
                                        </div>
                                        <div class="span3">
                                            <p>
                                                <img src="img/time.svg" class="evt-meta-img" > XX:XX
                                            </p>
                                        </div>
                                        <div class="span6">
                                            <p>
                                                <img src="img/place_b.svg" class="evt-meta-img" >
                                                Igreja dslflasçjfaçfjsaçlfjsçlj
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="center">
                                        <a href="" class="evt-lnk" target="_blank">
                                            www.asdfsaf.sfasdfa.ss
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="evento">
                            <div class="row-fluid">
                                <div class="span1 center">
                                    <img src="img/calendar.svg" >
                                </div>
                                <div class="span11">
                                    <h1 class="center">
                                        Evento XXXX
                                    </h1>
                                    <hr>
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <p>
                                                <img src="img/date.svg" class="evt-meta-img" > XX/XX/XX 
                                            </p>
                                        </div>
                                        <div class="span3">
                                            <p>
                                                <img src="img/time.svg" class="evt-meta-img" > XX:XX
                                            </p>
                                        </div>
                                        <div class="span6">
                                            <p>
                                                <img src="img/place_b.svg" class="evt-meta-img" >
                                                Igreja dslflasçjfaçfjsaçlfjsçlj
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="center">
                                        <a href="" class="evt-lnk" target="_blank">
                                            www.asdfsaf.sfasdfa.ss
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="evento">
                            <div class="row-fluid">
                                <div class="span1 center">
                                    <img src="img/calendar.svg" >
                                </div>
                                <div class="span11">
                                    <h1 class="center">
                                        Evento XXXX
                                    </h1>
                                    <hr>
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <p>
                                                <img src="img/date.svg" class="evt-meta-img" > XX/XX/XX 
                                            </p>
                                        </div>
                                        <div class="span3">
                                            <p>
                                                <img src="img/time.svg" class="evt-meta-img" > XX:XX
                                            </p>
                                        </div>
                                        <div class="span6">
                                            <p>
                                                <img src="img/place_b.svg" class="evt-meta-img" >
                                                Igreja dslflasçjfaçfjsaçlfjsçlj
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="center">
                                        <a href="" class="evt-lnk" target="_blank">
                                            www.asdfsaf.sfasdfa.ss
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contato">
                <div class="container">
                    <div class="contact">
                        <div class="row-fluid">
                            <div class="span2">
                                <img src="img/rb.jpg" class="img-circle" >
                            </div>
                            <div class="span10 cnt-meta">
                                <h1>
                                    Rev. Roberto Brasileiro
                                </h1>
                                <p>
                                    Presidente do Supremo Concílio
                                </p>
                                <p>
                                    <img src="img/phone_b.svg" > 55 5555 5555
                                </p>
                                <p>
                                    <img src="img/email.svg" > email@email.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="row-fluid">
                            <div class="span10 cnt-meta">
                                <h1 class="right">
                                    Rev. Augustus Nicodemus
                                </h1>
                                <p class="right">
                                    Chanceler do Mackenzie
                                </p>
                                <p class="right">
                                    55 5555 5555
                                    <img src="img/phone_b.svg" >
                                </p>
                                <p class="right">
                                    email@email.com
                                    <img src="img/email.svg" >
                                </p>
                            </div>
                            <div class="span2">
                                <img src="img/an.jpeg" class="img-circle" >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <footer>
            <p class="center">
                &COPY;
            </p>
            <p class="center">
                Todos os direitos reservados - Sínodo do Triângulo Mineiro
            </p>
            <div class="nibblelab">
                <a href="http://www.nibblelab.com" title="Desenvolvido por Nibblelab Tecnologia" target="_blank">
                    <img src="img/nibblelab.svg" >
                </a>
            </div>
        </footer>
        
        <div class="back">
            <a href="" title="Topo!"></a>
        </div>
        
        <script type="text/javascript" src="<?= JQUERY_URL ?>/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?= JQUERY_URL ?>/jquery-migrate-1.1.1.min.js"></script>
        <script type="text/javascript" src="<?= BOOTSTRAP_URL ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript"> var base_url = '<?= URL_BASE ?>'; </script>
        <script type="text/javascript" src="<?= JS_BASE_URL ?>/site<?= VERSION ?>.js"></script>
    </body>
</html>
