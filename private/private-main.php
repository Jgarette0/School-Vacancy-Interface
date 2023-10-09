
  
  <!--This main handles all the images and the name of the classroom-name
  This also show that statuses of each classroom (Vacant or Ocuppied)-->
  
<main class="main">
  
  <div class="div1" id="modal1">
    <div class="diva"><img src="https://images.pexels.com/photos/8423439/pexels-photo-8423439.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">Lecture room</div>
      <div class="status">
      <div><img src="../images/vacant-icon.svg" alt="example" class="vacant" id="vacant"></div>
      <label class="l-vacant"for="vacant">Vacant</label>
    </div>
    </div>
  </div>
  <div class="displays"><dialog class="dialog" id="dialog1">1</dialog></div>

  <div class="div1" id="modal2">
    <div class="diva"><img src="https://images.pexels.com/photos/207691/pexels-photo-207691.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">TVL room</div>
      <div class="status">
      <div><img src="../images/occupied-icon.svg" alt="example" class="occupied" id="occupied"></div>
      <label class="l-occupied"for="occupied">Occupied</label>
    </div>
    </div>
  </div>
  <div class="displays"><dialog class="dialog2" id="dialog2">2</dialog></div>

  <div class="div1" id="modal3">
    <div class="diva"><img src="https://images.pexels.com/photos/256395/pexels-photo-256395.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">St. Augustine room</div>
      <div class="status">
      <div><img src="../images/vacant-icon.svg" alt="example" class="vacant" id="vacant"></div>
      <label class="l-vacant"for="vacant">Vacant</label>
    </div>
    </div>
  </div>
  <div class="displays"><dialog class="dialog3" id="dialog3">3</dialog></div>

  <div class="div1" id="modal4">
    <div class="diva"><img src="https://images.pexels.com/photos/2675061/pexels-photo-2675061.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>
    <div class="divb">
      <div class="classroom-name">Computer Laboratory</div>
      <div class="status">
      <div><img src="../images/occupied-icon.svg" alt="example" class="occupied" id="occupied"></div>
      <label class="l-occupied"for="occupied">Occupied</label>
    </div>
    </div>
  </div>
  <div class="displays"><dialog class="dialog4" id="dialog4">4</dialog></div>
</main>
<script>
function setupModalAndDialog(modalId, dialogId) {
    const modal = document.getElementById(modalId);
    const dialog = document.getElementById(dialogId);

    modal.addEventListener('click', () => {
      dialog.showModal();
    });

    dialog.addEventListener('click', () => {
      dialog.close();
    });
  }

  // Set up event listeners for each modal and dialog
  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');
    setupModalAndDialog('modal4', 'dialog4');

  // Add more modals and dialogs by calling setupModalAndDialog with different IDs

</script>
<style>


.displays dialog{
  height: 150px;
  width: 250px;
  background-color: #fbfbfb;
  border-radius: 20px;
  border: none;
  outline: none;
}
</style>