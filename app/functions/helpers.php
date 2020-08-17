<?php



function my_simple_crypt($string, $action = 'e')

{

    // you may change these values to your own

    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;

    $encrypt_method = "AES-256-CBC";

    $key = hash('sha256', $secret_key);

    $iv = substr(hash('sha256', $secret_iv), 0, 16);


    if ($action == 'e') {

    $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));

    } else if ($action == 'd') {

    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);

    }

    return $output;

}


// function return a string with the user indicating the maximum charaters to show on page

function limit_text($text, $limit)

{
    $text = strip_tags($text);
    if (str_word_count($text, 0) > $limit) {

    $words = str_word_count($text, 2);

    $pos = array_keys($words);

    $text = html_entity_decode(substr($text, 0, $pos[$limit]) . '...');

    // $text = html_entity_decode(substr($text, 0, $pos[$limit]) . '...');
    }

    return $text;
}



// function returns a specific number of words 

function text_start($string, $count)

{

    $words = explode(' ', $string);

    if (count($words) > $count) {

    $words = array_slice($words, 0, $count);

    $string = implode(' ', $words);

    }

    return $string;

}

// function returns a specific number of words for the center

function text_center($string, $strt, $count)

{
    $words = explode(' ', $string);

    $words = array_slice($words, $strt, $count);

    $string = implode(' ', $words);

    return $string;

}



// this function will get the remaining words

function text_end($string, $count)

{

    $words = explode(' ', $string);

    $words = array_slice($words, $count);

    $string = implode(' ', $words);

    return $string;
}

function slug($slug){

    $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
    $spacesDuplicateHypens = '/[\-\s]+/';
    $slug = preg_replace($lettersNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
    $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
    $slug = trim($slug, '-');
    return $slug;

}


 function checker_slug($db, $field,$val, $old_slug = null){
    
    $results = DB::table($db)
                ->WHERE($field,'=',$val)
                 ->get() ;
    $q_count = count($results);

    $key=1;
    if($q_count > 0){
    foreach ($results as $result) {
      $slug_name = $result->$field."-".$key++;
      // convert to slug
      $new_slug = slug($slug_name);
      if($new_slug == $old_slug){
         break;
      }
      }
   return $new_slug;
  }else{
   $new_slug =  slug($val);
   return $new_slug;
  }
}

  function cdn( $asset ){
      // Verify if KeyCDN URLs are present in the config file
    if( !Config::get(‘app.cdn’) )return asset( $asset );
    // Get file name incl extension and CDN URLs
    $cdns = Config::get(‘app.cdn’);
    $assetName = basename( $asset );
    // Remove query string
    $assetName = explode("?", $assetName);$assetName = $assetName[0];
    // Select the CDN URL based on the extension
    foreach( $cdns as $cdn => $types ) {
        if( preg_match('/^.*\.(' . $types . ')$/i', $assetName) ){
        return cdnPath($cdn, $asset);}
        // In case of no match use the last in the array
        end($cdns);return cdnPath( key( $cdns ) , $asset);
    } 
}
    
function cdnPath($cdn, $asset)
     {
         return "//" . rtrim($cdn, "/") . "/" . ltrim( $asset, "/");
        }


?>

 

