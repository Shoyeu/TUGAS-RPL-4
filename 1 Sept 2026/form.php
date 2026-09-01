<?php include "navbar.php"; 

 
?>  

<div class ="container">
    
    <div class="container">
  <div class="row align-items-start">
    <div class="col-2">
      <!-- One of three columns -->
    </div>
    <div class="col-8">
      <!-- awal card -->
        <div class="card">
        <div class="card-header">
          Form
        </div>
         <div class="card-body">
<form>
  <div class="mb-3">
    <label for="exampleInputNamaDepan" class="form-label">Nama Depan</label>
    <input type="text" class="form-control" id="exampleInputNamaDepan" aria-describedby="NamaDepan">
  </div>
  <div class="mb-3">
    <label for="exampleInputNamaBelakang" class="form-label">Nama Belakang</label>
    <input type="text" class="form-control" id="exampleInputNamaBelakang" aria-describedby="NamaBelakang">
  </div>
  <div class="mb-3">
    <label for="exampleInputKelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputKelas" aria-describedby="Kelas">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
      <!-- akhir card --> 
    </div>
    <div class="col-2">
      <!-- One of three columns -->
    </div>
  </div>
</div>
    
    
    
</div>


<?php include "script.php"; ?>
