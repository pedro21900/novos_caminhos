<article style="
    padding: 5px 20px;
    background: #eeeeee;
    -webkit-border-radius: 4px;
    -noz-border-radius: 4px;
    border-radius:4px;
">
    <h1><?= $profile->name; ?></h1>
    <p>
        Trabalha no <?= $profile->company; ?><br>
        <a title="Enviar E-mail" href="mailto;<?= $profile->email; ?>">Enviar e-mail
        </a>
    </p>
</article>