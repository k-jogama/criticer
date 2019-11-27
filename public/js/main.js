(function() {
    'use strict';

    $(function(){
        $('.msg_success').fadeOut(3000);
    });

    $(function(){
        $('.msg_danger').fadeOut(3000);
    });

    $('.btn-send').on('click', function() {
        var eatlogurl = $('.eatlogurl').val();
        if (!eatlogurl) {
            alert('URLが入力されていません');
            return false;
        }
        if ( !eatlogurl.match(/tabelog.com/)) {
            alert('食べログのURLを入力してください');
            return false;
        }
        $('.form-url').submit();
    });

    $('.eatlog-save').on('click', function () {
        if (!$('.shopname').val()) {
            alert('店舗名を入力してください');
            return false;
        }
        $('.edit-form').submit();
    });

    $('.eatlog-delete').on('click', function () {
        if (!confirm('削除してよろしいですか？')) {
            return false;
        }
    });

})();
