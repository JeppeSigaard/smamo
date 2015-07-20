<section class="form-cta">
    <article class="inner read-width">
        <h3>Kontakt os nu for en uforpligtende vurdering</h3>
        <form class="left sheeted-form">
            <?php wp_nonce_field('cta_form_nonce','cta_form_nonce'); ?>
            <div class="split">
                <div>
                    <input type="text" name="fname">
                    <label>Dit navn</label>
                </div>
                <div>
                    <input type="text" name="fname">
                    <label>Din virksomhed</label>
                </div>
            </div>
            <div class="split">
                <div>
                    <input type="email" name="email">
                    <label>Din email</label>
                </div>
                <div>
                    <input type="tel" name="tel">
                    <label>Dit telefonnummer</label>
                </div>
            </div>
            <div>
                <textarea rows="2"></textarea>
                <label>Hvad kan vi gøre for dig?</label>
            </div>
            <div class="">
                <a class="button" title="send" href="#">Send</a>
                <a class="button outline" title="send" href="mailto:form@smartmonkey.dk">Skriv en e-mail i stedet</a>
            </div>
        </form>
    </article>
</section>