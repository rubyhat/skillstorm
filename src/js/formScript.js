// Отправка заявки 
$(document).ready(function () {
  $('#form').submit(function () {
    $.ajax({
      type: "POST",
      url: "telegram.php",
      data: $(this).serialize()
    }).done(function () {
      $('.form__note').removeClass('display-none');
      $(this).find('input').val('');
      $('#form').trigger('reset');
      setTimeout(function () {
        $('.form__note').addClass('display-none');
      }, 2000);
    });
    return false;
  });
});
