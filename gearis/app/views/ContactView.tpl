{extends file="main.tpl"}

{block name=content}        
<section id="contact" class="four contact-container">
    <div class="container">

        <header>
            <h2>Kontakt</h2>


        <p>Masz pytania dotyczące sprzętu lub rezerwacji? Napisz do nas! <br>
           Odpowiemy na Twoją wiadomość tak szybko, jak to możliwe.</p>
        </header>
        <form method="post" action="{$conf->action_url}contactSend">
            <div class="row gtr-50">
                <div class="col-6 col-12-mobile">
                    <input type="text" name="name" placeholder="Twoje Imię" required />
                </div>
                <div class="col-6 col-12-mobile">
                    <input type="email" name="email" placeholder="Adres E-mail" required />
                </div>
                <div class="col-12">
                    <textarea name="message" placeholder="Treść wiadomości" rows="6" required></textarea>
                </div>
                <div class="col-12 auth-buttons">
                    <input type="submit" value="Wyślij wiadomość" class="button primary" />
                </div>
            </div>
        </form>

    </div>
</section>
{/block}