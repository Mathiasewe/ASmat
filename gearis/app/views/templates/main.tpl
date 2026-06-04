<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
    <script type="text/javascript" src="{$conf->app_url}/assets/js/functions.js"></script>
</head>

<body class="is-preload">

    <div id="header">

        <div class="top">

            <nav id="nav">
                <ul>

                    {if \core\RoleUtils::inRole('administrator')}
                    <li>
                        <a href="{$conf->action_url}adminUsersView" id="admin-link">
                            <span class="icon solid fa-sync">Zmiana roli</span>
                        </a>
                    </li>
                    <li>
                        <a href="{$conf->action_url}logout">
                            <span class="icon solid fa-sign-out-alt">Wyloguj</span>
                        </a>
                    </li>
                    {elseif \core\RoleUtils::inRole('kierownik')}
                    <li><a href="{$conf->action_url}manageWorkers"><span class="icon solid fa-user-tie">Zarządzaj
                                pracownikami</span></a></li>
                    <li><a href="{$conf->action_url}gearList"><span class="icon solid fa-tools">Zarządzaj
                                sprzętem</span></a></li>
                    <li><a href="{$conf->action_url}reports"><span class="icon solid fa-chart-line">Raporty</span></a>
                    </li>
                    <li><a href="{$conf->action_url}logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>

                    {elseif \core\RoleUtils::inRole('pracownik')}
                    <li><a href="{$conf->action_url}manageReservations"><span class="icon solid fa-tasks">Obsługa
                                rezerwacji</span></a></li>
                    <li><a href="{$conf->action_url}logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>

                    {elseif \core\RoleUtils::inRole('klient')}
                    <li><a href="{$conf->action_url}homeView" id="top-link"><span class="icon solid fa-home">Strona
                                główna</span></a></li>
                    <li><a href="{$conf->action_url}gearList" id="portfolio-link"><span
                                class="icon solid fa-th">Sprzęt</span></a>
                    </li>
                    <li><a href="{$conf->action_url}reservations" id="portfolio-link"><span
                                class="icon solid fa-th">Moje rezerwacje</span></a>
                    </li>
                    <li><a href="{$conf->action_url}logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>
                    <li><a href="{$conf->action_url}contactView" id="contact-link"><span
                                class="icon solid fa-envelope">Kontakt</span></a>
                    </li>
                    {else}

                    <li><a href="{$conf->action_url}homeView" id="top-link"><span class="icon solid fa-home">Strona
                                główna</span></a></li>
                    <li><a href="{$conf->action_url}gearList" id="portfolio-link"><span
                                class="icon solid fa-th">Sprzęt</span></a>
                    </li>
                    {if count($conf->roles) == 0}
                    <li><a href="{$conf->action_url}loginView" class="..."><span
                                class="icon solid fa-user">Logowanie</span></a></li>
                    <li><a href="{$conf->action_url}registerView"><span
                                class="icon solid fa-user-plus">Rejestracja</span></a></li>
                    {else}
                    <li><a href="{$conf->action_url}logout"><span class="icon solid fa-sign-out-alt">Wyloguj</span></a>
                    </li>
                    {/if}
                    <li><a href="{$conf->action_url}contactView" id="contact-link"><span
                                class="icon solid fa-envelope">Kontakt</span></a>
                    </li>
                    {/if}
                </ul>
            </nav>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <section id="top" class="one dark cover"
            style="background-image: url('{$conf->app_url}/images/tlo.jpg'); background-size: cover; background-position: center;">

            <div class="container">

                <div id="content">
                    <div class="container messages-container">
                        {if $msgs->isMessage()}
                        {foreach $msgs->getMessages() as $msg}
                        <div class="alert {if $msg->isInfo()}alert-success{/if} 
                             {if $msg->isWarning()}alert-warning{/if} 
                             {if $msg->isError()}alert-danger{/if}" role="alert">
                            {$msg->text}
                        </div>
                        {/foreach}
                        {/if}
                    </div>
                    {block name=content}
                    {/block}
                </div>

            </div>
        </section>

    </div>

    <!-- Footer -->
    <div id="footer">

        <footer>Stopka strony Gearis 2026</footer>
        <!-- Copyright 
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
        -->
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<script>
    // Czekamy 5 sekund (5000 ms) przed rozpoczęciem znikania
    setTimeout(function () {
        let alerts = document.querySelectorAll('.alert');
        alerts.forEach(function (alert) {
            // Płynne przejście przezroczystości i wysokości
            alert.style.transition = "opacity 0.6s ease, margin 0.6s ease, padding 0.6s ease, height 0.6s ease";
            alert.style.opacity = "0";
            alert.style.margin = "0";
            alert.style.padding = "0";

            // Całkowite usunięcie z widoku po zakończeniu animacji
            setTimeout(function () {
                alert.style.display = "none";
            }, 600);
        });
    }, 5000);
</script>

</html>