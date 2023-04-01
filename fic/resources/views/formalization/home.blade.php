@extends('./template')

@section('content')

<h3 class="h3 text-center title-h3">Por que formalizar tu emprendimiento</h3>
<div class="timeline">
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
    <div class="timeline__event__icon ">
      <i class="lni-cake"></i>

    </div>
    <div class="timeline__event__date">
        <img src="{{ asset('img/ley-de-proteccion.png') }}" class="h-12">
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
        Protección legal:
      </div>
      <div class="timeline__event__description">
        <p> Al registrar tu empresa, tendrás protección legal en caso de que surja algún conflicto o demanda. Esto te permitirá proteger tus activos y tu patrimonio personal.</p>
      </div>
    </div>
  </div>
  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
    <div class="timeline__event__icon">
      <i class="lni-burger"></i>

    </div>
    <div class="timeline__event__date">
        <img src="{{ asset('img/financiar.png') }}" class="h-12">
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Acceso a financiamiento:
      </div>
      <div class="timeline__event__description">
        <p> Al formalizar tu empresa, tendrás acceso a financiamiento a través de créditos bancarios y otros programas gubernamentales. Esto te permitirá obtener capital para hacer crecer tu negocio.</p>
      </div>
    </div>
  </div>
  <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
    <div class="timeline__event__icon">
      <i class="lni-slim"></i>

    </div>
    <div class="timeline__event__date">
        <img src="{{ asset('img/confiar.png') }}" class="h-12">
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Mayor confianza de los clientes:
      </div>
      <div class="timeline__event__description">
        <p>Al ser una empresa formalmente registrada, los clientes tendrán mayor confianza en tus productos o servicios. Esto te permitirá aumentar tus ventas y mejorar tu reputación en el mercado.</p>
      </div>

    </div>
  </div>
  <div class="timeline__event animated fadeInUp timeline__event--type1">
    <div class="timeline__event__icon">
      <i class="lni-cake"></i>

    </div>
    <div class="timeline__event__date">
        <img src="{{ asset('img/crecimiento.png') }}" class="h-12">
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
        Crecimiento sostenible:
      </div>
      <div class="timeline__event__description">
        <p>Al formalizar tu empresa, tendrás una estructura organizativa clara y definida, lo cual te permitirá planificar mejor el crecimiento de tu empresa a largo plazo.</p>
      </div>
    </div>
  </div>
</div>

<div class="mt-5 width-3">
    <a class="p-2 nav-link a-color-cs btn btn-primary-cs" href="{{ route('form') }}">{{__('Quiero Formalizar mi emprendimiento!')}}</a>
</div>
@endsection
