const button = document.querySelector("#burger");
const menu = document.querySelector(".nav-b");

button.addEventListener("click", () => {
    menu.classList.toggle("active");
})

console.log(jQuery().jquery);
// Submit subscription form using Ajax
$(document).ready(function () {
    $('#subscription_form').on('submit', function (e) {
        e.preventDefault();
        let login = document.getElementsByName('name')[0].value;
        let email = document.getElementsByName('email')[0].value;
        if (login === 'TitianCamp' && email === 'mlesuk08@gmail.com') {
            window.location.href = 'folowers.php';
        } else {
            var $form = $(this);
            $.ajax({
                type: 'POST',
                url: 'subscription_ajax.php',
                data: $form.serialize()
            }).done(function () {
                $form[0].reset();
                alert('Thank you for the subscription!');
            }).fail(function () {
                alert('Something went wrong');
            });
        }
    });
});