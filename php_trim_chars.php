function php_trim_chars($string = null, $limit = null) {
    $stringData = [];
    $i = 0;
    if(strlen($string) > $limit) {
        for($i; $i < $limit; $i++) {
            $stringData[] = $string[$i];
        }
        return implode('', $stringData) . ' ...';
    } else {
        return $string;
    }
}
