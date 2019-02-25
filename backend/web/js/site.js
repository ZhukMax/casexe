const api_url = 'http://y2aa-api.test/v1';

const saveGift = () => {
    let _this = $('#site-index-sbtn');

    $.post(api_url + '/gifts',
        {
            type: _this.data('type'),
            gift: _this.data('gift'),
            status: 0
        },
        result => {
            console.log(result);
    }, 'json')
}

const cancelGift = () => {
    $('#site-index-h1').css('display', 'none');
    $('#site-index-sbtn').css('display', 'none');
    $('#site-index-wbtn').css('display', 'none');
    $('#site-index-btn').css('display', 'inline-block');
    $('#site-index-gift').text("");
}

const getGift = () => {
    $.get(api_url + '/gifts/new', result => {
        $('#site-index-h1').css('display', 'block');
        $('#site-index-btn').css('display', 'none');
        $('#site-index-sbtn')
            .css('display', 'inline-block')
            .data('type', result.type)
            .data('gift', result.gift);

        $('#site-index-wbtn')
            .css('display', 'inline-block')
            .click(() => cancelGift());
        
        let type = '';
        if (result.type == 'money') {
            type = ' рублей.';
        } else if (result.type == 'points') {
            type = ' баллов.';
        }
        $('#site-index-gift').text("Ваш подарок: "+result.gift+type);
    }, 'json')
}

$(document).ready(() => {
    $('#site-index-btn').click(() => getGift())
    $('#site-index-sbtn').click(() => saveGift())
})