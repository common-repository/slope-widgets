<?php /* Slope Welcome */ ?>

<form id="slope-welcome-form" action="#">
    <div class="slope-setting-container" id="slope-widget-container">

        <h1>
            <?= esc_html__("Benvenuto in Slope!", "slope-widgets"); ?>
        </h1>
        <p style="font-size: 16px; margin-bottom: 10px;">
            <?= esc_html__("Ciao e grazie per aver scaricato il nostro plugin.", "slope-widgets"); ?>
            <br>
            <?= esc_html__('Una volta attivato il plugin vorremmo tenerti aggiornato sulle novità e sulle nuove funzionalità di Slope, software gestionale all in one per hotel.', 'slope-widgets'); ?>
        </p>

        <table class='form-table'>
            <tbody>
            <tr>
                <td>
                    <p style="font-size: 16px;">
                        <?= esc_html__("Nel frattempo dicci qualcosa in più su di te:", "slope-widgets"); ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class='slope-radio-field'>
                        <label class="slope-style-field">
                            <?= esc_html__("Lavoro per la struttura ricettiva", "slope-widgets"); ?>
                            <input type="radio" name="slope-user-type" value="employee">
                        </label>
                        <label class="slope-style-field">
                            <?= esc_html__("Lavoro per la web agency / Sono il webmaster", "slope-widgets"); ?>
                            <input type="radio" name="slope-user-type" value="webmaster">
                        </label>
                        <label class="slope-style-field">
                            <?= esc_html__("Altro", "slope-widgets"); ?>
                            <input type="radio" name="slope-user-type" value="other">
                        </label>
                    </div>
                </td>
            </tr>

            <tr class="setting-field">
                <th>
                    <label class="slope-style-field" for="slope-email-address">
                        Email
                    </label>
                    <input type="text" id="slope-email-address" name="slope-email-address" value="<?php echo esc_attr_e(get_option('admin_email')); ?>">
                </th>
            </tr>

            <tr class="slope-terms">
                <td>
                    <input type="checkbox" id="slope-terms">
                    <label class="slope-style-field" for="slope-terms">
                        <?= esc_html__('Dichiaro di aver letto ed accettato l’', 'slope-widgets') ?>
                        <a href="https://www.slope.it/privacy/" target="_blank">
                            <?= esc_html__('informativa sulla privacy', 'slope-widgets') ?>
                        </a>
                        <?= esc_html__('ai sensi del Regolamento (UE) 2016/679 per il trattamento dei dati personali ai fini di essere ricontattato.', 'slope-widgets') ?>
                    </label>
                </td>
            </tr>
            </tbody>
        </table>
        <input disabled name="Submit" type="submit" class="button-primary"
               value="<?php esc_attr_e('Avanti', 'slope-widgets'); ?>"
               onclick="event.preventDefault(); slopeSendDataAndRedirect('<?= admin_url('/admin.php?page=slope_reservations'); ?>'); checkValidity()"/>
        <a id="slope-skip-welcome-button" href="<?= admin_url('/admin.php?page=slope_reservations') ?>">
            <span class="slope-skip-icon dashicons-no dashicons"></span>
            <?= esc_html__('Salta', 'slope-widgets') ?>
        </a>

    </div>
</form>
