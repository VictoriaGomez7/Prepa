
{!! Form::open(['route'=>['materia.destroy','a'],'method'=>'GET','files'=>false]) !!}
@if(isset($materias))
@if (count($materias)>0)
    @foreach ($materias as $materia)          
        
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave }}" value="{{$materia->Clave }}   {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif
@if(isset($materias2))
@if (count($materias2)>0)
    @foreach ($materias2 as $materia)          
       
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave }}" value="{{$materia->Clave }} {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif
<br>
{!! Form::close() !!}