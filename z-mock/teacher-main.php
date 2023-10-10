
  
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

  <div class="displays">
    <dialog class="dialog" id="dialog1">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
        Do you want to use this room1?
      </div>
      <div class="display-buttons">
      <form method="post" action="../private-includes/update.php">
        <button type="submit" name="classroomId" style="background-color:#f0f0f0;" value="1">Yes</button>
    </form>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>

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
  <div class="displays">
    <dialog class="dialog" id="dialog2">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
        Do you want to use this room2?
      </div>
      <div class="display-buttons">
        <button>Yes</button>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>

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
  <div class="displays">
    <dialog class="dialog" id="dialog3">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
        Do you want to use this room3?
      </div>
      <div class="display-buttons">
        <button>Yes</button>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>

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

  <div class="displays">
    <dialog class="dialog" id="dialog4">
      <div class="dialog-content">
      <div class="display-close">x</div>
      <div class="display-header">
        Do you want to use this room4?
      </div>
      <div class="display-buttons">
        <button>Yes</button>
        <button class="noway">No</button>
      </div>
      </div>
    </dialog>
  </div>

</main>
<script>
function setupModalAndDialog(modalId, dialogId) {
    const modal = document.getElementById(modalId);
    const dialog = document.getElementById(dialogId);

    modal.addEventListener('click', () => {
      dialog.showModal();
    });

     const closeButton = dialog.querySelector('.noway');
     closeButton.addEventListener('click', () => {
      dialog.close();
    });
    const closeIcon = dialog.querySelector('.display-close'); 
  closeIcon.addEventListener('click', () => {
    dialog.close();
  });
  }

  // Set up event listeners for each modal and dialog
  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');
  setupModalAndDialog('modal4','dialog4');

  // Add more modals and dialogs by calling setupModalAndDialog with different IDs

</script>
