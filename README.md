# Приложение компании "Trans"
**Создать в корневой папке .env с переменными окружения:**</br>
`HTTP3_PORT=443`</br>
`HTTPS_PORT=443`</br>
`HTTP_PORT=80`</br>
`DB_NAME=topic`</br>
`DB_PASSWORD=qwerty`</br>
`DB_ROOT_PASSWORD=qwerty`</br>
`DB_USER=usertopic`

**Сборка docker:**</br>
`docker compose -f compose.yaml -f compose.override.yaml up -d --build`
