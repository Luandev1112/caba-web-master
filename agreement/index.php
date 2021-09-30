<?php
  require_once(__DIR__ . '/Monaka/config/config.php');
  $form = new Monaka\Form();
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>「きゃばウェブ」電子契約書</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」の電子契約書ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,電子契約書">

<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="apple-touch-icon" href="../img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/jquery.bxslider.css" />
<link rel="stylesheet" href="../css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!-- parallax scroll本体 -->
<script src="../js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>

<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
<script>
$(function() {
var topBtn = $('#page-top-2');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
});
</script>
<script>
$(function() {
var topBtn = $('#page-top-3');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
});
</script>
<!--サイド　プラグイン-->

<script>
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127337530-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127337530-1');
</script>

</head>

<body>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>契約書</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <h3>契約内容</h3>
    <div class="service_in">
    <div class="agreement">
    制作依頼元（以下、「甲」という。）ときゃばweb（以下、「乙」という。）は、WEB サイト制作に関する業務（以下、「本業務」という。）について、下記のとおり契約（以下、「本契約」という。）を締結する。 <br />
    <br />
    第１条（目的）<br />
    甲は乙に対し、本業務を委託し、乙はこれを受託する。甲は、乙が本業務を遂行するに際して、必要な協力を行なう。<br />
    <br />
    第２条(本業務) <br />
    乙が甲に提供する業務は次の通りとする。<br />
    （１）甲から提供されるテキスト原稿、画像等のデータと、乙の提供するHTMLによるデザイン・レイアウトデータ、およびスクリプト等と組み合わせて、ＷＥＢサイトを制作すること。<br />
    <br />
    第３条（契約期間）<br />
    本契約の有効期間は、本契約締結の日から満１ヶ年間又は１ヶ月とする。但し期間満了までに、甲乙いずれからも何らの意思表示もないときは、本基本契約と同一条件で更に１ヶ年間又は１ヶ月延長するものとし１ヶ年間又は１ヶ月の契約料が発生するものとする。契約料は乙が定める料金とする。<br />
    <br />
    第４条（制作料金）<br />
    （１）甲は納入物の対価として、乙からの請求にもとづきその制作等に関する料金及び消費税相当額を乙に支払う。<br />
    （２）本契約に基づく料金額は、乙のホームページ上の料金表及び料金案内に定める通りとする。なお、乙は、ホームページ上の料金表及び料金案内については、告知せずに価格変更をできるものとする。<br />
    （３）料金の支払条件は、請求書記載の支払い期日より２週間以内とし、甲は乙が指定した銀行口座に振り込んで支払う。振込手数料は甲の負担とする。<br />
    <br />
    第５条（納品）<br />
    （１）乙が甲に制作物の納品を行なう前に、甲はインターネット上にてその確認を行なうものとする。<br />
    （２）甲は、乙からの確認依頼通知を受領後速やかに、その内容の確認を行なう。甲から乙への確認通知は確認依頼通知への返信メール、または文書により行なう。確認依頼通知の受領後７日以内に乙宛への連絡が無い場合は、甲により制作物の内容が承認されたものとする。<br />
    （３）甲が制作完了後の更新や修正を希望する場合は、乙規定の方法で知らせる。<br />
    <br />
    第６条(公開) <br />
    乙は、甲による委託料金の完済後、制作物を公開するものとする。なお公開後、制作物に掲載された内容に関しては、乙は一切の責任を負わない。<br />
    <br />
    第８条 (制作物の返品・キャンセル・再制作) <br />
    （１）制作前のキャンセルは制作費の50%を甲が負担しなければならない。<br />
    （２）納品物の再制作の必要がある場合は、費用は甲が負担し、乙が合理的な根拠に基づいて計算した追加料金を支払う。なお納品物の返品はできないものとする。<br />
    <br />
    第９条（所有権の移転、危険負担）<br />
    本制作物の所有権は、甲の内容確認後、且つ当該契約に係る委託料が完済されたときに、乙から甲に移転する。なお本制作物の滅失、毀損その他全ての危険負担についても同時に甲に移転する。<br />
    <br />
    第１０条（瑕疵担保責任）<br />
    前条の所有権移転から３０日以内に、本制作物に隠れた瑕疵が発見された場合、乙は速やかに甲と協議し、必要な無償修補、対価の減額等を含む合理的措置を取り決めるものとする。但し当該瑕疵の原因が、本制作物に対して乙以外の者による造作・工作がなされたことによる場合にはこの限りではない。<br />
    <br />
    第１１条（アフターサービス）<br />
    甲及び甲の顧客に対する本制作物のアフターサービス（何ら瑕疵のない本制作物について、甲がさらに変更・修正が必要と判断する場合の変更・修正業務を含む。）は、甲の費用をもって甲が行なうものとする。 尚、規定外のご依頼の場合は再度お見積りをするものとする。<br />
    <br />
    第１２条（著作権）<br />
    （１）本制作物の著作権は、当該契約に係る委託料が完済されたときに、乙から甲に移転する。<br />
    （２）甲が本制作物の使用に関して、第三者から権利侵害等の理由に基づく苦情又は請求を受けた場合は、甲は乙に対し遅滞なくその旨を通知し、甲乙は、協議により必要且つ可能な対策を講ずるものとする。但し、甲と第三者との紛争の原因が、制作物作成過程において甲の指示、仕様に起因する場合は、乙は責任を負わない。<br />
    <br />
    第１３条（知的財産権の帰属）<br />
    （１）本制作物の制作過程において行なった考案等の著作権その他の権利を含む知的財産権は、甲が行なった場合は甲に、 乙が行った場合は乙に、甲乙共同で行なった場合には甲乙共有（持分は別段の定めがない限り均等）に帰属する。<br />
    （２）甲及び乙は、本制作物に限り、前項に定める双方の知的財産権を無償で全部又は一部を改変、加工その他の変更を含む自己利用をすることができる。<br />
    （３）甲は、乙を除く第三者の利用に対して、本制作物の複製、翻案等を行なってはならない。また、甲が新たに制作するサイトに対して、本制作物の複製、翻案等を使用する場合は、甲乙は事前に協議し、合意の上これを行なう。<br />
    （４）乙は、本制作物に関する商品名又はサイト名に関する商標権登録のための出願をしてはならない。<br />
    <br />
    第１４条（再委託）<br />
    （１）乙は、本業務の全部又は一部を第三者に再委託することができる。<br />
    （２）乙は、本業務の再委託先に関して、秘密保持義務については本契約に基づき、乙が負うと同様の義務を再委託先に対して負わせなければならないものとし、当該再委託先と連帯して責任を負うものとする。<br />
    <br />
    第１５条（秘密保持）<br />
    （１）甲及び乙は、本契約に基づいて相手方から開示され、又は本業務の遂行過程で取得した相手方の業務上、技術上、その他一切の情報（個人情報を含む。）については秘密情報として扱うものとし、相手方の事前の書面による承諾なく、これらの情報を公表若しくは第三者へ開示し、又は本契約で定められた業務以外の目的で使用してはならない。<br />
    （２）前項の秘密保持義務は、本契約終了後においても存続する。<br />
    <br />
    第１６条（不可抗力）<br />
    （１）地震、台風、津波その他の天災地変、輸送機関の事故、不慮の事故や疾病その他の不可抗力により、本契約の全部又は一部の履行の遅延又は履行不能が生じた場合には、甲乙ともにその責任は負わないものとする。<br />
    （２）前項に定める事由が生じた場合には、直ちに相手方に対しその旨の通知をし、以後の対応について協議する。<br />
    <br />
    第１７条（免責事項）<br />
    （１）サーバー障害等が生じた場合には、甲乙ともにその責任は負わないものとする。<br />
    （２）外部コンテンツ（Instagram・You Tube等）を使用時に障害やシステム変更等が生じた場合には、甲乙ともにその責任は負わないものとする。<br />
    <br />		
    第１８条（損害賠償）<br />
    甲及び乙は、本契約の履行に関し、相手方の責めに帰すべき事由により直接且つ現実に被った通常の損害に限り、相手方に対して損害賠償を請求することができる。但し損害賠償額については、甲乙が本業務の対価として定めた委託料相当額を累積限度額とする。<br />
    <br />
    第１９条（契約の解除）<br />
    甲及び乙は、次の場合に本契約を解除することができるものとする。<br />
    なお乙に対する契約解除の返金・返品はできないものとする。<br />
    ただし乙の損害が発生した契約解除の場合はその限りではない。<br />
    契約解除後、乙は一切の責任を負わないこととする。<br />
    （１）甲からの契約解除やドメイン移管申請の申し入れがあったとき。<br />
    （２）相手方が本契約の条項に違反し、且つ、当該違反の書面による是正要求を受けた後３０日以内に当該違反が是正されなかったとき。<br />
    （３）甲から提供されたテキスト原稿及び画像等のデータに、法令または公序良俗に反するものが含まれる、もしくは含まれる可能性があると乙が判断したとき。<br />
    （４）甲及び乙が自らの責めに帰すべき事由によって本契約が解除されたことにより相手方に損害が発生した場合、相手方の請求により、第１７条の規定にもとづく損害賠償をしなければならない。<br />
    <br />
    第２０条（協議）<br />
    本契約について甲乙間に疑義が生じたときは、甲乙協議のうえ、信義誠実をもってこれを解決するものとする。
    </div>

    <h3>契約同意署名</h3>
    <div class="agreement_2">
    上記の契約内容を必ずご確認の上、入力をお願い致します。<br />
    </div>
    
    <form action="./Monaka/confirmation.php" method="post" id="form" enctype="multipart/form-data">
    <p><input type="hidden" name="店舗名[params]" value="名前">
    <label><span>店舗名又は法人名（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗名[value]" class="txtfiled" placeholder="例）club きゃば" required></label>
    </p>
    <p>
    <label><span>代表者名（<font color="#FF0000">必須</font>）</span><input type="text" name="代表者名[value]" class="txtfiled" placeholder="例）きゃば 太郎" required></label>
    </p>
    <p>
    <label><span>ふりがな（<font color="#FF0000">必須</font>）</span><input type="text" name="ふりがな[value]" class="txtfiled" placeholder="例）きゃば たろう" required></label>
    </p>   
    <p>
    <label><span>代表者携帯番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="代表者携帯番号[value]" style="ime-mode:disabled;" class="txtfiled" placeholder="例）09000000000" required></label>
    </p>
    <p>
    <label><span>住所（<font color="#FF0000">必須</font>）</span><input type="text" name="住所[value]" style="ime-mode:disabled;" class="txtfiled" placeholder="例）群馬県前橋市天川大島町43-1" required></label>
    </p>
    <p>
    <label><span>店舗又は会社電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="店舗電話番号[value]" style="ime-mode:disabled;" class="txtfiled" placeholder="例）0272895688" required></label>
    </p>
    <p><input type="hidden" name="メールアドレス[params]" value="メール">
    <label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><input type="email" name="メールアドレス[value]" class="txtfiled" placeholder="例）info@caba-web.com" required></label>
    </p>
    <p>
    <span>
    「風営法許可証」又は「社交飲食店営業許可証」の全体が写っている写真データ（<font color="#FF0000">必須</font>）
    </span>
    <table>
      <tr>
        <td class="t_sign">許可証</td>
        <td class="t_sign-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" name="添付ファイル1" required>
          </div>
          </label>                    
        </td>
      </tr>                                                          
    </table>
    </p> 
    
    <p>
    <label><span>同意の有無（<font color="#FF0000">必須</font>）</span>
    <input type="checkbox" name="同意する[value][]" value="同意する" required>同意する   
    </label>
    </p>               
    <div class="input_area">
      <p>
      <button type="submit" class="formbtn">確認する</button>
      <button type="reset" class="formbtn">リセット</button>
      </p>
    </div>
    </form>

    </div><!--service_in-->  
      
    
  </div>
</div>

</main>

</body>

</html>