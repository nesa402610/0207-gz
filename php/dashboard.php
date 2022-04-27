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
        <span hidden class="btn save btn-warning">Сохранить</span>
        <span hidden class="btn cancel btn-danger">Отменить</span>
    </p>
    <p class="">Фамилия: <span><?= $_SESSION['last_name'] ?></span>
        <span class="btn edit-btn btn-warning">Изменить</span>
        <span hidden class="btn save btn-warning">Сохранить</span>
        <span hidden class="btn cancel btn-danger">Отменить</span>
    </p>
    <p class="">Email: <span><?= $_SESSION['email'] ?></span>
    </p>
    <p class="">ID: <span><?= $_SESSION['id'] ?></span>
    </p>

</div>
<script>
    let btns = document.querySelectorAll('.edit-btn');
    let saveBtns = document.querySelectorAll('.save')
    let cancelBtns = document.querySelectorAll('.cancel')
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => {
            let value = btns[i].previousElementSibling.innerText;
            btns[i].previousElementSibling.innerHTML = `<input type="text" value="${value}"/>`;
            saveBtns[i].hidden = false;
            cancelBtns[i].hidden = false;
            btns[i].hidden = true;

            saveBtns[i].addEventListener('click', ()=>{
                value = btns[i].previousElementSibling.children[0].value
                btns[i].previousElementSibling.innerHTML = value;
                saveBtns[i].hidden = true;
                cancelBtns[i].hidden = true;
                btns[i].hidden = false;
            })

            cancelBtns[i].addEventListener('click', ()=>{
                btns[i].previousElementSibling.innerHTML = value;
                saveBtns[i].hidden = true;
                cancelBtns[i].hidden = true;
                btns[i].hidden = false;

            })
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