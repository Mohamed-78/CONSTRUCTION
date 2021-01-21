<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MODIFICATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/managment/updated/locations/{{ $single->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Le titre</label>
                <input type="text" class="form-control" name="titre" placeholder="Titre" required="" value="{{ $single->titre }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Le Prix</label>
                <input type="text" class="form-control" name="prix" placeholder="Le prix" required="" value="{{ $single->prix }}">
            </div>
             <div class="form-group col-sm-6">
               <label class="control-label">Lieu</label>
                <input type="text" class="form-control" name="lieu" value="{{ $single->lieu }}" placeholder="Le prix" required="">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Date d'ajout</label>
                <input type="date" class="form-control" name="date_ajout" value="{{ $single->date_ajout }}" placeholder="Le prix" required="">
            </div>
            <div class="form-group col-sm-6">
              <label> Image principale (taille: 1200*800)</label>
              <input type="file" class="form-control" name="photo" value="{{ $single->photo }}">
            </div>
            <div class="form-group col-sm-6">
              <label>Autres  images (Facultatif)</label>
              <input type="file" class="form-control" name="photos[]" multiple="" value="{{ $single->photos }}">
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <label class="control-label">La description</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="4" required="">{{ $single->description }}</textarea>
            </div>
          </div>

          <br><br>
          <div class="form-group col-12" align="center">
            <button class="btn btn-primary" type="submit" style="width: 150px;">
            <i class="fa fa-save"></i>
              <font style="vertical-align: inherit;">MODIFIER</font></font>
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