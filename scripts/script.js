$(function () {
    $('.sum_input').mask("##0", {reverse: true});
    function f() {
        let check_sum = $(this).val();
    }
    $('.sum_input').on('change', f);
    $('input[name=rep_deposit]').on('change', function () {
        let sum_selector = 'input[name=sum_rep_deposit]';
        let value = $(this).val();
        if (value === '0') {
            $(sum_selector).prop('disabled', true);
            $(sum_selector).val('');
        } else {
            $('.sum_input').prop('disabled', false);
        }
    });

    $('.calc-form').on('submit', function (e) {
        e.preventDefault();
        let action = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();

        $.ajax({
            type: method,
            url: action,
            data: data,
            success: function(response)
            {
                if (response !== 'error') {
                    $('.result_sum').html(response+' руб.');
                } else if (response === 'error') {
                    alert('Заполните необходимые данные.');
                }
            }
        });
    })
})

