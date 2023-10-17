      
  <!--
        *A top navigation bar
        *a search input where a user can search classrooms
        *A search input that search data through post method
        *Below the navbar is an Dialog - model, which popup when 
        the avatar icon is clicked(js/navbbar.js)
  -->

  <!-- 
      This modal will be handle the following:
      Registration
      Login
      Logout

      TODO: change the context inside
              auth/login.php
              auth/register.php
              auth/logout.php
              into basic login || registration form para dili complex

              !if  nanay basic na login || rergistration form pede na idelete ang
              folder na 'Includes'
  -->
   <nav>
      <div class="navbar" id="navbar">
        <a>
          <div class="profile-holder">
            <button id="profileBtn">
              <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
              <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="click"  colors="primary:#121331,secondary:#000000" style="width:36px;height:36px;margin-bottom:-5px;">
              </lord-icon>
            </button>
          </div>
        </a>
        <div class="search-container">
          <form class="searchform" action="../search/search.php" method="post">
            <a>
              <button type="submit" class="submits">
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="click" colors="primary:#121331,secondary:#242424" style="width:30px;height:30px;">
                </lord-icon>
              </button>
              </a>
              <a>
                <input id="search" type="text" name="usersearch" placeholder="Search...">
            </a>
          </form>
        </div>
      </div>
    </nav>
    <div class="account-list">
      <dialog id="theDialog">
        <div class="account">
          <div><a href="auth/login.php"><button id="acc1">Login</button></a></div>
          <div><a href="auth/register.php"><button id="acc2">Register</button></a></div>
          <div><a href=""><button id="acc3">Logout</button></a></div>
        </div>
      </dialog>
    </div>

    