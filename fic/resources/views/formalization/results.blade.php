@extends('./template')

@section('content')
<section class="timeline_area section_padding_130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center mt-10">
                    <h1 class="h3 mb-5">Pasos para formalizar tu empresa</h1>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Timeline Area-->
                <div class="apland-timeline-area">
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Paso 1</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-text">
                                        <h5 class="h5">Constituir una empresa</h5>
                                        <p class="mt-3">Para constituir tu empresa entra  al siguiente enlace: <a target="_blank" class="a-color-link-cs" href="https://www.registrodeempresasysociedades.cl">registrodeempresasysociedades.cl</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Paso 2</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-text">
                                        <h5 class="h5">Formalizar Ante el SII</h5>
                                        <p class="mt-3">Crea tu cuenta de usuario en el portal del SII e ingresa la información solicitada. <a target="_blank" class="a-color-link-cs" href="https://homer.sii.cl/">homer.sii.cl</a>
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Timeline Content-->
                    <div class="single-timeline-area">
                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <p>Paso 3</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                    <div class="timeline-text">
                                        <h5 class="h5">Presentar documentación en Municipio</h5>
                                        <p class="mt-3 mb-3"> Debes dirigirte al municipio de tu comuna y presenta la documentación solicitada.</p>
                                        <div>
                                            <p class="mb-3">Para el rubro <strong>"{{ $category->name }}"</strong>  en la comuna <strong>"{{ $zone->name }}"</strong> los documentos necesarios son: </p>
                                            <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Documento</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $documents as $document )
                                                      <tr>
                                                        <th scope="row">{{ $loop->index + 1}}</th>
                                                        <td>{{ $document->name }}</td>
                                                      </tr>
                                                    @endforeach

                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

