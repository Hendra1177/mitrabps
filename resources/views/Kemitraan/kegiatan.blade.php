@extends ('layouts.master')
@section('content')
<main class="main-content position-relative border-radius-lg ps">
<div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
<div class="container" style="padding-top:10px; align-left" >
  
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Nama Kegiatan</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Target</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</main>
   
  @endsection  