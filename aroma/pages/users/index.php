<?php session_start()?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
          crossorigin="anonymous">

    <title>Личный кабинет</title>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link"
                   id="profileTab"
                   data-toggle="pill"
                   href="#v-pills-profile"
                   role="tab"
                   aria-controls="v-pills-profile"
                   aria-selected="false">Профиль</a>
                <a class="nav-link"
                   id="messagesTab"
                   data-toggle="pill"
                   href="#v-pills-messages"
                   role="tab"
                   aria-controls="v-pills-messages"
                   aria-selected="false">Сообщения</a>
                <a class="nav-link"
                   id="settingsTab"
                   data-toggle="pill"
                   href="#v-pills-settings"
                   role="tab"
                   aria-controls="v-pills-settings"
                   aria-selected="false">Настройки</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="../img/blog/author.png" alt="">
                        </div>
                        <div class="col-sm-9">
                            <h2>О себе</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste iusto laudantium
                               minus nesciunt non numquam odit praesentium quaerat quas quia, sequi voluptatum! Aliquid
                               aut
                               consequatur inventore nemo pariatur vero.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-3">
                                <img src="../img/blog/next.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h5>
                                    Юлия Семенова
                                </h5>
                                <p>Да, завтра могу</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-3">
                                <img src="../img/blog/c5.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h5>
                                    Семен Семенов
                                </h5>
                                <p>Завтра как?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-3">
                                <img src="../img/blog/c5.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h5>
                                    Семен Семенов
                                </h5>
                                <p>Поехали завтра на рыбалку</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-3">
                                <img src="../img/blog/author.png" width="60" alt="">
                            </div>
                            <div class="col-9">
                                <h5>
                                    Петр Петров
                                </h5>
                                <p>Я за удочками</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                                <textarea name="" id="" cols="40" rows="1"></textarea>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-warning">Отправить</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <h2>Страница с настройками</h2>
                    <p>Имя: <span><?= $_SESSION['name']?></span>
                    <span  class="btn btn-primary">Изменить</span>
                    </p>
                    <p>Фамилия: <span><?= $_SESSION['lastname']?></span>
                    <span  class="btn btn-primary">Изменить</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script>
    let path = location.pathname.split('/')[3];
    // $(window).on('popstate', function (e) {
    //     let pathPop = location.pathname.split('/')[3];
    //     if (pathPop == 'profile') {
    //         $('#v-pills-profile-tab').tab('show');
    //     } else if (pathPop == 'messages') {
    //         $('#v-pills-messages ').tab('show');
    //
    //     } else if (pathPop == 'settings') {
    //         $('#v-pills-settings ').tab('show');
    //
    //     } else {
    //         // location.href = '/aroma'
    //     }
    // });
    addEventListener('popstate', event => {
        let pathPop = location.pathname.split("/")[3];
        if (pathPop == "profile") {
            $('#profileTab').tab('show');
            console.log(pathPop);
        } else if (pathPop == "messages") {
            $('#messagesTab').tab('show');
            console.log(pathPop);
        } else if (pathPop == "settings") {
            $('#settingsTab').tab('show');
            console.log(pathPop);
        }
    });
    if (path == 'profile') {
        $('#profileTab').tab('show');
    } else if (path == 'messages') {
        $('#messagesTab').tab('show');

    } else if (path == 'settings') {
        $('#settingsTab').tab('show');

    } else {
        // location.href = '/aroma'
    }
    document.getElementById(path + "Tab").classList.add('active');

    let navLinks = document.querySelectorAll('.nav-link');
    for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', () => {
            let page = navLinks[i].getAttribute('aria-controls').split("v-pills-")[1];
            history.pushState('', '', page);
        });
    }
</script>
</body>
</html>