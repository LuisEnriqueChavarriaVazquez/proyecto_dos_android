  <div class="row">
      <div class="col s12 m12">
          <div class="card-panel white">
              <span class="blue-text">
                  <?php include 'conn.php'; ?>
              </span>
          </div>
          <a href="https://proyectodosescomsupersonico.herokuapp.com/" 
             class="s12 m12 waves-effect waves-light btn white blue-text"
             style="width: 100%;">
              <i class="material-icons left">refresh</i>Refrescar
          </a>

          <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn white blue-text modal-trigger" href="#modal1">
                <i class="material-icons left">refresh</i>Integrantes
            </a>
      </div>
  </div>

  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Datos del equipo.</h4>
      <p>* Chavarría Vázquez Luis Enrique. <br>
      * Machorro Vences Ricardo Alberto
      * Juarez Espinosa Ulises.
      * Esquivel Luna Adan.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo</a>
    </div>
  </div>