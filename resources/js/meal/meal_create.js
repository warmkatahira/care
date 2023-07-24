// 「とうろくする」ボタンが押下されたら
$('#meal_create_enter').on("click",function(){
    // 処理を実行するか確認
    const result = window.confirm("「ごはんのとうろく」を実行しますか？");
    // 「はい」が押下されたらsubmit、「いいえ」が押下されたら処理キャンセル
    if(result == true) {
        $("#meal_create_form").submit();
    }
});