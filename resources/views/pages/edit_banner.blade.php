@extends('master')
@section('title','Editbanner')
@section('content')
﻿   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Preview</th>
      <th scope="col">File Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($banner as $index => $item)
<!--     <tr>
      <th scope="row">1</th>
      <td><img style="height: 50px; width: 50px" src="upload/polina-kuzovkova-TsMuMM_qVec-unsplash.jpg"></td>
      <td>
          <button class="btn btn-danger">Delete</button>
      </td>
    </tr> -->
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td><img src="upload/{{$item->imgurl}}" style="height: 50px; width: 50px"></td>
      <td>{{$item->imgurl}}</td>
      <td>
           <a href="{{route('delete.banner' , ['id' => $item->id])}}"><button class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


    <form action="{{ route('edit.banner') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="filesTest" required="true">
        <br/>
        <input type="submit" value="upload">
    </form>
@endsection