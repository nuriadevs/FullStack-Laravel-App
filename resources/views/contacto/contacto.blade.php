@extends('layouts.app')
@section('title', 'Contacto')
@section('contenido')
    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-7 mx-auto text-center">
                    <h3>Contacta con nosotros</h3>
                    <p>
                        Si tiene alguna duda no dudes en preguntar.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card overflow-hidden border border-black">
                        <div class="row">
                            <div class="col-lg-7">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6396.702052068626!2d-4.418356452533955!3d36.71412995565584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f7ec15ef7af9%3A0x40cdd6b5233af198!2sLa%20Farola%20de%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1715191177037!5m2!1ses!2ses"
                                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-5 position-relative bg-cover px-0 border border-black ">
                                <form class="p-3" id="contact-form" method="">
                                    <div class="card-header px-4 py-sm-5 py-3 ">
                                        <h2>Contacto</h2>
                                        <p class="lead"> Nos gustaría hablar contigo.</p>
                                    </div>
                                    <div class="card-body pt-1">
                                        <div class="row">
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static">
                                                    <label>Mi nombre es</label>
                                                    <input class="form-control" placeholder="Nombre" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static">
                                                    <label>Tu correo</label>
                                                    <input class="form-control" placeholder="Correo electrónico"
                                                        type="email" name="email">
                                                </div>
                                            </div>

                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static">
                                                    <label>Tipo de consulta</label>
                                                    <input class="form-control" placeholder="Mi duda" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-0">
                                                    <label>Tu mensaje</label>
                                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Tengo una duda acerca de..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
