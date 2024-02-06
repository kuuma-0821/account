<?php
session_start();



if( isset( $_POST['submit'])){
    
    $_SESSION['namesei'] = $_POST['namesei'];
    
}

  header('http://localhost/account/regist_confirm.php');

if (isset($_GET) && isset($_GET['action']) && $_GET['action'] === 'edit') {
        $namesei = $_SESSION['namesei'];
        $namemei = $_SESSION['namemei'];
        $kanasei = $_SESSION['kanasei'];
        $kanamei = $_SESSION['kanamei'];
        $email = $_SESSION['email'];
        $pass = $_SESSION['pass'];
        $seibetu = $_SESSION['seibetu'];
        $yuubinn = $_SESSION['yuubinn'];
        $kenn = $_SESSION['kenn'];
        $juusyosiku = $_SESSION['juusyosiku'];
        $juusyobann = $_SESSION['juusyobann'];
        $aka = $_SESSION['aka'];
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>
    
    <div class="logo_img">
    <img src="diblog_logo.jpg">
    </div>
    
<header>
    <div class="logo">
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>アカウント登録</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
</header>
    
    <h1>アカウント登録</h1>
    
    <form method="POST" action="regist_confirm.php" class="validationForm" novalidate>
        <ul>
        <div>
            <li>
            <label>名前（姓）</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="名前(姓)は必須です" data-pattern="^^[ぁ-ん一-龯]+$" data-error-pattern="名前（姓）は「ひらがな」または「漢字」で記入ください。" type="text" name="namesei" value="<?php if (isset($namesei)) {echo $namesei;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>名前（名）</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="名前（名）は必須です" data-pattern="^^[ぁ-ん一-龯]+$" data-error-pattern="名前（名）は「ひらがな」または「漢字」で記入ください。" type="text" name="namemei" value="<?php if (isset($namemei)) {echo $namemei;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（姓）</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="カナ（姓）は必須です" data-pattern="^[ァ-ヶー]+$" data-error-pattern="カナ（姓）は「カタカナ」で記入ください。" type="text" name="kanasei" id="name" value="<?php if (isset($kanasei)) {echo $kanasei;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（名）</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="カナ（名）は必須です" data-pattern="^[ァ-ヶー]+$" data-error-pattern="カナ（名）は「カタカナ」で記入ください。" type="text" name="kanamei" id="name" value="<?php if (isset($kanamei)) {echo $kanamei;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>メールアドレス</label>
            <input class="required pattern　maxlength" data-maxlength="100" data-pattern="email" data-error-required="メールアドレスは必須です" data-error-pattern="メールアドレスの形式が違います。" type="email" id="email1" name="email1" value="<?php if (isset($email)) {echo $email;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>パスワード</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="パスワードは必須です" data-pattern="^[a-zA-Z0-9!-/:-@[-`{-~]*$" data-error-pattern="パスワードは半角英数字で記入ください。" type="text" name="pass" id="name" value="<?php if (isset($pass)) {echo $pass;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>性別</label>
            <input class="required" data-error-required="いずれかを選択してください" type="radio" name="seibetu" value="男" <?php if (isset($seibetu) && $seibetu === "男") {echo "checked";} else {echo "checked";} ?>>男
            <input type="radio" name="seibetu" value="女" <?php if (isset($seibetu) && $seibetu === "女") {echo "checked";} ?>>女
            </li>
        </div>
        
        <div>
            <li>
            <label>郵便番号</label>
            <input class="required pattern maxlength" data-maxlength="7" data-error-required="郵便番号は必須です" data-pattern="\d{3}-?\d{4}" data-error-pattern="郵便番号はハイフンなしで半角数字７文字で記入ください。" type="text" name="yuubinn" id="name" value="<?php if (isset($yuubinn)) {echo $yuubinn;} ?>" >
            </li>
        </div>
        
        <div>
            <li>
            <label>都道府県</label>
            <select class="required" data-error-required="都道府県が選択されていません。" name="kenn" id="season" >
                <option value=""></option>
                <option value="北海道" <?php if (isset($kenn) && $kenn === "北海道") {echo "selected";} ?>>北海道</option>
                <option value="青森県" <?php if (isset($kenn) && $kenn === "青森県") {echo "selected";} ?>>青森県</option>
                <option value="岩手県" <?php if (isset($kenn) && $kenn === "岩手県") {echo "selected";} ?>>岩手県</option>
                <option value="宮城県" <?php if (isset($kenn) && $kenn === "宮城県") {echo "selected";} ?>>宮城県</option>
                <option value="秋田県" <?php if (isset($kenn) && $kenn === "秋田県") {echo "selected";} ?>>秋田県</option>
                <option value="山形県" <?php if (isset($kenn) && $kenn === "山形県") {echo "selected";} ?>>山形県</option>
                <option value="福島県" <?php if (isset($kenn) && $kenn === "福島県") {echo "selected";} ?>>福島県</option>
                <option value="茨城県" <?php if (isset($kenn) && $kenn === "茨城県") {echo "selected";} ?>>茨城県</option>
                <option value="栃木県" <?php if (isset($kenn) && $kenn === "栃木県") {echo "selected";} ?>>栃木県</option>
                <option value="群馬県" <?php if (isset($kenn) && $kenn === "群馬県") {echo "selected";} ?>>群馬県</option>
                <option value="埼玉県" <?php if (isset($kenn) && $kenn === "埼玉県") {echo "selected";} ?>>埼玉県</option>
                <option value="千葉県" <?php if (isset($kenn) && $kenn === "千葉県") {echo "selected";} ?>>千葉県</option>
                <option value="東京都" <?php if (isset($kenn) && $kenn === "東京都") {echo "selected";} ?>>東京都</option>
                <option value="神奈川県" <?php if (isset($kenn) && $kenn === "神奈川県") {echo "selected";} ?>>神奈川県</option>
                <option value="新潟県" <?php if (isset($kenn) && $kenn === "新潟県") {echo "selected";} ?>>新潟県</option>
                <option value="富山県" <?php if (isset($kenn) && $kenn === "富山県") {echo "selected";} ?>>富山県</option>
                <option value="石川県" <?php if (isset($kenn) && $kenn === "石川県") {echo "selected";} ?>>石川県</option>
                <option value="福井県" <?php if (isset($kenn) && $kenn === "福井県") {echo "selected";} ?>>福井県</option>
                <option value="山梨県" <?php if (isset($kenn) && $kenn === "山梨県") {echo "selected";} ?>>山梨県</option>
                <option value="長野県" <?php if (isset($kenn) && $kenn === "長野県") {echo "selected";} ?>>長野県</option>
                <option value="岐阜県" <?php if (isset($kenn) && $kenn === "岐阜県") {echo "selected";} ?>>岐阜県</option>
                <option value="静岡県" <?php if (isset($kenn) && $kenn === "静岡県") {echo "selected";} ?>>静岡県</option>
                <option value="愛知県" <?php if (isset($kenn) && $kenn === "愛知県") {echo "selected";} ?>>愛知県</option>
                <option value="三重県" <?php if (isset($kenn) && $kenn === "三重県") {echo "selected";} ?>>三重県</option>
                <option value="滋賀県" <?php if (isset($kenn) && $kenn === "滋賀県") {echo "selected";} ?>>滋賀県</option>
                <option value="京都府" <?php if (isset($kenn) && $kenn === "京都府") {echo "selected";} ?>>京都府</option>
                <option value="大阪府" <?php if (isset($kenn) && $kenn === "大阪府") {echo "selected";} ?>>大阪府</option>
                <option value="兵庫県" <?php if (isset($kenn) && $kenn === "兵庫県") {echo "selected";} ?>>兵庫県</option>
                <option value="奈良県" <?php if (isset($kenn) && $kenn === "奈良県") {echo "selected";} ?>>奈良県</option>
                <option value="和歌山県" <?php if (isset($kenn) && $kenn === "和歌山県") {echo "selected";} ?>>和歌山県</option>
                <option value="鳥取県" <?php if (isset($kenn) && $kenn === "鳥取県") {echo "selected";} ?>>鳥取県</option>
                <option value="島根県" <?php if (isset($kenn) && $kenn === "島根県") {echo "selected";} ?>>島根県</option>
                <option value="岡山県" <?php if (isset($kenn) && $kenn === "岡山県") {echo "selected";} ?>>岡山県</option>
                <option value="広島県" <?php if (isset($kenn) && $kenn === "広島県") {echo "selected";} ?>>広島県</option>
                <option value="山口県" <?php if (isset($kenn) && $kenn === "山口県") {echo "selected";} ?>>山口県</option>
                <option value="徳島県" <?php if (isset($kenn) && $kenn === "徳島県") {echo "selected";} ?>>徳島県</option>
                <option value="香川県" <?php if (isset($kenn) && $kenn === "香川県") {echo "selected";} ?>>香川県</option>
                <option value="愛媛県" <?php if (isset($kenn) && $kenn === "愛媛県") {echo "selected";} ?>>愛媛県</option>
                <option value="高知県" <?php if (isset($kenn) && $kenn === "高知県") {echo "selected";} ?>>高知県</option>
                <option value="福岡県" <?php if (isset($kenn) && $kenn === "福岡県") {echo "selected";} ?>>福岡県</option>
                <option value="佐賀県" <?php if (isset($kenn) && $kenn === "佐賀県") {echo "selected";} ?>>佐賀県</option>
                <option value="長崎県" <?php if (isset($kenn) && $kenn === "長崎県") {echo "selected";} ?>>長崎県</option>
                <option value="熊本県" <?php if (isset($kenn) && $kenn === "熊本県") {echo "selected";} ?>>熊本県</option>
                <option value="大分県" <?php if (isset($kenn) && $kenn === "大分県") {echo "selected";} ?>>大分県</option>
                <option value="宮崎県" <?php if (isset($kenn) && $kenn === "宮崎県") {echo "selected";} ?>>宮崎県</option>
                <option value="鹿児島県" <?php if (isset($kenn) && $kenn === "鹿児島県") {echo "selected";} ?>>鹿児島県</option>
                <option value="沖縄県" <?php if (isset($kenn) && $kenn === "沖縄県") {echo "selected";} ?>>沖縄県</option>
            </select>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所(市区町村)</label>
            <input class="required pattern maxlength" data-maxlength="10" data-error-required="住所（市区町村）は必須です。" data-pattern="^[ぁ-ん一-龯ァ-ヶー0-9-+　+]+$" data-error-pattern="住所（市区町村）は「ひらがな」、「漢字」、「数字」、「カタカナ」、「記号（ハイフンとスペース）」が入力可能です。" type="text" name="juusyosiku" id="name" value="<?php if (isset($juusyosiku)) {echo $juusyosiku;} ?>" > 
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（番地）</label>
            <input class="required pattern maxlength" data-maxlength="100" data-error-required="住所（番地）は必須です。" data-pattern="^[ぁ-ん一-龯ァ-ヶー0-9-+　+]+$" data-error-pattern="住所（市区町村）は「ひらがな」、「漢字」、「数字」、「カタカナ」、「記号（ハイフンとスペース）」が入力可能です。" type="text" name="juusyobann" id="name" value="<?php if (isset($juusyobann)) {echo $juusyobann;} ?>"> 
            </li>
        </div>
        
        <div>
            <label>アカウント権限</label>
            <select name="aka" id="account">
                <option value="一般" class="required" <?php if (isset($aka) && $aka === "一般") {echo "selected";} ?>>一般</option>
                <option value="管理者" <?php if (isset($aka) && $aka === "管理者") {echo "selected";} ?>>管理者</option>
            </select>
        </div>
        
        <div>
            <input type="submit" value="確認する" id="kakunin" name="submit">
        </div>
        </ul>
    </form>
    
    <script>
//class="validationForm" と novalidate 属性を指定した form 要素を独自に検証
document.addEventListener('DOMContentLoaded', () => {
  //validationForm クラスを指定した最初の form 要素を取得
  const validationForm = document.querySelector('.validationForm');
  //validationForm クラス を指定した form 要素が存在すれば
  if(validationForm) {
    //エラーを表示する span 要素に付与するクラス名（エラー用のクラス）
    const errorClassName = 'error'; 
    //required クラスを指定された要素の集まり  
    const requiredElems = document.querySelectorAll('.required');
    //pattern クラスを指定された要素の集まり
    const patternElems =  document.querySelectorAll('.pattern');
    //minlength クラスを指定された要素の集まり
    const minlengthElems =  document.querySelectorAll('.minlength');
    //maxlength クラスを指定された要素の集まり
    const maxlengthElems =  document.querySelectorAll('.maxlength');
    //equal-to クラスを指定された要素の集まり
    const equalToElems = document.querySelectorAll('.equal-to'); 
    
    //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
    //elem ：対象の要素
    //errorMessage ：表示するエラーメッセージ
    const createError = (elem, errorMessage) => {
      //span 要素を生成
      const errorSpan = document.createElement('span');
      //error 及び引数に指定されたクラスを追加（設定）
      errorSpan.classList.add(errorClassName);
      //aria-live 属性を設定
      errorSpan.setAttribute('aria-live', 'polite');
      //引数に指定されたエラーメッセージを設定
      errorSpan.textContent = errorMessage;
      //elem の親要素の子要素として追加
      elem.parentNode.appendChild(errorSpan);
    }
 
    //form 要素の submit イベントを使った送信時の処理
    validationForm.addEventListener('submit', (e) => {
      //エラーを表示する要素を全て取得して削除（初期化）
      const errorElems = e.currentTarget.querySelectorAll('.' + errorClassName);
      errorElems.forEach( (elem) => {
        elem.remove(); 
      });
      
      //.required を指定した要素を検証
      requiredElems.forEach( (elem) => {
        //data-error-required 属性（カスタムエラーメッセージ）の値を取得
        const dataError = elem.getAttribute('data-error-required');
        //ラジオボタンの場合
        if(elem.tagName === 'INPUT' && elem.getAttribute('type') === 'radio') {
          //選択状態の最初のラジオボタン要素を取得
          const checkedRadio = elem.parentElement.querySelector('input[type="radio"]:checked');
          //選択状態のラジオボタン要素を取得できない場合
          if(checkedRadio === null) {   
            //エラーメッセージを設定（data-error-required が設定されていればその値を使用）
            const errorMessage = dataError ? dataError : 'いずれか1つを選択してください';
            //エラーを表示する span 要素を追加して表示
            createError(elem, errorMessage);
            //送信を中止
            e.preventDefault();
          }  
        }else if(elem.tagName === 'INPUT' && elem.getAttribute('type') === 'checkbox') {
          //選択状態の最初のチェックボックス要素を取得
          const checkedCheckbox = elem.parentElement.querySelector('input[type="checkbox"]:checked');
          //選択状態のチェックボックス要素を取得できない場合
          if(checkedCheckbox === null) {
            const errorMessage = dataError ? dataError : '少なくとも1つを選択してください';
            createError(elem, errorMessage);
            e.preventDefault();
          } 
        }else{
          const elemValue = elem.value.trim(); 
          //値が空の場合はエラーを表示してフォームの送信を中止
          if(elemValue.length === 0) {
            if(elem.tagName === 'SELECT') {
              const errorMessage = dataError ? dataError : '選択してください';
              createError(elem, errorMessage);
            }else{
              const errorMessage = dataError ? dataError : '入力は必須です';
              createError(elem, errorMessage);
            } 
            e.preventDefault();
          } 
        }  
      });
      
      //.pattern を指定した要素のパターンを検証
      patternElems.forEach( (elem) => {
        //data-pattern 属性の値を取得
        let dataPattern = elem.getAttribute('data-pattern');
        //正規表現パターンを格納する変数
        let pattern;
        //data-error-pattern 属性の値を取得
        const dataError = elem.getAttribute('data-error-pattern');
        //エラーメッセージの初期化
        let errorMessage = '';
        //data-pattern 属性の値が設定されていれば
        if(dataPattern) {
          //data-pattern 属性の値により switch 文で分岐
          switch(dataPattern) {
            //data-pattern 属性の値が email の場合
            case 'email' :
              //検証に使用するパターンを指定
              pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ui;
              errorMessage = dataError ? dataError : 'メールアドレスの形式が正しくありません。';
              break;
            //data-pattern 属性の値が tel の場合
            case 'tel' :
              pattern = /^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/;
              errorMessage = dataError ? dataError : '電話番号の形式が正しくありません。';
              break;
            //data-pattern 属性の値が zip の場合
            case 'zip' :
              pattern = /^\d{3}-{0,1}\d{4}$/;
              errorMessage = dataError ? dataError : '郵便番号の形式が正しくありません。';
              break;
            //data-pattern 属性の値が上記以外の場合
            default :
              //data-pattern 属性の値を使って正規表現パターンを生成
              pattern = new RegExp(dataPattern);
              //デフォルトのエラーメッセージ
              errorMessage = dataError ? dataError : '入力された形式が正しくないようです。';
          } 
        }
 
        //値が空でなければ
        if(elem.value.trim() !=='') {
          //上記で生成したパターンの test() メソッドで値を判定
          if(!pattern.test(elem.value)) {
            //パターンにマッチしなければエラーを表示してフォームの送信を中止
            createError(elem, errorMessage);
            e.preventDefault();
          }
        }
      });
      
      //.minlength を指定した要素のパターンを検証
      minlengthElems.forEach( (elem) => {
        //data-minlength 属性の値（最小文字数）を取得
        let minlength = elem.getAttribute('data-minlength');
        
        //data-minlength 属性の値が設定されていて且つ値が空でなければ
        if(minlength && elem.value !=='') {
          //値が data-minlength 属性で指定された最小文字数より小さければ
          if(elem.value.length < minlength) {
            //data-error-minlength 属性の値を取得
            const dataError = elem.getAttribute('data-error-minlength');
            //エラーメッセージを作成
            const errorMessage = dataError ? dataError : minlength + '文字以上で入力ください';
            createError(elem, errorMessage);
            e.preventDefault();
          }
        }
      });
 
      //.maxlength を指定した要素のパターンを検証
      maxlengthElems.forEach( (elem) => {
        //data-minlength 属性の値（最大文字数）を取得
        let maxlength = elem.getAttribute('data-maxlength');       
        //data-minlength 属性の値が設定されていて且つ値が空でなければ
        if(maxlength && elem.value !=='') {
          //値が data-maxlength 属性で指定された最小文字数より大きければ
          if(elem.value.length > maxlength) {
            //data-error-maxlength 属性の値を取得
            const dataError = elem.getAttribute('data-error-maxlength');
            //エラーメッセージを作成
            const errorMessage = dataError ? dataError : maxlength + '文字以内で入力ください';
            createError(elem, errorMessage);
            e.preventDefault();
          }
        }
      });
      
      //.equal-to を指定した要素を検証
      equalToElems.forEach( (elem) => {
        //比較対象の要素の id 
        const equalToId = elem.getAttribute('data-equal-to');        
        //比較対象の要素
        const equalToElem = document.getElementById(equalToId);
        //値が空でなければ
        if(elem.value.trim() !=='' && equalToElem.value.trim() !==''){
          //2つの値（value）が一致しなければエラーを表示して送信を中止
          if(equalToElem.value !== elem.value) {
            //data-error-equal-to 属性の値を取得
            const dataError = elem.getAttribute('data-error-equal-to'); 
            const errorMessage = dataError ? dataError : '入力された値が異なります';
            createError(elem, errorMessage);
            e.preventDefault();
          }
        }
      });
 
      //エラーの最初の要素を取得
      const errorElem =  validationForm.querySelector('.' + errorClassName);
      //エラーがあればエラーの最初の要素の位置へスクロール
      if(errorElem) {
        const errorElemOffsetTop = errorElem.offsetTop;
        window.scrollTo({
          top: errorElemOffsetTop - 40,  //40px 上に位置を調整
          //スムーススクロール
          behavior: 'smooth'
        });
      }
    }); 
    
    //showCount クラスを指定された要素の集まり
    const showCountElems =  document.querySelectorAll('.showCount');  
 
    //data-maxlengtを指定した要素でshowCountクラスが指定されていれば入力文字数を表示する処理
    showCountElems.forEach( (elem) => {
      //data-maxlength 属性の値を取得
      const dataMaxlength = elem.getAttribute('data-maxlength');  
      //data-maxlength 属性の値が存在し、数値であれば
      if(dataMaxlength && !isNaN(dataMaxlength)) {
        //入力文字数を表示する p 要素を生成
        const countElem = document.createElement('p');
        //生成した p 要素にクラス countSpanWrapper を設定
        countElem.classList.add('countSpanWrapper');
        //p要素のコンテンツを作成（.countSpanを指定したspan要素にカウントを出力。初期値は0）
        countElem.innerHTML = '<span class="countSpan">0</span>/' + parseInt(dataMaxlength);
        //入力文字数を表示する p 要素を追加
        elem.parentNode.appendChild(countElem);
      }
      //input イベントを設定
      elem.addEventListener('input', (e) => {
        //上記で作成したカウントを出力する span 要素を取得
        const countSpan = elem.parentElement.querySelector('.countSpan');
        if(countSpan) {
          //入力されている文字数を取得（e.currentTarget は elem のこと）
          const count = e.currentTarget.value.length;
          //span 要素に文字数を出力
          countSpan.textContent = count;
          //文字数が dataMaxlength（data-maxlength 属性の値）より大きい場合
          if(count > dataMaxlength) {
            //文字を赤色に
            countSpan.style.setProperty('color', 'red');
            //span 要素に overMaxCount クラスを追加
            countSpan.classList.add('overMaxCount');
          }else{
            //dataMaxlength 未満の場合は文字を元に戻し
            countSpan.style.removeProperty('color');
            //span 要素から overMaxCount クラスを削除
            countSpan.classList.remove('overMaxCount');
          }
        }
      });
    });
  }
});
    </script>
        
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>