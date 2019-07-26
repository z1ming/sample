@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h3>一切苦乐最终都一样</h3>
    <h3>只为旅途增添花样</h3>
    <p class="lead">
       你现在所看到的是 <a href="http://boiling-eyrie-30354.herokuapp.com/">Laravel<a/>
    的示例项目主页。
    </p>
    <p>
      一切，从这里开始；
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
