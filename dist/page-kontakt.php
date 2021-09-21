<?php 
    get_header();
?>

    <div class="contact">
        <div class="contact__data">
            <h2 class="contact__data__h2">Dane Kontaktowe:</h2>
            <p class="contact__data__p">
                Paulina Chajewska                                              
            </p>
            <p class="contact__data__p">
                Resin Zone - NIP 7772244929                                                 
            </p>
            <p class="contact__data__p">
                Witoldzin 24a, 
                64-514 Pamiątkowo                                               
            </p>
            <p class="contact__data__p">
                Tel. 605 360 193                                               
            </p>
            <p class="contact__data__p">
                Konto Bankowe: 81 1020 4027 0000 1302 1371 8699                                            
            </p>


            <h3 class="contact__data__h3">Godziny Otwarcia:</h3>
            <p class="contact__data__p">
                Od poniedziałku do piątku: 9:00 - 17:00                                              
            </p>
        
        </div>

        <div class="contact__form">
            <form class="contact__form__formularz" action="https://formsubmit.co/babciajanka5@wp.pl" method="POST"> 
                <label class="contact__form__formularz__label" for="name">
                    Imię i nazwisko: *
                </label>
                <input class="contact__form__formularz__input" type="text" name="name" required>

                <label class="contact__form__formularz__label" for="phone">
                    Telefon: *
                </label>
                <input class="contact__form__formularz__input" type="tel" name="phone" required>

                <label class="contact__form__formularz__label" for="email">
                    E-mail (opcjonalnie):
                </label>
                <input class="contact__form__formularz__input" type="email" name="email">

                <label class="contact__form__formularz__label" for="txt">
                    Wiadomość: *
                </label>
                <textarea class="contact__form__formularz__text-area" name="txt" required></textarea>

                <button class="contact__form__formularz__submit" type="submit">Wyślij</button>
            </form>
        </div>

        <div class="contact__map">
            <iframe class="contact__map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2400.755437789644!2d16.64052342041469!3d52.551044691127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47043e22ef850993%3A0xe78da65fb165584a!2sWitoldzin%2024A%2C%2064-500%20Witoldzin!5e1!3m2!1spl!2spl!4v1628543876649!5m2!1spl!2spl"  allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

<?php
    get_footer(); 
?>