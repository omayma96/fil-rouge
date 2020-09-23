 <h2>Editer votre Portfolio </h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
Projet ajouté avec succès!
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
Quelque chose ne va pas avec votre image, veuillez vérifier le type ou la taille!
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Capture d'écran / image du projet (minimum 600 px X 600 px, taille maximale 2 Mo)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choisir une image...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nom du projet</label>
      <input type="name" name="projectname" class="form-control" id="name" placeholder="ToDo List Maker">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" class="form-control" id="email" placeholder="https://github.com/omayma96/filrouge">
    </div>
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtoportfolio" class="btn btn-primary" value="Add To Portfolio">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM portfolio";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Capture d'écran / image du projet (minimum 600 px X 600 px, taille maximale 2 Mo)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choisir une image...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Nom du projet</label>
      <input type="name" name="projectname" value="<?=$data2['projectname']?>" class="form-control" id="name" placeholder="ToDo List Maker">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Lien du projet</label>
      <input type="text" name="projectlink" value="<?=$data2['projectlink']?>" class="form-control" id="email" placeholder="https://github.com/omayma96/filrouge">
    </div>

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visiter</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/uportfolio.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Supprimer
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  