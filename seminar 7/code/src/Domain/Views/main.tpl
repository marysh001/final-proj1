<!DOCTYPE html>
<html class= "h-100">
    <head>
    <meta charset = "UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css"
    rel= "stylesheet"
    integrity= "sha384-9ndCyUaIbzAi2FUVXJiOCjmCapSm07npJef0486qhLnuZ2cdeRh002iuK6FUUVM"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"></script>
        <title>{{ title }}</title>
    </head>
    <body class="d-flex flex-column h-100">
        <div class="container">
            {header class="d-flex flex-wrap align-items-center justify-content-center
            justfy-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark
            text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img"
            aria-label="Bootstrap"><use xlink^href="#bootstrap"></use></svg>
            </a>}
        </div>
        <div id="menu">
            <a href="/">Главная</a>
            <a href="/user">Пользователи</a>
        </div>
        {% include content_template_name %}
    </body>
</html>