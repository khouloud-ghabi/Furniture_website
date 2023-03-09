
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style  type="text/css">
        .title{
            color:white;
            padding-top:25px;
            front-size:25px;
        }
        label{
            display: inline-block;
            width: 200px;
            background-color: rgb(247, 178, 31)
        }


    </style>

  </head>
  <body>



      @include('admin.sidebar')

      @include('admin.navbar')


<!-- contact -->



@if (session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}

</div>
@endif

<div class="container-fluid page-body-wrapper">

    <div class="container" align="center">
<h1 class="title"><b>Contact Us</b></h1>


<form action="{{url('contact')}}" method="post" enctype="multipart/form-data">

    @csrf

<div style="padding:15px;">
<label>Name</label><br>
<input style="color:rgb(0, 0, 0);" type="text" name="name" placeholder="Send your name" required="">
</div>

<div style="padding:15px;">
<label>Subject</label><br>
<input style="color:black;" type="text" name="subject" placeholder="Subject" required="">
</div>

<div style="padding:15px;">
<label>Email</label><br>
<input style="color:black;" type="email" name="email" placeholder="Send you email" required="">
</div>

<div style="padding:15px;">

<textarea style="color:black;" type="text" name="message" placeholder="Message" required=""></textarea>
</div>

<div style="padding:15px;">

<input class="btn btn-success" type="submit">

</div>

</form>





<!-- //contact -->




        @include('admin.script')
  </body>
</html>
