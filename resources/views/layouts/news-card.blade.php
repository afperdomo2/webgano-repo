<!-- Scripts -->
<link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}"> 

<div style="margin-left:4vw; margin-right: 4vw;  padding: none; border:none; ">
   <h1 class="tituloMenu"><strong>Noticias</strong></h1>
    <div class="mb-3 row">
    @forelse ($news as $new)
        <div class="col-sm-6 divNews"  style="">
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <h5 class="tituloNoticia">  {{$new->title}}</h5>
                    <div style="text-align: center;">
                        <img src="{{asset('img/news/'.$new->image)}}" alt="" style="height: 30vh;">
                    </div>
                    <h6 class="caracteristicas" style="margin-top: 4vh;">Fecha Publicación: {{$new->publicationDate}}</h6>
                    <h6 class="caracteristicas">Origen: {{$new->source}}</h6>
                </div>
                <div class="col-sm-6 ">
                    <strong><h6 class="descripcion">{{$new->description}}</h6></strong>
                    <a class="caracteristicas" href="{{$new->reference}}" target="_blank">Fuente</a>
                </div>
            </div>
            
        </div>
    @empty
    @endforelse
    </div>
</div>