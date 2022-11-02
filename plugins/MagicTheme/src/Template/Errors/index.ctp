<?php $this->assign('title', 'Server errors'); ?>
<div class="info-section">
    <div class="info-section__text">
      <h4>General Info</h4>
      <p>Please review the table above for references to all current known error codes on the server. Please report any and all occurences to a <b>Manager/Developer</b> with required information. <br>You must present all required information in order for the issue to be resolved.</p>
    </div>
</div>
<div class="table-responsive-vertical shadow-z-1">
  <table class="table table-hover table-mc-light-blue">
      <thead>
          <tr>
            <th width="14%">Error</th>
            <th width="40%">Description</th>
            <th width="25%">Solution</th>
          </tr>
      </thead>
      <tbody>
<?php foreach ($errors as $error): ?>
    <tr>
        <td><?= $error->code ?></td>
        <td><?= $error->description ?></td>
        <td><?= $error->help ?></td>
        <td></td>
    </tr>
<?php endforeach; ?>
     </tbody>
</table>
</div>
