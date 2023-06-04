@extends('Client.index')
@section('content')

    <link rel="stylesheet" href="{{ asset('../../css/actividades.css') }}">
   

    <div class="container">
     <div class="Titulo">
     <h1 style="font-size: 50px !important">Actividades</h1>
     </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
             
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="../../../assets/images/Activi.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                   
                    <h3 class="display-5 text-uppercase mb-0"> Actividades Avaladas por el CEMEDE </h3>
                    </div>
                    <h5 class="text-body mb-4"> En este apartado se muestra la información correspondiente a diferentes actividades organizadas o promovidas por la institución. Si desea hacer solicitud de una actividad diferente a las ofrecidas, por favor comunicarse al correo @... donde lo atenderá el encargado en este tema.</h5>
                      <div class="Video-actividad">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/vlJ5ZprkjN8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      </div>
                    </div>
                </div>
            </div>
           
        </div>

     
    
<div class="row"></div>
  
   




   <div>
        @foreach($actividad as $actividades)
       
            <div id="card-activity" class="blog-card">
                <div class="meta">
                  <div class="photo" style="background-image: url(../../../../images/actividades/{{$actividades->imagen}})">
                  </div>
                  <ul class="details">
                    <li class="author"><a href="#">{{$actividades->lugar}}</a></li>
                    <li class="date">{{$actividades->fecha}}</li>
                    <li class="tags">
                    
                    </li>
                  </ul>
                </div>
                <div id="informacion" class="description">
                    <h1>{{$actividades->titulo}}</h1>
                  <h2>Descripción</h2>
                  <span>{{$actividades->descripcion}}</span>
                </div>
              </div>
         @endforeach
</div>
<div class="pagination">
  {!! $actividad->links() !!}
</div>
@stop
