<section class ="container">
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationDefault01" value="Marina" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Nombre de usuario</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">Mail</span>
      <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Provincia</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Cuidad</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Seleccionar...</option>
      <option>Corrientes</option>
      <option>Chaco</option>
      <option>Otro</option>
    </select>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepto las condiciones de uso
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

</section>