@extends('layouts.app')

@section('content')

<section class="splash-container bg-light">
<div class="container row mx-auto">
<div style="background: url({{ URL::to('/') }}/images/splash.png) no-repeat center" class="col-sm-6 vh-100"></div>

    <div class="splash-text col-sm-6 align-self-center text-center">
        <h1>EZ-Street</h1>
        <p>Help your child get organized for remote work</p>
    </div>
</div>
    
</section>

<section class="py-5">
<div class="container row mx-auto">


<div class="col-sm-6">
<img src="/images/todo-list.png" alt="Todo List">

</div>


<div class="col-sm-6 align-self-center text-center">
<h3 class="section-heading">Plan your day ahead of time</h3>
<p>Visualizing your tasks is important to work on them in order. With this app, you can easily create your task list by simply arranging the picture cards. All picture cards support voice sounds. In addition, you can create your original picture cards with your own pictures and voice recordings.</p>
</div>
</div>
</section>

<section class="py-5">
<div class="container row mx-auto">
<div class="col-sm-6 align-self-center text-center">
<h3 class="section-heading">Schedule time to connect</h3>
<p>There's no way around it (ethically); the world as we know it is rapidly changing and social distancing is a must right now. Nobody feels that more than children, who are used to high-fiving, hugging and playing with friends. Keep those moments alive by setting virtual play dates so your child can experience some normalcy.</p>
</div>

<div class="col-sm-6">
<img src="/images/video-chat.png" alt="Video chat with friends">
</div>
</div>
</section>

@endsection