<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://semsa.manaus.am.gov.br/wp-content/themes/semsa/dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <title>{{ config('app.name') }} - @yield('title') </title>

</head>
<body>
    <div id="redes-sociais">
        <div class="container">
            <div class="row">
                <div id="widget-acessibilidade" class="hidden-xs hidden-sm hidden-md col-lg-1">
                    <!-- a11y toolbar widget -->
                    <div class="a11y-responsive   ltr  right a11y-toolbar-widget">
                        <ul>
                            <li>
                                <button type="button" class="a11y-toggle-contrast toggle-contrast"
                                    id="is_normal_contrast" aria-pressed="false">
                                    <span class="offscreen">Alternar Alto Contraste</span><span
                                        class="aticon aticon-adjust" aria-hidden="true">
                                    </span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="a11y-toggle-fontsize toggle-fontsize"
                                    id="is_normal_fontsize" aria-pressed="false">
                                    <span class="offscreen">Alternar Tamanho da Fonte</span>
                                    <span class="aticon aticon-font" aria-hidden="true"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- // a11y toolbar widget -->
                </div>
                <div class="hidden-xs hidden-sm hidden-md col-lg-4 menu-topo-esquerda">
                    <ul class="menu-superior">
                        <li id="menu-item-20669"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20669">
                            <a href="http://transparencia.manaus.am.gov.br/">Transparência</a>
                        </li>
                        <li id="menu-item-20670"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20670">
                            <a href="http://transparencia.manaus.am.gov.br/transparencia/v2/#/lai">
                                Acesso à Informação
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="itens-redes" class="col-xs-12 col-md-offset-8 col-md-3 col-lg-offset-0 col-lg-7">
                    <ul>
                        <li><a href="https://www.facebook.com/semsamanaus" target="_blank" title="Facebook"
                                class="icone-facebook">Facebook</a></li>
                        <li><a href="https://twitter.com/PrefManaus" target="_blank" title="Twitter"
                                class="icone-twitter">Twitter</a></li>
                        <li><a href="https://www.youtube.com/user/semcommanaus" target="_blank" title="Youtube"
                                class="icone-youtube">Youtube</a></li>
                        <li><a href="https://www.instagram.com/semsamanaus/" target="_blank" title="Instagram"
                                class="icone-instagram">Instagram</a></li>
                        <li><a href="https://www.flickr.com/people/186841718@N06/" target="_blank" title="Flickr"
                                class="icone-flickr">Flickr</a></li>
                        <li><a href="https://www.linkedin.com/company/secretaria-municipal-de-sa%C3%BAde-manaus"
                                target="_blank" title="Linkedin" class="icone-linkedin">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo">
        <img src="https://semsa.manaus.am.gov.br/wp-content/themes/semsa/dist/imagens/2021/logo-pmm-2021.png" class="img-responsive">
    </div>

    <div class="container">
        @yield('conteudo')
    </div>


    <footer class="justify-content-center">
        <div class="footer-bg fixed-bottom" style="background: url('https://semsa.manaus.am.gov.br/wp-content/themes/semsa/dist/imagens/2021/bg-rodape.png') repeat-x bottom left; ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding:5px">
                        <div style="text-align: center; font-family: 'Branding SF', Helvetica, Arial, sans-serif; font-size: 0.9em; margin-top: -46px;">
                            <img src="https://semsa.manaus.am.gov.br/wp-content/themes/semsa/dist/imagens/2021/logo-pmm-2021-rodape.png"><br>
                            <span>@ 2024 - Secretaria Municipal Saúde <br>Todos os direitos reservados.<br></span>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
            <div class="footer-infos">
                Avenida Mário Ypiranga Monteiro Nº 1695 Adrianópolis - <a href="https://goo.gl/maps/4bry4zJQza72" target="_blank" style="color:#ffff">Mapa</a> - CEP:  69.057-002<br>				</div>
        </div>
    </footer>
</body>

</html>
