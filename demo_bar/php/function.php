<?php
function get_instagram(){
    $option = [
        CURLOPT_RETURNTRANSFER => true, //文字列として返すかどうか
        CURLOPT_TIMEOUT        => 3, // タイムアウト時間
    ];

    $myAccessToken = '8583490546.12a7517.d979294036c7476fa645f790eb9a2f54';
    $count = 1; //表示件数
    $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$myAccessToken."&count=".$count;


    $ch = curl_init($url);
    curl_setopt_array($ch, $option);

    $json    = curl_exec($ch);
    $info    = curl_getinfo($ch);
    $errorNo = curl_errno($ch);

    if ($errorNo !== CURLE_OK) {
        // 詳しくエラーハンドリングしたい場合はerrorNoで確認
        // タイムアウトの場合はCURLE_OPERATION_TIMEDOUT
        return [];
    }

    // 200以外のステータスコードは失敗とみなし空配列を返す
    if ($info['http_code'] !== 200) {
        return [];
    }

    //取ってきた内容を読み込んで、取得した件数分まわす
    $obj = json_decode($json);
    foreach($obj->data as $data){
        print('<div class="inst_list_item">');
        print('<div class="inst_thumb_wrap">');
        print('<div class="inst_thumb">');
        printf('<img src="%s" alt="">',$data->images->standard_resolution->url);
        printf('<video controls width="300" preload="none" onclick="this.play()" muted autoplay>',$data->videos->low_resolution->url);

        printf('<source src="%s">',$data->videos->low_resolution->url);
		
        print('</video>');		
        print('</div>');
        print('</div>');
        print('<div class="inst_comment">');
        print('<div class="inst_comment_2">');
        printf($data->created_time);		
        print('</div>');
        print('<div class="inst_comment_2">');
        printf($data->caption->text);
        print('</div>');
        printf('<a href="%s" target="_blank">Instagramをみる',$data->link);
        print('</a>');				
        printf('<p><i class="fa fa-heart" aria-hidden="true"></i>いいね　%d</p>',$data->likes->count);
        print('</div>');
        print('</div>');
    };
}//インスタ取得終了
?>