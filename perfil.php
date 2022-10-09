<?php
session_start();
include_once './php/connection.php'
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./img/productos2/logoshop.png">
    <!-- CDN -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/profilestyle.css">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <meta name="theme-color" content="#712cf9">
    <title>Tu perfil</title>
</head>

<body>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva wishlist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear wishlist</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="rateModal" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Calificar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Puntuación:</label>
                            <img src="./img/productos2/estrellas.png" alt="" style="width: 200px;">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Reseña(opcional):</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Crear wishlist</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="venderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vender nuevo producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" id="crearProducto" action="./php/uploadProduct.php">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name" name="nomProducto">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" id="message-text" name="descPdt"></textarea>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkCoti">
                            <label class="form-check-label" for="flexCheckDefault">
                                Cotizable
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio:$</label> <input name="cotizablePdo" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <input type="text" class="form-control" id="recipient-name" name="precioPdt">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label w-25">Existencia:</label>
                            <input type="text" class="form-control" id="recipient-name" name="existenciaPdt">
                        </div>

                        
                        <div class="mb-3">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                                <input name="foto1" type="file" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                                <label class="btn btn-outline-danger" for="vbtn-radio1">Foto 1</label>
                                <input name="foto2" type="file" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                                <label class="btn btn-outline-danger" for="vbtn-radio2">Foto 2</label>
                                <input name="foto3" type="file" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                                <label class="btn btn-outline-danger" for="vbtn-radio3">Foto 3</label>
                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                                <label class="btn btn-outline-danger" for="vbtn-radio3">Video</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" name="submit" class="btn btn-primary">Crear wishlist</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
            </path>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
            </path>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
            </path>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
            </path>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
            </path>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
            </path>
        </symbol>
        <symbol id="collection" viewBox="0 0 16 16">
            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
            </path>
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
            </path>
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
            </path>
        </symbol>
        <symbol id="chat-quote-fill" viewBox="0 0 16 16">
            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z">
            </path>
        </symbol>
        <symbol id="cpu-fill" viewBox="0 0 16 16">
            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
            <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z">
            </path>
        </symbol>
        <symbol id="gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z">
            </path>
        </symbol>
        <symbol id="speedometer" viewBox="0 0 16 16">
            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z">
            </path>
            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z">
            </path>
        </symbol>
        <symbol id="toggles2" viewBox="0 0 16 16">
            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
            <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z">
            </path>
            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
        </symbol>
        <symbol id="tools" viewBox="0 0 16 16">
            <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z">
            </path>
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
            </path>
        </symbol>
        <symbol id="geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z">
            </path>
        </symbol>

        <symbol id="star" viewBox="0 0 16 16">
            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
        </symbol>
    </svg>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img class="bi me-2" width="40" height="32" src="./img/productos2/logoshop.png" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.html" class="nav-link px-2 link-secondary">Inicio</a></li>
                    <li><a href="./platillaProductos.html" class="nav-link px-2 link-dark">Productos</a></li>
                    <li><a href="./loginNew.html" class="nav-link px-2 link-dark">Conviertete en vendedor</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
                </form>

                <!-- If there's an user signed in, we hide the buttons and show his profile picture -->
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<div class='dropdown text-end col-lg-auto mb-3 mb-lg-0 me-lg-3'>
                        <a href='#' class='d-block link-dark text-decoration-none dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                            <img src='./img/Productos/jinx.jpg' alt='mdo' width='32' height='32' class='rounded-circle'>
                        </a>
                        <ul class='dropdown-menu text-small'>
                            <li><a class='dropdown-item' href='./perfil.html'>Perfil</a></li>
                            <li>
                                <hr class='dropdown-divider'>
                            </li>
                            <li><a class='dropdown-item' href='./php/logout.php'>Salir</a></li>
                        </ul>
                    </div>";
                } else {
                    echo "<div class='col-11 text-end col-lg-auto mb-3 mb-lg-0 me-lg-3'>
                        <a href='./loginNew.html'><button type='button' class='btn btn-outline-primary me-2' style='border: #f9af23; color: #f9af23;'>Inicia sesión</button></a>
                        <a href='./loginNew.html'><button type='button' class='btn btn-primary' style='background-color: #f9af23; color: #ffffff; border-color: black;'>Registrate</button></a>
                    </div>";
                }
                ?>


                <div class="btn-group">
                    <a href="./carrito.html"><button type="button" class="btn btn-outline-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                            <span class="visually-hidden">Button</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="d-flex flex-nowrap ">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light disableScroll" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                <span class="fs-4">Tu perfil</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto" role="tablist" id="myTab" aria-orientation="vertical">
                <li class="nav-item">
                    <a href="#" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Tu información
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#star"></use>
                        </svg>
                        Wishlists
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Mensajes
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Productos
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark" id="v-pills-extra-tab" data-bs-toggle="pill" data-bs-target="#v-pills-extra" type="button" role="tab" aria-controls="v-pills-extra" aria-selected="false">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Vender productos
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <div class="b-example-divider b-example-vr"></div>
        <div class="tab-content" id="v-pills-tabContent">
            <!-- Datos de usuario -->
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="container">
                    <h1 class="mb-5"></h1>
                    <div class="bg-white shadow rounded-lg d-block d-sm-flex">

                        <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                            <form action="./php/uploadPP.php" method="POST" enctype="multipart/form-data">
                                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <h3 class="mb-4">Tu informacion</h3>

                                    <div class="row">
                                        <div class=" col-md-6 img-circle text-center mb-3">
                                            <!-- //Buscamos la direccion de la foto de perfil y la mostramos
                                            //El else es solo de prueba, el usuario no deberia poder entrar aqui -->
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM users WHERE username= '" . $_SESSION['user'] . "'");
                                            if ($row = mysqli_fetch_assoc($query)) {
                                                if (isset($_SESSION['user'])) {
                                                    echo "<img id='imgPFP' src='" . $row . ['profile_picture'] . "' alt='Image' class='shadow' style='cursor: pointer;'>";
                                                } else {
                                                    echo "<img id='imgPFP' src='./img/brenna-huff-OzKgJ5BP5vU-unsplash.jpg' alt='Image' class='shadow' style='cursor: pointer;'>";
                                                }
                                            }
                                            ?>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Cambiar foto de perfil</label>
                                                <input type="file" name="PFP" onchange="onFileSelected(event)" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Nombre</label>
                                                <input type="text" class="form-control" value="Kiran">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control" value="Acharya">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="kiranacharya287@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sexo</label>
                                                <input type="text" class="form-control" value="Femenino">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direccion</label>
                                                <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
                                        <button class="btn btn-light" onClick="window.location.reload();">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Las wishlists -->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="my-3 p-3 bg-white rounded box-shadow">
                    <h3 class=" pb-2 mb-0">Tus wishlists</h3>
                    <i class="bi bi-lock"></i>
                    <div class="border-bottom border-gray pb-2 mb-0">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Publicar
                            producto</button>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1833e55773e%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1833e55773e%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.541290283203125%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Lista de cumpleaños</strong>
                                <a href="#">Eliminar</a>
                            </div>
                            <span class="d-block">23 productos</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1833e55773e%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1833e55773e%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.541290283203125%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1833e55773e%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1833e55773e%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.541290283203125%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Creando pc</strong>
                                <i class="bi bi-lock"></i>
                                <a href="#"> Eliminar</a>

                            </div>
                            <span class="d-block">23 productos</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1833e55773f%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1833e55773f%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.541290283203125%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Para la chamba</strong>
                                <a href="#">Eliminar</a>
                            </div>
                            <span class="d-block">23 productos</span>
                        </div>
                    </div>
                    <small class="d-block text-right mt-3">
                    </small>
                </div>
            </div>
            <!-- Mensajes -->
            <div class="tab-pane fade chat-place" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <section style="background-color: #eee;">
                    <div class="container py-5">

                        <div class="row">

                            <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                                <h5 class="font-weight-bold mb-3 text-center text-lg-start">Mensajes</h5>

                                <div class="card">
                                    <div class="card-body">

                                        <ul class="list-unstyled mb-0">
                                            <li class="p-2 border-bottom" style="background-color: #eee;">
                                                <a href="#!" class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row">
                                                        <img src="./img/Productos/batallas.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">John Doe</p>
                                                            <p class="small text-muted">Que onda, estas libre?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-muted mb-1">Justo ahora</p>
                                                        <span class="badge bg-danger float-end">1</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="p-2 border-bottom">
                                                <a href="#!" class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row">
                                                        <img src="./img/productos/jinx.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0">Leo Hernandez</p>
                                                            <p class="small text-muted">Puedes cotizar este?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-muted mb-1">5 mins</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-7 col-xl-8">

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between mb-4">
                                        <img src="./img/Productos/jinx.jpg" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between p-3">
                                                <p class="fw-bold mb-0">Leo Hernandez</p>
                                                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 minutos
                                                </p>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-white mb-3">
                                        <div class="form-outline">
                                            <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                                        </div>
                                    </li>
                                    <button type="button" class="btn btn-info btn-rounded float-end">Enviar</button>
                                </ul>

                            </div>

                        </div>

                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="my-3 p-3 bg-white rounded box-shadow">
                    <h3 class=" pb-2 mb-0">Tus compras/ventas</h3>
                    <i class="bi bi-lock"></i>
                    <div class="border-bottom border-gray pb-2 mb-0">
                    </div>
                    <div class="media text-muted pt-3">
                        <img alt="32x32" src="./img/globos.jpg" class="mr-2 rounded" data-holder-rendered="true" style="width: 96px; height: 96px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Globos rosas</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#rateModal">Calificar</a>
                                </div>
                            </div>
                            <span class="d-block">322.00$</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <img alt="32x32" src="./img/slider4.png" class="mr-2 rounded" data-holder-rendered="true" style="width: 96px; height: 96px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Varas de neon para fiesta</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#rateModal">Calificar</a>
                                </div>
                            </div>
                            <span class="d-block">10.00$</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <img alt="32x32" src="./img/producto.jpg" class="mr-2 rounded" data-holder-rendered="true" style="width: 96px; height: 96px; cursor:pointer;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Pluma de varios colores</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#rateModal">Calificar</a>
                                </div>
                            </div>
                            <span class="d-block">423.00$</span>
                        </div>
                    </div>
                    <small class="d-block text-right mt-3">
                    </small>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-extra" role="tabpanel" aria-labelledby="v-pills-extra-tab">
                <div class="my-3 p-3 bg-white rounded box-shadow">
                    <h3 class=" pb-2 mb-0">Tus ventas</h3>
                    <div class="border-bottom border-gray pb-2 mb-0">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#venderModal">Crear una
                            nueva</button>
                    </div>
                    <i class="bi bi-lock"></i>
                    <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Globos rosas</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                </div>
                            </div>
                            <span class="d-block">322.00$</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Varas de neon para fiesta</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                </div>
                            </div>
                            <span class="d-block">10.00$</span>
                        </div>
                    </div>
                    <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">Pluma de varios colores</strong>
                                <div>
                                    <a href="#">Detalles</a>
                                </div>
                            </div>
                            <span class="d-block">423.00$</span>
                        </div>
                    </div>
                    <small class="d-block text-right mt-3">
                    </small>
                </div>
            </div>
        </div>




    </main>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function onFileSelected(event) {
            var selectedFile = event.target.files[0];
            var reader = new FileReader();

            var imgtag = document.getElementById("imgPFP");
            imgtag.title = selectedFile.name;

            reader.onload = function(event) {
                imgtag.src = event.target.result;
            };

            reader.readAsDataURL(selectedFile);
        }
        $('#crearProducto').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $('#crearProducto').attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(result) {
                    
                    if (result === "creado") {
                        swal({
                            icon: 'success',
                            title: 'Producto creado',
                        }).then((value) => {
                            window.location.href = "perfil.php";
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'No fue posible crear tu producto',
                        }).then((value) => {

                        });
                    }

                    if (condition) {} else {}
                }
            })
        })
    </script>

</body>

</html>