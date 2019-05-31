<!DOCTYPE html>



<html>

    <head>
     

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

          {{--@include('interfazprincipal.image')--}}
          @extends('layouts.app')
          @include('ControlEscolar.CEprincipal')

    </head>
<body>

    
        @if (session()->has('msj2'))
    
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
      <strong>¡¡Error!!</strong>{{session('msj2')}}
    </div>
  @endif

 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">
   <?php
          if(isset($semestre)){ 
         ?>
        <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 50%; left: 5%;" >{{ __(' Grupos: '.$semestre) }}
        </div> <div style="position: absolute;top: 59.5%; left:5%; width: 90%; background-color:#aaa">
          {!! Form::open(['route'=>['grupos.show',$semestre],'method'=>'GET','files'=>false]) !!}     {{ csrf_field() }}
        
         <table width="100%" left="5px" align="center" border="">
          <tr>
           <td  align="center" width="25%">Grupo A

           </td>
            <td  align="center" width="25%">Grupo B</td>
            <td  align="center" width="25%">Hombres</td>
            <td  align="center" width="25%">Mujeres</td>
          </tr>
          <tr>
            <td  align="center"> </td>
            <td  align="center"></td>
            <td  align="center"> </td>
            <td  align="center"></td>
          </tr>
          <tr>
            <td align="justify">
              <p >
              <?php
            
            foreach ($listaA as $r) {
                ?>
               <label for="eliminar{{ $r->Nombre_A }}"> {{$r->Nombre_A}}</label>
                <input type="submit" name="eliminar{{$r->Nombre_A}}" value="Quitar grupo" > 
                <br><br>
                <?php
              }  
          ?>
        </p>
            </td>
            <td align="justify">
              
               <p >
              <?php
            
            foreach ($listaB as $r) {
                ?>
               <label for="eliminar{{ $r->Nombre_A }}"> {{$r->Nombre_A}}</label>
                <input type="submit" name="eliminar{{$r->Nombre_A}}" value="Quitar grupo" > 
                <br><br>
                <?php
              }  
          ?>
        </p>
            </td>
            <td  align="center">
          
          <br><?php
            
            foreach ($alumnosHombres as $r) {
                ?>
               <label for="{{ $r->Numero }}"> {{ $r->Nombre_A }}</label>
               <select name="combo{{$r->Numero}}" >
                  <option value="A" >A</option>
                  <option value="B" >B</option>
              </select>
                <input type="submit" name="{{ $r->Numero }}" value="Aceptar" > 
                <br><br>
                <?php
              }  
          ?>
        </td>
        <td  align="center">
             <?php
         
            foreach ($alumnosMujeres as $r) {
                ?>
               <label for="{{ $r->Numero }}"> {{ $r->Nombre_A }}</label>
               <select name="combo{{$r->Numero}}" >
                  <option value="A">A</option>
                  <option value="B">B</option>
              </select>
                <input type="submit" name="{{ $r->Numero }}" value="Aceptar" > 
                <br><br>

                <?php
              }  
          ?>

        </td>
        </tr>
        </table>
       
        </div>
         <?php 
          }else{
        ?>
         <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 32.5%; left: 25%;" >{{ __(' Grupos: ') }}
        </div> <div style="position: absolute;top: 42.5%; left: 25%; width: 50%; background-color:#aaa">
          <?php } ?>

        <div style="position: absolute;top: 110%; left: 25%; width: 50%; background-color:#aaa" align="center">
        <p>
          
        </p>
       

              <input type="submit" name="A" value="Aceptar" class="btn btn-primary" top="20%" align="center">

              
             
      </div>

      {!! Form::close()!!}
      </section>

    </body>
    </html>