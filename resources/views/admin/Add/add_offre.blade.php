<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AJOUTER UNE OFFRE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/managment/ajout/offre" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Titre</label>
                <input type="text" class="form-control" name="infos" placeholder="Exemple:Clôture d’un terrain de 300m2" required="">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Coût de contruction</label>
                <input type="text" class="form-control" name="cout" placeholder="Le Coût de construction" required="">
            </div>
            <div class="form-group col-sm-12">
              <label> Image (taille: 678*694)</label>
              <input type="file" class="form-control" name="photo" required>
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <label class="control-label">La description (Facultatif)</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="4" ></textarea>
            </div>
          </div>

          <br><br>
          <div class="form-group col-12" align="center">
            <button class="btn btn-primary" type="submit" style="width: 150px;">
            <i class="fa fa-save"></i>
              <font style="vertical-align: inherit;">PUBLIER</font></font>
            </button>
          </div> 
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>