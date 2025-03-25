# PHP Marvel Estreno

Este es un proyecto en PHP que permite gestionar y visualizar los próximos estrenos de películas de Marvel.

## Tabla de Contenidos

- [Descripción](#descripción)
- [Instalación](#instalación)
- [Uso](#uso)
- [Contribución](#contribución)
- [Licencia](#licencia)

## Descripción

El archivo `aplicacion.php` es el núcleo del proyecto. Este archivo realiza las siguientes funciones:

1. **Obtención de datos desde una API**: Utiliza `cURL` para hacer una solicitud a la API `https://whenisthenextmcufilm.com/api` y obtiene información sobre los próximos estrenos de Marvel.
2. **Decodificación de la respuesta JSON**: La respuesta de la API se decodifica de JSON a un array asociativo de PHP.
3. **Visualización de los datos**: Los datos obtenidos se muestran en una página web con el siguiente formato:
    - Título de la película.
    - Fecha de estreno.
    - Días faltantes para el estreno.
    - Tipo de producción.
    - Póster de la película.
    - Resumen de la película.

El archivo también incluye dos secciones que muestran los datos del próximo estreno y la siguiente producción de Marvel.

## Instalación

Para instalar y configurar este proyecto en tu máquina local, sigue estos pasos:

1. Clona este repositorio:
    ```bash
    git clone https://github.com/pbon7477/php_marvel_estreno.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd php_marvel_estreno
    ```

3. Instala las dependencias necesarias (si aplica):
    ```bash
    composer install
    ```

## Uso

Para usar este proyecto, sigue estos pasos:

1. Inicia el servidor local:
    ```bash
    php -S localhost:8000
    ```

2. Abre tu navegador y visita:
    ```
    http://localhost:8000
    ```

3. La página mostrará la información más reciente sobre los próximos estrenos de Marvel obtenida desde la API.

## Contribución

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Envía tus cambios a tu fork (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request en GitHub.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.
