function php_trim_chars($text = null, $limit = null) {

    $textData = [];
    $i = 0;
    if(strlen($text) > $limit) {
        for($i; $i < $limit; $i++) {
            $textData[] = $text[$i];
        }
        return implode('', $textData) . ' ...';
    } else {
        return $text;
    }
    
}
