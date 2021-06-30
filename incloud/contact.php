
<section class="contact" id="contact">
    <div class="section-title">
        <h3>Nous contacter</h3>
        <p>Descripton</p>
    </div>
    <form class="formulaire" action="message.php" method="post">
        <div>
            <input class="input-box" type="text" name="nom" id="" placeholder="Votre nom">
            <input class="input-box" type="text" name="prenom" id=""placeholder="Votre prénom">
        </div>
        <div>
            <input class="input" type="mail" name="mail" id="" placeholder="Votre E-mail">
        </div>
        <div>
            <input class="input" type="text" name="sujet" id="" placeholder="Sujet">
        </div>
        <div>
            <textarea class="message" name="message" id="" cols="40" rows="10" placeholder="message"></textarea>
        </div>
        <div>
            <button class="btn" name="mailForm" >Soumettre </button>
        </div>
    </form>

</section>