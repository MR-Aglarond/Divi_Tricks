// Shortcode für Eingabeformular
function count_words_form_shortcode() {
    $output = '<form id="count_words_form">
        <textarea id="input_text" name="input_text"></textarea>
    </form>';
    return $output;
}
add_shortcode('count_words_form', 'count_words_form_shortcode');

// Shortcode für Buttonbox
function count_words_button_shortcode() {
    $output = '<div class="et_pb_button_0 et_pb_module et_pb_bg_layout_light">
        <button id="copy_text_button" class="et_pb_button">Kopieren</button>
    </div>';
    return $output;
}
add_shortcode('count_words_button', 'count_words_button_shortcode');


// Shortcode für Ausgabebox
function count_words_result_shortcode() {
    $output = '<div id="count_words_result" class="et_pb_with_border et_pb_module et_pb_code et_pb_code_3">
        <table style="border-collapse: collapse; width: 100%;">
            <tr>
                <td style="text-align: left;">Anzahl der Wörter:</td>
                <td id="word_count" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td style="text-align: left;">Zeichen ohne Leerzeichen:</td>
                <td id="char_count_without_spaces" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td style="text-align: left;">Zeichen mit Leerzeichen:</td>
                <td id="char_count_with_spaces" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td style="text-align: left;">Sätze:</td>
                <td id="sentence_count" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td style="text-align: left;">Wörter pro Satz im Durchschnitt:</td>
                <td id="average_words_per_sentence" style="text-align: right;">0</td>
            </tr>
            <tr>
                <td style="text-align: left;">Lesezeit in Minuten:</td>
                <td id="reading_time" style="text-align: right;">0</td>
            </tr>
        </table>
    </div>';
    return $output;
}
add_shortcode('count_words_result', 'count_words_result_shortcode');



