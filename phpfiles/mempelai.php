<?php
require_once "../modules/mempelai.php";

use fun5i\modules\nikahyuk\Mempelai;
$mempelai = new Mempelai("asd");
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <table class="table">
        <tbody>
            <tr>
                <th>name</th>
                <td><?php echo $mempelai->getName(); ?></td>
            </tr>
        </tbody>
    </table>
    
  </div>
</div>