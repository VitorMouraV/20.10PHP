@extends('padrao')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{'/img/home1.jpg'}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{'/img/camaro.jpg'}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{'/img/ultimaFT.jpg'}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="controlarCards">
        <div class="card">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/maceratt.jpg'}}" alt="">
            </div>
            <p class="txtCard">
                Incluído nos retoques do MC está um sistema de escapamento esportivo que, além de ser 12 libras mais leve que a tubulação de base, transmite mais do uivo, uivo e uivo do V-8 de 4,7 litros para a cabine. Um pouco mais, de qualquer maneira. Ative o modo esportivo e os desvios de escape se abrem para um prazer auditivo ainda maior.
                Não é nem de longe tão barulhento quanto um Ferrari 458, digamos, mas a Maserati orientada para o luxo, com sua versão mais suave e dócil de quatro manivelas e cárter molhado do V-8 compartilhado, não se importa em ser Ferrari. Ainda assim, gostaríamos de ouvir ainda mais. É como ser obrigado a ouvir Pavarotti com o volume muito baixo.
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-light corBotao">Ver Mais</button>
            </div>
        </div>

        <div class="card">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/porshe.jpg'}}" alt="">
            </div>
            <p class="txtCard">
                A versão turbo da série 997 é equipada com o mesmo motor 3.6 L biturbo usado no 996 Turbo, só que agora ele desenvolve 480 PS (353 kW) e 620 N•m (457 lbf•ft) de torque. Isto se deve em parte à nova turbina de geometria variável (a primeira num veículo com motor de combustão interna), que, essencialmente combina o impulso e as respostas rápidas de uma turbina pequena com a grande potência de uma turbina maior.
                Além de desenvolver maior potência e ter mais flexibilidade, o novo turbo melhorou o consumo de combustível em relação ao 996 Turbo. Graças a essa novidade mecânica, o 997 Turbo vai de 0 a 100 km/h em 3,7 s (ou 3,4, com câmbio Tiptronic) e chega à máxima de 310 km/h. O pacote opcional Sports Chrono eleva o torque a 680 Nm (505 lbf.ft) para curtos períodos (até 10s).
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-light corBotao">Ver Mais</button>
            </div>
        </div>

        <div class="card">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/bmw.jpg'}}" alt="">
            </div>
            <p class="txtCard">
                O BMW M3 , combina as proporções robustas e distintas do seu design de três seções e 4 portas com o estilo esportivo típico de um veículo M. Com os seus impressionantes 510 cv de potência e um torque de 650 Nm. Equipado com um motor BMW M TwinPower Turbo de alto desempenho, transmissão de 8 velocidades M Steptronic com Drivelogic, diferencial M Sport e diversas tecnologias derivadas do automobilismo, a dinâmica máxima ao dirigir é garantida – quer em sua utilização no dia a dia, quer nas pistas de corridas. 
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-light corBotao">Ver Mais</button>
            </div>
        </div>
    </div>
</section>
@endsection