// 「とうろくする」ボタンが押下されたら
$('#weight_create_enter').on("click",function(){
    // 処理を実行するか確認
    const result = window.confirm("「たいじゅうのとうろく」を実行しますか？");
    // 「はい」が押下されたらsubmit、「いいえ」が押下されたら処理キャンセル
    if(result == true) {
        $("#weight_create_form").submit();
    }
});