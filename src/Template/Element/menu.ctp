
<div class="headder-top">

      <!-- nav -->      <nav>
        <div id="logo">
          <h1>
            <?php
        echo $this->Html->link(
        __('RM'),
          ['controller' => 'Pages', 'action' => 'index', '_full' => true]
          );
          ?>   
          </h1>
        </div>
        
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <?php
        echo $this->Html->link(
        __('Home'),
          ['controller' => 'Pages', 'action' => 'index', '_full' => true]
          );
          ?>
          </li>
          <li>
            <?php
          echo $this->Html->link(
          __('Sales'),
            ['controller' => 'Sales', 'action' => 'index', '_full' => true]
            );
            ?>
              
          </li>
          <li>
            <?php
          echo $this->Html->link(
          __('Product Types'),
            ['controller' => 'ProductTypes', 'action' => 'index', '_full' => true]
            );
            ?>
          </li>
          <li>
            <!-- First Tier Drop Down -->
            <!--<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li><a href="gallery.html" class="drop-text">Gallery</a></li>
                <li><a href="menu.html" class="drop-text">Menu</a></li>
                <li><a href="recipe.html" class="drop-text">Recipes</a></li>
              </ul>
            </li>-->
            <li>
              <?php
          echo $this->Html->link(
          __('Products'),
            ['controller' => 'Products', 'action' => 'index', '_full' => true]
            );
            ?>
            </li>
            <li>
              <?php
          echo $this->Html->link(
          __('Customers'),
            ['controller' => 'Customers', 'action' => 'index', '_full' => true]
            );
            ?>
            </li>
            <li>
              <?php
          echo $this->Html->link(
          __('Admins'),
            ['controller' => 'Users', 'action' => 'index', '_full' => true]
            );
            ?>
            </li>
            <li>
               <?php
            echo $this->Html->link(
            __('Logout'),
              ['controller' => 'Users', 'action' => 'logout', '_full' => true]
              );
              ?>
            </li>
            <li>
              <label for="drop-2" class="toggle toogle-2"><?= __('Language') ?>  <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#"><?= __('Language') ?> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li> 
                  <?php
            echo $this->Html->image("ico/peru.png", [
            "alt" => "Español",
            'url' => ['controller' => 'App', 'action' => 'change-language', 'es_PE'],
            ['class' => 'alinear']
            ]);?>     
               </li>
                <li>
                  <?php
            echo $this->Html->image("ico/us.png", [
            "alt" => "Ingles",
            'url' => ['controller' => 'App', 'action' => 'change-language', 'en_US']
            ]);?>
              
            </li>
                <li>
                  <?php
            echo $this->Html->image("ico/br.png", [
            "alt" => "brazil",
            'url' => ['controller' => 'App', 'action' => 'change-language', 'pr_BR']
            ]);
      ?>
                </li>
              </ul>
            </li>
            
            </li>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
