<ul class="nav navbar-nav navbar-right ">
        <?php
      foreach ($navItems as $item) {
      	echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
      }
        ?>
      </ul>