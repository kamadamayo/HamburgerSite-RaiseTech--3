'use strict';

//クリックをしたらサイドバーを表示する
$(document).ready(function(){
    $('#c-btn').on('click', function(){
        $('#p-slidemenu').addClass('is-active');
        $('#overlay').addClass('is-over');
    });
    $('#c-btn__active').on('click',function(){
        $('#p-slidemenu').removeClass('is-active');
        $('#overlay').removeClass('is-over');
    });
});

//画面幅変更時に分岐点でサイドバーのtranstionがちらつくのを消すための処理
//window幅によってクラスを削除する
$(window).resize(function(){
    var x = $(window).width();//windowの幅をxに代入
    var pc = 1024;//windowの分岐幅をyに代入
    if (pc <= x) {
        $('#p-slidemenu').removeClass('p-slidemenu is-active');
        } else {
        $('#p-slidemenu').addClass('p-slidemenu is-none');
        } 
});