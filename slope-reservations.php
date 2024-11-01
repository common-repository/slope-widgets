<?php
// SLOPE RESERVATIONS

// Callback slope reservations
function slope_reservations_intro() {
    echo "<div class='slope-setting-container'>";
    echo '<p>' . esc_html__('Personalizza il widget di prenotazione di Slope. Usa lo shortcode ', 'slope-widgets') . '<strong>[slope-reservations]</strong> ' . esc_html__('per inserirlo dove vuoi!', 'slope-widgets') . '</p>';
    echo '<p>' . esc_html__('Inserisci qui di seguito l\'identificativo della tua struttura e clicca su ', 'slope-widgets') . '<strong>' . esc_html__('Salva modifiche', 'slope-widgets') . '</strong></p>
          <p>' . esc_html__('Hai acquistato Slope ma non hai ancora l\'ID?', 'slope-widgets') . ' <a href="mailto:info@slope.it?subject=' . esc_html__('Richiesta ID Struttura da Slope Widgets WP Plugin', 'slope-widgets') . '">' . esc_html__('Richiedilo ora', 'slope-widgets') . '</a>.</p><br>';

    $options = get_option('slope_options');
    // Settings
    // Text field: slope_options[uuid]
    $uuid = isset($options['uuid']) ? $options['uuid'] : '';
    echo "<table class='form-table'><tbody>
        <tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('ID struttura', 'slope-widgets') . "
            </th>
            <td>
                <input id='slope_uuid' name='slope_options[uuid]' size='40' type='text' value='{$uuid}' placeholder='" . esc_html__('Il tuo Slope ID', 'slope-widgets') . "'>
            </td>
        </tr>";


    // Text field: slope_options[button_value]
    $italianButtonText = isset($options['button_value']) ? $options['button_value'] : '';
    echo "<tr class='slope-setting-field'>
           <th scope='row'>" . esc_html__('Testo del pulsante in italiano', 'slope-widgets') . "</th>
           <td>
                <input id='slope_button_value' name='slope_options[button_value]' size='15' type='text' value='{$italianButtonText}' placeholder='" . esc_html__('Es: Prenota', 'slope-widgets') . "'>
           </td>
        </tr>";

    // Text field: slope_options[button_value_en]
    $englishButtonText = isset($options['button_value_en']) ? $options['button_value_en'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Testo del pulsante in inglese', 'slope-widgets') . "</th>
            <td>
                <input id='slope_button_value_en' name='slope_options[button_value_en]' size='15' type='text' value='{$englishButtonText}' placeholder='" . esc_html__('Es: Book now', 'slope-widgets') . "'>
            </td>
        </tr>";

    // Text field: slope_options[button_value_fr]
    $frenchButtonText = isset($options['button_value_fr']) ? $options['button_value_fr'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Testo del pulsante in francese', 'slope-widgets') . "</th>
            <td>
                <input id='slope_button_value_fr' name='slope_options[button_value_fr]' size='15' type='text' value='{$frenchButtonText}' placeholder='" . esc_html__('Es: Réserver', 'slope-widgets') . "'>
            </td>
        </tr>";

    // Text field: slope_options[button_value_de]
    $deutschButtonText = isset($options['button_value_de']) ? $options['button_value_de'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Testo del pulsante in tedesco', 'slope-widgets') . "</th>
            <td>
                <input id='slope_button_value_de' name='slope_options[button_value_de]' size='15' type='text' value='{$deutschButtonText}' placeholder='" . esc_html__('Es: Buchen', 'slope-widgets') . "'>
            </td>
        </tr>";

    // Checkbox: slope_options[select_font_weight]
    $checkedBold = (isset($options['select_font_weight']) && $options['select_font_weight']) ? ' checked="checked" ' : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Testo del pulsante in grassetto', 'slope-widgets') . "</th>
            <td>
                <input " . $checkedBold . " id='slope_select_font_weight' name='slope_options[select_font_weight]' type='checkbox'>
            </td>
        </tr>";

    // Text field: slope_options[children_age_max]
    $childrenMaxAge = isset($options['children_age_max']) ? $options['children_age_max'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Età massima dei bambini (in anni)', 'slope-widgets') . "</th>
            <td>
                <input id='slope_children_age_max' name='slope_options[children_age_max]' type='number' step='1' min='1' max'99'size='7' value='{$childrenMaxAge}' placeholder='" . esc_html__('Es: 12', 'slope-widgets') . "'>
            </td>
        </tr>";

    // Text field: slope_options[min_days]
    $minResidenceDays = isset($options['min_days']) ? $options['min_days'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Soggiorno minimo suggerito', 'slope-widgets') . "</th>
            <td>
                <input id='slope_min_days' name='slope_options[min_days]' size='7' type='number' step='1' min='1' value='{$minResidenceDays}' placeholder='" . esc_html__('Es: 3', 'slope-widgets') . "'>
            </td>
        </tr>";

    // Checkbox: slope_options[show_children]
    $checkedChildren = (isset($options['show_children']) && $options['show_children']) ? ' checked="checked" ' : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Mostra selezione bambini', 'slope-widgets') . "</th>
            <td>
                <input " . $checkedChildren . " id='slope_show_children' name='slope_options[show_children]' type='checkbox'>
            </td>
        </tr>";

    // Checkbox: slope_options[force_mobile_layout]
    $forceMobileLayout = (isset($options['force_mobile_layout']) && $options['force_mobile_layout']) ? ' checked="checked" ' : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Visualizza il widget su due righe', 'slope-widgets') . "</th>
            <td>
                <input" . $forceMobileLayout . " id='slope_force_mobile_layout' name='slope_options[force_mobile_layout]' type='checkbox'>
            </td>
        </tr>";

    // Colorpicker: slope_options[main_color]
    $reservationsMainColor = isset($options['main_color']) ? $options['main_color'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Colore principale', 'slope-widgets') . "</th>
            <td>
                <input name='slope_options[main_color]' type='text' data-role='slope-color-picker' value='{$reservationsMainColor}'>
            </td>
        </tr>";

    // Colorpicker: slope_options[text_color]
    $reservationsTextColor = isset($options['text_color']) ? $options['text_color'] : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Colore del testo', 'slope-widgets') . "</th>
            <td>
                <input name='slope_options[text_color]' type='text' data-role='slope-color-picker' value='{$reservationsTextColor}'>
            </td>
        </tr>";


    // Checkbox: slope_options[book_target]
    $checkedBook = (isset($options['book_target']) && $options['book_target']) ? ' checked="checked" ' : '';
    echo "<tr class='slope-setting-field'>
            <th scope='row'>" . esc_html__('Apri il Booking Engine in una nuova scheda', 'slope-widgets') . "</th>
            <td>
                <input" . $checkedBook . " id='slope_book_target' name='slope_options[book_target]' type='checkbox'>
            </td>
        </tr>
        </tbody></table>";
}

// HTML documentation
function slope_reservations_settings_docs() {
    echo '<div class="slope-docs-container"><h1>' . esc_html__('Documentazione', 'slope-widgets') . '</h1>
    <p>' . esc_html__('Slope Widgets funziona con gli ', 'slope-widgets') . '<strong>shortcode</strong>.' . esc_html__(' Se non sai cosa sono e come funzionano, consulta la ', 'slope-widgets') .
        '<a href="https://en.support.wordpress.com/shortcodes/" target="_blank">' . esc_html__('documentazione', 'slope-widgets') . '</a>' . esc_html__(' di WordPress.', 'slope-widgets') . '</p>
    <p>' . esc_html__('Se il sito web della tua struttura è ', 'slope-widgets') . '<strong>' . esc_html__(' multilingua', 'slope-widgets') . '</strong>'
        . esc_html__(' o preferisci mostrare il widget di prenotazione e il booking engine in un\'altra lingua, aggiungi il parametro opzionale ', 'slope-widgets') .
        '<strong>lang</strong> ' . esc_html__('allo shortcode che inserirai nelle pagine del sito tradotte.', 'slope-widgets') . '</p>
    <p>' . esc_html__('Le lingue supportate dalla barra delle prenotazioni sono italiano, inglese, francese e tedesco ', 'slope-widgets') . ' ' . '<strong> (it, en, fr, de)</strong>.</p><br/>
    <p><em>' . esc_html__('Shortcode supportati:', 'slope-widgets') . '</em></p><p><strong>[slope-reservations]</strong> ' . esc_html__('mostra widget e booking engine in base alla lingua del browser del visitatore, o in inglese se la lingua non è supportata.', 'slope-widgets') . '</p>
    <p><strong>[slope-reservations lang=en]</strong> ' . esc_html__('mostra widget e booking engine sempre in inglese.', 'slope-widgets') . '</p>
    <p><strong>[slope-reservations lang=it]</strong> ' . esc_html__('mostra widget e booking engine sempre in italiano.', 'slope-widgets') . '</p>
    <p><strong>[slope-reservations lang=fr]</strong> ' . esc_html__('mostra widget e booking engine sempre in francese.', 'slope-widgets') . '</p>
    <p><strong>[slope-reservations lang=de]</strong> ' . esc_html__('mostra widget e booking engine sempre in tedesco.', 'slope-widgets') . '</p>
  </div>';
}

// Shows the admin page of RESERVATIONS settings
function slope_reservations_options_page() {
    echo '<div class="wrap">
      <h1>Slope Reservations</h1>'; ?>
    <?php settings_errors(); ?>
    <form id="slope-widget-container" action="options.php" method="post">
        <div class="slope-grid-container">
            <?php settings_fields('slope_options'); ?>
            <?php do_settings_sections('slope_reservations_page'); ?>
            <div class="button-save">
                <input name="Submit" type="submit" class="button-primary"
                       value="<?php esc_attr_e('Salva modifiche', 'slope-widgets'); ?>"/>
            </div>
        </div>
        <?php slope_reservations_settings_docs(); ?>
        </div>
    </form>
    </div>
    <?php
}

// Validate text fields to exclude HTML input
function slope_reservations_options_validate($input) {
    $input['uuid'] = wp_filter_nohtml_kses($input['uuid']);
    $input['button_value'] = wp_filter_nohtml_kses($input['button_value']);
    $input['button_value_en'] = wp_filter_nohtml_kses($input['button_value_en']);
    $input['button_value_fr'] = wp_filter_nohtml_kses($input['button_value_fr']);
    $input['button_value_de'] = wp_filter_nohtml_kses($input['button_value_de']);
    if (isset($input['children_age_min'])) $input['children_age_min'] = wp_filter_nohtml_kses($input['children_age_min']);
    $input['children_age_max'] = wp_filter_nohtml_kses($input['children_age_max']);
    $input['min_days'] = wp_filter_nohtml_kses($input['min_days']);
    return $input;
}

// Content shown via [slope-reservations] shortcode
function slope_reservations($atts) {
    $options = get_option('slope_options');

    $atts = shortcode_atts(
        array(
            'lang' => '',
        ), $atts
    );

    if (in_array($atts['lang'], ['en', 'it' , 'fr', 'de'])){
        $lang = $atts['lang'];
    } else {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    // Verify if the option to open the booking engine in a new tab is marked and sets the 'target' in the variable '$book_target'. By default the boking engine opens up in theh same tab.
    $bookTarget = (isset($options['book_target']) && $options['book_target']) ? '_blank' : '_self';
    // Strings mapping for languages
    switch ($lang) {
        case 'en':
        default: // In case of unsupported language, fall back to English
            $strings = [
                'adults' => 'Adults',
                'book_now' => 'Book now',
                'check-in' => 'Check-In',
                'check-out' => 'Check-Out',
                'children' => 'Children',
                'guests' => 'Guests',
                'lang_code' => 'en',
                'lodging' => 'Lodging',
                'lodgings' => 'Lodgings',
                'save' => 'Save',
                'cancel' => 'Cancel',
                'years' => 'years',
            ];
            $strings['button_value'] = (isset($options['button_value_en']) && ($options['button_value_en'] != ''))
                ? $options['button_value_en']
                : $strings['book_now'];
            break;
        case 'fr':
            $strings = [
                'adults' => 'Adulte',
                'book_now' => 'Réserver',
                'check-in' => 'Arrivée',
                'check-out' => 'Départ',
                'children' => 'Enfants',
                'guests' => 'Client',
                'lang_code' => 'fr',
                'lodging' => 'Hébergement',
                'lodgings' => 'Hébergements',
                'save' => 'Sauver',
                'cancel' => 'Annuler',
                'years' => 'âge',
            ];
            $strings['button_value'] = (isset($options['button_value_fr']) && ($options['button_value_fr'] != ''))
                ? $options['button_value_fr']
                : $strings['book_now'];
            break;
        case 'de':
            $strings = [
                'adults' => 'Erwachsene',
                'book_now' => 'Buchen',
                'check-in' => 'Ankunft',
                'check-out' => 'Abreise',
                'children' => 'Kinder',
                'guests' => 'Gäste',
                'lang_code' => 'de',
                'lodging' => 'Unterkunft',
                'lodgings' => 'Unterkünfte',
                'save' => 'Speichern',
                'cancel' => 'Stornieren',
                'years' => 'alter',
            ];
            $strings['button_value'] = (isset($options['button_value_de']) && ($options['button_value_de'] != ''))
                ? $options['button_value_de']
                : $strings['book_now'];
            break;
        case 'it':
            $strings = [
                'adults' => 'Adulti',
                'book_now' => 'Prenota ora',
                'check-in' => 'Check-In',
                'check-out' => 'Check-Out',
                'children' => 'Bambini',
                'guests' => 'Ospiti',
                'lang_code' => 'it',
                'lodging' => 'Alloggio',
                'lodgings' => 'Alloggi',
                'save' => 'Salva',
                'cancel' => 'Annulla',
                'years' => 'anni',
            ];
            $strings['button_value'] = (isset($options['button_value']) && ($options['button_value'] != ''))
                ? $options['button_value']
                : $strings['book_now'];
            break;
    }
    $defaultMainColor = '#FFFFFF';
    $defaultFontColor = '#404040';
    $defaultChildrenMaxAge = 13;
    $defaultMinDays = 1;
    $mainColor = (isset($options['main_color']) && ($options['main_color'] != '') ? $options['main_color'] : $defaultMainColor);
    $fontColor = (isset($options['text_color']) && ($options['text_color'] != '') ? $options['text_color'] : $defaultFontColor);
    $fontWeightBold = (isset($options['select_font_weight']) && $options['select_font_weight']) ? 'font-weight:800;' : '';
    $childrenMaxAge = (isset($options['children_age_max']) && $options['children_age_max'] !== '')
        ? $options['children_age_max']
        : $defaultChildrenMaxAge;
    $childrenVisibility = (isset($options['show_children']) && $options['show_children']) ? '' : "hidden";
    $minDays = (isset($options['min_days']) ? $options['min_days'] : $defaultMinDays);
    $widgetLayoutType = (isset($options['force_mobile_layout']) && $options['force_mobile_layout'] == true) ? 'slp-force-mobile-layout' : 'slp-responsive-layout';
    $widgetsConfigDiv = '<div id="slope-widgets-config" data-language="' . $atts['lang'] . '" data-min-days="' . $minDays . '"></div>';
    $bookingEngineBaseURL = 'https://booking.slope.it/widgets/wordpress/search';
    $uuid = (isset($options['uuid']) ? $options['uuid'] : '');
    $bookingEngineActionURL = $bookingEngineBaseURL . '/' . $uuid . '/' . $strings['lang_code'];

    $html = '<style>

    .slope-block {
        background-color: ' . $mainColor . ';
        color: ' . $fontColor . ';
    }

    .slope-block input[type="text"] {
        color: ' . $fontColor . ';
    }

    .slope-stepper-container {
        color: ' . $fontColor . ';
        background-color: ' . $mainColor . ';
    }

    .slope-stepper-value {
        color: ' . $fontColor . ' !important;
    }

    .slope-stepper-container .slope-increment-button,
    .slope-stepper-container .slope-decrement-button {
        color: ' . $fontColor . ' !important;
        border: 2px solid ' . $fontColor . ' !important;
    }

    .slope-save-guests {
        background-color: ' . $fontColor . ' !important;
        border: 1px solid ' . $fontColor . ';
        color: ' . $mainColor . ';
    }

    .slope-cancel-guests {
        border: 1px solid ' . $fontColor . ';
        color: ' . $fontColor . ';
        background: ' . $mainColor . '  !important;
    }

    .slope-flatpickr-calendar.flatpickr-calendar {
        background-color: ' . $mainColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.inRange {
        color: ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-current-month,
    .slope-flatpickr-calendar span.flatpickr-weekday,
    .slope-flatpickr-calendar .flatpickr-day {
        color: ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.selected,
    .slope-flatpickr-calendar .flatpickr-day.startRange:focus,
    .slope-flatpickr-calendar .flatpickr-day.endRange:focus,
    .slope-flatpickr-calendar .flatpickr-day.selected:hover,
    .slope-flatpickr-calendar .flatpickr-day.endRange:hover,
    .slope-flatpickr-calendar .flatpickr-day.startRange:hover {
        background: ' . $fontColor . ';
        border-color: ' . $fontColor . ';
        color: ' . $mainColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.flatpickr-disabled:hover {
        color: ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.selected,
    .slope-flatpickr-calendar .flatpickr-day.startRange,
    .slope-flatpickr-calendar .flatpickr-day.endRange,
    .slope-flatpickr-calendar .flatpickr-day.selected.inRange,
    .slope-flatpickr-calendar .flatpickr-day.startRange.inRange,
    .slope-flatpickr-calendar .flatpickr-day.endRange.inRange,
    .slope-flatpickr-calendar .flatpickr-day.selected:focus,
    .slope-flatpickr-calendar .flatpickr-day.startRange:focus,
    .slope-flatpickr-calendar .flatpickr-day.endRange:focus,
    .slope-flatpickr-calendar .flatpickr-day.selected:hover,
    .slope-flatpickr-calendar .flatpickr-day.startRange:hover,
    .slope-flatpickr-calendar .flatpickr-day.endRange:hover,
    .slope-flatpickr-calendar .flatpickr-day.selected.prevMonthDay,
    .slope-flatpickr-calendar .flatpickr-day.startRange.prevMonthDay,
    .slope-flatpickr-calendar .flatpickr-day.endRange.prevMonthDay,
    .slope-flatpickr-calendar .flatpickr-day.selected.nextMonthDay,
    .slope-flatpickr-calendar .flatpickr-day.startRange.nextMonthDay,
    .slope-flatpickr-calendar .flatpickr-day.endRange.nextMonthDay {
        background: ' . $fontColor . ';
        color: ' . $mainColor . ';
        border-color: ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)),
    .slope-flatpickr-calendar .flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)),
    .slope-flatpickr-calendar .flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
        box-shadow: -10px 0 0 ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-day.today {
        border-color: ' . $fontColor . ';
    }

    .slope-flatpickr-calendar .flatpickr-months .flatpickr-prev-month svg,
    .slope-flatpickr-calendar .flatpickr-months .flatpickr-next-month svg,
    .slope-flatpickr-calendar .flatpickr-months .flatpickr-prev-month:hover svg,
    .slope-flatpickr-calendar .flatpickr-months .flatpickr-next-month:hover svg,
    .slope-flatpickr-calendar .slope-reservation-dates .slope-reservation-icon-container svg {
        fill: ' . $fontColor . ' !important;
        color: ' . $fontColor . ' !important;
    }

    .slope-flatpickr-calendar .flatpickr-current-month span.cur-month:hover,
    .slope-flatpickr-calendar .flatpickr-current-month input.cur-year,
    .slope-guests-buttons-container[data-container="stepper-container-buttons"] {
        background: ' . $mainColor . '!important;
        background-color: ' . $mainColor . '!important;
    }

    </style>' . $widgetsConfigDiv . '<div class="slope-widgets-container" data-widget-count>
        <form action="' . $bookingEngineActionURL . '" method="POST">
          <div class="' . $widgetLayoutType . ' slope-block">
            <div class="slope-reservation-dates" data-min-days="' . $minDays . '">
              <div class="slope-reservation-section-container slope-check-in slope-highlight" data-lang="' . $strings['lang_code'] . '">
                <div class="slope-check-in-wrapper">
                  <span class="slope-check-in-label">' . $strings['check-in'] . '</span>
                  <span class="slope-check-in-date"></span>
                  <input class="slope-check-in-input" name="reservation[stay][arrival]">
                </div>
              </div>
              <div class="slope-reservation-icon-container">
                <svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg>
              </div>
              <div class="slope-reservation-section-container slope-check-out slope-highlight" data-lang="' . $strings['lang_code'] . '">
                <div class="slope-check-out-wrapper">
                  <span class="slope-check-out-label">' . $strings['check-out'] . '</span>
                  <span class="slope-check-out-date"></span>
                  <input class="slope-check-out-input" name="reservation[stay][departure]">
                </div>
              </div>
            </div>
            <div class="slope-vertical-divider"></div>
            <div class="slope-horizontal-separator"></div>
            <div class="slope-guests-and-button-container">
              <div class="slope-reservation-section-container slope-highlight" data-lang="' . $strings['lang_code'] . '">
                <div class="slope-guests-wrapper">
                  <input class="slope-stepper-value" type="hidden" data-input="adults" value="2">
                  <input class="slope-stepper-value" type="hidden" data-input="children" value="' . $childrenMaxAge . '">
                  <div class="slope-rooms-count-container">
                    <span class="slope-rooms-label">' . $strings['lodgings'] . '</span>
                    <span class="slope-rooms-count" data-sync-value="rooms"></span>
                  </div>
                  <div class="slope-guests-count-container">
                    <span class="slope-guests-label">' . $strings['guests'] . '</span>
                    <span class="slope-adults-count" data-sync-value="adults"></span>
                    <span class="slope-guests-adults">' . $strings['adults'] . '</span>';

    if (isset($options['show_children']) && $options['show_children']) {
        $html .= '<span style="font-size: 16px"> - </span><span class="slope-children-count" data-sync-value="children"></span>
               <span class="slope-guests-children">' . $strings['children'] . '</span>';
    }
    $html .= '</div>
              </div>
                <div class="slope-stepper-container">
                  <div class="slope-rooms-stepper-container" data-container="room">
                    <span class="slope-rooms-label">' . $strings['lodgings'] . '</span>
                    <div class="slope-rooms-stepper">
                      <div class="slope-decrement-button" data-decrement="rooms"><span>-</span></div>
                      <input class="slope-stepper-value" readonly type="text" data-sync-trigger="rooms" value="1" min="1" max="99">
                      <div class="slope-increment-button" data-increment="rooms"><span>+</span></div>
                    </div>
                  </div>
                  <div class="slope-room-container" data-container="guests">
                  <div class="slope-horizontal-separator"></div>
                    <label class="slope-room-label" data-label="room">' . $strings['lodging'] . ' 1</label>
                    <div class="slope-guests-count-row slope-padding-top">
                      <span class="slope-adults-label">' . $strings['adults'] . '</span>
                      <div class="slope-guests-stepper">
                        <div class="slope-decrement-button" data-decrement="adults"><span>-</span></div>
                        <input class="slope-stepper-value" readonly type="text" data-sync-trigger="adults" value="2" min="1" max="99">
                        <div class="slope-increment-button" data-increment="adults"><span>+</span></div>
                      </div>
                    </div>
                    <div class="slope-guests-count-row" ' . $childrenVisibility . '>
                      <div><span class="slope-children-label">' . $strings['children'] . '</span><span class="slope-children-age"> (0 - ' . $childrenMaxAge . ' ' . $strings['years'] . ')</span></div>
                      <div class="slope-guests-stepper">
                        <div class="slope-decrement-button" data-decrement="children"><span>-</span></div>
                        <input class="slope-stepper-value" readonly type="text" data-sync-trigger="children" value="0" min="0" max="99">
                        <div class="slope-increment-button" data-increment="children"><span>+</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="slope-horizontal-separator" data-separator="buttons"></div>
                  <div class="slope-guests-buttons-container" data-container="stepper-container-buttons">
                    <button type="button" class="slope-cancel-guests">' . $strings['cancel'] . '</button>
                    <button type="button" class="slope-save-guests">' . $strings['save'] . '</button>
                  </div>
                </div>
              </div>
              <div class="slope-reservation-section-container slope-submit-section">
                <input class="slope-reservation-submit" type="submit" formtarget="' . $bookTarget . '" value="' . $strings['button_value'] . '" style="background:' . $fontColor . '; color:' . $mainColor . ';' . $fontWeightBold . '">
              </div>
            </div>
          </div>
        </form>
      </div>';

    return $html;
}

add_shortcode('slope-reservations', 'slope_reservations');
