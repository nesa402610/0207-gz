<?php
session_start()
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          crossorigin="anonymous">
    <title>Личный кабинет</title>
</head>
<body class="bg-dark">
<div class="container text-white">
    <p>Имя: <span><?= $_SESSION['first_name'] ?></span>
        <span class="btn edit-btn btn-warning">Изменить</span>
        <span hidden data-item="first_name" class="btn save btn-warning">Сохранить</span>
        <span hidden class="btn cancel btn-danger">Отменить</span>
    </p>
    <p class="">Фамилия: <span><?= $_SESSION['last_name'] ?></span>
        <span class="btn edit-btn btn-warning">Изменить</span>
        <span hidden data-item="last_name" class="btn save btn-warning">Сохранить</span>
        <span hidden class="btn cancel btn-danger">Отменить</span>
    </p>
    <p class="">Email: <span><?= $_SESSION['email'] ?></span>
    </p>
    <p class="">ID: <span><?= $_SESSION['id'] ?></span>
    </p>

</div>
<script>
    let edit_buttons = document.querySelectorAll(".edit-btn");
    let save_buttons = document.querySelectorAll(".save");
    let cancel_buttons = document.querySelectorAll(".cancel");
    for (let i = 0; i < edit_buttons.length; i++) {
        let value = edit_buttons[i].previousElementSibling.innerText;
        edit_buttons[i].addEventListener("click", () => {
            edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value = "${value}">`;
            save_buttons[i].hidden = false;
            cancel_buttons[i].hidden = false;
            edit_buttons[i].hidden = true;
        });
        save_buttons[i].addEventListener("click", async () => {
            value = edit_buttons[i].previousElementSibling.firstElementChild.value;
            edit_buttons[i].previousElementSibling.innerText = value;
            save_buttons[i].hidden = true;
            cancel_buttons[i].hidden = true;
            edit_buttons[i].hidden = false;

            const data = new FormData()
            data.append('value', value);
            data.append('field', save_buttons[i].dataset.item)
            let response = await fetch('updateFields.php', {
                method: 'post',
                body: data,
            })
        });

        cancel_buttons[i].addEventListener("click", () => {
            edit_buttons[i].previousElementSibling.innerText = value;
            save_buttons[i].hidden = true;
            cancel_buttons[i].hidden = true;
            edit_buttons[i].hidden = false;
        });

    }

</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>
</html>