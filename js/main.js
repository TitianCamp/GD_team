const button = document.querySelector("#burger");
const menu = document.querySelector(".nav-b");

button.addEventListener("click", () => {
    menu.classList.toggle("active");
})

console.log(jQuery().jquery);

// Submit subscription form using Ajax
$('#subscription_form').on('submit', function (e) {
    e.preventDefault();
    let $form = $(this);
    $.ajax({
        type: 'POST',
        url: '../php/subscription_ajax.php',
        data: $form.serialize()
    }).done(function () {
        $form[0].reset()
        alert('Вас прийнято до золотого світанку!')
    }).fail(function () {
        alert('Ви занадто слабкі(')
    });
});