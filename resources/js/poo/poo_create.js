// 「とうろくする」ボタンが押下されたら
$('#poo_create_enter').on("click",function(){
    // 処理を実行するか確認
    const result = window.confirm("「うんちのとうろく」を実行しますか？");
    // 「はい」が押下されたらsubmit、「いいえ」が押下されたら処理キャンセル
    if(result == true) {
        $("#poo_create_form").submit();
    }
});